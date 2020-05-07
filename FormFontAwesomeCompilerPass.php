<?php

namespace GaylordP\FormFontAwesomeBundle;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FormFontAwesomeCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if ($container->hasParameter('twig.form.resources')) {
            $resources = $container->getParameter('twig.form.resources') ?: [];
            array_push($resources, '@FormFontAwesome/fields.html.twig');
            $container->setParameter('twig.form.resources', $resources);
        }
    }
}
