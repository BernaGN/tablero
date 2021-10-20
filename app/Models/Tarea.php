<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected const TAREA_CLASS_TODO = 'secondary';
    protected const TAREA_CLASS_DOING = 'primary';
    protected const TAREA_CLASS_DONE = 'success';

    protected $fillable = [
        'titulo',
        'descripcion',
        'estatus',
    ];

    public function cometarios() {
        return $this->hasMany(Comentario::class);
    }
}
