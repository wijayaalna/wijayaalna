<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailFailedNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->error()
            ->subject('Pemberitahuan Email Gagal')
            ->line('Pesan ini menginformasikan bahwa pengiriman email gagal.')
            ->line('Anda dapat menambahkan informasi lebih lanjut di sini.');
    }
}
