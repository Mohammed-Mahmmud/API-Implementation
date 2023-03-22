<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          return response()->json(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
            $user = new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->password = Hash::make($request->password);
    $user->save();
    return 
    response()->json("user has been added ") ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new User;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = hash::make($request->password);
    $user->phone = $request->phone;
    $user->save();
    return response()->json('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return USER::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $user=User::findorfail($id);
    return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = USER::findorfail($id);
    $user->username=$request->username;
    $user->email=$request->email;
    $user->password= Hash::make($request->password);username
    $user->update();
    return response()->json("Usrer Has been updated ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findorfail($id);
    $user->delete();
    return response()->json('User Has Been Deleted');
    }
}
