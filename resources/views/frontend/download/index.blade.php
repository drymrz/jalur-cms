@extends('frontend.layouts.main')
@section('content')
    <section class="xl:pb-[56px] pb-[32px] pt-[48px] w-screen bg-jalur-soft" data-aos="fade-up" data-aos-duration="1500"
        data-aos-once="true">
        <div
            class="section-wrapper flex flex-col xl:flex-row justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
            <div class="text-wrapper flex gap-[18px] flex-col basis-2/5">
                <h1
                    class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                    {{ $heroes->title }}</h1>
                <p class="md:text-[16px] md:max-w-[55%] xl:max-w-fit">{{ $heroes->description }}
                </p>
                <div class="flex flex-col p-[32px] bg-[#F0F4F9] rounded-[16px] mt-[24px] max-w-fit">
                    <p class="text-[18px] font-[400]">Mobile</p>
                    <h3 class="text-[32px]">iOS</h3>
                    <p class="pt-[4px]">Version 1.0.4 Requires iOS 17.0 or newer.</p>
                    <a href={{ $websetting->download_link }} target="_blank" class="pt-[8px]">
                        <img class="w-[150px]" src="/img/appstore.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="xl:flex w-full justify-center xl:w-fit hidden">
                <div class="img-wrapper w-[60%] md:w-fit xl:px-[72px]">
                    <img src="{{ $heroes->image }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="xl:pb-[72px] xl:pt-[108px] pt-[56px] pb-[48px] w-screen bg-white min-h-[52vh]">
        <div
            class="section-wrapper flex flex-col xl:flex-row justify-between xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
            <div class="text-wrapper flex gap-[18px] flex-col basis-2/5">
                <h1
                    class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[56px] xl:leading-[60px]">
                    Version History</h1>
                <p class="md:text-[16px] md:max-w-[55%] xl:max-w-fit">Keep track of the latest updates of Jalur. You can
                    find the details of the latest version of Jalur here.
                </p>
            </div>
            <div class="version-wrapper xl:w-[40%] pt-[24px] xl:pt-0">
                @foreach ($versions as $version)
                    <div class="version-card border-b-[1px] border-gray-200 px-[8px] py-[16px]">
                        <div class="version-header flex items-center justify-between">
                            <h3 class="text-[20px] font-[600]">v{{ $version['version_number'] }}</h3>
                            <p class="text-[14px
                                ] text-gray-500">
                                {{-- convert date format to display the date like 2 days ago --}}
                                {{ \Carbon\Carbon::parse($version['release_date'])->diffForHumans() }}
                            </p>
                        </div>
                        <div class="version-content">
                            <p class="text-[14px]">{{ $version['content'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
