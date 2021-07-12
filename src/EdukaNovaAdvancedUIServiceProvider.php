<?php

namespace Eduka\NovaAdvancedUI;

use Eduka\Abstracts\EdukaServiceProvider;

class EdukaNovaAdvancedUIServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->customViewNamespace(__DIR__.'/../resources/views', 'site');

        $this->publishResources();

        // Load extra routes test.
        //$this->extraRoutes(__DIR__.'/../routes/extra.php');
    }

    public function register()
    {
        //
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ]);
    }
}
