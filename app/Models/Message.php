<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural of the model name
    protected $table = 'messages';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'project',
        'subject',
        'description',
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class, 'messages_id');
    }
}
