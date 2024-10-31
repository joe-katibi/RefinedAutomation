<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'slogan', 'description', 'name', 'avatar', 'job_title',
        'facebook', 'twitter', 'instagram', 'linkedln',
        'user_status', 'created_by', 'edited_by'
    ];
}
