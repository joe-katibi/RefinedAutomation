<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureListMore extends Model
{
    use HasFactory;

    protected $table = 'features_list_more';

    protected $fillable = ['features_list_id', 'image', 'title', 'sub_title', 'status', 'created_by', 'edited_by'];

    public function featureList()
    {
        return $this->belongsTo(FeatureList::class, 'features_list_id');
    }
}

