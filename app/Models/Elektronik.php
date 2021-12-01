<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elektronik extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'elektronik';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
