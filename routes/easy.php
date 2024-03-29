<?php

use App\Http\Controllers\CacheController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\Test\TestControllerInvokable2;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::any('easy'  , function(){
    return "take it easy";

});



Route::any('collect1'  , [CollectionController::class , 'index']);
Route::any('collect2'  , [CollectionController::class , 'avg']);
Route::any('collect3'  , [CollectionController::class , 'collection_macro']);
Route::any('collect4'  , [CollectionController::class , 'filterData']);

/////////////////////////
Route::any('testing'  , [TestController::class , 'index']);
Route::any('testing'  , [TestController::class , 'index']);
Route::any('cache'  , [CacheController::class , 'index']);
Route::any('cache2'  , [CacheController::class , 'index2']);


Route::get('env' , function (){
    // return App::environment();         
    



    return auth()->user()->id;


    return Auth::user()?->name;

    
});


Route::controller(TestController::class)->group(function(){


    Route::get('Y' , 'index');

    Route::post('YY', 'YY')->name('YY');
});

Route::any('invoke' , TestControllerInvokable2::class );