<?php

namespace Symfony\Components\Routing\Loader;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * LoaderResolverInterface selects a loader for a given resource.
 *
 * @package    Symfony
 * @subpackage Components_Routing
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface LoaderResolverInterface
{
    /**
     * Returns a loader able to load the resource.
     *
     * @param mixed  $resource A resource
     *
     * @return Symfony\Components\Routing\Loader\LoaderInterface A LoaderInterface instance
     */
    function resolve($resource);
}
