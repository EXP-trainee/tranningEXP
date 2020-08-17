<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{
    protected $table ="workdays";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
