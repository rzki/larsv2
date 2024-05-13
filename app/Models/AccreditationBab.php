<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationBab extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'acc_bab';
    public function getRouteKeyName()
    {
        return 'babId';
    }
    public function standards()
    {
        return $this->hasMany(AccreditationStandard::class, 'acc_standard_id');
    }
}
