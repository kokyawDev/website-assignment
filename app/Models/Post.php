<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'slug',
        'description', 'short_description',
        'thumbnail', 'cover'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
