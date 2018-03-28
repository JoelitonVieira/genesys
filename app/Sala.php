<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'Salas';
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = [
      'tipo',
      'numero'
    ];
}
