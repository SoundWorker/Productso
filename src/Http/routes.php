<?php
Route::group(['middleware' => ['web'],'namespace' => 'SoundWorker\Productso\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'PrsoCategoryController@show');
});