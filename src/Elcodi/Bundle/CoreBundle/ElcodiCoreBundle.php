<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Bundle\CoreBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Elcodi\Bundle\CoreBundle\DependencyInjection\ElcodiCoreExtension;

/**
 * ElcodiCoreBundle Bundle
 *
 * This is the core of the suite.
 * All available bundles in this suite could have this bundle as a main
 * dependency.
 */
class ElcodiCoreBundle extends Bundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface The container extension
     */
    public function getContainerExtension()
    {
        return new ElcodiCoreExtension();
    }
}
