<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceListMore extends Model
{

    protected $table = 'services_list_more';
    protected $fillable = [
        'services_list_id', 'title', 'sub_title', 'status', 'created_by', 'edited_by'
    ];
}
