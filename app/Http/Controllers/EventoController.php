<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Apprentice;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;


class EventoController extends Controller
{

    public function index()
    {
        //Recolectamos aqui los datos de las otras tablas de la db
        //ya que todo el modal esta en la vista index
        $aprendices = Apprentice::pluck('nombre','id')->toArray();
        $medicos = Doctor::pluck('nombre','id')->toArray();
        return view('evento.index',compact('aprendices','medicos'));
    }

    public function create()
    {
    }


    public function pdf()
    {
        $eventos = Evento::paginate();
        $pdf = Pdf::loadView('evento.pdf',['eventos' => $eventos,'aprendices']);
        return $pdf->stream();   //Mirar pdf en el navegador
        // return $pdf->download('lista_medicos.pdf');  //Para descargar pdf
    }



    public function store(Request $request)
    {
        //
        request()->validate(Evento::$rules);
        $evento=Evento::create($request->all());

    }


    public function show(Evento $evento)
    {
        //

        $evento = Evento::all();
        return response()->json($evento);
    }


    public function edit($id)
    {
        //
        $evento = Evento::find($id);

        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s',$evento->end)->format('Y-m-d');
        return response()->json($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
        request()->validate(Evento::$rules);
        $evento->update($request->all());
        return response()->json($evento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $evento=Evento::find($id)->delete();
        return response()->json($evento);
    }
}
