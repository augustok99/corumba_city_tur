<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id', 'content', 'liked'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}