<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre', 'precio'];

    public function inquilinos()
    {
        return $this->belongsToMany(Inquilino::class, 'inquilino_servicio');
    }
}
