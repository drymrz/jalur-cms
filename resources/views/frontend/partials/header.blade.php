@php
    $dataFeatures = [
        [
            'icon' => 'fa-map-location-dot',
            'title' => 'Plan your trip',
            'description' => 'Make your trip plan, Jalur will find the mosque',
            'link' => '/features/planyourtrip',
        ],
        [
            'icon' => 'fa-magnifying-glass',
            'title' => 'Find nearby mosque',
            'description' => 'Find the nearest mosque with Jalur',
            'link' => '/features/findnearbymosque',
        ],
        [
            'icon' => 'fa-circle-exclamation',
            'title' => 'Case Notification',
            'description' => 'Get notification based on your case',
            'link' => '/features/casenotification',
        ],
    ];
@endphp

@php
    use App\Models\WebSetting;
    $settings = WebSetting::first();
@endphp

<header class="w-full h-[64px] xl:h-[80px] font-sans fixed z-[100] backdrop-blur-sm bg-opacity-80">
    <nav class="flex justify-between items-center px-[24px] xl:px-[40px] py-[14px]">
        <div class="xl:hidden mobile-nav">
            <button class="ham-btn xl:hidden" onclick="showMobileMenu()">
                <img src="/icons/hamburger.svg" alt="ham-icon">
            </button>
            <nav id="mobile-menu"
                class="xl:hidden flex flex-col fixed w-screen top-0 h-screen right-[-100%] bg-white transition-[right] ease-in-out duration-500">
                <img class="absolute w-[75px] left-[40%] top-7 md:left-[45%]" src={{ '/img/' . $settings->logo_image }}
                    alt="">
                <button class="absolute top-[30px] left-[8%] md:left-[24px]" onclick="showMobileMenu()">
                    <svg width="16" height="16" fill="none" class="_9s6z">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.495 1.353L14.364.222 7.859 6.727 1.637.505.507 1.636l6.22 6.222-6.505 6.506 1.131 1.131L7.86 8.99l6.79 6.79 1.13-1.132-6.788-6.79 6.504-6.504z"
                            fill="currentColor"></path>
                    </svg>
                </button>

                <ul class="w-screen pt-[78px]">
                    <li class="border-y border-gray-300 pl-[24px]">
                        <a href="/" class="py-[20px] text-[32px] antialiased block">Home</a>
                    </li>
                    <li class="border-y border-gray-300 pl-[24px]">
                        <button onclick="showMobileFeatureMenu()"
                            class="py-[20px] text-[32px] antialiased flex w-full justify-between items-center"><span>Features</span>
                            <i class="fa-solid fa-chevron-down text-[18px] pr-[24px]"
                                id="feature-icon-mobile"></i></button>
                        <ul id="feature-menu-mobile"
                            class="overflow-hidden max-h-[0] transition-[max-height] ease-in-out duration-500">
                            @foreach ($dataFeatures as $item)
                                <li class="">
                                    <a href="{{ $item['link'] }}" class="flex items-center mb-[16px]">
                                        <i
                                            class="fa-solid {{ $item['icon'] }} w-fit text-[18px] text-white bg-jalur-bold p-[8px] mr-[16px] rounded-full group-hover:bg-black group-hover:text-jalur-bold"></i>
                                        <span class="mr-[8px]">
                                            {{ $item['title'] }}
                                        </span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="border-y border-gray-300 pl-[24px]">
                        <a href="/team" class="py-[20px] text-[32px] antialiased block">Our
                            Team</a>
                    </li>
                    <li class="border-y border-gray-300 pl-[24px]">
                        <a href="/contact" class="py-[20px] text-[32px] antialiased block">Contact</a>
                    </li>
                    <li class="border-y border-gray-300 pl-[24px]">
                        <a href="/download" class="py-[20px] text-[32px] antialiased block">Download</a>
                    </li>
                </ul>
            </nav>
        </div>
        <a href="/" class="logo flex justify-center">
            <img class="w-[80%]" src={{ '/img/' . $settings->logo_image }} alt="jalur-logo">
        </a>
        <ul class="hidden xl:flex">
            <li class="px-[20px]"><a href="/" class="font-[400] hover:text-jalur-base">Home</a></li>
            <li class="px-[20px]">
                <div>
                    <button class="hover:text-jalur-base" onclick="showFeatureMenu()">Features <i
                            class="fa-solid fa-chevron-down text-[13px]" id="feature-icon"></i></button>
                    <div id="feature-menu" class="absolute w-screen left-0 top-[100%] bg-white hidden">
                        <ul class="flex w-full justify-center pb-[22px] pt-[16px] gap-[32px]">
                            @foreach ($dataFeatures as $item)
                                <li class="my-[18px]">
                                    <a href="{{ $item['link'] }}"
                                        class="flex flex-col p-[24px] pb-[37px] rounded-[25px] border-[1px] border-gray-300 w-[275px] group hover:bg-jalur-bold hover:border-black">
                                        <i
                                            class="fa-solid {{ $item['icon'] }} w-fit text-[21px] text-white bg-jalur-bold p-[8px] rounded-full mb-[20px] group-hover:bg-black group-hover:text-jalur-bold"></i>
                                        <h5 class="text-[24px] font-[400]">{{ $item['title'] }}</h5>
                                        <p class="text-[18px] font-[350] leading-6 my-[18px] antialiased">
                                            {{ $item['description'] }}
                                        </p>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
            <li class="px-[20px]"><a href="/team" class="font-[400] hover:text-jalur-base">Our Team</a></li>
            <li class="px-[20px]"><a href="/contact" class="font-[400] hover:text-jalur-base">Contact</a></li>
            <li class="px-[20px]"><a href="/download" class="font-[400] hover:text-jalur-base">Download</a></li>
        </ul>
        <div class="download-button">
            <a href={{ $settings->download_link }}
                class="flex gap-[16px] xl:px-[29px] xl:py-[14px] p-[8px] bg-jalur-bold hover:bg-jalur-base text-black rounded-[50px] border border-black"
                target="_blank">
                <span class="hidden xl:block">Download</span>
                <img src="/icons/arrow-down.svg" alt="download-icon">
            </a>
        </div>
    </nav>
</header>

@push('scripts')
    <script src="/js/header.js"></script>
@endpush
