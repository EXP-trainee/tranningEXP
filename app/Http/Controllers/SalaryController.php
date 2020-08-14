<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSalary =  Salary::all();   
        return view('admin.salary.index', ['listSalary' => $listSalary]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Salary;
        $salary->username = $request->username;
        $salary->salary = $request->salary;
        $salary->bonus = $request->bonus;
        $salary->monetary_fine = $request->monetary_fine;
        $salary->total = $request->total;
        $salary->user_id = $request->user_id;
        $salary->save();
        return redirect(route('salary.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findSalary = Salary::find($id);
        return view('admin.salary.edit',['findSalary' => $findSalary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findUpdate = Salary::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->salary = $request->csalary;
        $findUpdate->bonus = $request->bonus;
        $findUpdate->monetary_fine = $request->monetary_fine;
        $findUpdate->total = $request->total;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->save();
        return redirect(route('salary.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = Salary::find($id)->delete();
        return redirect(route('salary.index'));
    }
}
