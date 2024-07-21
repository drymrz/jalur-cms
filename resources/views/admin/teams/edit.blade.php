@extends('admin.layouts.main')
@section('content')
    <form action="/admin/teams/{{ $team['slug'] }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12">

                <!-- Breadcrumb Section -->
                <div
                    class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                    <!-- Title -->
                    <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">profile settings</h4>
                    <!-- Breadcrumb Navigation -->
                    <div class="flex flex-wrap justify-center">
                        <nav>
                            <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                <!-- Parent Link -->
                                <li class="inline-flex items-center">
                                    <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group"
                                        href="/admin">
                                        <i
                                            class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                                </li>
                                <!-- Middle (Conditional) -->

                                <li
                                    class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                    <span
                                        class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">App</span>
                                </li>

                                <!-- Child (Current Page) -->
                                <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                    aria-current="page">
                                    <span
                                        class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">profile
                                        settings</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px]">
            <!-- Start sidebar -->
            <div class="col-span-12 2xl:col-span-3">
                <!-- Auhtor -->
                <div class="bg-white dark:bg-box-dark rounded-[10px] text-center">
                    <div class="sm:px-[25px] px-[15px] pt-[25px] pb-[18px]">
                        <figure
                            class="relative mb-0 max-w-[120px] h-[120px] inline-block bg-normalBG dark:bg-box-dark-up rounded-full">
                            <img id="widget-profile-upload-image"
                                class="max-w-[120px] min-w-[120px] h-[120px] rounded-full inline-block object-cover"
                                src="@if ($team['image']) {{ '/img-teams/' . $team['image'] }} @else /img-teams/placeholder.jpg @endif"
                                alt="author">
                            <div class="absolute rounded-md bottom-0 end-[5px]">
                                <label id="widget-profile-uploader" for="widget-profile-dropzone-file"
                                    class="flex flex-col items-center justify-center w-[40px] h-[40px] transition duration-150 ease-linear border-white border-solid border-4 rounded-full cursor-pointer xs:px-3 group bg-primary">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="text-[16px] text-white">
                                            <i class="uil uil-camera"></i>
                                        </div>
                                    </div>
                                    <input id="widget-profile-dropzone-file" type="file" class="hidden" name="image"
                                        accept="image/png, image/jpg, image/webp, .svg">
                                </label>
                            </div>
                        </figure>
                        <figcaption class="mt-[28px]">
                            <h3
                                class=" text-[18px] mb-[6px] font-medium text-dark dark:text-title-dark leading-[23px] hover:[&>a]:text-primary">
                                <p class="text-dark dark:text-title-dark">
                                    {{ $team['name'] }}
                                </p>
                            </h3>
                            <p class="text-[15px] text-light dark:text-subtitle-dark">
                                {{ $team['role'] }}
                            </p>
                        </figcaption>
                    </div>
                    <div class="border-t border-regular dark:border-box-dark-up">
                        <nav class="px-[20px] pt-8 pb-5">
                            <ul class="listItemActive" role="tablist" data-te-nav-ref>
                                <li role="presentation">
                                    <a href="#tabs-editProfile" data-te-toggle="pill" data-te-target="#tabs-editProfile"
                                        role="tab" aria-controls="tabs-editProfile" aria-selected="true"
                                        class="[&.active]:bg-primary/10 [&.active]:text-primary bg-transparent cursor-pointer dark:text-subtitle-dark duration-300 flex font-normal gap-[12px] items-center px-[10px] [&.active]:px-[20px] hover:px-[20px] py-[10px] rounded-[6px] text-[14px] text-light transition-[0.3s] active"
                                        data-te-nav-active>
                                        <i class="uil uil-user text-[18px]"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabs-socialProfile" data-te-toggle="pill" data-te-target="#tabs-socialProfile"
                                        role="tab" aria-controls="tabs-socialProfile" aria-selected="false"
                                        class="[&.active]:bg-primary/10 [&.active]:text-primary bg-transparent cursor-pointer dark:text-subtitle-dark duration-300 flex font-normal gap-[12px] items-center px-[10px] [&.active]:px-[20px] hover:px-[20px] hover:bg-primary/10 hover:text-primary py-[10px] rounded-[6px] text-[14px] text-light transition-[0.3s]">
                                        <i class="uil uil-users-alt text-[18px]"></i>
                                        <span>Social Profiles</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-span-12 2xl:col-span-9">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-editProfile" role="tabpanel" aria-labelledby="tabs-editProfile-tab" data-te-tab-active>
                    <div class="bg-white dark:bg-box-dark rounded-10">
                        <div
                            class="py-[18px] px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-regular dark:border-box-dark-up border-b">
                            <h1 class="mb-0 text-lg font-medium text-dark dark:text-title-dark">Edit Profile</h1>
                            <span class="mb-0.5 text-light dark:text-subtitle-dark text-13 font-normal">Set Up Your Personal
                                Information</span>
                        </div>
                        <div class="px-[25px] pb-[50px] pt-[40px]">
                            <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px] content-center">
                                <div class="col-span-12 xl:col-start-4 xl:col-span-6">

                                    <div class="mb-6">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Name:</label>
                                        <input type="text" id="name" name="name"
                                            class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                            placeholder="John Doe" autocomplete="off" required value="{{ $team['name'] }}">
                                    </div>

                                    <div class="mb-6">
                                        <label for="role"
                                            class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Role:</label>
                                        <input type="text" id="role" name="role"
                                            class="w-full rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary"
                                            placeholder="Designer" autocomplete="off" value="{{ $team['role'] }}">
                                    </div>
                                    <div class="mb-6">
                                        <label for="experience"
                                            class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Experience</label>
                                        <textarea id="experience" rows="3" name="experience"
                                            class=" rounded-6 border-regular border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary resize-none"
                                            placeholder="type Here...">{{ $team['experience'] }}</textarea>
                                    </div>

                                    <div class="static flex flex-wrap items-center gap-[10px] sm:mt-[43px] mt-[27] ">
                                        <button type="submit"
                                            class="group text-[13px] border-normal font-semibold text-white dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-primary-hbr bg-primary transition duration-300"
                                            data-te-ripple-init="" data-te-ripple-color="light">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-socialProfile" role="tabpanel" aria-labelledby="tabs-socialProfile-tab">
                    <div class="bg-white dark:bg-box-dark rounded-10">
                        <div
                            class="py-[18px] px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-regular dark:border-box-dark-up border-b">
                            <h1 class="mb-0 text-lg font-medium text-dark dark:text-title-dark">Social Profiles</h1>
                            <span class="mb-0.5 text-light dark:text-subtitle-dark text-13 font-normal">Set Up Your Social
                                Profiles</span>
                        </div>
                        <div class="px-[25px] pb-[50px] pt-[40px]">
                            <div class="grid grid-cols-12 sm:gap-[25px] gap-y-[25px] content-center">
                                <div class="col-span-12 xl:col-start-4 xl:col-span-6">
                                    <div class="mb-6">

                                        <label for="linkedin"
                                            class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">
                                            linkedin:
                                        </label>
                                        <div
                                            class="w-full rounded-6 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up outline-none placeholder:text-[#A0A0A0] text-theme-gray dark:text-subtitle-dark inline-flex items-center">
                                            <button type="button"
                                                class="bg-linkedin border-linkedin text-white h-[48px] inline-flex items-center justify-center ms-[1px] outline-none rounded-4 shadow-none w-[48px]">

                                                <i class="uil uil-linkedin text-[20px]"></i>

                                            </button>
                                            <input id="linkedin" name="linkedin"
                                                class="bg-transparent border-none outline-none shadow-none min-h-[50px] placeholder:text-[14px] placeholder:text-theme-gray dark:placeholder:text-subtitle-dark px-[20px] w-full"
                                                type="text" placeholder="linkedin url"
                                                value="{{ $team['linkedin'] }}">
                                        </div>

                                    </div>
                                    <div class="mb-6">

                                        <label for="website"
                                            class="block mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">
                                            Personal website:
                                        </label>
                                        <div
                                            class="w-full rounded-6 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up outline-none placeholder:text-[#A0A0A0] text-theme-gray dark:text-subtitle-dark inline-flex items-center">
                                            <button type="button"
                                                class="bg-twitter border-twitter text-white h-[48px] inline-flex items-center justify-center ms-[1px] outline-none rounded-4 shadow-none w-[48px]">

                                                <i class="uil uil-globe text-[20px]"></i>

                                            </button>
                                            <input id="website" name="website"
                                                class="bg-transparent border-none outline-none shadow-none min-h-[50px] placeholder:text-[14px] placeholder:text-theme-gray dark:placeholder:text-subtitle-dark px-[20px] w-full"
                                                type="text" placeholder="website url" value="{{ $team['website'] }}">
                                        </div>

                                    </div>
                                    <div class="static flex flex-wrap items-center gap-[10px] sm:mt-[43px] mt-[24] ">
                                        <button type="submit"
                                            class="group text-[13px] border-normal font-semibold text-white dark:text-title-dark btn-outlined h-[37px] dark:border-box-dark-up sm:px-[20px] px-[15px] rounded-6 flex items-center gap-[5px] leading-[22px] hover:text-white hover:bg-primary-hbr bg-primary transition duration-300"
                                            data-te-ripple-init="" data-te-ripple-color="light">
                                            Update Social profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
        <script>
            localStorage.removeItem('widgetProfileImage');
        </script>
    @endpush
@endsection
