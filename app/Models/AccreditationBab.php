<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationBab extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'acc_bab';
}
