<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        print_r($request->all());
    }

    public function show($id)
    {
        echo $id;
    }
}
