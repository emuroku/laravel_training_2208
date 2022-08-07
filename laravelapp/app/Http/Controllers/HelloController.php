<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    //
<<<<<<< HEAD
    public function index($id='zero'){
      $data = [
        'msg' => 'これはコントローラから渡されたメッセージです。',
        'id' => $id
      ];

      return view('hello.index', $data);
=======

>>>>>>> 65e32639189d9a5597a09e9ba664d5c89bb61517
    }
}
