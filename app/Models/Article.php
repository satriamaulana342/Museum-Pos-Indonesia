<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_category',
        'heading',
        'thumbnail',
        'content',
    ];

    protected $table = 'articles';

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
