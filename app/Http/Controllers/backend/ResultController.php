<?php

namespace App\Http\Controllers\backend;

use App\Models\classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function AddResult(){
        $classes = classes::all();

        return view('backend.result.add_result_view',compact('classes'));
    } 

}//End method
