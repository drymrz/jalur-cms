@extends('admin.layouts.main')

@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div
                class="flex justify-between items-center gap-x-[30px] gap-y-[10px] mb-[30px] max-sm:mt-[10px] max-md:flex-col">
                <div class="flex items-center gap-x-[25px] gap-y-[10px] max-sm:flex-col">
                    <h4 class="text-dark dark:text-title-dark capitalize font-semibold text-[20px] leading-[28px]">Teams
                    </h4>
                    <div
                        class="flex items-center bg-white text-light-extra dark:text-subtitle-dark text-[16px] dark:bg-box-dark rounded-6 px-[18px] py-[15px] w-[280px] gap-x-[10px] h-[40px] shadow-[0_5px_5px_rgba(173,181,217,0.03)]">
                        <i class="uil uil-search text-[16px] text-light dark:text-subtitle-dark"></i>
                        <input type="search" placeholder="Search by name" autocomplete="off" name="search"
                            class="border-none bg-transparent w-full h-[40px] shadow-none outline-none  placeholder:text-light-extra dark:placeholder:text-subtitle-dark max-sm:me-0 block text-14 text-dark dark:text-title-dark ps-0 px-[1.2rem] py-1.5 search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer">
                    </div>
                </div>
                <!-- Create New  EventTwo -->
                <button type="button" data-te-toggle="modal" data-te-target="#teamModal"
                    class="bg-primary rounded-4 text-white flex items-center gap-x-[8px]
             gap-y-[4px] text-[14px] py-0  cursor-pointer border border-solid border-transparent font-medium capitalize shadow-[0_5px_10px_rgba(130,49,211,0.1)] px-[15px] h-[45px] max-md:mt-[10px]"
                    data-te-ripple-init="" data-te-ripple-color="light">
                    <i class="uil uil-plus"></i>
                    add new
                </button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5">
        @foreach ($teams as $team)
            <div class="col-span-12 2xl:col-span-3 xl:col-span-4 sm:col-span-6">
                <div class="relative bg-white rounded-10 dark:bg-box-dark py-[25px] px-[25px]">
                    <div
                        class="flex items-center gap-y-[10px] gap-x-[10px] justify-between absolute top-[15px] end-[27px] z-10">
                        <div class="flex items-center" data-te-dropdown-ref>
                            <button class="text-[18px] text-light dark:text-subtitle-dark" type="button" id="contact-1"
                                data-te-dropdown-toggle-ref aria-expanded="false">
                                <i class="uil uil-ellipsis-h text-[24px] text-light-extra"></i>
                            </button>
                            <ul class="absolute z-[1000] ltr:float-left rtl:float-right hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down [&[data-te-dropdown-show]]:block opacity-100 px-[15px] py-[10px]"
                                aria-labelledby="contact-1" data-te-dropdown-menu-ref>
                                <li>
                                    <a href='/admin/teams/{{ $team['slug'] }}/edit'
                                        class="flex items-center gap-[10px] mb-[10px] capitalize text-light dark:text-subtitle-dark group hover:text-primary text-[14px]">
                                        <i
                                            class="uil uil-edit text-body dark:text-subtitle-dark group-hover:text-current text-[15px]"></i>
                                        edit
                                    </a>
                                </li>
                                <li>
                                    <form action="/admin/teams/{{ $team->slug }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit"
                                            onclick="return confirm('Are you sure want to delete {{ $team->name }}?')"
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
                    <div class="flex flex-col items-center justify-center text-center">
                        <figure class="mb-[20px]">
                            <img src="@if ($team['image']) {{ '/img-teams/' . $team['image'] }} @else /img-teams/placeholder.jpg @endif"
                                alt="{{ $team['name'] }}" class="rounded-full w-[120px] h-[120px] object-cover">
                        </figure>
                        <figcaption>
                            <h3
                                class="text-dark dark:text-title-dark text-[18px] capitalize font-semibold mb-[4px] leading-[26px]">
                                {{ $team['name'] }}
                            </h3>
                            <span class="text-light-extra dark:text-subtitle-dark text-[14px]">
                                {{ $team['role'] }}
                            </span>
                        </figcaption>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    @include('admin.teams.addModal')
@endsection
