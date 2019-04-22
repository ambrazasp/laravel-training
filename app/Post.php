<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
//    protected $table = 'posts';

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function files() {
        return $this->hasMany(File::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function scopeOneDayOld($query) {
        return $query->where('created_at', '>', Carbon::now()->subWeek());
    }

    public function scopeCreatedAfter($query, $dateTime) {
        return $query->where('created_at', '>', $dateTime);
    }
}
