<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'seance';

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'ID_hall');
    }

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'ID_movie');
    }
}
