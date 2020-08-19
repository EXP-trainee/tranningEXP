<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\InfoUser;
use App\User;
use App\Comment;
use App\Salary;
use App\Workdays;
use App\Bominus;
use App\Workday;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

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
 
        $infouser = User::find(auth()->id())->infouser;
        $salary = User::find(auth()->id())->salary;
        $bominus = User::find(auth()->id())->bominus;
        $workdays = User::find(auth()->id())->workdays;
        return view('customer.showCustomer', ['infouser' => $infouser,'bominus' => $bominus,'salary' => $salary, 'workdays' => $workdays]);
        // return $infouser;
    }

    public function show_user(){
        $users = User::with(["infouser","salary","workdays","bominus","personnel"])->get();

        $workday_user = Workday::where('month', 'like', '%9%')->get();
        //dd($workday_user);
        return view('admin.user.index', compact("users","workday_user"));
    }
}
