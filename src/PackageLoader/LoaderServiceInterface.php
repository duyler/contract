<?php

declare(strict_types=1);

namespace Duyler\Contract\PackageLoader;

use Duyler\Config\ConfigInterface;
use Duyler\DependencyInjection\ContainerInterface;
use Duyler\EventBus\BusBuilder;

interface LoaderServiceInterface
{
    public function getContainer(): ContainerInterface;
    public function getBuilder(): BusBuilder;
    public function getConfig(): ConfigInterface;
}
