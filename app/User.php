<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function infouser()
    {
        return $this->hasOne('App\InfoUser');
    }
    public function salary()
    {
        return $this->hasOne('App\Salary');
    }

    public function personnel()
    {
        return $this->hasOne('App\Personnel');
    }

    public function workdays()
    {
        return $this->hasMany('App\Workday');
    }

    public function workday()
    {
        return $this->hasOne('App\Workday');
    }

    public function bominus()
    {
        return $this->hasMany('App\Workday');
    }

}

 // ->whereYear("created_at",)->where("month", date("m"))