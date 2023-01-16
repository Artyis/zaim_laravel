<?php

Route::group(['prefix' => '/', 'middleware' => []], function () {
    Route::get('/', 'MainController@index')->name('main.index');
});
