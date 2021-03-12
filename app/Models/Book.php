<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{

    use HasFactory;

    protected $fillable = ['isbn', 'title', 'subtitle', 'published', 'rating',
        'description', 'user_id'];

    public function isFavourite() : bool {
        return $this->rating >= 8;
    }

    /**
     * book has many images
     */
    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }


}
