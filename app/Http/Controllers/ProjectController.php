<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($id)
    {
        $user= User::find(1);
        $project=Project::find($id);
        return view('/project',['user'=>$user,'project'=>$project]);
    }

    public function add(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'major' => 'required',
            'link' => 'required',
            'bio' => 'required',
            'photo' => 'required'
        ]);

        $project= new Project;
        $project->name=$req->name;
        $project->major=$req->major;
        $project->link=$req->link;
        $project->bio=$req->bio;
        $project->photo_path=$req->photo;
        $project->save();
        return back();
    }

    public function delete($id)
    {
        Project::from('projects')->where('id',$id)->delete();
        return back();
    }

    public function delete_all()
    {
        Project::from('projects')->delete();
        return back();
    }
}
