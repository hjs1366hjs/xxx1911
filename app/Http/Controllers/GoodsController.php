<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //登录
    public function GoodsLogin()
    {
        return view('login');
    }

    //注册
    public function GoodsReg()
    {
        return view('reg');
    }
}
