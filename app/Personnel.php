<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table ="personnels";
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
