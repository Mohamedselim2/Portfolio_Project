<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function add(Request $req)
    {
        $req->validate([
            'skill'=>'required',
            'rate'=>'required|numeric|max:100|min:0'
        ]);

        $skill=new Skill;
        $skill->skill = $req->skill;
        $skill->rate = $req->rate;
        $skill->save();
        return back();
    }
    public function delete_skill($id)
    {
        Skill::from('skills')->where('id',$id)->delete();
        return back();
    }

    public function delete_skills()
    {
        Skill::from('skills')->delete();
        return back();
    }

}
