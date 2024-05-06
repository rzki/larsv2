<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getRouteKeyName()
    {
        return 'hospitalId';
    }
    public function scopeSearch($query, $value)
    {
        $query->where('no_induk', 'like', "%{$value}%")
        ->orWhere('nama', 'like', "%{$value}%")
        ->orWhere('kab_id', 'like', "%{$value}%");
    }
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'prov_id');
    }
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kab_id');
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id');
    }
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kel_id');
    }
}
