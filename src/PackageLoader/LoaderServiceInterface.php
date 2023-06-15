<?php

declare(strict_types=1);

namespace Duyler\Contract\PackageLoader;

use Duyler\DependencyInjection\ContainerInterface;
use Duyler\EventBus\BusBuilder;

interface LoaderServiceInterface
{
    public function getContainer(): ContainerInterface;
    public function getBuilder(): BusBuilder;
}
