<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];
    public static $statusEnum= [
        1, // Borrador
        2, // Revision
        3, // Publicado
    ];

    protected function rating(): Attribute
    {
        return Attribute::make(
            get: fn () => ($this->reviews_count ? round($this->reviews->avg('rating'), 1) : 5),
            // set: fn ($value) => strtolower($value),
        );
    }

    // Sirve para url amigable. Lo estoy usando desde la ruta por lo cual no lo estoy usando, me sirve para referencia en proyectos viejos.
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // Query Scopes, no estoy usando este metodo me sirve de referencia para otro caso de funciones dinamicas desde el modelo.
    // public function scopeCategory($query, $idCategory)
    // {
    //     if ($idCategory) {
    //         return $query->where('category_id', $idCategory);
    //     }
    //     return $query;
    // }

    // Relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    
    // Relacion uno a muchos inversa
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    // Relacion muchos a muchos
    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    // Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
