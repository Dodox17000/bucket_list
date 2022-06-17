<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author',
        'isPublished',
    ];
        /**
     * Pour creer la relation entre Article et Categories
     */
    function category(){
        return $this->belongsTo(Category::class);
    }
}
