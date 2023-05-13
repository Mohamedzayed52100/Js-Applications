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


Route::get('myname' , function(){
    return 'mynzamed';
});

Route::prefix('driver')->name('driver.')->group(function(){


    Route::middleware('isDriver')->group(function(){
        Route::view('index'  , 'driver.index')->name('index');



    Route::any('todolist' , [JsController::class , 'todolist']);
    Route::any('CalculateTextareaCharactersLikeTwitter' , [JsController::class , 'CalculateTextareaCharactersLikeTwitter']);
    Route::any('CalculateTextareaCharactersWithOnInputEvent' , [JsController::class , 'CalculateTextareaCharactersWithOnInputEvent']);
    Route::any('CapitalizeWordsFunction' , [JsController::class , 'CapitalizeWordsFunction']);
    Route::any('ChangeWebsiteColorsSaveWithLocalStorage' , [JsController::class , 'ChangeWebsiteColorsSaveWithLocalStorage']);
    Route::any('CheckIfUrlHashContainsString' , [JsController::class , 'CheckIfUrlHashContainsString']);
    Route::any('CreateSimpleDynamicClock' , [JsController::class , 'CreateSimpleDynamicClock']);
    Route::any('DisableRightClickOnpage' , [JsController::class , 'DisableRightClickOnpage']);
    Route::any('EditTextLiveOnInput' , [JsController::class , 'EditTextLiveOnInput']);
    Route::any('GenerateRandomSerialNumber' , [JsController::class , 'GenerateRandomSerialNumber']);
    Route::any('HidePlaceholderOnInputFocus' , [JsController::class , 'HidePlaceholderOnInputFocus']);
    Route::any('localstorage' , [JsController::class , 'localstorage']);
    Route::any('MakeTypeWriterEffectsOnText' , [JsController::class , 'MakeTypeWriterEffectsOnText']);
    Route::any('memorygame' , [JsController::class , 'memorygame']);
    Route::any('RandomClassForBodyOnRefresh' , [JsController::class , 'RandomClassForBodyOnRefresh']);
    Route::any('ScrollToTopButton' , [JsController::class , 'ScrollToTopButton']);
    Route::any('Show_HidePasswordOnInputField' , [JsController::class , 'Show_HidePasswordOnInputField']);
    Route::any('ShowRandomImageEveryXSeconds' , [JsController::class , 'ShowRandomImageEveryXSeconds']);
    Route::any('silder' , [JsController::class , 'silder']);
    Route::any('todolist' , [JsController::class , 'todolist']);
    
    
});
    Route::view('/driver/register'  , 'driver.register');
    Route::view('/driver/login'  , 'driver.login');
    // Route::view('/driver/index'  , 'driver.index');
    
    
    
    require __DIR__.'/driver_auth.php';



});
 



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
