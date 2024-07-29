<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class ServiceController extends Controller
{
    public function index()
    {

        $blog = Post::activePosts(false, 5);
        return view('welcome', [
            'SEOData' => new SEOData(
                title: 'We Are Restoration Company - All Restoration Services',
                description: 'Emergency Services and Restoration. 24/7 Water Damage Restoration, Fire Damage Repair, Mold  and more. CALL 604-444-9991. Our Vancouver branch can help you',
                schema: SchemaCollection::make()->add(
                    fn(SEOData $SEOData) => [
                        // You could use the `$SEOData` to dynamically
                        // fetch any data about the current page.
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            '@type' => 'Question',
                            'name' => 'What number should I call for restoration services?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Call 1-888-551-0514 for immediate restoration services, including water damage, fire damage, and mold remediation. Our Vancouver branch is ready to assist you 24/7.',
                            ],
                        ],
                    ],
                ),
            ),
            'blog' => $blog
        ]);
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function team()
    {
        return view('team');
    }
    public function career()
    {
        return view('career');
    }

    // services
    public function waterdamage()
    {
        return view('services.waterdamage', [
            'SEOData' => new SEOData(
                title: 'Water Damage Restoration Services',
                description: '24/7 Water Damage Restoration Services: Emergency response for water damage, flooded basements, and more. Call 1-888-551-0514 for immediate assistance in Vancouver',
                schema: SchemaCollection::make()->add(
                    fn(SEOData $SEOData) => [
                        // You could use the `$SEOData` to dynamically
                        // fetch any data about the current page.
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            '@type' => 'How quickly should water damage be addressed?',
                            'name' => 'Your question goes here',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Water damage should be addressed as soon as possible to prevent further damage and mold growth. Quick action helps to minimize the extent of the damage and reduce restoration costs.',
                            ],
                        ],
                    ],
                ),
            ),
        ]);
    }
    public function commercialServices()
    {
        return view('services.commercialServices');
    }
    public function residentialServices()
    {
        return view('services.residentialServices');
    }
    public function construction()
    {
        return view('services.construction');
    }
    public function fireDamage()
    {
        return view('services.fireDamage', [
            'SEOData' => new SEOData(
                title: 'Fire Damage Restoration Services ',
                description: '24/7 Fire Damage Restoration Services Expert clean-up, repair, and restoration. Call 1-888-551-0514 for emergency assistance in Vancouver.',
                schema: SchemaCollection::make()->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            '@type' => 'What number should I call for fire damage restoration services?',
                            'name' => 'Your question goes here',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Call 1-888-551-0514 for emergency fire damage restoration services. Our Vancouver team provides expert clean-up, repair, and restoration to help you recover quickly. We are available 24/7 to assist with all your fire damage restoration needs.',
                            ],
                        ],
                    ],
                ),
            ),
        ]);
    }
    public function generalCleaning()
    {
        return view('services.generalCleaning');
    }
    public function moldRemediation()
    {
        return view('services.moldRemediation');
    }
    public function specialtyCleaning()
    {
        return view('services.specialtyCleaning');
    }
    public function stormDisaster()
    {
        return view('services.stormDisaster');
    }
    public function roofTarpBoard()
    {
        return view('services.roofTarpBoard');
    }
    public function industriesServiced()
    {
        return view('services.industriesServiced');
    }
    public function sitemap()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/en')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en//blog')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/about')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/contact-us')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/our-team')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/career')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/water-damage')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/commercial-services')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/residential-services')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/construction')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/fire-damage')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/general-cleaning')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/mold-remediation')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/en/specialty-cleaning')->setLastModificationDate(Carbon::yesterday()))

            ->add(Url::create('/zh')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh//blog')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/about')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/contact-us')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/our-team')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/career')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/water-damage')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/commercial-services')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/residential-services')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/construction')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/fire-damage')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/general-cleaning')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/mold-remediation')->setLastModificationDate(Carbon::yesterday()))
            ->add(Url::create('/zh/specialty-cleaning')->setLastModificationDate(Carbon::yesterday()));


        Post::all()->each(function(Post $post) use ($sitemap){
            $sitemap->add(Url::create('/en/blog/'.$post->id.'/'.$post->slug)->setLastModificationDate($post->updated_at));
        });
        $sitemap->writeToFile(public_path('sitemap.xml'));

    }
}
