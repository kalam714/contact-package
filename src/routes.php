<?php
use Illuminate\Support\Facades\Route;

// Route::get('contact',function(){
//     return 'working';
// });

Route::get('contact', 'Kalam\Contact\ContactController@index')->name('contact');
Route::post('contact', 'Kalam\Contact\ContactController@send')->name('contact');