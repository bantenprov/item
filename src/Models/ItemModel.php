<?php namespace Bantenprov\Item\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ItemModel class.
 *
 * @package Bantenprov\Item
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ItemModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'item';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
