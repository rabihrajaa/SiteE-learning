<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\CommentReply;

class CommentsController extends Controller
{
    public function addComment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'lesson_id' => 'required'
        ]);

        Comment::create([
            'idCours' => $request->lesson_id,
            'user_id' => Auth::user()->id,
            'comment' => $request->input('comment')
        ]);

        return redirect()->back()->with('success','bien');
    }

    public function addCommentReply(Request $request)
    {
     $commment = Comment::find($request->id);
  
        $commment->delete();

       

        return redirect()->back();
    }

public function index()
    {
      
        return view('web.section', ['comments' => Comment::all()]);
    }


}
