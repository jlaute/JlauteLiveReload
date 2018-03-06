<?php

namespace JlauteLiveReload;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class JlauteLiveReload extends Plugin
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('jlaute_live_reload.plugin_dir', $this->getPath());
        parent::build($container);
    }
}
