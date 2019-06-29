<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $guard = [];

    public function disease()
    {
        return $this->hasMany(Disease::class);
    }
}
