<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function list()
    {
        $user = User::get();
        
        return response()->json($user);
    }
    public function create(Request $request)
    {
        $user = new User();

        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = $request->password;

        $user->save();
        return response()->json('create success');

    }

    public function update(Request $request)
    {
        $user = new User();

        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = $request->password;

        $user->update();
        return response()->json('update success');

    }

     public function destroy(Request $request)
    {
        $user = User::findorfail($request->id)->delete();

        return response()->json("delete success");

    }
}

