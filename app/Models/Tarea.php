<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{

    //Propiedades

    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'title',
        'descripcion',
        'estatu_id',
        'start',
        'end',
    ];

    //Relaciones

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    //Accesors

    //Mutators

    public function setTituloAttribute($value) {
        $this->attributes['title'] = strtoupper($value);
    }

    public function setDescripcionAttribute($value) {
        $this->attributes['descripcion'] = strtoupper($value);
    }
}
