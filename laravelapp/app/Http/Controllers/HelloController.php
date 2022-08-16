<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    //
    public function index(Request $request)
    {
        // $validator = Validator::make($request->query(), [
        //     'id' => 'required',
        //     'pass' => 'required|integer',
        // ]);
        // if($validator->fails()){
        //     $msg = 'クエリーに問題があります';
        // } else {
        //     $msg = 'ID/PASSを受け付けました。フォームを入力してください';

        // } 


        return view('hello.index', ['msg' => 'フォームを入力してください' ]);
    }

    public function post(HelloRequest $request)
    {
        // $rules = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'integer',
        // ];

        // $messages = [
        //     'name.required' => '名前を入力してください',
        //     'mail.email' => '有効なメールアドレスを入力してください',
        //     'age.integer' => '年齢は整数で入力してください',
        //     // 'age.between' => '年齢は0-100のあいだで入力してください',
        // ];


        // $validator = Validator::make($request->all(), $rules, $messages);
        // $validator -> sometimes('age', 'min:0', function($input){
        //     return is_numeric($input->age);
        // });

        // if($validator->fails()){
        //     return redirect('/hello')
        //                     ->withErrors($validator)
        //                     ->withInput();

        // }

        // return view('hello.index', ['msg'=>'正しく入力されました！！']);

        return view('hello.index', ['msg'=>'正しく入力されました！！']);
    }
}