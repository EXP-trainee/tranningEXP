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
    public function dashboard()
    {
        if(Gate::allows('is-admin')){
            return view('admin.dashboard.dashboard');
        }
        else{
            abort(430);
        }
    }

    public function customer()
    {
        return view('customer.index');
    }

    public function showcustomer()
    {
 
        $infouser = User::find(Auth()->id())->infouser;
        $salary = User::find(Auth()->id())->salary;
        $comments = User::find(Auth()->id())->comments;
        $workdays = User::find(Auth()->id())->workdays;
        return view('customer.showCustomer', ['infouser' => $infouser,'comments' => $comments,'salary' => $salary, 'workdays' => $workdays]);
        // return $infouser;
    }
}
