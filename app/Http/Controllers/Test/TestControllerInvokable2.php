<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
 
use Illuminate\Support\Facades\Cookie;


class TestControllerInvokable2 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {




    




        echo URL::current() . '<br>';

     
        echo "invikabke controller un invoke function<br>";
    }
}
