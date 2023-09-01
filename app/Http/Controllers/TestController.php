<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;


class TestController extends Controller
{



    private ?int $id;

    public function __construct(int $id =10 ){

        $this->id = $id;


    }

    public function index(){

        return view('Testing.index');

        return Auth::user()?->id ? Auth::user()?->id : 0;

    // if(Gate::allows('categories.view'))
    // //Gate::authorize('categories.view');
    //     return view('silder');
    }
    public function YY(Request $request){

        $request->validate([
            'name' =>['required' , 'string' ,  'max:150' , 'min:10' ] , 

            'email' => ['email' , 'required' , 'unique:users,email' ] , 
            


        ]);


        return $request->all();



   //     return (View::exists('Testing.index'))? 5 : 1;



        if(View::exists('Testing.index'))return 1;else return 0;

        $arr = [
            'name' =>'mohamed ibrahim', 
            'age' => 23 , 
            'job' =>'software engineer' 
            

        ];

        return $arr;
        
        return response()->json($arr);


        return gettype($request->name);


        $inpt = $request->input();



        return $inpt['name'];
        dd($inpt);




        if($request->isMethod('post'))
        return $request->session()->token();

        return $request->path() . '    ------------------    '.$request->url();


        dd($request);
    }
}
