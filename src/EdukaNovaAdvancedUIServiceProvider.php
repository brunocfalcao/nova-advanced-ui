<?php

namespace Eduka\NovaAdvancedUI;

use Eduka\Abstracts\EdukaServiceProvider;

class EdukaNovaAdvancedUIServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->customViewNamespace(__DIR__.'/../resources/views', 'site');

        $this->publishResources();

        // Configure postmark token in the mail.php config file.
        config()->set('mail.mailers.postmark.token', course()->postmark_token);

        // Load extra routes test.
        $this->extraRoutes(__DIR__.'/../routes/extra.php');
    }

    public function register()
    {
        //
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ], 'nova-advanced-ui-assets');
    }
}
