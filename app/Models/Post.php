<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'tag_id', 'slug',
        'description', 'short_description',
        'thumbnail', 'cover', 'is_published'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
