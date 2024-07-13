<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{




    // Admin Controller
    public function index()
    {
        return view('admin.posts.comment');
    }

    public function all(Request $request)
    {
        $results = Comment::activeAll();

        return response()->json($results, 200);
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        $post = new Comment();
        $post->post_id = $id;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->comment = $request->comment;

        $post->save();

        return back()->with('success', 'Your comment has been successfully submitted for admin to review.');
    }

    public function update(Request $request,Comment $comment)
    {

        if ($comment) {
            $comment->is_active = $request->is_active;
            $comment->save();

            return response()->json("Done", 200);
        }
    }
}
