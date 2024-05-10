<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'accreditations';
    public function getRouteKeyName()
    {
        return 'acc_id';
    }
    public function hospitals()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
        public function scopeSearch($query, $value)
    {
        $query->where('no_akreditasi', 'like', "%{$value}%")
            ->orWhere('lokasi', 'like', "%{$value}%")
            ->orWhereHas(
                'hospitals', function ($query) use ($value) {
                    $query->where('nama', 'like', "%{$value}%");
            });
    }
}
