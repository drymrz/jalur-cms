@php
    $dataNotification = [
        [
            'description' => 'Jalur will notify you to stop to the selected mosque based on your preferred time',
            'img' => '/img-feature/case-specific/notif-normal.svg',
        ],
        [
            'description' =>
                'When you encounter traffic and are late to the mosque, Jalur will automatically adjust your mosque visit.',
            'img' => '/img-feature/case-specific/notif-late.svg',
        ],
        [
            'description' =>
                'If you are early to the mosque, Jalur will notify you to change the mosque that suit to your time preference',
            'img' => '/img-feature/case-specific/notif-earlier.svg',
        ],
    ];
@endphp

@extends('frontend.layouts.main')
@section('content')
    <div class="bg-jalur-bold2">
        <section class="hero-title-section py-[24px] md:py-[48px]">
            <div class="text-wrapper flex item-center justify-center py-[24px] md:py-[36px]">
                <h2 class="text-[24px] text-white md:text-[32px] xl:text-[48px] text-center leading-[1] xl:leading-[48px] max-w-[80%]"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    Road traffic can be unpredictable, but Jalur's adaptive recommendations keep your prayer schedule on
                    track
                </h2>
            </div>
        </section>
        <section class="flex flex-col gap-[48px] items-center justify-center pt-[32px] py-[64px]">
            @foreach ($dataNotification as $item)
                <div class="card-wrapper w-[70%]" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <div
                        class="card p-[32px] md:py-[64px] md:px-[86px] flex flex-col-reverse @if ($loop->index % 2 == 0) md:flex-row @else md:flex-row-reverse @endif items-center bg-jalur-soft rounded-[16px] overflow-hidden">
                        <div class="text-wrapper basis-1/2 flex">
                            <h1
                                class="text-[14px] mt-[12px] md:mt-0 md:text-[24px] xl:text-[32px] font-medium md:leading-[30px] xl:leading-[35px] text-center md:text-start">
                                {{ $item['description'] }}
                            </h1>
                        </div>
                        <div
                            class="img-wrapper basis-1/2 max-h-[120px] xl:max-h-[180px] overflow-hidden md:overflow-visible">
                            <img src="{{ $item['img'] }}"
                                class="md:-mt-[32px] @if ($loop->index % 2 == 0) float-right @endif" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
