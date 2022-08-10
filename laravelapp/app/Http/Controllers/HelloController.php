<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    //
    public function index()
    {
        $data = [
        ['name'=>'Shownu', 'mail'=>'shownu@mail.com'],
        ['name'=>'kihyun', 'mail'=>'kihyun@mail.com'],
        ['name'=>'minhyuk', 'mail'=>'minhyuk@mail.com'],
    ];
        return view('hello.index', ['data'=>$data]);
    }
}