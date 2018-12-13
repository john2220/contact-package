<?php

Route::group(['namespace'=>'Blog\Contact\Http\Controllers'], function(){
	Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact', 'ContactController@send');
});
