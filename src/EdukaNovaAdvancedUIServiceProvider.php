<?php

namespace Eduka\NovaAdvancedUI;

use Eduka\Abstracts\EdukaServiceProvider;

class EdukaNovaAdvancedUIServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        /*
         * This codebase line will activate your course views, and
         * disable the default eduka ones
         **/
        //$this->loadEdukaViews(__DIR__.'/../resources/views');
    }

    public function register()
    {
        //
    }
}
