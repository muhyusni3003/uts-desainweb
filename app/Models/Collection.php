<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'origin',
        'period',
        'condition',
        'location_id',
        'date_acquired',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function images()
    {
        return $this->hasMany(CollectionImage::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'collection_tags');
    }
}
