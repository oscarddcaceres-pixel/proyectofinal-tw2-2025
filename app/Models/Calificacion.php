<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //use HasFactory;
    public $timestamps = false; 

    protected $table = 'calificaciones';

    protected $fillable = [
        'calificacion',
        'materias_x_usuarios_id'
    ];
    
    public function materiaXUsuarios(){
        return $this->belongsTo(materiaXUsuarios::class,'materias_x_usuarios_id');
    }

     public function materias (){
        return $this->belongsTo(Materia::class,'id', 'id','materias_x_usuarios_id', 'materia_id');
    }

     public function user (){
        return $this->belongsTo(Materia::class,'id', 'id','materias_x_usuarios_id','materia_id');
    }
}
