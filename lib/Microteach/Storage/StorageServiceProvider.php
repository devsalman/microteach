<?php
/**
 * Created by PhpStorm.
 * User: Salman
 * Date: 8/30/14
 * Time: 9:41 PM
 */

namespace Microteach\Storage;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'Microteach\Storage\Account\AccountRepository',
            'Microteach\Storage\Account\EloquentAccountRepository'
        );
    }
} 