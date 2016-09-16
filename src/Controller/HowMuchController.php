<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class HowMuchController
{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function getInvitation()
    {
        return "redirect for payment channel";
    }
}