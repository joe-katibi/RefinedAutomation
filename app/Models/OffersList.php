<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffersList extends Model
{


    // Define the table name if it's different from the plural of the model name
    protected $table = 'offers_list_more';

    protected $fillable = ['offers_id', 'header', 'image', 'title', 'description', 'status', 'created_by', 'edited_by'];

    public function offersListMore()
    {
        return $this->hasMany(OffersListMore::class, 'offers_list_id');
    }
}

