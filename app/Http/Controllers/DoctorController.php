<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Apprentice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DoctorController extends Controller
{
    public function index()
    {
        $medicos = Doctor::all();
        return view('admin.medico.index',compact('medicos'));
    }

    public function pdf()
    {
        $medicos = Doctor::paginate();

        $pdf = Pdf::loadView('admin.medico.pdf',['medicos' => $medicos]);
        return $pdf->stream();   //Mirar pdf en el navegador
        // return $pdf->download('lista_medicos.pdf');  //Para descargar pdf
    }

    public function create()
    {
        $aprendices = Apprentice::pluck('nombre','id')->toArray();
        return view('admin.medico.create',compact('aprendices'));
    }

    public function store(Request $request)
    {
        //
        $medico = Doctor::create($request->all());
        return redirect()->route('medico.create',$medico)->with('mensaje','El Médico ha sido creado satisfactoriamente');
    }


    public function show(Doctor $doctor)
    {
        //
    }

    public function edit(Doctor $medico, Apprentice $aprendices)
    {
        $aprendices = Apprentice::pluck('nombre','id');
        return view('admin.medico.edit', compact('aprendices','medico'));
    }


    public function update(Request $request, Doctor $medico)
    {
        //
        $medico->update($request->all());
        return redirect()->route('medico.edit',$medico)->with('mensaje','El Médico ha sido actualizado satisfactoriamente');
    }


    public function destroy(Doctor $medico)
    {
        //
        $medico->delete();
        return redirect()->route('medico.index')->with('mensaje','El Médico ha sido eliminado satisfactoriamente');
   }
}
