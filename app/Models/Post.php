<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feeling_id',
        'about_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feeling()
    {
        return $this->belongsTo(Feeling::class);
    }

    public function about()
    {
        return $this->belongsTo(About::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
