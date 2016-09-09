<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class HomeController
{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function home()
    {
        return $this->app['twig']->render('home.twig');
    }
}
