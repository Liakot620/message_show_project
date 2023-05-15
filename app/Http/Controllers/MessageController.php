<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(){
        $messages= Message::all();
        return view('home',['messages'=>$messages]);
    }
    public function message(request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $message= new Message;
        $message->title=$request->title;
        $message->content=$request->content;

        $res=$message->save();
        if($res){
            return back()->with('success','you have message successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
}
