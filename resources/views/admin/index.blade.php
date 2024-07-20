@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-[25px]">
        <div class="col-span-12">

            <div class="bg-white dark:bg-box-dark rounded-10">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 md:col-span-6">
                        <div class="flex justify-center">
                            <div class="xl:px-[50px] px-[30px] md:py-[55px] pt-[30px] pb-[15px] flex-[1_1_auto]">
                                <h1 class="text-dark dark:text-title-dark text-[30px] font-semibold leading-[1.2666666667]">
                                    Hey {{ auth()->user()->name }}!
                                    Welcome to the Dashboard</h1>
                                <p
                                    class="mt-[14px] mb-[22px] text-[16px] text-dark/[.9] dark:text-subtitle-dark leading-[1.6875]">
                                    Here you can manage all your data, analytics, and more.
                                </p><button type="button"
                                    class="bg-primary border-primary hover:bg-primary-hbr h-[50px] text-[15px] font-medium text-white capitalize inline-flex items-center justify-center rounded-4 px-[25px]"
                                    data-te-ripple-init="" data-te-ripple-color="light">
                                    Explore More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <img class="object-contain brightness-[.9] p-[32px]" src="/img-teams/hero.webp" alt="img">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-12 3xl:col-span-4 lg:col-span-6">
            <div
                class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative h-full">
                <div
                    class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                    <h2
                        class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        calendar
                    </h2>
                </div>
                <div class="px-[25px] md:pb-[25px] max-lg:flex justify-center">
                    <div class="max-h-[404px] scrollbar overflow-y-auto max-lg:max-w-[450px]">
                        <div id="widget-datepicker"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-12 3xl:col-span-4 md:col-span-6">
            <div
                class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative h-full">
                <div
                    class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto max-sm:mb-[15px]">
                    <h2
                        class="mb-0 inline-flex items-center py-[16px] max-sm:pb-[5px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        App Version
                    </h2>
                    <div class="sm:py-[16px] flex items-center gap-[15px] max-xs:flex-wrap max-xs:justify-center "
                        data-te-dropdown-ref>
                        <button class="text-[18px] text-light dark:text-subtitle-dark" type="button" id="timeline"
                            data-te-dropdown-toggle-ref aria-expanded="false">
                            <i class="uil uil-ellipsis-h"></i>
                        </button>
                        <ul class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down [&[data-te-dropdown-show]]:block opacity-100"
                            aria-labelledby="timeline" data-te-dropdown-menu-ref>
                            <li>
                                <a class="block w-full px-4 py-2 text-sm font-normal capitalize bg-transparent whitespace-nowrap text-neutral-700 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-subtitle-dark dark:hover:bg-box-dark-up"
                                    href="#" data-te-dropdown-item-ref>
                                    <i class="uil uil-file"></i> CSV </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-[25px] pt-0">
                    <ol class="border-l border-neutral-300 dark:border-neutral-500">
                        <!--First item-->
                        @foreach ($versions as $version)
                            <li class="mb-[25px] last:mb-0">
                                <div class="flex-start flex items-center">
                                    <div class="-ms-[5px] me-3 h-[10px] min-w-[10px] rounded-full bg-danger"></div>
                                    <div
                                        class="flex items-center justify-between gap-x-[30px] gap-y-[7px] max-ssm:flex-wrap w-full">
                                        <div class="text-[14px] font-medium text-theme-gray dark:text-subtitle-dark">
                                            Version
                                            {{ $version->version_number }},
                                            {{-- format date to day, month, year --}}
                                            <span>{{ date('d F Y', strtotime($version->release_date)) }}</span>
                                        </div>
                                        <div class="capitalize text-[13px] font-normal text-light dark:text-subtitle-dark">
                                            {{ \Carbon\Carbon::parse($version->release_date)->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection
