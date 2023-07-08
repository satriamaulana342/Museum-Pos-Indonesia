<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
    ];
    protected $table = 'Categories';

    public function articles()
    {
        return $this->hasMany(Article::class, 'id_category', 'id');
    }
}
