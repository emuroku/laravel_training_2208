<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    //
   public function index(){

    $data = ['shownu', 'minhyuk', 'kihyun', 'hyumgwon', 'jooheon', 'im'];
    return view('hello.index', ['data'=>$data]);
   }

   public function post(Request $request){
        return view('hello.index', ['msg'=>$request->msg]);
   }
}
