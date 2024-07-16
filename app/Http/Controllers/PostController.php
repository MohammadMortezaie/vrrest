<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function blog()
    {
        $blog = Post::activePosts(true);
        return view('blog',['blog' => $blog]);
    }
    public function post($lang, $id)
    {
        $blog = Post::whereId($id)
            ->with(['category', 'comments'])
            ->firstOrFail();

        $latest = Post::activePosts(true, 3);

        return view('blogDetail', ['blog' => $blog, 'latestPost' => $latest]);
    }

    // ----------------------------------------------------------------
    // Admin Controller
    // ----------------------------------------------------------------

    public function all(Request $request)
    {
        $results = Post::activePosts(true);
        return response()->json($results, 200);
    }
    public function index()
    {
        if (Auth::user()->is_admin) {
            return view('admin.posts.list');
        }
    }
    public function create()
    {
        if (Auth::user()->is_admin) {
            $postCat = PostCategory::activeCategories(false);
            return view('admin.posts.new', compact('postCat'));
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->is_admin) {
            $request->validate([
                'language' => 'required|integer',
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'keywords' => 'required|string|max:255',
                'post_category_id' => 'required|integer|exists:post_categories,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required|string',
                'status' => 'required|boolean',
            ]);

            // Handle the image upload if necessary
            $imgUrl = null;
            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads', 'public');
                $imgUrl = Storage::url($filePath);
            }

            $post = new Post();
            $post->user_id = Auth::user()->id;
            $post->language = $request->language;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->subtitle = $request->subtitle;
            $post->keywords = $request->keywords;
            $post->post_category_id = $request->post_category_id;
            $post->image = $imgUrl;
            $post->content = $request->content;
            $post->is_active = $request->status;
            $post->save();

            // Redirect or return a response
            return redirect()->route('post.index')->with('success', 'Post created successfully.');
        }
    }

    public function edit(Post $post)
    {
        if (Auth::user()->is_admin) {
            if ($post) {
                $postCat = PostCategory::activeCategories(false);
                return view('admin.posts.edit', ['post' => $post, 'postCat' => $postCat]);
            } else {
                abort(404);
            }
        }
    }

    public function update(Request $request, Post $post)
    {
        if (Auth::user()->is_admin) {
            $imgUrl = $post->image;
            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads', 'public');
                $imgUrl = Storage::url($filePath);
            }

            $post->language = $request->language;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->subtitle = $request->subtitle;
            $post->keywords = $request->keywords;
            $post->post_category_id = $request->post_category_id;
            $post->image = $imgUrl;
            $post->content = $request->content;
            $post->is_active = $request->status;
            $post->save();

            return redirect()->route('post.index')->with('success', 'Post created successfully.');
        }
    }
    public function destroy($post)
    {
        Post::whereId($post)->update(['is_active' => false]);

        return response()->json('Done', 200);
    }
}
