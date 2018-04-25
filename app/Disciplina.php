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
    'turno',
    'horario'
  ];

  public function dia() {
      return $this->hasOne(Dia::class, 'disciplinaId','id');
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
