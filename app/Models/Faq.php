<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;
    // Define the table name if it's different from the plural of the model name
    protected $table = 'faqs';

    protected $fillable = [
        'slogan', 'description', 'status', 'created_by', 'edited_by'
    ];

    public function faqsList()
    {
        return $this->hasMany(FaqsList::class);
    }
}
