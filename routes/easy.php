<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::any('easy'  , function(){
    return "take it easy";

});



Route::any('testing'  , [TestController::class , 'index']);


Route::get('env' , function (){
    // return App::environment();


    
});