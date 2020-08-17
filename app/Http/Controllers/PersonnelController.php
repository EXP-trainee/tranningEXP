<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use Illuminate\Support\Facades\DB;

class PersonnelController extends Controller
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
        $listPersonnel =  Personnel::all();   
        return view('admin.personnel.index', ['listPersonnel' => $listPersonnel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personnel = new Personnel;
        $personnel->username = $request->username;
        $personnel->departments = $request->departments;
        $personnel->position = $request->position;
        $personnel->user_id = $request->user_id;
        $personnel->save();
        return redirect(route('personnel.index'));
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
        $findPersonnel = Personnel::find($id);
        return view('admin.personnel.edit',['findPersonnel' => $findPersonnel]);
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
        $findUpdate = Personnel::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->departments = $request->departments;
        $findUpdate->position = $request->position;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->save();
        return redirect(route('personnel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = Personnel::find($id)->delete();
        return redirect(route('personnel.index'));
    }
}
