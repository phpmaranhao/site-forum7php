<?php

namespace ForumPHPMA\Provider;

use ForumPHPMA\Controller\HowMuchController;
use ForumPHPMA\Controller\WhenController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use ForumPHPMA\Controller\Api\ApiController;

class ApiControllerServiceProvider implements ServiceProviderInterface{
    public function register(Container $app){
        $app['api'] = function () use ($app){
            return new ApiController($app);
        };
    }
}
