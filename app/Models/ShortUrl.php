<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function urlClick()
    {
        return $this->hasMany(UrlClick::class);
    }
}
