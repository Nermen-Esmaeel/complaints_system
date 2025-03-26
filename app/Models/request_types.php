<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class request_types extends Model
{
    protected $fillable = [
        'type_name',
        'description',
    ];
}
