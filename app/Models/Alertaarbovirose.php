<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertaarbovirose extends Model
{
    use HasFactory;
    protected $table = 'alertaarboviroses';

    protected $fillable = [
        'cpf',
        'profissional',
        'ine',
        'data',
        'latitude',
        'longitude'
    ];
}
