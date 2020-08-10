<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\InfoUser;
use App\User;
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
  
        return view('customer.showCustomer', ['infouser' => $infouser]);
        // return $infouser;
    }

}
