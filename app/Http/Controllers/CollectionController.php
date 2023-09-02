<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    public function index()
    {


        Collection::macro('toUpper', function () {
            return $this->map(function (string $value) {
                return Str::upper($value);
            });
        });

        $collection = collect(['first', 'second']);

        $upper = $collection->toUpper();

        return $upper;

    }
    public function avg(){
        $average = collect([
            ['foo' => 10],
            ['foo' => 10],
            ['foo' => 20],
            ['foo' => 40]
        ])->avg('foo'); //20 
         
        
         
      //  return $average;
        $average = collect([1, 1, 2, 4])->avg();
       // return $average;  //2
       $collection = collect([1, 2, 3]);

       $collection->when(true, function (Collection $collection, int $value) {
        return $collection->push(4);
    });

    // dd($collection);

    $collection = collect([
        ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
        ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],
    ]);
     
    $res =$collection->sum('pages');

    // dd($res);
     
    // 1272
         
        
    }

    public function collection_macro(){

        Collection::macro('toUpper', function () {
            return $this->map(function (string $value) {
                return Str::upper($value);
            });
        });     
       $collection =collect(['ahmed' , 'mohamed' , 'adel' , 'mostafa' , 'yehia'])->toUpper();

       dd($collection);
    }


    public function filterData(){

        ///not lezy collection
       $data= Post::all()->filter(function($el){
            return $el->id % 2== 0;

        });
        // return $data;
        
        ///lazy collection 
        
        
        //تقليل ال memory 
        $data = Post::cursor()->filter(function (Post $post) {
            return $post->id % 4 == 0;
        });
        return $data;
         

    }
}
