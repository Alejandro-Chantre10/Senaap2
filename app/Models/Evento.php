<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required',
        'id_apprentice'=>'required',
        'id_medico'=>'required',
    ];

    protected $fillable = ['title','descripcion','start','end','id_aprendiz','id_medico'];

    public function aprendiz(){
        return $this->hasOne('App\Models\Apprentice','id','id_aprendiz');
    }

    public function medico(){
        return $this->hasOne('App\Models\Doctor','id','id_medico');
    }
}
