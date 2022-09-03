<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    public static $valueEnum= [
        1, // LIKE
        2, // DISLIKE
    ];

    public function reactionable()
    {
        return $this->morphTo();
    }

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
