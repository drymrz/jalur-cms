@php
    use App\Models\WebSetting;
    $settings = WebSetting::first();
@endphp

<header
    class="sticky top-0 flex w-full bg-white xl:z-[999] max-xl:z-[9999] drop-shadow-1 dark:bg-box-dark dark:drop-shadow-none min-h-[70px]">
    <!-- Navigation -->
    <div
        class="flex flex-1 nav-wrap md:ps-[20px] ps-[30px] pe-[30px] max-xs:ps-[15px] max-xs:pe-[15px] bg-white dark:bg-box-dark">
        <!-- Header left menu -->

        <ul class="flex items-center mb-0 list-none nav-left ps-0 gap-x-[14px] gap-y-[9px]">
            <!-- Navigation Items -->
            <li class="xl:hidden xl:[&.flex]:flex" id="topMenu-logo">
                <div
                    class="flex md:w-[190px] xs:w-[170px] max-xs:w-[100px] max-md:pe-[30px] max-xs:pe-[15px] border-e border-[#edf2f9] dark:border-box-dark-up logo-wrapper items-center h-[71px] dark:bg-box-dark-up">
                    <a href="/" class="block text-center">
                        <div class="logo-full">
                            <img class="md:ps-[15px] dark:hidden" src={{ '/img/' . $settings->logo_image }}
                                alt="Logo">
                            <img class="md:ps-[15px] hidden dark:block"
                                src={{ '/img/' . $settings->alternate_logo_image }} alt="Logo">
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <a class="flex items-center justify-center sm:min-w-[40px] sm:w-[40px] sm:h-[40px] min-w-[34px] h-[34px] rounded-full bg-transparent hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark dark:hover:bg-box-dark-up group transition duration-200 ease-in-out text-[#525768] dark:text-subtitle-dark max-md:dark:hover:bg-box-dark-up sm:text-[20px] text-[19px] cursor-pointer xl:[&.hide]:hidden max-md:bg-normalBG max-md:dark:bg-box-dark-up max-md:dark:hover:text-subtitle-dark"
                    id="slim-toggler">
                    <i class="uil uil-align-center-alt text-current [&.is-folded]:hidden flex items-center"></i>
                </a>
            </li>
        </ul>

        <!-- Header right menu -->

        <div class="flex items-center ms-auto py-[15px] sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] relative">
            <button type="button"
                class="flex xl:hidden items-center text-[22px] text-[#a0a0a0] dark:text-subtitle-dark min-h-[40px]"
                id="author-dropdown">
                <i class="uil uil-ellipsis-v text-[18px]"></i>
            </button>
            <ul id="right-ellipsis-trigger"
                class="xl:flex hidden items-center justify-end flex-auto mb-0 list-none ps-0 sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] max-xl:absolute max-xl:z-[1000] max-xl:m-0 max-xl:rounded-lg max-xl:border-none max-xl:bg-white max-xl:bg-clip-padding max-xl:text-left max-xl:shadow-lg max-xl:dark:bg-neutral-700 max-xl:[&.active]:flex max-xl:end-0 max-xl:px-[20px] max-sm:px-[15px] max-xl:py-[10px] max-xl:top-[70px]">
                <li>
                    <div class="relative" data-te-dropdown-ref>
                        <button type="button" id="author-dropdown" data-te-dropdown-toggle-ref aria-expanded="false"
                            class="flex items-center me-1.5 text-body dark:text-subtitle-dark text-sm font-medium capitalize rounded-full md:me-0 group whitespace-nowrap">
                            <span class="sr-only">Open user menu</span>
                            <img class="min-w-[32px] w-8 h-8 rounded-full xl:me-2"
                                src=" @if (auth()->user()->image) {{ auth()->user()->image }} @else /img-teams/placeholder.jpg @endif"
                                alt="user photo">
                            <span class="hidden xl:block">{{ auth()->user()->name }}</span>
                            <i
                                class="uil uil-angle-down text-light dark:text-subtitle-dark text-[18px] hidden xl:block"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block"
                            aria-labelledby="author-dropdown" data-te-dropdown-menu-ref>
                            <div
                                class="min-w-[310px] max-sm:min-w-full pt-4 px-[15px] py-[12px] bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4">
                                <figure
                                    class="flex items-center text-sm rounded-[8px] bg-section dark:bg-box-dark-up py-[20px] px-[25px] mb-[12px] gap-[15px]">
                                    <img class="w-8 h-8 rounded-full bg-regular"
                                        src="@if (auth()->user()->image) {{ auth()->user()->image }} @else /img-teams/placeholder.jpg @endif"
                                        alt="user">
                                    <figcaption>
                                        <div class="text-dark dark:text-title-dark mb-0.5 text-sm">
                                            {{ auth()->user()->name }}
                                        </div>
                                        <div class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                            {{ auth()->user()->username }}</div>
                                    </figcaption>
                                </figure>
                                <ul
                                    class="m-0 pb-[10px] overflow-x-hidden overflow-y-auto scrollbar bg-transparent max-h-[230px]">

                                    <li class="w-full">
                                        <div
                                            class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                            <button
                                                class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                                <i class="text-[16px] uil uil-user"></i>
                                                Profile
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="flex w-full items-center justify-center text-sm font-medium bg-normalBG dark:bg-box-dark-up h-[50px] text-light hover:text-primary dark:hover:text-subtitle-dark dark:text-title-dark rounded-b-6 gap-[6px]">
                                        <i class="uil uil-sign-out-alt"></i> Sign Out</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </li>
            </ul>
        </div>

    </div>
    <!-- End: Navigation -->
</header>
