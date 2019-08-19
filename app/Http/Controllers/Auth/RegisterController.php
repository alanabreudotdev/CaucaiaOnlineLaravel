<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create(Illuminate\Http\Request $request)
{
    //Define your validation rules here.
    $rules = [
        'name' => 'required',
        'email' => 'required | email | unique:users,email',
        'password' => 'required'
    ];
    //Create a validator, unlike $this->validate(), this does not automatically redirect on failure, leaving the final control to you :)
    $validated = Illuminate\Support\Facades\Validator::make($request->all(), $rules);

    //Check if the validation failed, return your custom formatted code here.
    if($validated->fails())
    {
        return response()->json(['status' => 'error', 'messages' => 'The given data was invalid.', 'errors' => $validated->errors()]);
    }

    //If not failed, the code will reach here
    $newUser = $this->user->create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => bcrypt($request->get('password'))
    ]);
    //This would be your own error response, not linked to validation
    if (!$newUser) {
        return response()->json(['status'=>'error','message'=>'failed_to_create_new_user'], 500);
    }

    //All went well
    return response()->json([
        'status' => 'success',
        'token' => $this->jwtauth->fromUser($newUser)
    ]);
}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create_old(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'photo_url' => null,
        ]);
    }

    protected function registeredAPI(Request $request, $user)
    {
        $user->generateToken();

        return response()->json(['success'=> true, 'data' => $user->toArray()], 201);
    }

    public function registerAPI(Request $request)
    {
        // Here the request is validated. The validator method is located
        // inside the RegisterController, and makes sure the name, email
        // password and password_confirmation fields are required.
        $this->validator($request->all())->validate();

        // A Registered event is created and will trigger any relevant
        // observers, such as sending a confirmation email or any
        // code that needs to be run as soon as the user is created.
        event(new registered($user = $this->create($request->all())));

        // After the user is created, he's logged in.
        $this->guard()->login($user);

        // And finally this is the hook that we want. If there is no
        // registered() method or it returns null, redirect him to
        // some other URL. In our case, we just need to implement
        // that method to return the correct response.
        return $this->registeredAPI($request, $user)
                        ?: redirect($this->redirect('/'));
    }


}
