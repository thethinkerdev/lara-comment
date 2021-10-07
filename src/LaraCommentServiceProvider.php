<?php

namespace Samankhdev\LaraComment;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Samankhdev\LaraComment\Models\Comment;

class LaraCommentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/database/migrations");
    }
    
    public function register(){}
}
