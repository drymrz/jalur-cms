@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Web Settings</h4>
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
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Web
                                    Setting</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <form action="/admin/websetting/{{ $webSetting->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-12 gap-[25px]">
            <div class="col-span-12 xl:col-span-6">
                <div
                    class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div
                        class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1
                            class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Metadata
                        </h1>
                    </div>
                    <div class="p-[25px]">
                        <div class="pb-4">
                            <label for="webTitle"
                                class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Web
                                Title</label>
                            <div class="flex items-center flex-1">
                                <div
                                    class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[15px] py-[12px] min-h-[50px] focus:ring-primary focus:border-primary gap-[12px]  flex items-center">
                                    <span
                                        class="inline-flex items-center text-sm text-light dark:text-subtitle-dark me-[8px]">
                                        <i class="uil uil-globe text-[16px]"></i>
                                    </span>
                                    <input type="text" id="webTitle"
                                        class="outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full bg-transparent"
                                        placeholder="Jalur Landing Page" required name="web_title"
                                        value="{{ $webSetting->web_title }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-4">
                            <label for="downloadLink"
                                class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Download
                                Link</label>
                            <div class="flex items-center flex-1">
                                <div
                                    class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[15px] py-[12px] min-h-[50px] focus:ring-primary focus:border-primary gap-[12px]  flex items-center">
                                    <span
                                        class="inline-flex items-center text-sm text-light dark:text-subtitle-dark me-[8px]">
                                        <i class="uil uil-download-alt text-[16px]"></i>
                                    </span>
                                    <input type="text" id="downloadLink"
                                        class="outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full bg-transparent"
                                        placeholder="appstore link" value="{{ $webSetting->download_link }}"
                                        name="download_link" required>
                                </div>
                            </div>
                        </div>
                        <div class="pb-4">
                            <label for="videoLink"
                                class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Video
                                Link</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <div
                                    class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[15px] py-[12px] min-h-[50px] focus:ring-primary focus:border-primary gap-[12px] flex items-center">
                                    <span
                                        class="inline-flex items-center text-sm text-light dark:text-subtitle-dark me-[8px]">
                                        <i class="uil uil-youtube text-[16px]"></i>
                                    </span>
                                    <input type="text" id="videoLink"
                                        class="outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full bg-transparent"
                                        placeholder="youtube link" value="{{ $webSetting->video_link }}" name="video_link"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="pb-4">
                            <label for="instagramLink"
                                class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Instagram
                                Link</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <div
                                    class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[15px] py-[12px] min-h-[50px] focus:ring-primary focus:border-primary gap-[12px] flex items-center">
                                    <span
                                        class="inline-flex items-center text-sm text-light dark:text-subtitle-dark me-[8px]">
                                        <i class="uil uil-instagram text-[16px]"></i>
                                    </span>
                                    <input type="text" id="instagramLink"
                                        class="outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full bg-transparent"
                                        placeholder="instagram link" value="{{ $webSetting->instagram_link }}"
                                        name="instagram_link" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-[15px] mt-[14px]">
                            <button type="button"
                                class="px-[30px] h-[44px] text-body dark:text-subtitle-dark bg-regular dark:bg-box-dark-up border-regular dark:border-box-dark-up font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear hover:opacity-60"
                                data-te-ripple-init="" data-te-ripple-color="dark">Cancel</button>
                            <button type="submit"
                                class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear"
                                data-te-ripple-init="" data-te-ripple-color="light">save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div
                    class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px]">
                    <div
                        class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1
                            class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Web Icon (.ico)
                        </h1>
                    </div>
                    <div class="p-[25px]">
                        <figure
                            class="relative mb-0 max-w-[120px] h-[120px] inline-block bg-normalBG dark:bg-box-dark-up rounded">
                            <img id="web-icon-upload-image"
                                class="max-w-[120px] min-w-[120px] h-[120px] rounded inline-block object-cover"
                                src="@if ($webSetting['icon_image']) {{ '/icons/' . $webSetting['icon_image'] }} @else /icons/placeholder.png @endif"
                                alt="author">
                            <div class="absolute rounded-md bottom-0 end-[5px]">
                                <label id="web-icon-uploader" for="web-icon-dropzone-file"
                                    class="flex flex-col items-center justify-center w-[40px] h-[40px] transition duration-150 ease-linear border-white border-solid border-4 rounded-full cursor-pointer xs:px-3 group bg-primary">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="text-[16px] text-white">
                                            <i class="uil uil-camera"></i>
                                        </div>
                                    </div>
                                    <input id="web-icon-dropzone-file" type="file" class="hidden" name="icon_image"
                                        accept=".ico">
                                </label>
                            </div>
                        </figure>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px]">
                    <div
                        class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1
                            class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Logo Image
                        </h1>
                    </div>
                    <div class="p-[25px]">
                        <figure
                            class="relative mb-0 max-w-[300px] h-[120px] inline-block bg-normalBG dark:bg-box-dark-up rounded">
                            <img id="logo-image-upload-image"
                                class="max-w-[300px] min-w-[120px] h-[120px] rounded inline-block object-contain"
                                src="@if ($webSetting['logo_image']) {{ '/img/' . $webSetting['logo_image'] }} @else /icons/placeholder.png @endif"
                                alt="author">
                            <div class="absolute rounded-md bottom-0 end-[5px]">
                                <label id="logo-image-uploader" for="logo-image-dropzone-file"
                                    class="flex flex-col items-center justify-center w-[40px] h-[40px] transition duration-150 ease-linear border-white border-solid border-4 rounded-full cursor-pointer xs:px-3 group bg-primary">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="text-[16px] text-white">
                                            <i class="uil uil-camera"></i>
                                        </div>
                                    </div>
                                    <input id="logo-image-dropzone-file" type="file" class="hidden" name="logo_image"
                                        accept="image/png, .svg">
                                </label>
                            </div>
                        </figure>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px]">
                    <div
                        class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1
                            class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Alternate Logo Image (Dark)
                        </h1>
                    </div>
                    <div class="p-[25px]">
                        <figure
                            class="relative mb-0 max-w-[300px] h-[120px] inline-block bg-normalBG dark:bg-box-dark-up rounded">
                            <img id="altlogo-image-upload-image"
                                class="max-w-[300px] min-w-[120px] h-[120px] rounded inline-block object-contain"
                                src="@if ($webSetting['alternate_logo_image']) {{ '/img/' . $webSetting['alternate_logo_image'] }} @else /icons/placeholder.png @endif"
                                alt="author">
                            <div class="absolute rounded-md bottom-0 end-[5px]">
                                <label id="altlogo-image-uploader" for="altlogo-image-dropzone-file"
                                    class="flex flex-col items-center justify-center w-[40px] h-[40px] transition duration-150 ease-linear border-white border-solid border-4 rounded-full cursor-pointer xs:px-3 group bg-primary">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="text-[16px] text-white">
                                            <i class="uil uil-camera"></i>
                                        </div>
                                    </div>
                                    <input id="altlogo-image-dropzone-file" type="file" class="hidden"
                                        name="alternate_logo_image" accept="image/png, .svg">
                                </label>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
    </form>
    </div>

    @push('scripts')
        <script>
            localStorage.removeItem("webIconImage");
            localStorage.removeItem("webLogoImage");
            localStorage.removeItem("alternateLogoImage");
        </script>
    @endpush
@endsection
