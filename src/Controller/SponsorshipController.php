<?php
namespace ForumPHPMA\Controller;

use Silex\Application;

class SponsorshipController
{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

}