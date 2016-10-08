<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class HomeController{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app){
        $this->app = $app;
    }

    public function home(){
        /**
         * Name of the speakers will be added here
         */
        $speakerName = array(
             "atmos-maciel"
            ,"evaldo-barbosa"
            ,"fabio-soares"
            ,"nanderson-castro"
            ,"ricardo-coelho"
            ,"willian-mano"
            ,"speaker_G"
            ,"speaker_H"
            ,"speaker_I"
            ,"speaker_J"
            ,"speaker_L"
            ,"speaker_M"
            ,"speaker_N"
            ,"speaker_O"
            ,"speaker_P"
        );
        $speakerRealName = array(
             "Atmos Maciel"
            ,"Evaldo Barbosa"
            ,"Fabio Soares"
            ,"Nanderson Castro"
            ,"Ricardo Coelho"
            ,"Willian Mano"
            ,"speaker_G"
            ,"speaker_H"
            ,"speaker_I"
            ,"speaker_J"
            ,"speaker_L"
            ,"speaker_M"
            ,"speaker_N"
            ,"speaker_O"
            ,"speaker_P"
        );

        return $this->app['twig']->render('home.twig',
            [
                 'link_who'         => '/quem'
                ,'link_when'        => '/quando'
                ,'link_howmuch'     => '/quanto'
                ,'speakerName'      => $speakerName
                ,'speakerRealName'  => $speakerRealName
            ]);
    }
}
