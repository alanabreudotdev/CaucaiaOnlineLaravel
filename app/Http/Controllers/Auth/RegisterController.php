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
    protected function create(array $data)
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
      $rules = [
          'name' => 'required',
          'cpf' => 'required',
          'lastname' => 'required',
          'email' => 'required | email | unique:users,email',
          'password' => ['required', 'string', 'min:6', 'confirmed'],
      ];
      $message = [
        'name.required' => 'O Nome é obrigatório.',
        'cpf.required' => 'O CPF é obrigatório.',
        'lastname.required' => 'O Sobrenome é obrigatório.',
        'email.required' => 'O Email é obrigatório.',
        'password.required' => 'Senha obrigatória.',
        'password.confirmed' => 'Confirmação de senha não confere.',
      ]
      ;
      //Create a validator, unlike $this->validate(), this does not automatically redirect on failure, leaving the final control to you :)
      $validated = Validator::make($request->all(), $rules);

      //Check if the validation failed, return your custom formatted code here.
      if($validated->fails())
      {
          return response()->json(['success' => false, 'messages' => 'Dados inválidos.', 'errors' => $validated->errors()]);
      }

      //If not failed, the code will reach here
      $newUser = $this->user->create([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'lastname' => $request->get('lastname'),
          'cpf' => $request->get('cpf'),
          'password' => Hash::make($data['password']),
      ]);
      //This would be your own error response, not linked to validation
      if (!$newUser) {
          return response()->json(['success'=>false,'message'=>'failed_to_create_new_user'], 500);
      }

      //All went well
      return response()->json([
          'sucess' => true

      ]);
    }


}
