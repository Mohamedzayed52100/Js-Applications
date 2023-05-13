<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsController;


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


Route::get('logout' , function(){
    session()->regenerate();
    session()->invalidate();
    
});




// Route::view('/driver/register'  , 'driver.register');
// Route::view('/driver/login'  , 'driver.login');
// Route::view('/driver/index'  , 'driver.index');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/driver.php';
