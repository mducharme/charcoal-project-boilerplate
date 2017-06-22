<?php

namespace Boilerplate\ServiceProvider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

// From `whichbrowser/parser`
use \WhichBrowser\Parser as BrowserParser;

/**
 * Boilerplate Service Provider
 */
class BoilerplateServiceProvider implements ServiceProviderInterface
{
    /**
     * @param  Container $container Pimple DI Container.
     * @return void
     */
    public function register(Container $container)
    {
        /**
         * @param Container $container
         * @return BrowserParser Helper to determine the environment in which we're running.
         */
        $container['browserparser'] = function (Container $container) {
            return new BrowserParser($_SERVER['HTTP_USER_AGENT']);
        };
    }
}