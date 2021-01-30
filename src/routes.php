<?php
use Illuminate\Support\Facades\Route;

// Route::get('contact',function(){
//     return 'working';
// });

Route::get('contact', 'Kalam714\Contact\ContactController@index')->name('contact');
Route::post('contact', 'Kalam714\Contact\ContactController@send')->name('contact');