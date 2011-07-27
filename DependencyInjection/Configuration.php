<?php

namespace Problematic\GuestbookBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration 
{
    public function getConfigTree()
    {
        $treeBuilder = new TreeBuilder();
        
        $treeBuilder->root('problematic_guestbook', 'array')
            ->children()
                ->scalarNode('email')->isRequired->end()
            ->end()
        ->end();
        
        return $treeBuilder->buildTree();
    }
}
