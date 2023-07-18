<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'heading',
        'slug',
        'thumbnail',
        'content',
    ];

    protected $table = 'rooms';
}
