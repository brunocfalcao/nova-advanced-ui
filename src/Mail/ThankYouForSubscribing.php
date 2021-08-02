<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        app()->register($this->course->provider_namespace);

        return $this->from($this->course->admin_email, $this->course->admin_name)
                    ->view('site::mail.thank-you-for-subscribing');
    }
}
