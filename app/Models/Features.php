<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = ['slogan', 'description', 'status', 'created_by', 'edited_by'];

    public function featureLists()
    {
        return $this->hasMany(FeatureList::class, 'features_id');
    }
}
