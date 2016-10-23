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
            ,"alisson-gomes"
        );
        $speakerRealName = array(
             "Daniela Pitta"
            ,"Helena Saminez"
            ,"Er Galvão Abbott"
            ,"Bruno Porkaria"
            ,"Atmos Maciel"
            ,"Evaldo Barbosa"
            ,"Fabio Soares"
            ,"Nanderson Castro"
            ,"Ricardo Coelho"
            ,"Willian Mano"
            ,"Rômulo Martins"
            ,"Alisson Gomes"
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
