<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class viewComplaintConttroller extends Controller
{
    public function index(){
        //to get the complaints for the logged in user only
//        dd(Auth::user()->id);
        $complaints= Complaint::where('user_id','=', Auth::user()->id)->get();
        return view('client.complaintStatus', compact('complaints'));
    }
}
