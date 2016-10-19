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
        /**
         * Name of the speakers will be added here
         */
         $speakerName = array(
             "daniela-pitta"
            ,"helena-saminez"
            ,"galvao-abbott"
            ,"bruno-porkaria"
            ,"atmos-maciel"
            ,"evaldo-barbosa"
            ,"fabio-soares"
            ,"nanderson-castro"
            ,"ricardo-coelho"
            ,"willian-mano"
            ,"romulo-martins"
        );

        return $this->app['twig']->render('/when/when.twig',
            [
                 'link_when'   => 'quando'
                ,'link_who'    => '/quem'
                ,'speakerName' => $speakerName
            ]
        );
    }
}