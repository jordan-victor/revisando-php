<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rural extends Model
{
    use HasFactory;
    protected $table = 'rural';

    protected $fillable = [
        'nome_prof',
        'cpf_prof',
        'cargo'
    ];
}
