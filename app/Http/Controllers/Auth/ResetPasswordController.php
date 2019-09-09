<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;

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

      //Create a validator, unlike $this->validate(), this does not automatically redirect on failure, leaving the final control to you :)
      $validated = Validator::make($request->all(), $rules,$messages);

      //Check if the validation failed, return your custom formatted code here.
      if($validated->fails())
      {
          return response()->json(['success' => false, 'messages' => 'Dados inválidos.', 'errors' => $validated->errors()]);
      }

      $update = User::where('id',$request->id)->first();
      $update->update([
        'password' => Hash::make($request->get('password')),
      ]);

      if ($update) {

          return response()->json([
            'message' => 'Senha alterada com sucesso.',
            'success' => true,
          ], 200);
      }else{

          return response()->json([
                'message' => 'Não foi possível alterar a senha.',
                'success' => false,
          ], 500);
      }


    }
}
