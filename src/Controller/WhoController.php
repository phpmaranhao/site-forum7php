<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhoController
{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function RenderizaViewComNomeDoFulano()
    {
        return "RenderizaViewComNomeDoFulano";
    }
}