<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Auth;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    // Admin Controller
    public function index()
    {
        if (Auth::user()->is_admin) {
            return view('admin.posts.category');
        } else {
            abort(404);
        }
    }

    public function all(Request $request)
    {
        $results = PostCategory::activeCategories(true);

        return response()->json($results, 200);
    }

    public function store(Request $request)
    {
        if (Auth::user()->is_admin) {
            $request->validate([
                'name_en' => 'required',
                'name_zh' => 'required',
            ]);

            $post = new PostCategory();
            $post->name_en = $request->name_en;
            $post->name_zh = $request->name_zh;

            $post->save();

            return response()->json($post, 200);
        }
    }

    public function update(Request $request)
    {
        if (Auth::user()->is_admin) {
            $request->validate([
                'name_en' => 'required',
                'name_zh' => 'required',
            ]);

            $post = PostCategory::find($request->id);
            $post->name_en = $request->name_en;
            $post->name_zh = $request->name_zh;
            $post->save();

            return response()->json('Done', 200);
        }
    }
    public function destroy($postcategory)
    {
        if (Auth::user()->is_admin) {
            PostCategory::whereId($postcategory)->update(['is_active' => false]);
            return response()->json('Done', 200);
        }
    }
}
