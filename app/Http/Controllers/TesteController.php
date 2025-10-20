<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $x,int $y){

       // echo "O valor da soma de $x + $y é igual a :".($x + $y);
      // return view('site.teste',['vx'=>$x , 'vy'=>$y]); // usando o array associativo

      //return view('site.teste',compact('x','y')); // metodo compact

      return view('site.teste')->with('xxxx',$x)->with('yyyy',$y);

    }
}
