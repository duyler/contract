<?php

declare(strict_types=1);

namespace Duyler\Contract\PackageLoader;

interface PackageLoaderInterface
{
    public function load(LoaderServiceInterface $loaderService): void;
}
