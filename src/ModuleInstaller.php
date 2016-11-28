<?php

namespace Novosga\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * 
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
class ModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'modules/' . strtolower($package->getPrettyName());
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'novosga-module' === $packageType;
    }
}
