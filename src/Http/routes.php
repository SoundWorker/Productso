<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'SoundWorker\Productso\Http\Controllers\PrsoCategoryController@show');
    Route::get('product/{slug}/{categoryid?}', 'SoundWorker\Productso\Http\Controllers\PrsoProductController@show');
});