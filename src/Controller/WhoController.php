<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhoController{
    /**
     * @var Application
     */
    private $app;

    public function __construct($app){
        $this->app = $app;
    }

    public function speaker_A(){
        return $this->app['twig']->render('/who/speaker_A.twig');
    }

    public function speaker_B(){
        return "Ainda não tem nada pra ser mostrado aqui...
        que triste ... estou me sentindo sozinho e isolado,
        vou assistir BreakingBad.";
    }

    public function speaker_C(){
        return "Ainda não tem nada pra ser mostrado aqui...
        que triste ... estou me sentindo sozinho e isolado...";
    }

    public function speaker_D(){
        return "Eu desço dessa solidão
                Espalho coisas
                Sobre um Chão de Giz
                Há meros devaneios tolos
                A me torturar
                Fotografias recortadas
                Em jornais de folhas
                Amiúde!";
    }

    public function speaker_E(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_F(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_G(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_H(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_I(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_J(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_L(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_M(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_N(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_O(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_P(){
        return "Sem View Para este Palestrante ainda";
    }
}