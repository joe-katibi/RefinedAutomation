<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogListMore extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural of the model name
    protected $table = 'blogs_list_more';

    protected $fillable = ['blogs_list_id', 'title', 'sub_title', 'status', 'created_by', 'edited_by'];

    public function blogList()
    {
        return $this->belongsTo(BlogList::class);
    }
}
