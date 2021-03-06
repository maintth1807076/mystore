<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('2fc946749c-fbbd85@inbox.mailtrap.io', 'Example')
            ->subject('Mailtrap Confirmation')
            ->markdown('mail.template')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => 'https://mailtrap.io/inboxes'
            ]);
//        return $this->view('view.name');
    }
}
