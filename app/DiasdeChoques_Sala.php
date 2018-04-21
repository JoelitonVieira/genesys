<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasdeChoques_Sala extends Model
{
  protected $primaryKey = "id";
  public $incrementing = true;

  protected $fillable = [
    'nome',
    'seg',
    'ter',
    'quar',
    'quin',
    'sex',
    'sab',
  ];
}
