<?php

namespace Microteach\Storage;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('Account', function() {
            return new Account();
        });
    }

}
