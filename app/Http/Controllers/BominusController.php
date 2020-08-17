<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bominus;

class BominusController extends Controller
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
        $listBominus =  Bominus::all();   
        return view('admin.bominus.index', ['listBominus' => $listBominus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bominus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bominus = new Bominus;
        $bominus->username = $request->username;
        $bominus->bonus = $request->bonus;
        $bominus->minus = $request->minus;
        $bominus->month = $request->month;
        $bominus->user_id = $request->user_id;
        $bominus->save();
        return redirect(route('bominus.index'));
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
        $findBominus = Bominus::find($id);
        return view('admin.bominus.edit',['findBominus' => $findBominus]);
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
        $findUpdate = Bominus::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->bonus = $request->bonus;
        $findUpdate->minus = $request->minus;
        $findUpdate->month = $request->month;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->save();
        return redirect(route('bominus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = Bominus::find($id)->delete();
        return redirect(route('bominus.index'));
    }
}
