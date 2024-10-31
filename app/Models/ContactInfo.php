<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_infos';

    protected $fillable = [
        'name',
        'location',
        'phone',
        'email',
        'facebook',
        'twitter',
        'whatsapp',
        'instagram',
        'linkedln',
        'status',
        'created_by',
        'edited_by',
    ];
}
