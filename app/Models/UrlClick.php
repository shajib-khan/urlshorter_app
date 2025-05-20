<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlClick extends Model
{
   public function shortUrl()
   {
    return $this->belongsTo(ShortUrl::class);
   }
}
