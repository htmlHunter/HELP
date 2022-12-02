<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class TestController extends Controller 
{ 
public function form()
    { 

   return view('test.form');

    } 

public function result(Request $request)
    { 
   $text=$request->input('num');
   $text2=$request->input('num2');
   $text3=$request->input('num3');
   return view('test.result',['text'=> $text, 'text2'=> $text2 , 'text3'=> $text3 ]);
    }

}
?>