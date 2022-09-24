<?php

namespace App\Http\UserControllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['User'] = User::orderBy('user_id','desc')->paginate(10);
        return view('User.Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'password' => 'required',
        ]);

        $User = new User;
        $User->name = $request->name;
        $User->password = $request->password;

        $User->save();
        return redirect()->route('User.index')
        ->with('success','User Baru Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        return view('User.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        return view('User.edit',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'password' => 'required',
        ]);

        $User = User::find($user_id);
        $User->name = $request->name;
        $User->password = $request->password;

        $User->save();
        return redirect()->route('User.index')
        ->with('success','User Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->delete();
        return redirect()->route('User.index')
        ->with('success','User Telah Dihapus');
    }
}