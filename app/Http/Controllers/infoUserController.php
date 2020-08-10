<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoUser;
use Illuminate\Support\Facades\DB;

class infoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser =  InfoUser::all();   
        return view('admin.user.showUser', ['listUser' => $listUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infouser = new InfoUser;
        $infouser->username = $request->username;
        $infouser->email = $request->email;
        $infouser->numberphone = $request->numberphone;
        $infouser->dateofbirth = $request->dateofbirth;
        $infouser->sex = $request->sex;
        $infouser->address = $request->address;
        $infouser->user_id = $request->user_id;
        $infouser->save();
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
        return view('admin.user.editUser',['findInfoUser' => $findInfoUser]);
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
        $findUpdate = InfoUser::find($id);
        $findUpdate->username = $request->username;
        $findUpdate->email = $request->email;
        $findUpdate->numberphone = $request->numberphone;
        $findUpdate->dateofbirth = $request->dateofbirth;
        $findUpdate->sex = $request->sex;
        $findUpdate->address = $request->address;
        $findUpdate->user_id = $request->user_id;
        $findUpdate->save();
        return redirect(route('infouser.index'));
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
