<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagens extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'classe', 'raca', 'genero', 'arma'];
}
