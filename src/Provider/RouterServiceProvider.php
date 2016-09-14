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
        $app->get('/quem/fabio-soares/', "who:speaker_A");
        $app->get('/quem/atmos-maciel/', "who:speaker_B");
        $app->get('/quem/speaker_C/', "who:speaker_C");
        $app->get('/quem/speaker_D/', "who:speaker_D");
        $app->get('/quem/speaker_E/', "who:speaker_E");
        $app->get('/quem/speaker_F/', "who:speaker_F");
        $app->get('/quem/speaker_G/', "who:speaker_G");
        $app->get('/quem/speaker_H/', "who:speaker_H");
        $app->get('/quem/speaker_I/', "who:speaker_I");
        $app->get('/quem/speaker_J/', "who:speaker_J");
        $app->get('/quem/speaker_L/', "who:speaker_L");
        $app->get('/quem/speaker_M/', "who:speaker_M");
        $app->get('/quem/speaker_N/', "who:speaker_N");
        $app->get('/quem/speaker_O/', "who:speaker_O");
        $app->get('/quem/speaker_P/', "who:speaker_P");

        /**
         * How Much Routes
         */
        $app->get('/quanto/', "howmuch:howmuch");

        /**
         * When Routes
         */
        $app->get('/quando/', "when:when");
    }
}
