<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'slogan', 'description', 'status', 'created_by', 'edited_by'
    ];
}
