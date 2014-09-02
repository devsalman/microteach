<?php
/**
 * Created by PhpStorm.
 * User: Salman
 * Date: 8/30/14
 * Time: 10:19 PM
 */

namespace Microteach\Storage;


use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('Account', function(){
                return new \Account();
        });

        $this->app->bind('Province', function() {
            return new \Province();
        });
        
        $this->app->bind('City', function() {
            return new \City();
        });
    }
} 