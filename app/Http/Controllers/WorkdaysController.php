<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workdays;
use Illuminate\Support\Facades\DB;

class WorkdaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listWorkdays =  Workdays::all();   
        return view('admin.workdays.showWorkdays', ['listWorkdays' => $listWorkdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workdays.createWorkdays');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workdays = new Workdays;
        $workdays->username = $request->username;
        $workdays->month = $request->month;
        $workdays->workdays = $request->workdays;
        $workdays->daysoff = $request->daysoff;
        $workdays->user_id = $request->user_id;
        $workdays->save();
        return redirect(route('workdays.index'));
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
        $findWorkdays = Workdays::find($id);
        return view('admin.workdays.editWorkdays',['findWorkdays' => $findWorkdays]);
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
        $findUpdate = Workdays::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->month = $request->month;
        $findUpdate->workdays = $request->workdays;
        $findUpdate->daysoff = $request->daysoff;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->save();
        return redirect(route('workdays.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = Workdays::find($id)->delete();
        return redirect(route('workdays.index'));
    }
}
