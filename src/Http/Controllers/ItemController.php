<?php namespace Bantenprov\Item\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Item\Facades\Item;
use Bantenprov\Item\Models\ItemModel;

/**
 * The ItemController class.
 *
 * @package Bantenprov\Item
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ItemController extends Controller
{
    public function demo()
    {
        return Item::welcome();
    }
}
