<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{

    public function index()
    {
        //
        $aprendices = Apprentice::all();
        return view('admin.aprendiz.index', compact("aprendices"));
    }


    public function create()
    {
        //
        return view('admin.aprendiz.create');
    }


    public function store(Request $request)
    {
        //
        $aprendiz = Apprentice::create($request->all());
        return redirect()->route('aprendiz.create',$aprendiz)->with('mensaje','El Aprendiz ha sido creado satisfactoriamente');
    }


    public function show(Apprentice $aprendiz)
    {
        //
    }


    public function edit(Apprentice $aprendiz)
    {
        //
        return view('admin.aprendiz.edit', compact('aprendiz'));
    }

    public function update(Request $request, Apprentice $aprendiz)
    {
        //
        $aprendiz->update($request->all());
        return redirect()->route('aprendiz.edit',$aprendiz)->with('mensaje','El Aprendiz ha sido actualizado satisfactoriamente');

    }


    public function destroy(Apprentice  $aprendiz)
    {
        //
        $aprendiz->delete();
        return redirect()->route('aprendiz.index')->with('mensaje','El Aprendiz ha sido eliminado satisfactoriamente');
    }
}
