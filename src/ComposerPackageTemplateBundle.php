<?php

namespace Mubiridziri\ComposerPackageTemplate;

use Mubiridziri\ComposerPackageTemplate\DependencyInjection\ComposerPackageTemplateBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ComposerPackageTemplateBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new ComposerPackageTemplateBundleExtension();
        }
        return $this->extension;
    }
}
