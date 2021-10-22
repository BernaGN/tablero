<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{

    //Propiedades

    use HasFactory;

    public $timestamps = false;

    protected $table = "configuraciones";

    protected $fillable = [
        'nombre',
    ];

    //Relaciones

    public function estados() {
        return $this->hasMany(Estado::class);
    }
}
