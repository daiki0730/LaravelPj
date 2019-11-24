<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restdata;

class RestappController extends Controller
{

    public function index()
    {
        $items = Restdata::all();
        return $items->toArray();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $items = Restdata::find($id);
        return $items->toArray();
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
