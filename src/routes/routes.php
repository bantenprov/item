<?php

Route::group(['prefix' => 'item'], function() {
    Route::get('demo', 'Bantenprov\Item\Http\Controllers\ItemController@demo');
});
