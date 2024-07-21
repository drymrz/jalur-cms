@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Breadcrumb Section -->
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">App Version</h4>
                <!-- Breadcrumb Navigation -->
                <div class="flex flex-wrap justify-center">
                    <nav>
                        <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                            <!-- Parent Link -->
                            <li class="inline-flex items-center">
                                <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group"
                                    href="/admin">
                                    <i
                                        class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Admin</a>
                            </li>


                            <!-- Child (Current Page) -->
                            <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                aria-current="page">
                                <span
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">App
                                    Version</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <div class="grid grid-cols-12 gap-5">
        <div class="grid col-span-12 lg:col-span-9 gap-5">
            @foreach ($versions as $version)
                <div class="w-full col-span-12">
                    <div class="relative p-0 m-0 bg-white dark:bg-box-dark rounded-10">
                        <div
                            class="ssm:h-auto px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-regular dark:border-box-dark-up border-b">
                            <h3
                                class="mb-0 py-[16px] max-sm:pb-[5px] inline-flex items-center flex-wrap text-[18px] font-semibold gap-[15px]">
                                <span class="text-lg font-medium text-dark dark:text-title-dark">
                                    Version {{ $version->version_number }} </span>
                                <span class="mx-2 text-lg font-medium text-dark dark:text-title-dark">-</span>
                                <span
                                    class="text-[#868eae] dark:text-subtitle-dark text-base font-normal">{{ $version->getFormattedReleaseDateAttribute() }}</span>
                            </h3>
                            <div
                                class="flex items-center gap-y-[10px] gap-x-[10px] justify-between absolute top-[15px] end-[27px] z-10">
                                <div class="flex items-center" data-te-dropdown-ref>
                                    <button class="text-[18px] text-light dark:text-subtitle-dark" type="button"
                                        id="contact-1" data-te-dropdown-toggle-ref aria-expanded="false">
                                        <i class="uil uil-ellipsis-h text-[24px] text-light-extra"></i>
                                    </button>
                                    <ul class="absolute z-[1000] ltr:float-left rtl:float-right hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down [&[data-te-dropdown-show]]:block opacity-100 px-[15px] py-[10px]"
                                        aria-labelledby="contact-1" data-te-dropdown-menu-ref>
                                        <li>
                                            <a href='/admin/versions/{{ $version->version_number }}'
                                                class="flex items-center gap-[10px] mb-[10px] capitalize text-light dark:text-subtitle-dark group hover:text-primary text-[14px]">
                                                <i
                                                    class="uil uil-edit text-body dark:text-subtitle-dark group-hover:text-current text-[15px]"></i>
                                                edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="/admin/versions/{{ $version->version_number }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure want to delete Version {{ $version->version_number }}?')"
                                                    class="flex items-center gap-[10px] capitalize text-light dark:text-subtitle-dark group hover:text-primary text-[14px]">
                                                    <i
                                                        class="uil uil-trash-alt text-body dark:text-subtitle-dark group-hover:text-current text-[15px]"></i>
                                                    delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="p-[25px]">
                            <div class="mb-[20px]">
                                <span
                                    class="inline-block bg-secondary mb-4 px-2 py-[5px] text-white dark:text-title-dark text-xs font-medium leading-4 tracking-[1.4px] rounded">
                                    Update </span>
                                <ul class="mb-0">
                                    <li
                                        class="relative ltr:pl-5 rtl:pr-5 text-body dark:text-subtitle-dark text-base after:absolute ltr:after:left-0 rtl:after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-1.5 after:bg-secondary after:rounded-full">
                                        {{ $version->content }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-full col-span-12 lg:col-span-3 order-first xl:order-1">
            <button type="button" data-te-toggle="modal" data-te-target="#versionModal"
                class="w-full justify-center bg-primary rounded-4 text-white flex items-center gap-x-[8px]
             gap-y-[4px] text-[14px] py-0 cursor-pointer border border-solid border-transparent font-medium capitalize shadow-[0_5px_10px_rgba(130,49,211,0.1)] px-[15px] h-[45px] max-md:mt-[10px]"
                data-te-ripple-init="" data-te-ripple-color="light">
                <i class="uil uil-plus"></i>
                add new app Version
            </button>
        </div>
    </div>
    @include('admin.versions.addModal')
@endsection
