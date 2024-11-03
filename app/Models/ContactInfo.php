<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_infos';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'whatsapp',
        'instagram',
        'linkedln',
        'website',
        'status',
        'created_by',
        'edited_by',
    ];
}
