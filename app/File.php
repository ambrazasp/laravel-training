<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function scopeExtIs($query, $ext) {
        return $query->where('filename', 'LIKE', '%' . $ext);
    }

    public function scopeLarge($query) {
        // larger than 10 MB
        return $query->where('size', '>=', 1024*10);
    }
}
