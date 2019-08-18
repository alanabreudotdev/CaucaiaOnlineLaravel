<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;

class User extends Authenticatable implements MustVerifyEmail
//class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password','celular', 'birthday','reclamacao_privacidade','cpf','rg'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date:d/m/Y',
    ];

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

    /**
    * CHECAR TOKEN
    */
    public static function checkToken($token){
       if($token->api_token){
           return true;
       }
       return false;
   }

    public function reclamacao(){
        return $this->hasMany('App\Reclamacao','id');
    }

    public function sendPasswordResetNotification($token)
{
    // Não esquece: use App\Notifications\ResetPassword;
    $this->notify(new ResetPassword($token));
}
}
