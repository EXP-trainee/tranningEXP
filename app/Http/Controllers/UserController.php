<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\InfoUser;
use App\User;
use App\Comment;
use App\Salary;
use App\Workdays;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{


    public function customer()
    {
        return view('customer.index');
    }

    public function showcustomer()
    {
 
        $infouser = User::find(auth()->id())->infouser;
        $salary = User::find(auth()->id())->salary;
        $comments = User::find(auth()->id())->comments;
        $workdays = User::find(auth()->id())->workdays;
        return view('customer.showCustomer', ['infouser' => $infouser,'comments' => $comments,'salary' => $salary, 'workdays' => $workdays]);
        // return $infouser;
    }
}
