<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


class ResetPassword extends Notification
{
    use Queueable;
      public $token;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
      $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
       /*
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

*/
    public function toMail($notifiable)
    {
    return (new MailMessage)
        ->from('contato@caucaia.online', 'Caucaia Online')
        ->subject('Alterar Senha - Caucaia Online')
        ->line('Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para sua conta.')
        ->action('Resetar Senha', url(config('app.url').route('password.reset', [$this->token, $notifiable->email], false)))
        ->line('Se você não solicitou uma alteração da senha, nenhuma ação adicional é necessária.');
      }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
