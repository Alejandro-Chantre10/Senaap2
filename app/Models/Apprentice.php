<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellido','edad','tipoD','numeroD','ficha'];


    public function medico(){
        return $this->hasMany('App\Models\Doctor','aprendiz_id','id');
    }

    public function evento(){
        return $this->hasMany('App\Models\Evento','id_aprendiz','id');
    }


}
