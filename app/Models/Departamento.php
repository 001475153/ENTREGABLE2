<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['direccion', 'renta'];

    public function fotos()
    {
        return $this->morphMany(Foto::class, 'imageable');
    }
}


