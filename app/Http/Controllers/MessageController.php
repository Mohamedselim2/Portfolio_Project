<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function add(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $message= new Message;
        $message->name=$req->name;
        $message->email=$req->email;
        $message->phone=$req->phone;
        $message->message=$req->message;
        $message->save();
        return back();
    }
    public function view($id)
    {
        $message=Message::find($id);
        return view('message',['msg'=>$message]);
    }
    public function delete($id)
    {
        Message::from('messages')->where('id',$id)->delete();
        return back();
    }
    public function delete_all()
    {
        Message::from('messages')->delete();
        return back();
    }
}
