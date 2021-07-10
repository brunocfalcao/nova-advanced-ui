<?php

namespace Eduka\NovaAdvancedUI\Mail;

use Eduka\Abstracts\EdukaMailable;
use Eduka\Cube\Models\Subscriber;

class ThankYouForSubscribing extends EdukaMailable
{
    public function __construct(Subscriber $subscriber)
    {
    }

    public function build()
    {
        return $this->view('site::mail.thank-you-for-subscribing');
    }
}
