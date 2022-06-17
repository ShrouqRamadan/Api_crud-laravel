<?php

namespace App\Http\Controllers;

use App\Models\Categores;
use Illuminate\Http\Request;

class CategoresController extends Controller
{

    public function index()
    {
        $categores=Categores::get();
        return response()->json($categores);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $categores=Categores::create($request->all());
        return response()->json($categores);

    }


    public function show(Categores $categores)
    {
        //
    }


    public function edit(Categores $categores)
    {
        //
    }

    public function update(Request $request,$id)
    {
        $categores=Categores::find($id)->update($request->all());
        return response()->json($categores);


    }



    public function destroy($id)
    {
        $categores=Categores::find($id)->delete();
    }
}
