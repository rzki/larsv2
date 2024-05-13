<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationStandard extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'acc_standards';
    public function getRouteKeyName()
    {
        return 'standardId';
    }
    public function bab()
    {
        return $this->belongsTo(AccreditationBab::class, 'bab_id');
    }
    public function elements()
    {
        return $this->hasMany(AccreditationElement::class, 'acc_standard_id');
    }
}
