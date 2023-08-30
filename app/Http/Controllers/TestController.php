<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{



    private ?int $id;

    public function __construct(int $id =10 ){

        $this->id = $id;


    }

    public function index(){
    if(Gate::allows('categories.view'))
    //Gate::authorize('categories.view');
        return view('silder');
    }
}
