<?php

namespace ForumPHPMA\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->get('/', "home:home");

        $app->get('/who/PalestranteA/', "who:PalestranteA");
    }
}
