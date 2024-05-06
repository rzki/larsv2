<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'idn_regencies';
    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
