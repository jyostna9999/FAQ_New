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
        $this->composerSidebar();
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

    private function composerSidebar()
    {
        view()->composer('*',function($view)
       // view()->composer(['home','question','questionForm','answer','answerForm'],function($view)
        {
            $view-> with ('latestQuestions',DB::table('questions')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get());
        });
    }
}
