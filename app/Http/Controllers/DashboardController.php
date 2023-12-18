<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function git()
    {
        $user= User::find(1);
        $skills=Skill::all();
        $expertise=Expertise::all();
        $certification=Certification::all();
        $project=Project::all();
        $msg=Message::all();
        $education=Education::all();
        return view('/dashboard',['skills'=>$skills,'expertise'=>$expertise,'certifications'=>$certification,
            'projects'=>$project,'msgs'=>$msg,'education'=>$education,'user'=>$user]);
    }
}
