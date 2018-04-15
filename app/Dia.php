<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
  protected $primaryKey = "disciplinaId";

  public $incrementing = false;

  protected $fillable = [
    'seg',
    'ter',
    'quar',
    'quin',
    'sex',
    'sab',
  ];

  public function Disciplina() {
      return $this->belongsOne(Disciplina::class, 'disciplinaId','id');
  }
}
