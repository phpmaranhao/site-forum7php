<?php

namespace ForumPHPMA\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ApiRouterServiceProvider implements ServiceProviderInterface{
    public function register(Container $app){
        /**
         * Root Route
         */
        $app->get('/api/v1/speakers', "api:speakers");
        $app->get('/api/v1/speakers/details/{slug}', "api:speaker");

    }
}
