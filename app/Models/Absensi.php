<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table='absensis';
    protected $fillable=[
        'user_id',
        'status',
        'keterangan'
    ];

    public function users(){
        return $this->belongsTo('App\Models\Users');
    }
}
