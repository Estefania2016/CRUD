<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'name_company', // Campo agregado al array fillable para permitir asignación masiva
        'number_doc',
        'address',
        'platforms',
        'Phone',
        'email',    
    ];

    public function documento()
    {
        return $this->hasOne(DocumentType::class);
    }
}
