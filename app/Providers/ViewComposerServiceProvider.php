<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //view()->composer('*', 'App\Http\ViewComposers\QuestionsComposer');
        view()->composer('*', 'App\Question@latestQuestionsSidebar');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
