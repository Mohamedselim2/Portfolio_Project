<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function add(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'company' => 'required',
            'link' => 'required'
        ]);

        $certification= new Certification;
        $certification->course=$req->title;
        $certification->company=$req->company;
        $certification->link=$req->link;
        $certification->save();
        return back();
    }

    public function delete($id)
    {
        Certification::from('certifications')->where('id',$id)->delete();
        return back();
    }

    public function delete_all()
    {
        Certification::from('certifications')->delete();
        return back();
    }
}
