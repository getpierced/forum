<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillabel = ['title', 'content', 'user_id', 'channel_id'];

    public function channel()
    {
        return $this->belongsTo(App\Channel);
    }

    public function user()
    {
        return $this->belongsTo(App\User);
    }

    public function replies()
    {
        $this->hasMany(App\Reply);
    }
}
