<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = md5( $request->name);
        $users->is_admin = $request->is_admin;
        $users->role_id = $request->role_id;
        $users->save();

        if ($users) {
            return redirect()->back()->with('تم انشاء مستخدم بنجاح');

        }
        return redirect()->back()->with('فشل انشاء مستخدم');
    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $users = User::find($user);
        if (!$users) {
            return back()->with('Error', 'User not Found');
        }
        $users->update($request->all());
        
        return back()->with('Success', 'User updates succssfuly');
    }


    function profile(){
        return view('dashboards.users.profile');
    }
    function settings(){
        return view('dashboards.users.settings');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy( $user)
    {
        $users = User::find($user);
        if (!$users) {
            return back()->with('Error', 'User not Found');
        }
        $users->delete();
        
        return back()->with('Success', 'User updates succssfuly');
    }
}
