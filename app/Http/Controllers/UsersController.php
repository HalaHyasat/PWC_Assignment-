<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
//        $users= User::all();
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.manageUsers', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User deleted!');
    }
}
