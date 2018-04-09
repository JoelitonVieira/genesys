<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{

    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = [
      'tipo',
      'nome'
    ];

}
