<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use App\Point;

class MessagesController extends Controller
{
    public function createPointMessage($id)
    {
        $point = Point::findOrFail($id);
        
        $message = new Message;
        
        //メッセージ作成ビューを表示
        return view('messages.create',[
            'message' => $message,
            'point' => $point,
        ]);
    }
    
    public function store(Request $request)
    {
         // バリデーション
        $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $request->user()->messages()->create([
            'content' => $request->content,
            'title'=> $request->title,
            'point_id'=> $request->point_id,
        ]);
        
        return redirect('/points/' . $request->point_id);
    }
    
    public function edit($id)
    {
        $point = Point::findOrFail($id);
        
        $message = new Message;
        
        return view('messages.edit' , [
            'message' => $message,
            'point' => $point,
        ]);
    }
    
    public function update(Request $request , $id)
    {
        $point = Point::findOrFail($id);
         // バリデーション
        $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $request->user()->messages()->create([
            'content' => $request->content,
            'title'=> $request->title,
            'point_id'=> $request->point_id,
        ]);
    }
    
    public function destroy($id)
    {
         $point = Point::findOrFail($id);
         
         if(\Auth::id() === $message->user_id){
             $message->delete();
         }
    }
    
}