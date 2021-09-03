<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EdituserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
/*
    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }
*/
    public function edit(int $id)
    {
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, int $id)
    {   
        $user = User::find($id)->update($request->all());


        return redirect('/');

    }
}