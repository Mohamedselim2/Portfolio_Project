<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function add(Request $req)
    {
        $req->validate([
            'period' => 'required',
            'organization' => 'required',
        ]);

        $project= new Education;
        $project->period=$req->period;
        $project->organization=$req->organization;
        $project->save();
        return back();
    }

    public function delete($id)
    {
        Education::from('education')->where('id',$id)->delete();
        return back();
    }

    public function delete_all()
    {
        Education::from('education')->delete();
        return back();
    }
}
