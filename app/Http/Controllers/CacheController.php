<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CacheController extends Controller
{
    public function index(){
        $posts = Cache::remember('user', 60, function () {
            return Post::all();
        });


        return view('posts' , get_defined_vars());

    }

    public function index2(){

        return Cache::get('userdata');

        $Val= Cache::get('userdata' , function (){
            return DB::table('posts')->get();

        });

        dd($Val);
    }
}
