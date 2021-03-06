<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workday;

class WorkdayController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:roles.view', ['only' => ['index','store']]);
        $this->middleware('permission:roles.create', ['only' => ['create','store']]);
        $this->middleware('permission:roles.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:roles.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listWorkdays =  Workday::all();   
        return view('admin.workdays.index', ['listWorkdays' => $listWorkdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workdays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workdays = new Workday;
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
        $findWorkdays = Workday::find($id);
        return view('admin.workdays.edit',['findWorkdays' => $findWorkdays]);
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
        $findUpdate = Workday::find($id);
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
        $findDelete = Workday::find($id)->delete();
        return redirect(route('workdays.index'));
    }
}
