<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reg extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply.deershark@gmail.com', 'RNRS實名制填報系統')
            ->view('emails.RegMail')
            ->subject('高雄市立三民高中109學年度大學博覽會－實名制填報系統進場 QR-Code 暨注意事項提醒信')
            ->with($this->data);
    }
}
