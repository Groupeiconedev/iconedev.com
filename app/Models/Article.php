<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory, Sluggable;
    
    protected $fillable = [
        'titre',
        'description',
        'category',
        'author',
        'image',
        'etat',
        'titre_slug',
    ];

    public function sluggable(): array
    {
        return [
            'titre_slug' => [
                'source' => 'titre'
            ]
        ];
    }

    public function scopeSearch($query,$term){
        $term = "%$term%";
        $query->where(function($query) use($term){
            $query->where('titre', 'like',$term);
        });
    }
}
