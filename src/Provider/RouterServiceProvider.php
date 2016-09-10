<?php

namespace ForumPHPMA\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->get('/', "home:home");

        $app->get('/who/speaker_A/', "who:speaker_A");
        $app->get('/who/speaker_B/', "who:speaker_B");
        $app->get('/who/speaker_C/', "who:speaker_C");
        $app->get('/who/speaker_D/', "who:speaker_D");
        $app->get('/who/speaker_E/', "who:speaker_E");
        $app->get('/who/speaker_F/', "who:speaker_F");
        $app->get('/who/speaker_G/', "who:speaker_G");
        $app->get('/who/speaker_H/', "who:speaker_H");
        $app->get('/who/speaker_I/', "who:speaker_I");
        $app->get('/who/speaker_J/', "who:speaker_J");
        $app->get('/who/speaker_L/', "who:speaker_L");
        $app->get('/who/speaker_M/', "who:speaker_M");
        $app->get('/who/speaker_N/', "who:speaker_N");
        $app->get('/who/speaker_O/', "who:speaker_O");
        $app->get('/who/speaker_P/', "who:speaker_P");
    }
}
