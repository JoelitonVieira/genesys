<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
  protected $primaryKey = "id";
  public $incrementing = true;

  protected $fillable = [
    'nome',
    'codigo',
    'turma',
    'professor',
    'dia',
    'turno',
    'horario',
    'dias'
  ];
}
