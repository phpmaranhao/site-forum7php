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

    public function HowMuch()
    {
        return "redirect for payment channel";
    }
}