<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        //parent::build();

        return $this->from(course()->from_email, course()->from_name)
                    ->view('site::mail.thank-you-for-subscribing');
    }
}
