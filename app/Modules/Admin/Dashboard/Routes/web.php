<?php

Route::group(['prefix' => 'dashboards', 'middleware' => []], function () {
    Route::get('/', 'DashboardController@index')->name('dashboards.index');

});
