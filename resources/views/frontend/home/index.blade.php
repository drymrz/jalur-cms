@extends('frontend.layouts.main')
@section('content')
    <div class="main-wrapper-home">
        <section class="hero-section p-[16px] md:p-[32px] w-full">
            <div class="section-wrapper relative w-full">
                <div class="img-wrapper absolute">
                    <img class="object-cover rounded-[25px] object-top brightness-[.80] w-screen h-[75vh] xl:h-[92vh]"
                        src="{{ $heroes->image }}" alt="">
                </div>
                <div class="text-wrapper relative h-[75vh] xl:h-[92vh] flex items-center px-[24px] xl:pl-[148px] w-full"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <div class="text-content flex flex-col gap-[18px]">
                        <h1
                            class="text-[40px] md:text-[64px] xl:text-[80px] font-[400] leading-[1] xl:leading-[80px] text-white md:max-w-[60%]">
                            {{ $heroes->title }}</h1>
                        <p class="text-[16px] md:text-[18px] leading-[22px] md:leading-[25px] text-white md:max-w-[40%]">
                            {{ $heroes->description }}</p>
                        <div class="download-button max-w-fit md:pt-[36px">
                            <a href={{ $websetting->download_link }} target="_blank"
                                class="flex gap-[16px] px-[29px] py-[14px] bg-jalur-bold hover:bg-jalur-base text-black rounded-[50px] border border-black transition-all">
                                <span>Download</span>
                                <img src="/icons/arrow-down.svg" alt="download-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero-title-section py-[24px] md:py-[48px]">
            <div class="img-top-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <img class="hidden xl:block w-screen object-cover" src="/img/image-top.svg" alt="">
                <img class="hidden md:block xl:hidden w-screen md:px-[32px] xl:px-0" src="/img/image-top-md.svg"
                    alt="">
                <img class="md:hidden w-screen h-[170px] object-cover" src="/img/image-top-sm.svg" alt="">
            </div>
            <div class="text-wrapper flex item-center justify-center py-[24px] md:py-[36px]">
                <h2 class="text-[24px] md:text-[32px] xl:text-[48px] text-center leading-[1] xl:leading-[48px] max-w-[80%]"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    {{ $heroes->title_2 }}</h2>
            </div>
            <div class="img-bot-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <img class="hidden xl:block w-screen object-cover" src="/img/image-bottom.svg" alt="">
                <img class="hidden md:block xl:hidden w-screen md:px-[32px] xl:px-0" src="/img/image-bottom-md.svg"
                    alt="">
                <img class="md:hidden w-screen h-[170px] object-cover" src="/img/image-bottom-sm.svg" alt="">
            </div>
        </section>

        @foreach ($features as $feature)
            <section
                class="w-screen mt-[48px] md:pt-[88px] md:pb-[56px] @if ($feature->section_classname == 'bg-jalur-dark') py-[56px] bg-jalur-dark text-white @endif">
                <div
                    class="section-wrapper flex flex-col @if ($loop->odd) xl:flex-row @else xl:flex-row-reverse @endif justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
                    <div class="text-wrapper flex gap-[18px] flex-col basis-2/5" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-once="true">
                        <h1
                            class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                            {{ $feature->title }}</h1>
                        <p class="md:text-[18px] md:max-w-[55%] xl:max-w-fit">{!! $feature->description !!}
                        </p>
                        <a href=""
                            class="font-[500] md:text-[16px] pb-[56px] hover:text-jalur-base decoration-jalur-base decoration-[2px] w-fit">Learn
                            More
                            <hr class="bg-jalur-base h-[3px]">
                        </a>
                    </div>
                    <div class="flex w-full justify-center xl:w-fit">
                        <div class="img-wrapper @if ($feature->section_classname == 'bg-jalur-dark') w-fit @else w-[60%] md:w-fit xl:px-[72px] @endif"
                            data-aos="fade-up" data-aos-duration="1500" data-aos-once="true" data-aos-delay="350">
                            <img src="{{ $feature->image }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

        <section class="hero-section p-[16px] pb-[56px] md:p-[32px] md:pb-[56px] w-full">
            <div class="section-wrapper relative w-full">
                <div class="text-wrapper w-full py-[56px] xl:py-[32px] flex flex-col gap-[16px] items-center text-center"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <h1 class="text-[36px] md:text-[48px] font-[500] leading-[1] md:leading-[72px]">App
                        Presentation Video
                    </h1>
                </div>
                <div class="vid-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <iframe class="mx-auto w-[80%] md:h-[500px]" src={{ $websetting->video_link }} frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>
@endsection
