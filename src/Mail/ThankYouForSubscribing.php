<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        return $this->from(course()->from_email, course()->from_name)
                    ->with('subscriber', $this->data[0])
                    ->view('site::mail.thank-you-for-subscribing');
    }
}
