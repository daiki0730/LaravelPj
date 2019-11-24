<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
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
