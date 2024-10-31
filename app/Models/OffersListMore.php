<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffersListMore extends Model
{

    // Define the table name if it's different from the plural of the model name
    protected $table = 'offers_list';

    protected $fillable = ['offers_list_id', 'header', 'image', 'title', 'description', 'status', 'created_by', 'edited_by'];
}
