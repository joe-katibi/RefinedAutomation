<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FaqsList extends Model
{
    use HasFactory;

     // Define the table name if it's different from the plural of the model name
     protected $table = 'faqs_list';

    protected $fillable = [
        'faqs_id', 'image', 'title', 'sub_title', 'status', 'created_by', 'edited_by'
    ];

    public function faq()
    {
        return $this->belongsTo(Faq::class);
    }
}
