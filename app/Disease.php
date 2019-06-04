<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Disease extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function lastDisease()
    {
        return Disease::where('user_id', Auth::id())->orderBy('id', 'DESC')->take(1);

    }

    public function firstDisease()
    {
        return Disease::where('user_id', Auth::id())->orderBy('id', 'ASC')->take(1);
    }
}
