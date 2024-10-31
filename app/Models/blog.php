<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural of the model name
    protected $table = 'blogs';

    protected $fillable = ['slogan', 'description', 'status', 'created_by', 'edited_by'];

    public function blogLists()
    {
        return $this->hasMany(BlogList::class);
    }
}
