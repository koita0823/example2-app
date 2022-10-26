<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about_what';

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasOne(Post::class, 'about_id', 'id');
    }
}
