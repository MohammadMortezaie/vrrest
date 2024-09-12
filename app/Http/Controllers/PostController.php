<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

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

        // Generate SEO Data
        $SEOData = new SEOData(
            title: $blog->title,
            description: $blog->subtitle, // Assuming there's an excerpt or summary field
            image: asset($blog->image), // Assuming image path is stored in the 'image' field
            url: url()->current(),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'BlogPosting',
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => url()->current()
                    ],
                    'headline' => $blog->title,
                    'image' => asset($blog->image),
                    'author' => [
                        '@type' => 'Person',
                        'name' => 'Rozbeh Rouzbehani', // Assuming there's an author relationship
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'VR Restoration',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => asset('/an droid-chrome-192x192.png'),
                        ],
                    ],
                    'datePublished' => $blog->created_at->toIso8601String(),
                    'dateModified' => $blog->updated_at->toIso8601String(),
                    'description' => $blog->subtitle,
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+16048003900',
                        'contactType' => 'Customer Service'
                    ]
                ]
            ),
            tags: explode(',', $blog->tags) // Assuming tags are stored as a comma-separated string
        );

        return view('blogDetail', [
            'blog' => $blog,
            'latestPost' => $latest,
            'SEOData' => $SEOData,
        ]);
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
