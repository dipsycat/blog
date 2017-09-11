<?php

namespace Dipsycat\PostBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('dipsycat_post');

        $rootNode
                ->children()
                    ->scalarNode('entity_class')
                        ->cannotBeEmpty()
                    ->end()
                    ->scalarNode('admin_class')
                        ->defaultValue('Dipsycat\PostBundle\Admin\PostAdmin')
                    ->end()
                ->end()
        ;

        return $treeBuilder;
    }

}
