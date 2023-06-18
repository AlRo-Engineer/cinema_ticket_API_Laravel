<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $table = 'hall';

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'ID_cinema');
    }
}
