<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
        'image_path',
        'description', // Adicione esta linha
    ];

    // usei para captar usuario autenticado
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}