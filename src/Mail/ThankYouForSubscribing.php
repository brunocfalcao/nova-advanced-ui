<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        return $this->from($this->data['course']->from_email, $this->data['course']->from_name)
                    ->with('subscriber', $this->data['notifiable'])
                    ->view('site::mail.thank-you-for-subscribing');
    }
}
