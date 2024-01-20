<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['name', 'author_id', 'description', 'price', 'year'];

    use HasFactory;
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
