<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;

class ThankYouForSubscribing extends EdukaMailable
{
    public function build()
    {
        app()->register($this->provider_namespace);

        return $this->view('site::mail.thank-you-for-subscribing');
    }
}
