<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        parent::build();

        return $this->from($this->course->admin_email, $this->course->admin_name)
                    ->view('site::mail.thank-you-for-subscribing');
    }
}
