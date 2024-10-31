<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureList extends Model
{
    use HasFactory;

    protected $table = 'features_list';

    protected $fillable = ['features_id', 'image', 'name', 'description', 'status', 'created_by', 'edited_by'];

    public function featureListMores()
    {
        return $this->hasMany(FeatureListMore::class, 'features_list_id');
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class, 'features_id');
    }
}

