<?php

namespace Statamic\API;

use Illuminate\Support\Facades\Facade;
use Statamic\Contracts\Data\Repositories\AssetContainerRepository;

class AssetContainer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AssetContainerRepository::class;
    }
}
