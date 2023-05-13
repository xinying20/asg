<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Staff;

class SampleMail extends Mailable {

    use Queueable,
        SerializesModels;

    private $staff;

    public function __construct(array $data) {
        $this->staff = new Staff($data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('sample')
                        ->subject('sample')
                        ->with(['name' => $this->staff->name,
                            'email' => $this->staff->email,
                            'token' => $this->staff->token,
        ]);
    }

}
