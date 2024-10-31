<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialsList extends Model
{

    // Define the table name if it's different from the plural of the model name
    protected $table = 'testimonials_list';


    protected $fillable = [
        'name', 'avatar', 'profession', 'testimony', 'status', 'created_by', 'edited_by'
    ];
}
