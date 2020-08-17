<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bominus extends Model
{
    protected $table ="bominus";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
