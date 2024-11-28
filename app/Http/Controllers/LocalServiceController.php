<?php

namespace App\Http\Controllers;

use App\Models\LocalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class LocalServiceController extends Controller
{
    public function localservices()
    {

        $blog = LocalService::activePosts(true);
        return view('localServices',['blog' => $blog]);
    }
    public function post($lang, $city,$slug)
    {
        $localServ = LocalService::where(['city' => $city, 'slug' => $slug])
            ->firstOrFail();

        $latest = LocalService::activePosts(true, 3);

        // Generate SEO Data
        $SEOData = new SEOData(
            title: $localServ->title,
            description: $localServ->subtitle, // Assuming there's an excerpt or summary field
            image: asset($localServ->image), // Assuming image path is stored in the 'image' field
            url: url()->current(),
            schema: SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR Plus Restoration',
                    'image' => asset('img/hero-bg3.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'email' => 'info@vrrestoration.ca',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => $localServ->street_address,
                        'addressLocality' =>  $localServ->address_locality,
                        'addressRegion' => $localServ->address_region,
                        'postalCode' => $localServ->postal_code,
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => $localServ->latitude,
                        'longitude' => $localServ->longitude,
                    ],
                    'url' => 'https://vrrestoration.ca',
                    'areaServed' => ['Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley', 'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ]
            ),

            tags: explode(',', $localServ->tags) // Assuming tags are stored as a comma-separated string
        );

        return view('localServicesDetail', [
            'blog' => $localServ,
            'latestPost' => $latest,
            'SEOData' => $SEOData,
        ]);
    }

    // ----------------------------------------------------------------
    // Admin Controller
    // ----------------------------------------------------------------

    public function all(Request $request)
    {
        $results = LocalService::activePosts(true);
        return response()->json($results, 200);
    }

    public function index()
    {
        if (Auth::user()->is_admin) {
            return view('admin.localservice.list');
        } else {
            abort(404);
        }
    }
    public function create()
    {
        if (Auth::user()->is_admin) {

            return view('admin.localservice.new');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->is_admin) {
            $request->validate([
                'title_en' => 'required|string|max:255',
                'title_zh' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'subtitle_en' => 'required|string|max:255',
                'subtitle_zh' => 'required|string|max:255',
                'desc_en' => 'required|string',
                'desc_zh' => 'required|string',
                'city' => 'required|string',
                'street_address' => 'required|string',
                'address_locality' => 'required|string',
                'address_region' => 'required|string',
                'postal_code' => 'required|string',
                'area_served' => 'required|string',
                'latitude' => 'required|string',
                'longitude' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            // Handle the image upload if necessary
            $imgUrl = null;
            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads', 'public');
                $imgUrl = Storage::url($filePath);
            }

            $post = new LocalService();
            $post->title_en = $request->title_en;
            $post->title_zh = $request->title_zh;
            $post->slug = $request->slug;
            $post->subtitle_en = $request->subtitle_en;
            $post->subtitle_zh = $request->subtitle_zh;
            $post->desc_en = $request->desc_en;
            $post->desc_zh = $request->desc_zh;
            $post->city = $request->city;
            $post->street_address = $request->street_address;
            $post->address_locality = $request->address_locality;
            $post->address_region = $request->address_region;
            $post->postal_code = $request->postal_code;
            $post->area_served = $request->area_served;
            $post->longitude = $request->longitude;
            $post->latitude = $request->latitude;
            $post->image = $imgUrl;
            $post->save();

            // Redirect or return a response
            return redirect()->route('localservice.index')->with('success', 'Post created successfully.');
        }
    }

    public function edit($id)
    {
        if (Auth::user()->is_admin) {
            $LocalService = LocalService::whereId($id)->firstOrFail();
            if ($LocalService) {
                return view('admin.localservice.edit', ['localService' => $LocalService]);
            } else {
                abort(404);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $LocalService = LocalService::whereId($id)->firstOrFail();

        if (Auth::user()->is_admin) {
            $imgUrl = $LocalService->image;
            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads', 'public');
                $imgUrl = Storage::url($filePath);
            }

            $LocalService->title_en = $request->title_en;
            $LocalService->title_zh = $request->title_zh;
            $LocalService->slug = $request->slug;
            $LocalService->subtitle_en = $request->subtitle_en;
            $LocalService->subtitle_zh = $request->subtitle_zh;
            $LocalService->desc_en = $request->desc_en;
            $LocalService->desc_zh = $request->desc_zh;
            $LocalService->city = $request->city;
            $LocalService->image = $imgUrl;
            $LocalService->is_active = $request->is_active;
            $LocalService->street_address = $request->street_address;
            $LocalService->address_locality = $request->address_locality;
            $LocalService->address_region = $request->address_region;
            $LocalService->postal_code = $request->postal_code;
            $LocalService->area_served = $request->area_served;
            $LocalService->longitude = $request->longitude;
            $LocalService->latitude = $request->latitude;
            $LocalService->save();

            return redirect()->route('localservice.index')->with('success', 'Post created successfully.');
        }
    }
    public function destroy($id)
    {
        LocalService::whereId($id)->update(['is_active' => false]);

        return response()->json('Done', 200);
    }
}
