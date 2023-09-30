<?php

namespace Rupadana\FilamentNetworkGraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rupadana\FilamentNetworkGraph\FilamentNetworkGraph
 */
class FilamentNetworkGraph extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rupadana\FilamentNetworkGraph\FilamentNetworkGraph::class;
    }
}
