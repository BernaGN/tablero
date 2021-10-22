<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{

    //Propiedades

    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'configuracion_id',
        'user_id',
    ];

    //Relaciones

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function configuracion() {
        return $this->belongsTo(Configuracion::class);
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
