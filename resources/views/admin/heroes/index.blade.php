@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Breadcrumb Section -->
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Hero Section</h4>
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
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Hero
                                    Section</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="grid grid-cols-12 md:gap-x-[25px] gap-y-[25px]">

        @foreach ($heroes as $hero)
            <div class="col-span-12 xl:col-span-4 md:col-span-6">
                <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                    <!-- Image Container -->
                    <div
                        class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden max-h-[150px]">
                        <!-- Image -->
                        <img alt="image-heroes" class="w-full rounded-10"
                            src="@if ($hero->image) {{ $hero->image }} @else /icons/placeholder.png @endif">
                    </div>
                    <!-- Caption and Metadata -->
                    <figcaption class="">
                        <!-- Where -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">
                            <span class="inline-block text-light dark:text-subtitle-dark text-15">{{ $hero->type->name }} -
                                {{ $hero->type->link }}</span>
                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                            <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary"
                                href="/admin/heroes/{{ $hero->slug }}/edit">{{ $hero->title }}</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">{{ $hero->description }}</p>
                    </figcaption>
                </figure>

            </div>
        @endforeach

    </div>
@endsection
