<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      if (isset($request->id))
      {
        $param = ['id'=> $request->id];
        $items = DB::select('select * from people where id = :id', $param);
      } else {
        $items = DB::select('select * from people');
      }
      return view('hello.index', ['items'=>$items]);
    }

    public function post(Request $request)
    {
      $validate_rule = [
        'msg' => 'required',
      ];

      $this->validate($request, $validate_rule);
      $msg = $request->msg;
      $response = new Response(view('hello.index', ['msg'=>'「'. $msg . '」クッキーを保存しました。']));
      $response -> cookie('msg', $msg , 100);
      return $response;
    }

    public function add(Request $request)
    {
      return view('hello.add');
    }

    public function create(Request $request)
    {
      $param = [
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
      ];
      DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
      return redirect('/hello');
    }
}
