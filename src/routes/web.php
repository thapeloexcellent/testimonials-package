<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'LP\Testimonials\Http\Controllers'],function(){

    Route::get('testimonials','TestimonialsController@index')->name('testimonials');
    Route::post('addtestimonials','TestimonialsController@add')->name('addtestimonials');
});
