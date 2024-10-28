<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'floor',
        'section',
    ];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
