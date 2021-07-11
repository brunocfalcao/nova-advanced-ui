<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->view('site::mail.thank-you-for-subscribing');
    }
}
