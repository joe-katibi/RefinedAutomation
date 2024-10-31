<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{

    protected $table = 'services_list';

    protected $fillable = [
        'services_id', 'name', 'description', 'image', 'status', 'created_by', 'edited_by'
    ];

    public function subcategories()
    {
        return $this->hasMany(ServiceListMore::class, 'services_list_id');
    }
}
