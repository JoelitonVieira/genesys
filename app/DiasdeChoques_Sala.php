<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasdeChoques_Sala extends Model
{
  protected $primaryKey = "id";
  public $incrementing = true;

  protected $fillable = [
    'nm_sala',
    'choques',
    'seg',
    'ter',
    'quar',
    'quin',
    'sex',
    'sab',
  ];

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
