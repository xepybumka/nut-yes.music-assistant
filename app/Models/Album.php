<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'author_id',
        'image'
    ];

    /**
     * Ger author of the album
     */
    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
