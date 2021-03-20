<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('client.complaint');
    }

    public function store(Request $request)
    {
        request()->validate([
            'description' => 'required|min:10',
        ]);

        $var = new Complaint();
        $var->description = $request->input('description');
        $var->user_id = Auth::user()->id;
        $var->save();
        return redirect('/')->with('success', 'Complaint sent successfully.');
    }

}
