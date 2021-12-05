<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'description',
        'status',
        'preview_id',
        'user_id'
    ];

    const STATUS_DRAFT = 10;
    const STATUS_PUBLISHED = 20;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->where('tags.type', 'tag');
    }

    public function categories()
    {
        return $this->belongsToMany(Tag::class)->where('tags.type', 'category');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function validComments()
    {
        return $this->comments()->whereHas('user', function ($query) {
            $query->whereValid(true);
        });
    }
}
