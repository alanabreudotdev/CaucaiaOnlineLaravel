<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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

    public function resetPassword(Request $request){
      $rules = [

          'password' => ['required', 'string', 'min:6', 'confirmed'],
      ];
      $messages = [

        'password.required' => 'Senha obrigatória.',
        'password.confirmed' => 'Confirmação de senha não confere.',
      ];

      $update = User::where('id',$requesti->id)->first();
      $update->update([
        'password' => Hash::make($request->get('password')),
      ]);

      print($update);


    }
}
