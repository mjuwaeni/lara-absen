<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table='users';
    public function absensi(){
        return $this->hasMany('App\Models\Absensi');
    }
    public function pembimbing(){
        return $this->hasOne('\App\Models\Pembimbing');
    }
}
