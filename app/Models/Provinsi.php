<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'idn_provinces';
    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
