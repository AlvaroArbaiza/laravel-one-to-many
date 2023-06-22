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
        'image',
        'type_id'
    ];

    public static function toSlug($title) {
        return Str::slug($title, '-');
    }

    // funzione nella quale specifichiamo una relazione di dipendenza nei confronti della tabella Type
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
