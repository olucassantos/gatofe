<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "gatos";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'raca',
        'idade',
        'sexo',
        'cor',
        'gatografia',
        'foto'
    ];
}
