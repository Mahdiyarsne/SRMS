<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //

    public function CreateSubject()
    {
        return view('backend.subject.create_subject_view');
    }

    public function StoreSubject(Request $request)
    {
        Subject::create([
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code
        ]);

        $notification = array(
            'message' => 'Subject Created SuccessFully!',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function ManageSubjects()
    {
        $subjects = Subject::all();
        return view('backend.subject.manage_subject_view', compact('subjects'));
    }
}
