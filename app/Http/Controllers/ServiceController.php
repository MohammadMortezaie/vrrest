<?php

namespace App\Http\Controllers;

use App\Models\LocalService;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\AlternateTag;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class ServiceController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Water Damage, Mold Restoration Vancouver BC | VR Restoration',
            description: 'Emergency Services and Restoration. 24/7 Water Damage Restoration, Mold Remediation and more. CALL 604-800-3900. Our Vancouver branch is ready to assist you.',
            image: asset('img/water-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()
                ->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            [
                                '@type' => 'Question',
                                'name' => 'What number should I call for restoration services?',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => 'Call 604-800-3900 for immediate restoration services, including water damage, fire damage, and mold remediation. Our Vancouver branch is ready to assist you 24/7.',
                                ],
                            ],
                            [
                                '@type' => 'Question',
                                'name' => 'What types of restoration services do you offer?',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => 'We offer a range of restoration services including water damage restoration, fire damage repair, mold remediation, and storm disaster cleanup. Our experienced team is equipped to handle emergencies and restore your property to its original condition.',
                                ],
                            ],
                        ],
                    ]
                )
                ->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'LocalBusiness',
                        'name' => 'VR Restoration',
                        'image' => asset('img/hero-bg3.jpeg'),
                        'telephone' => '+1 604-800-3900',
                        'email' => 'info@vrrestoration.ca',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => '636 Clyde Ave Suite 7',
                            'addressLocality' => 'West Vancouver',
                            'addressRegion' => 'BC',
                            'postalCode' => 'V7T 1E1',
                            'addressCountry' => 'CA',
                        ],
                        'geo' => [
                            '@type' => 'GeoCoordinates',
                            'latitude' => 49.3252,
                            'longitude' => -123.1595,
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
            tags: ['restoration services', 'water damage', 'fire damage', 'mold remediation', 'Vancouver restoration'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh')],
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '我们是恢复公司 - 所有恢复服务',
            description: '紧急服务和恢复。24/7水损恢复、火灾修复、霉菌治理等。请拨打604-800-3900。我们的温哥华分部随时为您提供帮助。',
            image: asset('img/water-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()
                ->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            [
                                '@type' => 'Question',
                                'name' => '我应该拨打哪个号码以获得恢复服务？',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => '请拨打604-800-3900，以获取水损恢复、火灾修复和霉菌治理等紧急恢复服务。我们的温哥华分部随时准备为您提供帮助。',
                                ],
                            ],
                            [
                                '@type' => 'Question',
                                'name' => '你们提供哪些恢复服务？',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => '我们提供包括水损恢复、火灾修复、霉菌治理和风暴灾难清理在内的各种恢复服务。我们经验丰富的团队能够处理紧急情况并恢复您的财产到原始状态。',
                                ],
                            ],
                        ],
                    ]
                )
                ->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'LocalBusiness',
                        'name' => 'VR Restoration',
                        'image' => asset('img/hero-bg3.jpeg'),
                        'telephone' => '+1 604-800-3900',
                        'email' => 'info@vrrestoration.ca',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => '636 Clyde Ave Suite 7',
                            'addressLocality' => 'West Vancouver',
                            'addressRegion' => 'BC',
                            'postalCode' => 'V7T 1E1',
                            'addressCountry' => 'CA',
                        ],
                        'geo' => [
                            '@type' => 'GeoCoordinates',
                            'latitude' => 49.3252,
                            'longitude' => -123.1595,
                        ],
                        'url' => 'https://vrrestoration.ca/zh',
                        'areaServed' => ['温哥华', '本拿比', '高贵林', '奇利瓦克', '阿伯茨福德', '列治文', '素里', '兰里', '北温哥华', '西温哥华', '枫树岭', '米逊', '霍普', '弗雷泽河谷', '低陆平原', '卑诗省'],
                        'openingHoursSpecification' => [
                            [
                                '@type' => 'OpeningHoursSpecification',
                                'dayOfWeek' => ['星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期日'],
                                'opens' => '00:00',
                                'closes' => '23:59',
                            ],
                        ],
                    ]
                ),
            tags: ['恢复服务', '水损', '火灾损害', '霉菌治理', '温哥华恢复'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en')],
        );
        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        $blog = Post::activePosts(false, 5); // Fetch recent blog posts

        return view('welcome', [
            'SEOData' => $SEOData,
            'blog' => $blog,
        ]);
    }

    public function about()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'About VR Plus Restoration',
            description: 'At VR Plus Restoration, we provide 24/7 emergency property damage services and restoration. Our licensed and trained technicians handle all aspects of restoration.',
            image: asset('images/about-us-banner.jpg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR Plus Restoration',
                    'url' => url('/'),
                    'logo' => asset('android-chrome-192x192.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => 'Customer Service',
                        'telephone' => '+1-604-800-3900',
                        'areaServed' => 'CA',
                        'availableLanguage' => 'English',
                    ],
                    'sameAs' => ['https://www.facebook.com/VRPlusRestoration', 'https://twitter.com/VRPlusRestoration', 'https://www.linkedin.com/company/vrplusrestoration'],
                ],
            ),
            tags: ['property damage restoration', 'emergency services', 'flood restoration', 'fire damage repair', 'mold remediation', 'asbestos removal', 'Vancouver restoration'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/about')],
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '关于VR+恢复',
            description: '在VR+恢复，我们提供24/7紧急财产损害服务和恢复。我们的认证和训练有素的技术人员专注于水灾、火灾、风灾、霉菌和石棉恢复。我们在大温哥华地区提供及时和高效的服务。',
            image: asset('images/about-us-banner.jpg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR+恢复',
                    'url' => url('/'),
                    'logo' => asset('android-chrome-192x192.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => '客户服务',
                        'telephone' => '+1-604-800-3900',
                        'areaServed' => 'CA',
                        'availableLanguage' => '中文',
                    ],
                    'sameAs' => ['https://www.facebook.com/VRPlusRestoration', 'https://twitter.com/VRPlusRestoration', 'https://www.linkedin.com/company/vrplusrestoration'],
                ],
            ),
            tags: ['财产损害恢复', '紧急服务', '水灾恢复', '火灾修复', '霉菌治理', '石棉去除', '温哥华恢复'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/about')],
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('about', [
            'SEOData' => $SEOData,
        ]);
    }
    public function contact()
    {
        $locale = app()->getLocale();

        $seoDataEn = new SEOData(
            title: 'Contact VR Plus Restoration',
            description: 'Reach out to VR Plus Restoration for 24/7 emergency services. Call us now at +1-604-800-3900 for immediate assistance with water, fire, mold, and asbestos restoration.',
            image: asset('img/contactus.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR Plus Restoration',
                    'url' => url('/contact'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => 'Customer Service',
                        'telephone' => '+1-604-800-3900',
                        'areaServed' => 'CA',
                        'availableLanguage' => 'English',
                    ],
                ],
            ),
            tags: ['contact VR Plus Restoration', 'emergency services contact', 'restoration services contact'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/contact')],
        );

        $seoDataZh = new SEOData(
            title: '联系VR+恢复',
            description: '联系VR+恢复，获得24/7紧急服务。立即致电+1-604-800-3900，获取水灾、火灾、霉菌和石棉恢复的紧急帮助。',
            image: asset('img/contactus.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR+恢复',
                    'url' => url('/contact'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => '客户服务',
                        'telephone' => '+1-604-800-3900',
                        'areaServed' => 'CA',
                        'availableLanguage' => '中文',
                    ],
                ],
            ),
            tags: ['联系VR+恢复', '紧急服务联系', '恢复服务联系'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/contact')],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('contact', compact('SEOData'));
    }
    public function team()
    {
        $locale = app()->getLocale();

        $seoDataEn = new SEOData(
            title: 'Meet the VR Plus Restoration Team',
            description: 'Our expert team at VR Plus Restoration is dedicated to providing top-notch restoration services. Meet our specialists who are ready to help you 24/7.',
            image: asset('img/team.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR Plus Restoration',
                    'url' => url('/team'),
                    'logo' => asset('android-chrome-192x192.png'),
                ],
            ),
            tags: ['VR Plus Restoration team', 'restoration specialists', 'emergency restoration team'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/team')],
        );

        $seoDataZh = new SEOData(
            title: '认识VR+恢复团队',
            description: 'VR+恢复的专家团队致力于提供一流的恢复服务。认识我们的专家，他们随时准备帮助您解决水灾、火灾、霉菌和石棉问题。',
            image: asset('img/team.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR+恢复',
                    'url' => url('/team'),
                    'logo' => asset('android-chrome-192x192.png'),
                ],
            ),
            tags: ['VR+恢复团队', '恢复专家', '紧急恢复团队'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/team')],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('team', [
            'SEOData' => $SEOData,
        ]);
    }
    public function career()
    {
        $locale = app()->getLocale();

        $seoDataEn = new SEOData(
            title: 'Careers at VR Plus Restoration',
            description: 'Join the VR Plus Restoration team! We are always looking for skilled professionals to help us deliver exceptional restoration services.',
            image: asset('img/career.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR Plus Restoration',
                    'url' => url('/career'),
                    'logo' => asset('android-chrome-192x192.png'),
                ],
            ),
            tags: ['VR Plus Restoration careers', 'restoration jobs', 'employment opportunities'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/career')],
        );

        $seoDataZh = new SEOData(
            title: '加入VR+恢复',
            description: '加入VR+恢复团队！我们始终在寻找有才能的专业人员，帮助我们提供卓越的恢复服务。探索我们的职业机会并立即申请。',
            image: asset('img/career.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR+恢复',
                    'url' => url('/career'),
                    'logo' => asset('android-chrome-192x192.png'),
                ],
            ),
            tags: ['VR+恢复职业', '恢复工作', '就业机会'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/career')],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('career', [
            'SEOData' => $SEOData,
        ]);
    }

    // services
    public function waterdamage()
    {
        $locale = app()->getLocale();

        $pageEnUrl = 'https://vrrestoration.ca/en/water-damage';
        $pageZhUrl = 'https://vrrestoration.ca/zh/water-damage';
        $googleReviewUrl = 'https://share.google/6qvSbfJtu8MKHNalD';
        $aggregateRating = [
            '@type' => 'AggregateRating',
            'ratingValue' => '5.0',
            'reviewCount' => '33',
            'bestRating' => '5',
            'worstRating' => '1',
        ];
        $areaServedEn = [
            'Vancouver',
            'Burnaby',
            'Coquitlam',
            'Chilliwack',
            'Abbotsford',
            'Richmond',
            'Surrey',
            'Langley',
            'North Vancouver',
            'West Vancouver',
            'Maple Ridge',
            'Mission',
            'Hope',
            'Fraser Valley',
            'Lower Mainland',
            'BC',
        ];
        $areaServedZh = ['温哥华', '本拿比', '高贵林', '奇利瓦克', '阿伯茨福德', '列治文', '素里', '兰里', '北温哥华', '西温哥华', '枫树岭', '米逊', '霍普', '菲沙河谷', '大温地区', '卑诗省'];

        $waterSchemaEn = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => 'Water Damage Restoration in Vancouver',
                    'serviceType' => 'Water damage restoration services',
                    'description' => '24/7 emergency water damage restoration in Vancouver with extraction, structural drying, cleanup, and repair coordination.',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageEnUrl,
                        'sameAs' => [$googleReviewUrl],
                    ],
                    'areaServed' => $areaServedEn,
                    'offers' => [
                        '@type' => 'Offer',
                        'availability' => 'https://schema.org/InStock',
                        'priceCurrency' => 'CAD',
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What Is Water Damage Restoration, and Why Is It Urgent?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Water damage restoration is the process of cleaning, drying, and repairing your property after it has been affected by water damage. This can include water removal, damage assessment, and repairs to restore your property to its pre-damage condition.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How Quickly Should Water Damage Be Addressed in Vancouver?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Water damage should be addressed as soon as possible to prevent further damage and mold growth. Quick action helps to minimize the extent of the damage and reduce restoration costs.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'What types of equipment are used in water damage restoration?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Our water damage restoration experts use advanced equipment such as infrared cameras, moisture meters, powerful pumps, extraction units, and industrial-grade dehumidifiers to effectively dry and restore your property.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Can water-damaged materials be restored, or do they need to be replaced?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Many water-damaged materials can be restored if addressed quickly and properly. Our specialists will assess the damage and determine whether materials can be salvaged or need to be removed and replaced.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Does VR PLUS assist with insurance claims for water damage restoration?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Yes, VR PLUS helps manage the necessary paperwork and assists with the insurance claims process. We work closely with your insurance company to ensure a smooth and hassle-free claims experience.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'What certifications do your water damage restoration specialists have?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Our specialists are highly trained and hold IICRC certification in water restoration. This certification ensures they have the expertise and knowledge to effectively handle water damage restoration.',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageEnUrl,
                    'image' => asset('img/water-damage.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'sameAs' => [$googleReviewUrl],
                    'aggregateRating' => $aggregateRating,
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
                    'areaServed' => $areaServedEn,
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => [
                                'https://schema.org/Monday',
                                'https://schema.org/Tuesday',
                                'https://schema.org/Wednesday',
                                'https://schema.org/Thursday',
                                'https://schema.org/Friday',
                                'https://schema.org/Saturday',
                                'https://schema.org/Sunday',
                            ],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $waterSchemaZh = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => '温哥华水损修复服务',
                    'serviceType' => '水损修复服务',
                    'description' => '温哥华 24/7 水损紧急修复服务，涵盖抽水、结构干燥、清理与修复协调。',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageZhUrl,
                        'sameAs' => [$googleReviewUrl],
                    ],
                    'areaServed' => $areaServedZh,
                    'offers' => [
                        '@type' => 'Offer',
                        'availability' => 'https://schema.org/InStock',
                        'priceCurrency' => 'CAD',
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '什么是水损害修复？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '水损害修复是指在您的财产受到水损害后进行清洁、干燥和修复的过程。这可能包括水去除、损害评估和修复，以恢复您的财产到其损害前的状态。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '水损害应该多快处理？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '水损害应尽快处理，以防止进一步损害和霉菌生长。迅速行动有助于将损害程度降到最低，并减少修复成本。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '在水损害修复中使用了哪些设备？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们的水损害修复专家使用先进的设备，如红外摄像机、湿度计、强力泵、抽水设备和工业级除湿机，有效地干燥和修复您的财产。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '水损害的材料能修复还是需要更换？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '如果及时正确处理，许多受水损害的材料可以修复。我们的专家将评估损害情况，确定材料是否可以挽救或需要移除和更换。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'VR +是否协助处理水损害修复的保险索赔？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '是的，VR +会帮助处理必要的文件，并协助处理保险索赔过程。我们与您的保险公司紧密合作，确保顺利和无忧的索赔体验。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '您的水损害修复专家有哪些认证？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们的专家受过高度培训，拥有IICRC水修复认证。这一认证确保他们具备有效处理水损害修复的专业知识和技能。',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageZhUrl,
                    'image' => asset('img/water-damage.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'sameAs' => [$googleReviewUrl],
                    'aggregateRating' => $aggregateRating,
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
                    'areaServed' => $areaServedZh,
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => [
                                'https://schema.org/Monday',
                                'https://schema.org/Tuesday',
                                'https://schema.org/Wednesday',
                                'https://schema.org/Thursday',
                                'https://schema.org/Friday',
                                'https://schema.org/Saturday',
                                'https://schema.org/Sunday',
                            ],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $seoDataEn = new SEOData(
            title: 'Water Damage Restoration in Vancouver 24/7 Call Now',
            description: '24/7 Water Damage Restoration Services Emergency response for water damage, flooded basements, and more. Call 604-800-3900 for immediate assistance in Vancouver',
            image: asset('img/water-damage.jpeg'),
            schema: $waterSchemaEn,
            tags: ['water damage restoration', 'emergency water extraction', 'flooded basement repair', 'Vancouver water damage services'],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $seoDataZh = new SEOData(
            title: '水损恢复服务',
            description: '24/7水损恢复服务 - 水灾修复：紧急响应水损、地下室积水等问题。请拨打604-800-3900以获取在温哥华的即时帮助。',
            image: asset('img/water-damage.jpeg'),
            schema: $waterSchemaZh,
            tags: ['水损恢复', '紧急水提取', '地下室修复', '温哥华水损服务'],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        $blog = Post::activePosts(false, 5);
        return view('services.waterdamage', [
            'SEOData' => $SEOData,
            'blog' => $blog,
        ]);
    }
    public function commercialServices()
    {
        $locale = app()->getLocale();

        $pageEnUrl = 'https://vrrestoration.ca/en/commercial-services';
        $pageZhUrl = 'https://vrrestoration.ca/zh/commercial-services';
        $googleReviewUrl = 'https://share.google/6qvSbfJtu8MKHNalD';
        $aggregateRating = [
            '@type' => 'AggregateRating',
            'ratingValue' => '5.0',
            'reviewCount' => '33',
            'bestRating' => '5',
            'worstRating' => '1',
        ];

        $commercialSchemaEn = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => 'Commercial Restoration Services in Vancouver',
                    'serviceType' => 'Commercial restoration services',
                    'description' => '24/7 emergency commercial restoration in Vancouver including water damage, fire damage, mold remediation, specialty cleaning, and reconstruction support.',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageEnUrl,
                        'sameAs' => [$googleReviewUrl],
                    ],
                    'areaServed' => ['Vancouver', 'Burnaby', 'Richmond', 'Surrey', 'Coquitlam', 'North Vancouver', 'West Vancouver', 'New Westminster'],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What types of commercial properties do you restore?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We restore offices, retail stores, restaurants, warehouses, strata properties, healthcare clinics, and mixed-use buildings.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How fast can your team respond to a commercial emergency?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Our emergency crews are available 24/7 with priority dispatch across Metro Vancouver to start stabilization as quickly as possible.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Can you work after hours to reduce business interruption?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Yes. We can schedule evening, overnight, and phased work plans to minimize operational downtime whenever feasible.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Do you help with insurance documentation and adjuster communication?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Yes. We provide organized photos, scope notes, moisture logs, and project updates to support smoother claim handling.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Which commercial restoration services can be combined in one project?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Projects often combine mitigation, specialty cleaning, mold control, repairs, and reconstruction under one coordinated plan.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How do you reduce downtime during commercial restoration?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We use rapid mobilization, clear phase planning, and direct stakeholder coordination so critical areas reopen sooner.',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageEnUrl,
                    'image' => asset('img/commercial.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'sameAs' => [$googleReviewUrl],
                    'aggregateRating' => $aggregateRating,
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => [
                                'https://schema.org/Monday',
                                'https://schema.org/Tuesday',
                                'https://schema.org/Wednesday',
                                'https://schema.org/Thursday',
                                'https://schema.org/Friday',
                                'https://schema.org/Saturday',
                                'https://schema.org/Sunday',
                            ],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $commercialSchemaZh = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => '温哥华商业修复服务',
                    'serviceType' => '商业修复服务',
                    'description' => '提供温哥华 24/7 商业紧急修复服务，涵盖水损、火损、霉菌治理、专业清洁与重建支持。',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageZhUrl,
                        'sameAs' => [$googleReviewUrl],
                    ],
                    'areaServed' => ['温哥华', '本拿比', '列治文', '素里', '高贵林', '北温哥华', '西温哥华', '新西敏'],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '你们可修复哪些类型的商业物业？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们服务办公楼、零售门店、餐饮空间、仓储设施、分层物业、医疗诊所和混合用途建筑。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '商业紧急事件多久可以到场？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们 24/7 待命，在大温地区优先派工，尽快启动现场稳定与止损。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '可以安排夜间施工以减少停业吗？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '可以。我们可根据现场条件安排夜间、分区或分阶段施工，尽量降低运营影响。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们会协助保险资料与理算沟通吗？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '会。我们提供完整照片、工程记录、含水率数据和阶段更新，支持理赔流程更顺畅。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '一个项目里可以组合哪些商业修复服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '通常可组合止损、专业清洁、霉菌控制、修复和重建，由同一团队统一管理。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们如何在修复过程中降低停工时间？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们通过快速派工、清晰分阶段计划和多方协同，让关键区域更早恢复使用。',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageZhUrl,
                    'image' => asset('img/commercial.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'sameAs' => [$googleReviewUrl],
                    'aggregateRating' => $aggregateRating,
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => [
                                'https://schema.org/Monday',
                                'https://schema.org/Tuesday',
                                'https://schema.org/Wednesday',
                                'https://schema.org/Thursday',
                                'https://schema.org/Friday',
                                'https://schema.org/Saturday',
                                'https://schema.org/Sunday',
                            ],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $seoDataEn = new SEOData(
            title: 'Commercial Restoration Services Vancouver | 24/7 Emergency Response',
            description: 'Commercial restoration services in Vancouver for water, fire, and mold damage. 24/7 emergency response, business continuity planning, and insurance-ready documentation.',
            image: asset('img/commercial.jpeg'),
            schema: $commercialSchemaEn,
            tags: [
                'commercial restoration Vancouver',
                'commercial water damage restoration',
                'commercial mold remediation',
                'commercial fire damage cleanup',
                '24/7 emergency restoration',
            ],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $seoDataZh = new SEOData(
            title: '温哥华商业修复服务 | 24/7 紧急响应',
            description: '提供温哥华商业修复服务，涵盖水损、火损与霉菌治理。24/7 紧急响应，配合业务连续性与保险理赔文档。',
            image: asset('img/commercial.jpeg'),
            schema: $commercialSchemaZh,
            tags: [
                '温哥华商业修复',
                '商业水损修复',
                '商业霉菌治理',
                '商业火灾清理',
                '24/7 紧急修复',
            ],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.commercialServices', compact('SEOData'));
    }
    public function residentialServices()
    {
        $locale = app()->getLocale();

        $pageEnUrl = 'https://vrrestoration.ca/en/residential-services';
        $pageZhUrl = 'https://vrrestoration.ca/zh/residential-services';

        $residentialSchemaEn = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => 'Residential Restoration Services in Vancouver',
                    'serviceType' => 'Residential restoration services',
                    'description' => '24/7 emergency residential restoration in Vancouver including water damage, fire damage, mold remediation, cleaning, and reconstruction.',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageEnUrl,
                    ],
                    'areaServed' => ['Vancouver', 'Burnaby', 'Richmond', 'Surrey', 'Coquitlam', 'North Vancouver', 'West Vancouver', 'New Westminster'],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What residential restoration services do you provide?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We provide water damage restoration, fire and smoke cleanup, mold remediation, specialty cleaning, and reconstruction for homes and multi-unit properties.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How quickly can you respond to a home emergency?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Our teams are available 24/7 with priority dispatch across Metro Vancouver to begin emergency stabilization as fast as possible.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Can you help with insurance paperwork and adjuster communication?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Yes. We support homeowners with documentation, damage records, and clear updates to help streamline the claim process.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Do you provide both mitigation and reconstruction?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Yes. We coordinate mitigation, cleanup, repairs, and reconstruction under one residential restoration plan.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How do you reduce disruption for families during restoration?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We use phased work zones, daily progress updates, and safety-first protocols to keep your household informed and protected.',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageEnUrl,
                    'image' => asset('img/residential.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $residentialSchemaZh = SchemaCollection::make()
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => '温哥华住宅修复服务',
                    'serviceType' => '住宅修复服务',
                    'description' => '提供温哥华 24/7 住宅紧急修复服务，涵盖水损、火损、霉菌治理、深度清洁与重建支持。',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'VR PLUS Restoration',
                        'telephone' => '+1 604-800-3900',
                        'url' => $pageZhUrl,
                    ],
                    'areaServed' => ['温哥华', '本拿比', '列治文', '素里', '高贵林', '北温哥华', '西温哥华', '新西敏'],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '你们提供哪些住宅修复服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们提供住宅水损修复、火灾与烟熏清理、霉菌治理、专业清洁，以及受损区域重建服务。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '家庭紧急事件可以多快到场？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们 24/7 待命，在大温地区优先派工，尽快启动现场应急稳定与止损。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们会协助保险资料和理算沟通吗？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '会。我们帮助业主整理损害记录、文档和阶段更新，配合理赔流程更顺畅。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们可以同时做止损和重建吗？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '可以。我们可在同一住宅修复计划中统筹止损、清理、维修和重建。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们如何降低施工对家庭生活的影响？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们采用分区分阶段作业、每日进度沟通和安全优先流程，尽量减少家庭干扰。',
                            ],
                        ],
                    ],
                ],
            )
            ->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'VR PLUS Restoration',
                    'url' => $pageZhUrl,
                    'image' => asset('img/residential.jpeg'),
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期日'],
                            'opens' => '00:00',
                            'closes' => '23:59',
                        ],
                    ],
                ],
            );

        $seoDataEn = new SEOData(
            title: 'Residential Restoration Services Vancouver | 24/7 Emergency Response',
            description: 'Residential restoration services in Vancouver for water, fire, and mold damage. 24/7 emergency response, insurance support, and complete home recovery.',
            image: asset('img/residential.jpeg'),
            schema: $residentialSchemaEn,
            tags: [
                'residential restoration Vancouver',
                'home water damage restoration',
                'residential mold remediation',
                'fire damage cleanup for homes',
                '24/7 emergency restoration',
            ],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $seoDataZh = new SEOData(
            title: '温哥华住宅修复服务 | 24/7 紧急响应',
            description: '提供温哥华住宅修复服务，涵盖水损、火损与霉菌治理。24/7 紧急响应，含保险协作与完整修复支持。',
            image: asset('img/residential.jpeg'),
            schema: $residentialSchemaZh,
            tags: [
                '温哥华住宅修复',
                '家庭水损修复',
                '住宅霉菌治理',
                '住宅火灾清理',
                '24/7 紧急修复',
            ],
            alternates: [
                new AlternateTag(hreflang: 'en', href: $pageEnUrl),
                new AlternateTag(hreflang: 'zh', href: $pageZhUrl),
            ],
        );

        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.residentialServices', compact('SEOData'));
    }
    public function construction()
    {
        $locale = app()->getLocale(); // Get the current locale

        $seoDataEn = new SEOData(
            title: 'Expert Construction Restoration Services | VR Restoration',
            description: 'Expert Construction Restoration Services. Our team provides thorough and efficient restoration using advanced techniques. Call us at 604-800-3900.',
            image: asset('img/construction2.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What construction restoration services do you provide?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We provide comprehensive construction restoration services including damage assessment, emergency repairs, and full reconstruction for water, fire, mold, and storm damage.',
                            ],
                        ],
                    ],
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
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
            tags: ['construction restoration', 'property damage repair', 'reconstruction services', 'Vancouver construction restoration'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/construction')],
        );

        $seoDataZh = new SEOData(
            title: '专业建筑恢复服务 | VR Restoration',
            description: '专业建筑恢复服务。我们的团队使用先进的技术进行全面高效的恢复。请致电 604-800-3900。',
            image: asset('img/construction2.jpeg'),
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        'telephone' => '+1 604-800-3900',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => '636 Clyde Ave Suite 7',
                            'addressLocality' => 'West Vancouver',
                            'addressRegion' => 'BC',
                            'postalCode' => 'V7T 1E1',
                            'addressCountry' => 'CA',
                        ],
                        'geo' => [
                            '@type' => 'GeoCoordinates',
                            'latitude' => 49.3252,
                            'longitude' => -123.1595,
                        ],
                        'areaServed' => ['Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley', 'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'],
                        'openingHoursSpecification' => [
                            [
                                '@type' => 'OpeningHoursSpecification',
                                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                                'opens' => '00:00',
                                'closes' => '23:59',
                            ],
                        ],
                    ],
                ],
            ),
            tags: ['建筑恢复', '财产损害修复', '重建服务', '温哥华建筑恢复'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/construction')],
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.construction', compact('SEOData'));
    }
    public function fireDamage()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Fire Damage Restoration Services',
            description: 'Professional fire damage restoration services Immediate response to fire and smoke damage, structural repairs, and cleanup. Contact us at 604-800-3900.',
            image: asset('img/fire-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
                    'areaServed' => [
                        'Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley', 'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'
                    ],
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
            tags: ['fire damage restoration', 'smoke damage repair', 'structural repair', 'odor removal', 'Vancouver fire damage services'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/fire-damage')],
        );

       // Define SEO data for Chinese
$seoDataZh = new SEOData(
    title: '火灾损害恢复服务',
    description: '专业火灾损害恢复服务：立即响应火灾和烟雾损害、结构修复和清理。请拨打604-800-3900，以获取温哥华快速有效的恢复服务。',
    image: asset('img/fire-damage.jpeg'), // Example image path
    schema: SchemaCollection::make()->add(
        fn(SEOData $SEOData) => [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => '你们的火灾损害恢复服务包括哪些内容？',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => '我们的火灾损害恢复服务包括对火灾和烟雾损害的紧急响应、结构修复、气味去除和全面清理。我们致力于尽快有效地恢复您的财产到受损前的状态。',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '你们可以多快响应火灾损害情况？',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => '我们提供24/7的紧急响应服务，以应对火灾损害情况。我们的团队随时准备部署，开始恢复过程并减少进一步的损害。',
                    ],
                ],
            ],
        ],
    )->add(
        fn(SEOData $SEOData) => [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'telephone' => '+1 604-800-3900',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '636 Clyde Ave Suite 7',
                'addressLocality' => 'West Vancouver',
                'addressRegion' => 'BC',
                'postalCode' => 'V7T 1E1',
                'addressCountry' => 'CA',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 49.3252,
                'longitude' => -123.1595,
            ],
            'areaServed' => [
                'Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley', 'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'
            ],
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
    tags: ['火灾损害恢复', '烟雾损害修复', '结构修复', '气味去除', '温哥华火灾服务'],
    alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/fire-damage')],
);

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.fireDamage', compact('SEOData'));
    }

    public function generalCleaning()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
      // Define SEO data for English
      $seoDataEn = new SEOData(
        title: 'General Cleaning Services',
        description: 'Professional general cleaning services: Residential and commercial cleaning, deep cleaning, and more. Call 604-800-3900 to schedule your cleaning in Vancouver.',
        image: asset('img/generalCleaning.jpeg'), // Corrected image path
        schema: SchemaCollection::make()->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => 'What does general cleaning include?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'General cleaning includes dusting, vacuuming, mopping floors, cleaning bathrooms and kitchens, and other basic cleaning tasks to maintain a clean and tidy environment.',
                        ],
                    ],
                ],
            ],
        )->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'LocalBusiness',
                'telephone' => '+1 604-800-3900',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '636 Clyde Ave Suite 7',
                    'addressLocality' => 'West Vancouver',
                    'addressRegion' => 'BC',
                    'postalCode' => 'V7T 1E1',
                    'addressCountry' => 'CA',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 49.3252,
                    'longitude' => -123.1595,
                ],
                'areaServed' => [
                    'Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley',
                    'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    'opens' => '00:00',
                    'closes' => '23:59',
                ],
            ]
        ),
        tags: ['general cleaning', 'residential cleaning', 'commercial cleaning', 'deep cleaning', 'Vancouver cleaning services'],
        alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/general-cleaning')],
    );

    // Define SEO data for Chinese
    $seoDataZh = new SEOData(
        title: '一般清洁服务',
        description: '专业的一般清洁服务：住宅和商业清洁，深度清洁等。请拨打604-800-3900预约您的温哥华清洁服务。',
        image: asset('img/generalCleaning.jpeg'), // Corrected image path
        schema: SchemaCollection::make()->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => '一般清洁包括什么？',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => '一般清洁包括除尘、吸尘、拖地、清洁浴室和厨房，以及其他基本的清洁任务，以保持环境的清洁和整洁。',
                        ],
                    ],
                ],
            ],
        )->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'LocalBusiness',
                'telephone' => '+1 604-800-3900',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '636 Clyde Ave Suite 7',
                    'addressLocality' => 'West Vancouver',
                    'addressRegion' => 'BC',
                    'postalCode' => 'V7T 1E1',
                    'addressCountry' => 'CA',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 49.3252,
                    'longitude' => -123.1595,
                ],
                'areaServed' => [
                    'Vancouver', 'Burnaby', 'Coquitlam', 'Chilliwack', 'Abbotsford', 'Richmond', 'Surrey', 'Langley',
                    'North Vancouver', 'West Vancouver', 'Maple Ridge', 'Mission', 'Hope', 'Fraser Valley', 'Lower Mainland', 'BC'
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    'opens' => '00:00',
                    'closes' => '23:59',
                ],
            ]
        ),
        tags: ['一般清洁', '住宅清洁', '商业清洁', '深度清洁', '温哥华清洁服务'],
        alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/general-cleaning')],
    );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.generalCleaning', compact('SEOData'));
    }
    public function moldRemediation()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Mold Remediation in Vancouver 24/7 Call Now | 604-800-3900',
            description: '24/7 Mold Remediation Services Prompt removal and prevention of mold in residential and commercial properties. Call 604-800-3900 for immediate assistance in Vancouver.',
            image: asset('img/mold.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What causes mold growth?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Mold growth is caused by high humidity or water damage. Mold spores can enter a property through windows, doors, HVAC systems, or even on pets and clothing. They flourish in moist environments and can become a serious problem if not addressed quickly.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How can I prevent mold growth?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'To prevent mold growth, maintain relative humidity levels in your home, fix any leaks or water damage promptly, and ensure proper ventilation. Regular inspections can help identify potential issues before they become serious.',
                            ],
                        ],
                    ],
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
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
            tags: ['mold remediation', 'mold removal', 'water damage', 'humidity control', 'Vancouver mold services'],
            alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/mold-remediation')],
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '霉菌修复服务',
            description: '专业霉菌修复服务：处理因水损或高湿度引起的霉菌问题。我们处理住宅和商业物业。请拨打604-800-3900以获取在温哥华的即时帮助。',
            image: asset('img/mold.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '霉菌生长的原因是什么？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '霉菌生长是由高湿度或水损引起的。霉菌孢子可以通过窗户、门、HVAC系统，甚至宠物和衣物进入物业。它们在潮湿的环境中繁殖，如果不及时处理，可能会成为严重的问题。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '如何预防霉菌生长？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '要防止霉菌生长，保持家庭中的相对湿度，及时修复任何泄漏或水损，并确保良好的通风。定期检查可以帮助及早发现潜在问题。',
                            ],
                        ],
                    ],
                    'telephone' => '+1 604-800-3900',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '636 Clyde Ave Suite 7',
                        'addressLocality' => 'West Vancouver',
                        'addressRegion' => 'BC',
                        'postalCode' => 'V7T 1E1',
                        'addressCountry' => 'CA',
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => 49.3252,
                        'longitude' => -123.1595,
                    ],
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
            tags: ['霉菌修复', '霉菌去除', '水损', '湿度控制', '温哥华霉菌服务'],
            alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/mold-remediation')],
        );
        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.moldRemediation', compact('SEOData'));
    }
    public function specialtyCleaning()
{
    $locale = app()->getLocale(); // Get the current locale

    // Define SEO data for English
    $seoDataEn = new SEOData(
        title: 'Specialty Cleaning Services',
        description: 'Comprehensive specialty cleaning services including residential, commercial, post-construction, and move-in/move-out cleaning. Contact us at 604-800-3900.',
        image: asset('img/specialCleaning2.jpeg'), // Example image path
        schema: SchemaCollection::make()->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => 'What types of specialty cleaning services do you offer?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'We offer a range of specialty cleaning services including residential cleaning, commercial cleaning, post-construction cleaning, and move-in/move-out cleaning. Each service is tailored to meet the specific needs of our clients.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Are your cleaning products eco-friendly?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Yes, we use eco-friendly cleaning products for residential cleaning to ensure a safe and healthy environment for our clients and their families.',
                        ],
                    ],
                ],
                'telephone' => '+1 604-800-3900',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '636 Clyde Ave Suite 7',
                    'addressLocality' => 'West Vancouver',
                    'addressRegion' => 'BC',
                    'postalCode' => 'V7T 1E1',
                    'addressCountry' => 'CA',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 49.3252,
                    'longitude' => -123.1595,
                ],
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
        tags: ['specialty cleaning', 'residential cleaning', 'commercial cleaning', 'post-construction cleaning', 'move-in cleaning', 'move-out cleaning', 'Vancouver cleaning services'],
        alternates: [new AlternateTag(hreflang: 'zh', href: 'https://vrrestoration.ca/zh/specialty-cleaning')],
    );

    // Define SEO data for Chinese
    $seoDataZh = new SEOData(
        title: '专业清洁服务',
        description: '提供全面的专业清洁服务，包括住宅清洁、商业清洁、装修后清洁和搬入/搬出清洁。请拨打604-800-3900联系我们，获取温哥华量身定制的清洁解决方案。',
        image: asset('img/specialCleaning2.jpeg'), // Example image path
        schema: SchemaCollection::make()->add(
            fn(SEOData $SEOData) => [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => '你们提供哪些专业清洁服务？',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => '我们提供多种专业清洁服务，包括住宅清洁、商业清洁、装修后清洁和搬入/搬出清洁。每项服务都针对客户的具体需求进行量身定制。',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => '你们的清洁产品是否环保？',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => '是的，我们在住宅清洁中使用环保清洁产品，以确保客户及其家人的安全和健康。',
                        ],
                    ],
                ],
                'telephone' => '+1 604-800-3900',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '636 Clyde Ave Suite 7',
                    'addressLocality' => 'West Vancouver',
                    'addressRegion' => 'BC',
                    'postalCode' => 'V7T 1E1',
                    'addressCountry' => 'CA',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 49.3252,
                    'longitude' => -123.1595,
                ],
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
        tags: ['专业清洁', '住宅清洁', '商业清洁', '装修后清洁', '搬入清洁', '搬出清洁', '温哥华清洁服务'],
        alternates: [new AlternateTag(hreflang: 'en', href: 'https://vrrestoration.ca/en/specialty-cleaning')],
    );

    // Choose SEO data based on locale
    $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

    return view('services.specialtyCleaning', compact('SEOData'));
}
    public function stormDisaster()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Storm and Disaster Cleanup Services',
            description: 'Expert storm and disaster cleanup services. Rapid response to storm damage, flooding, and more. Call 604-800-3900 for immediate Vancouver assistance.',
            // image: asset('images/storm-disaster-cleanup.jpg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What types of storm and disaster cleanup services do you offer?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We offer comprehensive storm and disaster cleanup services including flood damage restoration, debris removal, and structural repairs. Our team is equipped to handle a variety of disaster scenarios and provide rapid response to minimize damage.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How quickly can you respond to a storm or disaster?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We offer 24/7 emergency response services to address storm and disaster situations as quickly as possible. Our team is ready to deploy immediately to help you recover from unexpected events.',
                            ],
                        ],
                    ],
                ],
            ),
            tags: ['storm cleanup', 'disaster cleanup', 'flood restoration', 'debris removal', 'Vancouver disaster services'],
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '风暴和灾难清理服务',
            description: '专业风暴和灾难清理服务：快速响应风暴损害、洪水和其他灾难情况。请拨打604-800-3900以获取温哥华的即时帮助。',
            // image: asset('images/storm-disaster-cleanup.jpg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '你们提供哪些风暴和灾难清理服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们提供全面的风暴和灾难清理服务，包括洪水损害恢复、废料清除和结构修复。我们的团队能够处理各种灾难情况，并提供快速响应以减少损害。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们可以多快响应风暴或灾难？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们提供24/7紧急响应服务，以尽快应对风暴和灾难情况。我们的团队随时准备出动，帮助您从意外事件中恢复。',
                            ],
                        ],
                    ],
                ],
            ),
            tags: ['风暴清理', '灾难清理', '洪水恢复', '废料清除', '温哥华灾难服务'],
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.stormDisaster', compact('SEOData'));
    }
    public function localServices()
    {

        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Local Services in BC like Vancouver and Burnaby',
            description: 'We offer expert services across Vancouver, Richmond, Burnaby, and surrounding areas. Contact us at 604-800-3900 for reliable and professional assistance in your area.',
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What locations do you serve?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We provide our services in Bc, Vancouver, Richmond, Burnaby, and nearby areas. Whether you need help at home or at work, our team is ready to assist.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'What services do you offer?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We specialize in providing a wide range of services, including home repairs, maintenance, and more. Contact us for personalized solutions tailored to your needs.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How can I contact you?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'You can reach us at 604-800-3900. We are available to assist with all your service needs promptly and professionally.',
                            ],
                        ],
                    ],
                ],
            ),
            tags: ['local services', 'Vancouver services', 'Richmond services', 'Burnaby services', 'professional assistance'],
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '温哥华、本拿比和列治文的本地服务',
            description: '我们在温哥华、本拿比、列治文及周边地区提供专业服务。请拨打604-800-3900与我们联系，获得可靠和专业的帮助。',
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '你们服务的地点有哪些？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们提供服务的区域包括温哥华、本拿比、列治文及周边地区。无论是在家还是在工作场所需要帮助，我们的团队随时为您提供服务。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '你们提供哪些服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们专注于提供各种服务，包括房屋维修、维护等。联系我们，获得量身定制的解决方案。',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => '我该如何联系你们？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '您可以拨打604-800-3900与我们联系。我们随时准备为您的需求提供快速和专业的帮助。',
                            ],
                        ],
                    ],
                ],
            ),
            tags: ['本地服务', '温哥华服务', '列治文服务', '本拿比服务', '专业帮助'],
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        $localService = LocalService::activePosts(true);

        return view('services.localServices', ['SEOData' => $SEOData, 'localService' => $localService]);

    }
    public function localServicesDetail($lang, $city, $slug)
    {
        $localService = LocalService::where(['city' => $city, 'slug' => $slug])->firstOrFail();

        $latest = LocalService::activePosts(true, 3);

        if ($lang == 'zh') {

            // Generate SEO Data EN
            $SEOData = new SEOData(
                title: $localService->title_zh,
                description: $localService->subtitle_zh, // Assuming there's an excerpt or summary field
                image: asset($localService->image), // Assuming image path is stored in the 'image' field
                url: url()->current(),
                schema: SchemaCollection::make()->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'Service',  // Use Service schema for service pages
                        'serviceType' => $localService->title_zh, // Specify the type of service
                        'provider' => [
                            '@type' => 'LocalBusiness',
                            'name' => 'VR Plus Restoration',
                            'image' => asset($localService->image),
                            'telephone' => '+16048003900',
                            'address' => [
                                '@type' => 'PostalAddress',
                                'addressLocality' => $city,
                                'addressRegion' => 'BC',
                                'addressCountry' => 'CA',
                            ],
                            'sameAs' => 'https://www.vrrestoration.ca',
                        ],
                        'url' => url()->current(),
                        'headline' => $localService->title_zh,
                        'description' => $localService->subtitle_zh,
                        'datePublished' => $localService->created_at->toIso8601String(),
                        'dateModified' => $localService->updated_at->toIso8601String(),
                        'contactPoint' => [
                            '@type' => 'ContactPoint',
                            'telephone' => '+16048003900',
                            'contactType' => 'Customer Service'
                        ]
                    ]
                ),
            );
        } else {
            // Generate SEO Data EN
            $SEOData = new SEOData(
                title: $localService->title_en,
                description: $localService->subtitle_en, // Assuming there's an excerpt or summary field
                image: asset($localService->image), // Assuming image path is stored in the 'image' field
                url: url()->current(),
                schema: SchemaCollection::make()->add(
                    fn(SEOData $SEOData) => [
                        '@context' => 'https://schema.org',
                        '@type' => 'Service',  // Use Service schema for service pages
                        'serviceType' => $localService->title_en, // Specify the type of service
                        'provider' => [
                            '@type' => 'LocalBusiness',
                            'name' => 'VR Plus Restoration',
                            'image' => asset($localService->image),
                            'telephone' => '+16048003900',
                            'address' => [
                                '@type' => 'PostalAddress',
                                'addressLocality' => $city,
                                'addressRegion' => 'BC',
                                'addressCountry' => 'CA',
                            ],
                            'sameAs' => 'https://www.vrrestoration.ca',
                        ],
                        'url' => url()->current(),
                        'headline' => $localService->title_en,
                        'description' => $localService->subtitle_en,
                        'datePublished' => $localService->created_at->toIso8601String(),
                        'dateModified' => $localService->updated_at->toIso8601String(),
                        'contactPoint' => [
                            '@type' => 'ContactPoint',
                            'telephone' => '+16048003900',
                            'contactType' => 'Customer Service'
                        ]
                    ]
                ),
            );
        }



        return view('services.localServicesDetail', [
            'localService' => $localService,
            'latestPost' => $latest,
            'SEOData' => $SEOData,
        ]);
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
            ->add(Url::create('/en/blog')->setLastModificationDate(Carbon::yesterday()))
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
            ->add(Url::create('/zh/blog')->setLastModificationDate(Carbon::yesterday()))
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

        LocalService::all()->each(function (LocalService $localS) use ($sitemap) {
            $sitemap->add(Url::create('/en/' . $localS->city . '/' . $localS->slug)->setLastModificationDate($localS->updated_at));
            $sitemap->add(Url::create('/zh/' . $localS->city . '/' . $localS->slug)->setLastModificationDate($localS->updated_at));
        });

        Post::all()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create('/en/blog/' . $post->id . '/' . $post->slug)->setLastModificationDate($post->updated_at));
        });
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
