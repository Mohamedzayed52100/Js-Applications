<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{



    private ?int $id;

    public function __construct(int $id =10 ){

        $this->id = $id;


    }

    public function index(){
        echo $this->id;
        return view('silder');
    }
}
