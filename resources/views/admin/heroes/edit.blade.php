@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Breadcrumb Section -->
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Hero Section -
                    {{ $hero->type->name }}</h4>
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
                            <!-- Middle (Conditional) -->

                            <li
                                class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                <span
                                    class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Hero
                                    Section</span>
                            </li>

                            <!-- Child (Current Page) -->
                            <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                aria-current="page">
                                <span
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Hero
                                    - {{ $hero->type->name }}</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    @if ($hero->type->name != 'Download')
        <form>
            <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px]">
                <div class="col-span-12">
                    @if ($hero->image)
                        <div class="relative z-[1] bg-dark rounded-10 w-full flex mb-[25px]" data-te-ripple-init
                            data-te-ripple-color="dark">
                            <img id="profile-upload-image"
                                class="w-full sm:min-h-[350px] sm:max-h-[350px] object-cover rounded-10"
                                src={{ $hero->image }} alt="banner">
                            <div class="absolute rounded-md top-[15px] end-[15px]">
                                <label id="profile-uploader" for="profile-dropzone-file"
                                    class="flex flex-col items-center justify-center px-4 py-2 transition duration-150 ease-linear border-white border-solid rounded-lg cursor-pointer border-1 xs:px-3 border-opacity-30 hover:bg-white hover:text-dark group">
                                    <div class="flex flex-col items-center justify-center">
                                        <p class="text-white gap-[8px] group-hover:text-dark"><i
                                                class="uil uil-camera text-[16px] text-white group-hover:text-dark"></i>
                                            Change
                                            Image</p>
                                    </div>
                                    <input id="profile-dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>
                    @endif
                    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="tabs-editProfile" role="tabpanel" aria-labelledby="tabs-editProfile-tab" data-te-tab-active>
                        <div class="bg-white dark:bg-box-dark rounded-10">
                            <div
                                class="py-[18px] px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-regular dark:border-box-dark-up border-b">
                                <h1 class="mb-0 text-lg font-medium text-dark dark:text-title-dark">Edit Hero</h1>
                                <span class="mb-0.5 text-light dark:text-subtitle-dark text-13 font-normal">Configure the
                                    title
                                    and
                                    description</span>
                            </div>
                            <div class="px-[25px] pb-[50px] pt-[40px]">
                                <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px] content-center">
                                    <div class="col-span-12 xl:col-start-4 xl:col-span-6">

                                        <div class="mb-6">
                                            <label for="title"
                                                class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Title:</label>
                                            <input type="text" id="title"
                                                class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                                placeholder="Duran Clayton" autocomplete="off" name="title"
                                                value="{{ $hero->title }}" required>
                                        </div>
                                        <div class="mb-6">
                                            <label for="description"
                                                class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Description</label>
                                            <textarea id="description" rows="3"
                                                class=" rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary resize-none"
                                                placeholder="type Here..." name="description">{{ $hero->description }}</textarea>
                                        </div>
                                        @if ($hero->title_2)
                                            <div class="mb-6">
                                                <label for="title_2"
                                                    class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Title
                                                    2:</label>
                                                <input type="text" id="title"
                                                    class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                                    placeholder="Duran Clayton" autocomplete="off" name="title"
                                                    value="{{ $hero->title_2 }}" required>
                                            </div>
                                        @endif
                                        @if ($hero->description_2)
                                            <div class="mb-6">
                                                <label for="descriptio2n"
                                                    class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Description2</label>
                                                <textarea id="description2" rows="3"
                                                    class=" rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary resize-none"
                                                    placeholder="type Here..." name="description_2">{{ $hero->description_2 }}</textarea>
                                            </div>
                                        @endif
                                        <div class="static flex flex-wrap items-center gap-[10px] sm:mt-[43px] mt-[27] ">
                                            <button type="submit"
                                                class="group text-[13px] border-normal font-semibold text-white dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-primary-hbr bg-primary transition duration-300"
                                                data-te-ripple-init="" data-te-ripple-color="light">
                                                Update Section
                                            </button>
                                            <a href="/admin/heroes"
                                                class="group text-[13px] font-semibold text-theme-gray bg-normalBG dark:bg-box-dark-up dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-dark transition duration-300 border-normal"
                                                data-te-ripple-init="" data-te-ripple-color="light">
                                                Back
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
    {{-- layout download type --}}
    @if ($hero->type->name == 'Download')
        <form>
            <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px]">
                <div class="grid grid-cols-12 col-span-12 sm:gap-[25px] gap-y-[25px]">
                    <div class="col-span-12 lg:col-span-3 order-last">
                        @if ($hero->image)
                            <div class="relative z-[1] bg-dark rounded-10 w-full flex mb-[25px]" data-te-ripple-init
                                data-te-ripple-color="dark">
                                <img id="profile-upload-image"
                                    class="w-full sm:min-h-[350px] sm:max-h-fit object-cover rounded-10"
                                    src={{ $hero->image }} alt="banner">
                                <div class="absolute rounded-md top-[15px] end-[15px]">
                                    <label id="profile-uploader" for="profile-dropzone-file"
                                        class="flex flex-col items-center justify-center px-4 py-2 transition duration-150 ease-linear border-white border-solid rounded-lg cursor-pointer border-1 xs:px-3 border-opacity-30 hover:bg-white hover:text-dark group">
                                        <div class="flex flex-col items-center justify-center">
                                            <p class="text-white gap-[8px] group-hover:text-dark"><i
                                                    class="uil uil-camera text-[16px] text-white group-hover:text-dark"></i>
                                                Change
                                                Image</p>
                                        </div>
                                        <input id="profile-dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-span-12 lg:col-span-9">
                        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-editProfile" role="tabpanel" aria-labelledby="tabs-editProfile-tab"
                            data-te-tab-active>
                            <div class="bg-white dark:bg-box-dark rounded-10">
                                <div
                                    class="py-[18px] px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-regular dark:border-box-dark-up border-b">
                                    <h1 class="mb-0 text-lg font-medium text-dark dark:text-title-dark">Edit Hero</h1>
                                    <span class="mb-0.5 text-light dark:text-subtitle-dark text-13 font-normal">Configure
                                        the
                                        title
                                        and
                                        description</span>
                                </div>
                                <div class="px-[25px] pb-[50px] pt-[40px]">
                                    <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px] content-center">
                                        <div class="col-span-12 xl:col-start-4 xl:col-span-6">

                                            <div class="mb-6">
                                                <label for="title"
                                                    class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Title:</label>
                                                <input type="text" id="title"
                                                    class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                                    placeholder="Duran Clayton" autocomplete="off" name="title"
                                                    value="{{ $hero->title }}" required>
                                            </div>
                                            <div class="mb-6">
                                                <label for="description"
                                                    class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Description</label>
                                                <textarea id="description" rows="3"
                                                    class=" rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary resize-none"
                                                    placeholder="type Here..." name="description">{{ $hero->description }}</textarea>
                                            </div>
                                            @if ($hero->title_2)
                                                <div class="mb-6">
                                                    <label for="title_2"
                                                        class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Title
                                                        2:</label>
                                                    <input type="text" id="title"
                                                        class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                                        placeholder="Duran Clayton" autocomplete="off" name="title"
                                                        value="{{ $hero->title_2 }}" required>
                                                </div>
                                            @endif
                                            @if ($hero->description_2)
                                                <div class="mb-6">
                                                    <label for="descriptio2n"
                                                        class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Description2</label>
                                                    <textarea id="description2" rows="3"
                                                        class=" rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary resize-none"
                                                        placeholder="type Here..." name="description_2">{{ $hero->description_2 }}</textarea>
                                                </div>
                                            @endif
                                            <div
                                                class="static flex flex-wrap items-center gap-[10px] sm:mt-[43px] mt-[27] ">
                                                <button type="submit"
                                                    class="group text-[13px] border-normal font-semibold text-white dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-primary-hbr bg-primary transition duration-300"
                                                    data-te-ripple-init="" data-te-ripple-color="light">
                                                    Update Section
                                                </button>
                                                <a href="/admin/heroes"
                                                    class="group text-[13px] font-semibold text-theme-gray bg-normalBG dark:bg-box-dark-up dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-dark transition duration-300 border-normal"
                                                    data-te-ripple-init="" data-te-ripple-color="light">
                                                    Back
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection
