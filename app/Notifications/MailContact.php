<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MailContact extends Notification
{
    use Queueable;

    private $name;
    
    private $email;

    private $phone;
    
    private $query;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$email,$phone,$query)
    {
        $this->name = $name;
        
        $this->email = $email;

        $this->phone = $phone;
        
        $this->query = $query;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hola')
                    ->subject('Solicitud de Contacto')
                    ->line('Tienes una nueva solicitud de contacto')
                    ->line('Nombre: '.$this->name)
                    ->line('Email: '.$this->email)
                    ->line('Telefono: '.$this->phone)
                    ->line('Consulta: '.$this->query);
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
