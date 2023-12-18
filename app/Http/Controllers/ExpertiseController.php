<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function add(Request $req)
    {
        $req->validate([
            'period' => 'required',
            'major' => 'required',
            'company' => 'required'
        ]);

        $expertise= new Expertise;
        $expertise->period=$req->period;
        $expertise->title=$req->major;
        $expertise->company=$req->company;
        $expertise->save();
        return back();
    }

    public function delete($id)
    {
        Expertise::from('expertises')->where('id',$id)->delete();
        return back();
    }

    public function delete_all()
    {
        Expertise::from('expertises')->delete();
        return back();
    }
}
