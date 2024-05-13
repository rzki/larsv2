<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationElement extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'acc_elements';
    public function getRouteKeyName()
    {
        return 'elementId';
    }
    public function standard()
    {
        return $this->belongsTo(AccreditationStandard::class, 'acc_standard_id');
    }
}
