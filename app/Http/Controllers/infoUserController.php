<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoUser;
use Illuminate\Support\Facades\DB;

class infoUserController extends Controller
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
        $listUser = InfoUser::all();  
        $listUser = InfoUser::paginate(10);
        return view('admin.infouser.index', ['listUser' => $listUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infouser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $infouser = new InfoUser;
        // $infouser->username = $request->username;
        // $infouser->email = $request->email;
        // $infouser->numberphone = $request->numberphone;
        // $infouser->cmnd = $request->cmnd;
        // $infouser->dateofbirth = $request->dateofbirth;
        // $infouser->sex = $request->sex;
        // $infouser->address = $request->address;
        // $infouser->user_id = $request->user_id;
        // $infouser->save();
        
        $this->validate($request, InfoUser::rules());
        // dd(User::create($request->all()))
        InfoUser::create($request->all());
        return redirect(route('infouser.index'));
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
        $findInfoUser = InfoUser::find($id);

        $findInfoUser = InfoUser::findOrFail($id);
        return view('admin.infouser.edit', compact('findInfoUser'));
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
        $this->validate($request, InfoUser::rules(true, $id));

        $findInfoUser = InfoUser::findOrFail($id);

        $findInfoUser->update($request->all());

        return redirect()->route('infouser.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findDelete = InfoUser::find($id)->delete();
        return redirect(route('infouser.index'));
    }
}
