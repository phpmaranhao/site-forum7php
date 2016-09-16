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
        return "redirect to event schedule";
    }
}