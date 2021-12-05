<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','tag_type_id'];

    public $timestamps = false;

    const TYPE_TAG = 'tag';
    const TYPE_CATEGORY = 'category';

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
