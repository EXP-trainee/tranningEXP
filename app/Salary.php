<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table ="salaries";
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
