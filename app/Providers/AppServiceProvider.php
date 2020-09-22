<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(['index'], function($view){

            $tasks = Task::orderBy('priority')->simplePaginate(30);

            $view->with([
                'tasks' => $tasks,
            ]);
        });

        view()->composer(['create','edit'], function($view){

            $projects = Project::all();

            $view->with([
                'projects' => $projects,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
