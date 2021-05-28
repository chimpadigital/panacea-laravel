<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MailReserva extends Notification
{
    use Queueable;

    private $name;
    private $email;
    private $phone;
    private $date;
    private $type_event;
    private $assistants;
    private $comments;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$email,$phone,$date,$comments,$adults,$country)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->date = $date;
        $this->type_event = $country;
        $this->assistants = $adults;
        $this->comments = $comments;
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
                    ->subject('Consulta de Reserva')
                    ->line('Tienes una nueva consulta de reserva')
                    ->line('Nombre: '.$this->name)
                    ->line('Email: '.$this->email)
                    ->line('Telefono: '.$this->phone)
                    ->line('fecha: '.$this->date)
                    ->line('Tipo de evento : '.$this->type_event)
                    ->line('Asistentes : '.$this->assistants)
                    ->line('Detalles del evento : '.$this->comments);
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
