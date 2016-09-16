<?php

namespace ForumPHPMA\Provider;

use ForumPHPMA\Controller\HowMuchController;
use ForumPHPMA\Controller\WhenController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use ForumPHPMA\Controller\HomeController;
use ForumPHPMA\Controller\WhoController;

class ControllerServiceProvider implements ServiceProviderInterface{
    public function register(Container $app){
        $app['home'] = function () use ($app){
            return new HomeController($app);
        };

        $app['who'] = function (Container $app) use ($app){
            return new WhoController($app);
        };

        $app['howmuch'] = function (Container $app) use ($app){
            return new HowMuchController($app);
        };

        $app['when'] = function (Container $app) use ($app){
            return new WhenController($app);
        };
    }
}
