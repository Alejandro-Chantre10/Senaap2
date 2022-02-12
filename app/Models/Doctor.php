<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable =['nombre','apellido','edad','especialidad','aprendiz_id'];

    public function aprendiz(){
        return $this->hasOne('App\Models\Apprentice','id','aprendiz_id');
    }

    public function evento(){
        return $this->hasMany('App\Models\Evento','id_medico','id');
    }


}
