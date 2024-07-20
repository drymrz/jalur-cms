@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Breadcrumb Section -->
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Features Section</h4>
                <!-- Breadcrumb Navigation -->
                <div class="flex flex-wrap justify-center">
                    <nav>
                        <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                            <!-- Parent Link -->
                            <li class="inline-flex items-center">
                                <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group"
                                    href="index.html">
                                    <i
                                        class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Admin</a>
                            </li>

                            <!-- Child (Current Page) -->
                            <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                aria-current="page">
                                <span
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Features
                                    Section</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- contents -->

    <div>
        <div class="grid grid-cols-12 gap-[25px]">
            <div class="col-span-12">
                <div class="px-4 bg-white mb-[25px] dark:bg-box-dark rounded-10">
                    <ul class="flex flex-wrap items-center">
                        <li data-filter="all"
                            class="cursor-pointer relative inline-flex px-3 text-light dark:text-subtitle-dark py-4 [&.mixitup-control-active]:text-primary [&.mixitup-control-active]:after:absolute [&.mixitup-control-active]:ltr:after:left-0 [&.mixitup-control-active]:rtl:after:right-0 [&.mixitup-control-active]:after:bottom-0 [&.mixitup-control-active]:after:w-full [&.mixitup-control-active]:after:h-0.5 [&.mixitup-control-active]:after:bg-primary [&.mixitup-control-active]:after:rounded-10 mixitup-control-active">
                            All</li>
                        @foreach ($types as $type)
                            {{-- split string with and add - --}}
                            <li data-filter=".{{ strtolower(preg_replace('/\s+/', '-', $type->name)) }}"
                                class="cursor-pointer relative inline-flex px-3 text-light dark:text-subtitle-dark py-4 [&.mixitup-control-active]:text-primary [&.mixitup-control-active]:after:absolute [&.mixitup-control-active]:ltr:after:left-0 [&.mixitup-control-active]:rtl:after:right-0 [&.mixitup-control-active]:after:bottom-0 [&.mixitup-control-active]:after:w-full [&.mixitup-control-active]:after:h-0.5 [&.mixitup-control-active]:after:bg-primary [&.mixitup-control-active]:after:rounded-10">
                                {{ $type->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[25px] mixitup-gallery">
            @foreach ($imageFeatures as $imageFeature)
                <a href={{ '/admin/features/' . $imageFeature->id . '/edit' }}
                    class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix {{ strtolower(preg_replace('/\s+/', '-', $imageFeature->type->name)) }}">
                    <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="{{ $imageFeature->image }}"
                            alt="presentation web-design">
                        <figcaption>
                            <div class="px-6 py-5">
                                <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">
                                    {{ $imageFeature->title }}
                                </h1>
                                <p class="mb-0 text-light dark:text-subtitle-dark text-13 line-clamp-2">
                                    {{ $imageFeature->description }}
                                </p>
                            </div>
                        </figcaption>
                    </figure>

                </a>
            @endforeach
        </div>
    </div>
@endsection
