@extends('frontend.layouts.main')
@section('content')
    <div class="main-wrapper-home">
        <section class="hero-title-section py-[24px] md:py-[48px]">
            <div class="text-wrapper flex item-center justify-center py-[24px] md:py-[36px]">
                <h2 class="text-[24px] md:text-[32px] xl:text-[48px] text-center leading-[1] xl:leading-[48px] max-w-[80%]"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    {{ $heroes->description }}</h2>
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
                        </p>
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
    </div>
@endsection
