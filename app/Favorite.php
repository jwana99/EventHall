<?php

namespace EventHalls;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        "user_id","place_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
