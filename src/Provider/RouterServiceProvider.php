<?php

namespace ForumPHPMA\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RouterServiceProvider implements ServiceProviderInterface{
    public function register(Container $app){
        /**
         * Root Route
         */
        $app->get('/', "home:home");

        /**
         * Who Routes
         */
        $app->get('/quem/atmos-maciel/'  , "who:speaker_A");
        $app->get('/quem/evaldo-barbosa/', "who:speaker_B");
        $app->get('/quem/fabio-soares/'  , "who:speaker_C");
        $app->get('/quem/nanderson-castro/', "who:speaker_D");
        $app->get('/quem/ricardo-coelho/', "who:speaker_E");
        $app->get('/quem/willian-mano/'  , "who:speaker_F");
        $app->get('/quem/daniela-pitta/', "who:speaker_G");
        $app->get('/quem/helena-saminez/', "who:speaker_H");
        $app->get('/quem/galvao-abbott/', "who:speaker_I");
        $app->get('/quem/bruno-porkaria/', "who:speaker_J");
        $app->get('/quem/romulo-martins/', "who:speaker_L");
        $app->get('/quem/alisson-gomes/', "who:speaker_M");
        $app->get('/quem/henrique-monteiro/', "who:speaker_N");
        $app->get('/quem/paulo-coelho/', "who:speaker_O");
        $app->get('/quem/speaker_P/', "who:speaker_P");

        /**
         * When Routes
         */
        $app->get('/quando/programacao/', "when:eventschedule");

        /**
         * How Much Routes
         */
        $app->get('/quanto/comprar-entrada/', "howmuch:getinvitation");

    }
}
