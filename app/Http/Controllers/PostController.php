<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\AlternateTag;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class PostController extends Controller
{
    public function blog(Request $request, string $lang)
    {
        $locale = app()->getLocale();
        $blog = Post::activePostsForLocale($locale);

        // Do not expose a thin translated hub that only repeats English posts.
        if ($locale === 'zh' && $blog->isEmpty()) {
            return redirect($this->blogUrl('en'), 301);
        }

        $page = max(1, $request->integer('page', 1));
        $canonicalUrl = $this->blogUrl($locale).($page > 1 ? '?page='.$page : '');
        $englishBlogExists = Post::query()->active()->forLocale('en')->exists();
        $chineseBlogExists = Post::query()->active()->forLocale('zh')->exists();
        $alternates = [new AlternateTag($locale, $canonicalUrl)];

        if ($page === 1 && $englishBlogExists && $chineseBlogExists) {
            $alternates = [
                new AlternateTag('en', $this->blogUrl('en')),
                new AlternateTag('zh', $this->blogUrl('zh')),
                new AlternateTag('x-default', $this->blogUrl('en')),
            ];
        } elseif ($locale === 'en') {
            $alternates[] = new AlternateTag('x-default', $canonicalUrl);
        }

        $title = $locale === 'zh'
            ? '房屋修复博客 | 水灾、火灾与霉菌处理指南'
            : 'Restoration Blog | Water, Fire & Mold Damage Advice';
        $description = $locale === 'zh'
            ? '阅读 VR Plus Restoration 的专业房屋修复指南，了解水灾修复、火灾清理、霉菌处理及大温地区紧急恢复服务。'
            : 'Expert property restoration advice for Vancouver homeowners, including water damage, fire cleanup, mold remediation and emergency recovery tips.';
        $image = $this->siteUrl().'/img/hero-bg3.jpeg';
        $localeCode = $locale === 'zh' ? 'zh-CN' : 'en-CA';
        $position = $blog->firstItem() ?? 1;
        $items = $blog->getCollection()->values()->map(function (Post $post, int $index) use ($locale, $position) {
            $url = $this->postUrl($post, $locale);

            return [
                '@type' => 'ListItem',
                'position' => $position + $index,
                'url' => $url,
                'name' => $post->title,
            ];
        })->all();

        $SEOData = new SEOData(
            title: $title,
            description: $description,
            image: $image,
            url: $canonicalUrl,
            tags: $locale === 'zh'
                ? ['房屋修复', '水灾修复', '火灾清理', '霉菌处理', '温哥华']
                : ['property restoration', 'water damage', 'fire cleanup', 'mold remediation', 'Vancouver'],
            schema: SchemaCollection::make()->add(fn (SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@graph' => [
                    [
                        '@type' => 'Organization',
                        '@id' => $this->siteUrl().'#organization',
                        'name' => 'VR Plus Restoration',
                        'url' => $this->siteUrl(),
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => $this->siteUrl().'/android-chrome-512x512.png',
                            'width' => 512,
                            'height' => 512,
                        ],
                    ],
                    [
                        '@type' => 'Blog',
                        '@id' => $this->blogUrl($locale).'#blog',
                        'url' => $this->blogUrl($locale),
                        'name' => $title,
                        'description' => $description,
                        'inLanguage' => $localeCode,
                        'publisher' => ['@id' => $this->siteUrl().'#organization'],
                    ],
                    [
                        '@type' => 'CollectionPage',
                        '@id' => $canonicalUrl.'#webpage',
                        'url' => $canonicalUrl,
                        'name' => $title,
                        'description' => $description,
                        'inLanguage' => $localeCode,
                        'isPartOf' => ['@id' => $this->blogUrl($locale).'#blog'],
                        'mainEntity' => [
                            '@type' => 'ItemList',
                            'numberOfItems' => $blog->total(),
                            'itemListElement' => $items,
                        ],
                    ],
                ],
            ]),
            type: 'website',
            locale: $locale === 'zh' ? 'zh_CN' : 'en_CA',
            canonical_url: $canonicalUrl,
            openGraphTitle: $title,
            alternates: $alternates,
        );

        return view('blog', [
            'blog' => $blog,
            'SEOData' => $SEOData,
            'pageTitle' => $title,
            'pageDescription' => $description,
        ]);
    }

    public function post(string $lang, int $blog, string $slug)
    {
        $blog = Post::query()
            ->active()
            ->whereKey($blog)
            ->with(['category', 'comments'])
            ->firstOrFail();

        $postLocale = $blog->locale();
        abort_unless($postLocale, 404);

        $canonicalUrl = $this->postUrl($blog, $postLocale);

        // Consolidate old wrong-language and non-canonical-slug URLs.
        if ($lang !== $postLocale || $slug !== $blog->slug) {
            return redirect($canonicalUrl, 301);
        }

        $latest = Post::activePostsForLocale($postLocale, false, 3);
        $description = trim(strip_tags($blog->subtitle));
        $image = $blog->image
            ? (str_starts_with($blog->image, 'http') ? $blog->image : $this->siteUrl().'/'.ltrim($blog->image, '/'))
            : $this->siteUrl().'/img/hero-bg3.jpeg';
        $keywords = collect(explode(',', (string) $blog->keywords))
            ->map(fn (string $keyword) => trim($keyword))
            ->filter()
            ->values()
            ->all();
        $category = $postLocale === 'zh'
            ? ($blog->category?->name_zh ?? '房屋修复')
            : ($blog->category?->name_en ?? 'Property Restoration');
        $localeCode = $postLocale === 'zh' ? 'zh-CN' : 'en-CA';
        $alternates = [new AlternateTag($postLocale, $canonicalUrl)];

        if ($postLocale === 'en') {
            $alternates[] = new AlternateTag('x-default', $canonicalUrl);
        }

        $SEOData = new SEOData(
            title: $blog->title,
            description: $description,
            author: 'Sasan Ghanbari',
            image: $image,
            url: $canonicalUrl,
            published_time: $blog->created_at,
            modified_time: $blog->updated_at,
            articleBody: trim(strip_tags($blog->content)),
            section: $category,
            tags: $keywords,
            schema: SchemaCollection::make()->add(
                fn (SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'BlogPosting',
                    '@id' => $canonicalUrl.'#article',
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => $canonicalUrl,
                    ],
                    'headline' => $blog->title,
                    'description' => $description,
                    'image' => [$image],
                    'inLanguage' => $localeCode,
                    'articleSection' => $category,
                    'keywords' => $keywords,
                    'author' => [
                        '@type' => 'Person',
                        'name' => 'Sasan Ghanbari',
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        '@id' => $this->siteUrl().'#organization',
                        'name' => 'VR Plus Restoration',
                        'url' => $this->siteUrl(),
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => $this->siteUrl().'/android-chrome-512x512.png',
                            'width' => 512,
                            'height' => 512,
                        ],
                    ],
                    'datePublished' => $blog->created_at->toIso8601String(),
                    'dateModified' => $blog->updated_at->toIso8601String(),
                    'isPartOf' => ['@id' => $this->blogUrl($postLocale).'#blog'],
                ]
            ),
            type: 'article',
            locale: $postLocale === 'zh' ? 'zh_CN' : 'en_CA',
            canonical_url: $canonicalUrl,
            openGraphTitle: $blog->title,
            alternates: $alternates,
        );

        return view('blogDetail', [
            'blog' => $blog,
            'latestPost' => $latest,
            'SEOData' => $SEOData,
        ]);
    }

    private function siteUrl(): string
    {
        return rtrim(config('seo.site_url'), '/');
    }

    private function blogUrl(string $locale): string
    {
        return $this->siteUrl().'/'.$locale.'/blog';
    }

    private function postUrl(Post $post, string $locale): string
    {
        return $this->blogUrl($locale).'/'.$post->id.'/'.$post->slug;
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
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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
