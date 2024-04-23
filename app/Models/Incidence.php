<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    use HasFactory;
    protected $table = 'incidences';

    public function documento()
    {
        return $this->hasOne(Incidence::class);
    }
}



