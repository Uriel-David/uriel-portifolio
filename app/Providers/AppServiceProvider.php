<?php

namespace App\Providers;

use App\Http\Repositories\ProjectRepositoryEloquent;
use App\Http\Repositories\SkillRepositoryEloquent;
use App\Models\Project;
use App\Models\Skill;
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
        $this->app->bind('App\Http\Repositories\SkillRepositoryInterface', 'App\Http\Repositories\SkillRepositoryEloquent');
        $this->app->bind('App\Http\Repositories\SkillRepositoryInterface', function () {
            return new SkillRepositoryEloquent(new Skill());
        });

        $this->app->bind('App\Http\Repositories\ProjectRepositoryInterface', 'App\Http\Repositories\ProjectRepositoryEloquent');
        $this->app->bind('App\Http\Repositories\ProjectRepositoryInterface', function () {
            return new ProjectRepositoryEloquent(new Project());
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
