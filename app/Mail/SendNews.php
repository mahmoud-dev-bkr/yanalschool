<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;

class SendNews extends Notification
{
    use Queueable;
    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //        return ['mail'];
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        // Get Email & Site Name From Setting
        $from = env('MAIL_FROM');
        $siteName = getSettingValue('site_name_'.app()->getLocale());
        $mailData = $this->mailData;
            return (new MailMessage)
            ->from($from, $siteName)
            ->subject('New News')

            ->view('emails.send', compact('mailData'));



    }
}
