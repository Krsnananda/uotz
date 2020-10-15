<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nome_vaga',
      'pais',
      'cidade',
      'estado',
      'departamento',
      'tipo',
      'descricao',
      'autor_id',
  ];
}
