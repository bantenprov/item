<?php namespace Bantenprov\Item\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Item facade.
 *
 * @package Bantenprov\Item
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Item extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'item';
    }
}
