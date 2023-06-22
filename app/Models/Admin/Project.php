<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'slug',
        'customer',
        'type_customer',
        'price',
        'created',
        'image'
    ];

    public static function toSlug($title) {
        return Str::slug($title, '-');
    }
}
