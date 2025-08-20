<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //

    public function CreateClass()
    {
        return view('backend.class.create_class_view');
    } //End method

    public function StoreClass(Request $request)
    {
        $class = new classes();
        $class->class_name = $request->class_name;
        $class->section = $request->section;
        $class->save();

        $notification = array(
            'message' => 'Student Classes Created Successfully!',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
