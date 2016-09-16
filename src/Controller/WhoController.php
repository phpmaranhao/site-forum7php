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
        $content                     = array();
        $content['name']             = "Atmos Maciel";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_B(){
        $content                     = array();
        $content['name']             = "Evaldo Barbosa";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_C(){
        $content                     = array();
        $content['name']             = "Fabio Soares";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_D(){
        $content                     = array();
        $content['name']             = "Nanderson Castro";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_E(){
        $content                     = array();
        $content['name']             = "Ricardo Coelho";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_F(){
        $content                     = array();
        $content['name']             = "William Mano";
        $content['photo']            = "rocket-night.jpg";
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/";

        return $this->app['twig']->render('/who/speaker.twig', $content);
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