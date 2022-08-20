<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items'=>$items]);
    }

    public function post(Request $request)
    {

        $validate_rule = [
            'msg' => 'required',
        ];

        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index',
            ['msg'=>'「'.$msg . '」をクッキーに保存しました']);
        $response->cookie('msg', $msg, 100);

        return $response;
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