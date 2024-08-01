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
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'We Are Restoration Company - All Restoration Services',
            description: 'Emergency Services and Restoration. 24/7 Water Damage Restoration, Fire Damage Repair, Mold Remediation and more. CALL 778-318-6796. Our Vancouver branch is ready to assist you.',
            image: asset('img/hero-bg3.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What number should I call for restoration services?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Call 778-318-6796 for immediate restoration services, including water damage, fire damage, and mold remediation. Our Vancouver branch is ready to assist you 24/7.',
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
            ),
            tags: ['restoration services', 'water damage', 'fire damage', 'mold remediation', 'Vancouver restoration']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '我们是恢复公司 - 所有恢复服务',
            description: '紧急服务和恢复。24/7水损恢复、火灾修复、霉菌治理等。请拨打778-318-6796。我们的温哥华分部随时为您提供帮助。',
            image: asset('img/hero-bg3.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '我应该拨打哪个号码以获得恢复服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '请拨打778-318-6796，以获取水损恢复、火灾修复和霉菌治理等紧急恢复服务。我们的温哥华分部随时准备为您提供帮助。',
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
            ),
            tags: ['恢复服务', '水损', '火灾损害', '霉菌治理', '温哥华恢复']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        $blog = Post::activePosts(false, 5); // Fetch recent blog posts

        return view('welcome', [
            'SEOData' => $SEOData,
            'blog' => $blog
        ]);
    }

    public function about()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'About VR Plus Restoration',
            description: 'At VR Plus Restoration, we provide 24/7 emergency property damage services and restoration. Our licensed and trained technicians specialize in flood, fire, wind, mold, and asbestos restoration. We offer prompt and efficient service in Greater Vancouver.',
            image: asset('images/about-us-banner.jpg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'VR Plus Restoration',
                    'url' => url('/'),
                    'logo' => asset('img/about.jpeg'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => 'Customer Service',
                        'telephone' => '+1-778-318-6796',
                        'areaServed' => 'CA',
                        'availableLanguage' => 'English'
                    ],
                    'sameAs' => [
                        'https://www.facebook.com/VRPlusRestoration',
                        'https://twitter.com/VRPlusRestoration',
                        'https://www.linkedin.com/company/vrplusrestoration'
                    ]
                ]
            ),
            tags: ['property damage restoration', 'emergency services', 'flood restoration', 'fire damage repair', 'mold remediation', 'asbestos removal', 'Vancouver restoration']
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
                    'logo' => asset('img/about.jpeg'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => '客户服务',
                        'telephone' => '+1-778-318-6796',
                        'areaServed' => 'CA',
                        'availableLanguage' => '中文'
                    ],
                    'sameAs' => [
                        'https://www.facebook.com/VRPlusRestoration',
                        'https://twitter.com/VRPlusRestoration',
                        'https://www.linkedin.com/company/vrplusrestoration'
                    ]
                ]
            ),
            tags: ['财产损害恢复', '紧急服务', '水灾恢复', '火灾修复', '霉菌治理', '石棉去除', '温哥华恢复']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('about', [
            'SEOData' => $SEOData
        ]);
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
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Water Damage Restoration Services',
            description: '24/7 Water Damage Restoration Services: Emergency response for water damage, flooded basements, and more. Call 778-318-6796 for immediate assistance in Vancouver.',
            image: asset('/img/water-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'How quickly should water damage be addressed?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Water damage should be addressed within 24-48 hours to prevent further damage and mold growth. Quick action helps to minimize the extent of the damage and reduce restoration costs.',
                            ],
                        ],
                    ],
                ]
            ),
            tags: ['water damage restoration', 'emergency water extraction', 'flooded basement repair', 'Vancouver water damage services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '水损恢复服务',
            description: '24/7水损恢复服务：紧急响应水损、地下室积水等问题。请拨打778-318-6796以获取在温哥华的即时帮助。',
            image: asset('/img/water-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '水损应尽快处理吗？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '水损应在24-48小时内处理，以防止进一步的损害和霉菌生长。快速行动有助于减少损害程度和降低恢复成本。',
                            ],
                        ],
                    ],
                ]
            ),
            tags: ['水损恢复', '紧急水提取', '地下室修复', '温哥华水损服务']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.waterdamage', compact('SEOData'));

    }
    public function commercialServices()
    {
        return view('services.commercialServices');
    }
    public function residentialServices()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'VR Plus Restoration - Expert Residential Services',
            description: 'VR Plus Restoration offers top-notch Residential Services, including flood, fire, wind, mold, and asbestos restoration. Our skilled team provides 24/7 emergency response. Call 778-318-6796 for immediate assistance.',
            image: asset('img/residential.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What types of residential restoration services do you offer?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We offer a variety of residential restoration services, including flood damage repair, fire damage restoration, mold remediation, and asbestos removal. Our services are available 24/7 to ensure you get the help you need when you need it.',
                            ],
                        ],
                    ],
                ]
            ),
            tags: ['residential services', 'restoration services', '24/7 emergency response', 'flood damage repair', 'fire damage restoration', 'mold remediation', 'asbestos removal']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: 'VR Plus Restoration - 专业住宅服务',
            description: 'VR Plus Restoration 提供一流的住宅服务，包括洪水、火灾、风害、霉菌和石棉修复。我们的专业团队提供 24/7 紧急响应服务。请拨打 778-318-6796 获取即时帮助。',
            image: asset('img/residential.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => '你们提供哪些类型的住宅修复服务？',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => '我们提供各种住宅修复服务，包括洪水损害修复、火灾损害修复、霉菌去除和石棉清除。我们的服务全天候提供，确保您在需要时能得到帮助。',
                            ],
                        ],
                    ],
                ]
            ),
            tags: ['住宅服务', '修复服务', '24/7 紧急响应', '洪水损害修复', '火灾损害修复', '霉菌去除', '石棉清除']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.residentialServices', compact('SEOData'));
    }
    public function construction()
    {
        return view('services.construction');
    }
    public function fireDamage()
    {
        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'Fire Damage Restoration Services',
            description: 'Professional fire damage restoration services: Immediate response to fire and smoke damage, structural repairs, and cleanup. Contact us at 778-318-6796 for fast and effective restoration in Vancouver.',
            image: asset('img/fire-damage.jpeg'), // Example image path
            schema: SchemaCollection::make()->add(
                fn(SEOData $SEOData) => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What does your fire damage restoration service include?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Our fire damage restoration service includes emergency response to fire and smoke damage, structural repairs, odor removal, and complete cleanup. We work to restore your property to its pre-damage condition as quickly and efficiently as possible.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How soon can you respond to a fire damage situation?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'We provide 24/7 emergency response for fire damage situations. Our team is ready to deploy immediately to begin the restoration process and mitigate further damage.',
                            ],
                        ],
                    ],
                ]
            ),
            tags: ['fire damage restoration', 'smoke damage repair', 'structural repair', 'odor removal', 'Vancouver fire damage services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '火灾损害恢复服务',
            description: '专业火灾损害恢复服务：立即响应火灾和烟雾损害、结构修复和清理。请拨打778-318-6796，以获取温哥华快速有效的恢复服务。',
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
                ]
            ),
            tags: ['火灾损害恢复', '烟雾损害修复', '结构修复', '气味去除', '温哥华火灾服务']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.fireDamage', compact('SEOData'));
    }

    public function generalCleaning()
    {

        $locale = app()->getLocale(); // Get the current locale

        // Define SEO data for English
        $seoDataEn = new SEOData(
            title: 'General Cleaning Services',
            description: 'Professional general cleaning services: Residential and commercial cleaning, deep cleaning, and more. Call 778-318-6796 to schedule your cleaning in Vancouver.',
            image: asset('img/generalClenaing.jpeg'), // Example image path
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
                ]
            ),
            tags: ['general cleaning', 'residential cleaning', 'commercial cleaning', 'deep cleaning', 'Vancouver cleaning services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '一般清洁服务',
            description: '专业的一般清洁服务：住宅和商业清洁，深度清洁等。请拨打778-318-6796预约您的温哥华清洁服务。',
            image: asset('img/generalClenaing.jpeg'), // Example image path
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
                ]
            ),
            tags: ['一般清洁', '住宅清洁', '商业清洁', '深度清洁', '温哥华清洁服务']
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
            title: 'Mold Remediation Services',
            description: 'Professional mold remediation services: Address mold issues caused by water damage or high humidity. We handle both residential and commercial properties. Call 778-318-6796 for immediate assistance in Vancouver.',
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
                ]
            ),
            tags: ['mold remediation', 'mold removal', 'water damage', 'humidity control', 'Vancouver mold services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '霉菌修复服务',
            description: '专业霉菌修复服务：处理因水损或高湿度引起的霉菌问题。我们处理住宅和商业物业。请拨打778-318-6796以获取在温哥华的即时帮助。',
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
                ]
            ),
            tags: ['霉菌修复', '霉菌去除', '水损', '湿度控制', '温哥华霉菌服务']
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
            description: 'Comprehensive specialty cleaning services including residential, commercial, post-construction, and move-in/move-out cleaning. Contact us at 778-318-6796 for tailored cleaning solutions in Vancouver.',
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
                ]
            ),
            tags: ['specialty cleaning', 'residential cleaning', 'commercial cleaning', 'post-construction cleaning', 'move-in cleaning', 'move-out cleaning', 'Vancouver cleaning services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '专业清洁服务',
            description: '提供全面的专业清洁服务，包括住宅清洁、商业清洁、装修后清洁和搬入/搬出清洁。请拨打778-318-6796联系我们，获取温哥华量身定制的清洁解决方案。',
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
                ]
            ),
            tags: ['专业清洁', '住宅清洁', '商业清洁', '装修后清洁', '搬入清洁', '搬出清洁', '温哥华清洁服务']
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
            description: 'Expert storm and disaster cleanup services: Rapid response to storm damage, flooding, and other disaster scenarios. Contact us at 778-318-6796 for immediate assistance in Vancouver.',
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
                ]
            ),
            tags: ['storm cleanup', 'disaster cleanup', 'flood restoration', 'debris removal', 'Vancouver disaster services']
        );

        // Define SEO data for Chinese
        $seoDataZh = new SEOData(
            title: '风暴和灾难清理服务',
            description: '专业风暴和灾难清理服务：快速响应风暴损害、洪水和其他灾难情况。请拨打778-318-6796以获取温哥华的即时帮助。',
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
                ]
            ),
            tags: ['风暴清理', '灾难清理', '洪水恢复', '废料清除', '温哥华灾难服务']
        );

        // Choose SEO data based on locale
        $SEOData = $locale === 'zh' ? $seoDataZh : $seoDataEn;

        return view('services.stormDisaster', compact('SEOData'));
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


        Post::all()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create('/en/blog/' . $post->id . '/' . $post->slug)->setLastModificationDate($post->updated_at));
        });
        $sitemap->writeToFile(public_path('sitemap.xml'));

    }
}
