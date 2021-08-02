<?php

namespace Eduka\NovaAdvancedUI;

use Eduka\Abstracts\EdukaServiceProvider;
use Eduka\Cube\Models\Course;

class EdukaNovaAdvancedUIServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->customViewNamespace(__DIR__.'/../resources/views', 'site');

        $this->publishResources();

        /**
         * Configure the postmark token. It can't run under the course()
         * helper because if a job triggers this service provider, it will
         * still not be bound to a domain. So, we need to find it by
         * querying the database directly.
         */
        //$course = Course::firstWhere('canonical', 'nova-advanced-ui');
        config()->set('mail.mailers.postmark.token', $course->postmark_token);

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
