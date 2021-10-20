<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'backgroundColor_id',
        'textColor_id',
    ];

    public function backgroundColor() {
        return $this->belongsTo(Color::class, 'backgroundColor_id');
    }

    public function textColor() {
        return $this->belongsTo(Color::class, 'textColor_id');
    }
}
