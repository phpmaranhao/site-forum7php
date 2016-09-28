<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhenController
{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function eventSchedule()
    {
        return $this->app['twig']->render('/when/when.twig',
            [
                 'link_when' => 'quando'
                ,'nome' =>'funlano'
            ]
        );
    }
}