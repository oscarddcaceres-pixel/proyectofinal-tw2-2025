<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriasXUsuario extends Model
{
    //use HasFactory;
    public $timestamps = false; 

    protected $table = 'materias_x_usuarios';

    protected $fillable = [
        'materias_id',
        'users_id'
    ];

    public function materia (){
        return $this->belongsTo(Materia::class,'materia_id');
    }

     public function user (){
        return $this->belongsTo(Materia::class,'user_id');
    }

     public function calificaciones (){
        return $this->hasMany(Calificacion::class,'materias_x_usuarios_id');
    }
}