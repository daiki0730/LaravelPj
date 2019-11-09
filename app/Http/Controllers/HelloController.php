<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
      $data = [
        ['name'=>'hyde', 'mail'=>'l@yamada'],
        ['name'=>'tetsu', 'mail'=>'a@yamada'],
        ['name'=>'ken', 'mail'=>'r@yamada'],
        ['name'=>'yukihiro', 'mail'=>'c@yamada']
      ];

      return view('hello.index',['data'=>$data]);
    }
}
