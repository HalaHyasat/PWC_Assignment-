<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        //storing the data refer to the created date and pagination in the blade
        $complaints = Complaint::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.manageComplaint', compact('complaints'));
    }

    public function pending()
    {
        $complaints = Complaint::where('status','=','pending')->paginate(10);
        return view('admin.manageComplaint', compact('complaints'));
    }

    public function edit($id)
    {
        $complaint = Complaint::find($id);
        return view('admin.editComplaint', compact('complaint'));
    }

    public function update(Request $request, $id)
    {
        $complaint = Complaint::find($id);
        $complaint->status = $request->get('status');
        $complaint->save();

        return redirect('admin/manageComplaint')->with('success', 'Complaint status updated!');
    }

    public function destroy($id)
    {
        $complaint = Complaint::find($id);
        $complaint->delete();
        return back()->with('success', 'Complaint deleted!');
    }

}
