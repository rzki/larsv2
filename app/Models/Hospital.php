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
}
