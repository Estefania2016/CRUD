<?php

namespace App\Models;

use App\Http\Controllers\IncidenceController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    public function product():HasOne{
        return $this->hasOne(IncidenceController::class);
    }
}
