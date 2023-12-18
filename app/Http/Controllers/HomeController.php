<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function git()
    {
        $skills=Skill::all();
        $user= User::find(1);
        $expertise= Expertise::all();
        $certification=Certification::all();
        $project=Project::all();
        $education=Education::all();
        $color=Education::all();
        return view('/index',['skills'=>$skills,'user'=>$user,'exps'=>$expertise,'certifications'=>$certification,
            'projects'=>$project,'education'=>$education]);
    }
}
