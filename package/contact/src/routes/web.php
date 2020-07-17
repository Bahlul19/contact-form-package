<?php

Route::group(['namespace' => 'Bahlul\Contact\Http\Controllers'], function () {
    
Route::get('contact', 'ContactController@index')->name('contact');

Route::post('contact', 'ContactController@sendEmail');
});

?>
