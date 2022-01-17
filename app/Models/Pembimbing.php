<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;
    protected $table = 'pembimbings';
    protected $fillable = [
        'users_id',
        'name_pbb',
        'alamat',
        'wa',
    ];
    public function users(){
        return $this->belongsTo('\App\Models\Pembimbing');
    }
}
