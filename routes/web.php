<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testroute', function(){
	echo 'Kebbab med bröd';
    echo 'Hello from test';
    echo 'Added this change to the file.';
    echo 'Zebra i havet';
	echo 'Fåglarna på taket, tänd alla ljus för jag kan inte se, jag kan inte flyga!';
    echo 'Trallalala';
    echo 'lolo';
    echo 'fisk';
    echo 'The waiting is the hardest part';
});
