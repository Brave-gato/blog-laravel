<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //Dans ce fichier on fait en lien entre l'article et l'user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
