<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\NhanVien;
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
        return view('admin.dashboard.dashboard');
    }
}
