<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class UserController extends Controller
{
    public function login_page(Request $req)
    {
        return view('login');
    }

    public function login(Request $req): string|Request
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return ('<script>window.onload = function() {alert("Wrong Data!");};</script>');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/dashboard');
        }
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Session::flush();
        return redirect('/');
    }

    public function sit_data(Request $req): string
    {
        $req->validate([
            'name'=>'required|string|max:30',
            'phone'=>'required|max:11|min:11',
            'gmail'=>'required|max:100',
            'facebook'=>'required|url',
            'linkedin'=>'required|url',
            'github'=>'required|url',
            'link'=>'required|url',
            'resume'=>'required|max:10240',
            'photo'=>'required|max:10240',
            'bio'=>'required|string',
        ]);
        $user = User::findorFail(session()->get('user')['id']);
        $user->name = $req->name;
        $user->gmail = $req->gmail;
        $user->phone= $req->phone;
        $user->facebook= $req->facebook;
        $user->linkedin= $req->linkedin;
        $user->github= $req->github;
        $user->link= $req->link;
        $user->resume_path= $req->resume;
        $user->photo_path= $req->photo;
        $user->bio= $req->bio;
        $user->save();
        return back();
    }

    public function change_password(Request $req)
    {
        $validated = $req->validate
        ([
            'password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'new_password_confirmation' => 'required|string|min:8',
        ]);
        $user =User::findorFail(session()->get('user')['id']);
        if(Hash::check($req->password,session()->get('user')['password']) && ($req->new_password == $req->new_password_confirmation) && !(Hash::make($req->new_password) == $user->password))
        {
            $user->password = Hash::make($req->new_password);
            $user->save();
            return back();
//          return $req;
        }
        else
        {
            return ('<script>window.onload = function() {alert("Wrong Password!");};</script>');
        }
    }

    public function linkedin_link()
    {

        $user= User::where('id', 1)->value('linkedin');
        return ($user);
    }
    public function link()
    {
        $user= User::where('id', 1)->value('link');
        return ($user);
    }
    public function facebook_link()
    {
        $user= User::where('id', 1)->value('facebook');
        return ($user);
    }
    public function github_link()
    {
        $user= User::where('id', 1)->value('github');
        return ($user);
    }
    public function gmail_link()
    {
        $user= User::where('id', 1)->value('gmail');
        return ($user);
    }
    public function color(Request $req)
    {
        $user = User::findorFail(session()->get('user')['id']);
        $user->color = $req->color;
        $user->save();
        return back();
    }

}
