<?php

namespace CeresCoconut\Providers;

use Plenty\Plugin\Events\Dispatcher;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use IO\Helper\ResourceContainer;

/**
 * Class CeresCoconutServiceProvider
 * @package CeresCoconut\Providers
 */
class CeresCoconutServiceProvider extends TemplateServiceProvider
{
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->listen("IO.Resources.Import", function(ResourceContainer $container)
        {         
            $container->addScriptTemplate('CeresCoconut::Basket.Components.BasketPreview'); 
        },0);      
    }
}
