<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsController extends Controller
{
    public function todolist(){
        return view('todolist');
    }
    public function CalculateTextareaCharactersLikeTwitter(){
        return view('CalculateTextareaCharactersLikeTwitter');
    }
    public function CalculateTextareaCharactersWithOnInputEvent(){
        return view('CalculateTextareaCharactersWithOnInputEvent');
    }
    public function CapitalizeWordsFunction(){
        return view('CapitalizeWordsFunction');
    }
    
    public function ChangeWebsiteColorsSaveWithLocalStorage(){
        return view('ChangeWebsiteColorsSaveWithLocalStorage');
    }
    public function CheckIfUrlHashContainsString(){
        return view('CheckIfUrlHashContainsString');
    }
    public function CreateSimpleDynamicClock(){
        return view('CreateSimpleDynamicClock');
    }
    public function DisableRightClickOnpage(){
        return view('DisableRightClickOnpage');
    }
    public function EditTextLiveOnInput(){
        return view('EditTextLiveOnInput');
    }
    public function GenerateRandomSerialNumber(){
        return view('GenerateRandomSerialNumber');
    }
    public function HidePlaceholderOnInputFocus(){
        return view('HidePlaceholderOnInputFocus');
    }
    public function localstorage(){
        return view('localstorage');
    }
    public function MakeTypeWriterEffectsOnText(){
        return view('MakeTypeWriterEffectsOnText');
    }
    public function memorygame(){
        return view('memorygame');
    }
    public function RandomClassForBodyOnRefresh(){
        return view('RandomClassForBodyOnRefresh');
    }
    public function ScrollToTopButton(){
        return view('ScrollToTopButton');
    }
    public function Show_HidePasswordOnInputField(){
        return view('Show_HidePasswordOnInputField');
    }
    public function ShowRandomImageEveryXSeconds(){
        return view('ShowRandomImageEveryXSeconds');
    }
    public function silder(){
        return view('silder');
    }
    
   
}
