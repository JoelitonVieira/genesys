<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sala()
    {
        return $this->hasMany(Sala::class);
    }

    public function disciplina()
    {
        return $this->hasMany(Disciplina::class);
    }

    public function diasdechoques_sala()
    {
        return $this->hasMany(DiasdeChoques_Sala::class);
    }
}
