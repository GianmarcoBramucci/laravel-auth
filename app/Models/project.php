<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug'];
    public static function generateSlug($title){
        $slug = Str::slug($title, '-');
        return $slug;
    }
}
