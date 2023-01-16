<?php

Route::group(['prefix' => 'zaimy', 'middleware' => []], function () {
    Route::get('/', 'ZaimyController@index')->name('zaimies.index');
    Route::get('/{zaimy}', 'ZaimyController@read')->name('zaimies.read');
    Route::post('/{zaimy}', 'ZaimyController@post')->name('zaimies.post');
});
