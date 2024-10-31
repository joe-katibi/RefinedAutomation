<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogList extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural of the model name
     protected $table = 'blogs_list';

    protected $fillable = ['blog_id', 'image', 'name', 'description', 'status', 'created_by', 'edited_by'];

    public function blogListMores()
    {
        return $this->hasMany(BlogListMore::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
