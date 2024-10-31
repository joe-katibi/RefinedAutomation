<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    // Define the table name if it's different from the plural of the model name
    protected $table = 'about_us';

    // Allow mass assignment for these fields
    protected $fillable = [
        'slogan',
        'description',
        'status',
        'created_by',
        'edited_by'
    ];

    // Set default values or any additional configuration if needed
    protected $attributes = [
        'status' => 1, // Default status to active (1) for new entries
    ];
}
