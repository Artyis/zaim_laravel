<?php

Route::group(['prefix' => 'mfo', 'middleware' => []], function () {
    Route::get('/', 'MfoController@index')->name('mfos.index');
    Route::get('/{mfos}', 'MfoController@showCard')->name('mfos.showcard');
});
