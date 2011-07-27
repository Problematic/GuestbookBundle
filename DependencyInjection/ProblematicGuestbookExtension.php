<?php

namespace Problematic\GuestbookBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;

class ProblematicGuestbookExtension extends Extension
{
    
    public function load(array $config, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->process($configuration->getConfigTree(), $configs);
        
        $container->setParameter('problematic_messenger.email', $config['email']);
    }
    
}
