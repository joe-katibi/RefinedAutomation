<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural of the model name
    protected $table = 'replies';

    protected $fillable = [
        'messages_id',
        'sender_id',
        'receivers_id',
        'message_text',
    ];

    public function message()
    {
        return $this->belongsTo(Message::class, 'messages_id');
    }

    // If you have a User model for sender and receiver, define relationships
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receivers_id');
    }
}
