<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $user = [
            [
                'username' => 'zhang',
                'sex' => '男',
                'country' => 'cn'
            ],
            [
                'username' => 'wen',
                'sex' => '男',
                'country' => 'usa'
            ],
            [
                'username' => 'feng',
                'sex' => '女',
                'country' => 'uk'
            ]
        ];
        return view('test.index', [
            'users' => $user,
            'html' => '<img src="http://images.yoger.com.cn/uploads/image/20200211/1581393472.jpg">',
            'title' => 'test',
            'message' => 'Hello World!',
        ]);
    }

    public function show($id)
    {
        echo $id;
    }

    public function edit()
    {
        //
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}
