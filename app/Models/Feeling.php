<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeling extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasOne(post::class, 'feeling_id', 'id');
    }
}
