@extends('admin.layouts.main')
@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div
                class="flex justify-between items-center gap-x-[30px] gap-y-[10px] mb-[30px] max-sm:mt-[10px] max-md:flex-col">
                <div class="flex items-center gap-x-[25px] gap-y-[10px] max-sm:flex-col">
                    <h4 class="text-dark dark:text-title-dark capitalize font-semibold text-[20px] leading-[28px]">Registered
                        Users
                    </h4>
                </div>
                <button type="button" data-te-toggle="modal" data-te-target="#teamModal"
                    class="bg-primary rounded-4 text-white flex items-center gap-x-[8px]
             gap-y-[4px] text-[14px] py-0  cursor-pointer border border-solid border-transparent font-medium capitalize shadow-[0_5px_10px_rgba(130,49,211,0.1)] px-[15px] h-[45px] max-md:mt-[10px]"
                    data-te-ripple-init="" data-te-ripple-color="light">
                    <i class="uil uil-plus"></i>
                    add new
                </button>
            </div>
        </div>
        <div class="col-span-12">
            <div
                class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                <div
                    class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                    <h1
                        class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        Users Data</h1>
                </div>
                <div class="p-[25px]">

                    <div class="overflow-x-auto scrollbar">
                        <table class="min-w-full text-sm font-light text-start">
                            <thead class="font-medium">
                                <tr>
                                    <th scope="col"
                                        class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                        name</th>
                                    <th scope="col"
                                        class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                        email</th>
                                    <th scope="col"
                                        class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                        username</th>
                                    <th scope="col"
                                        class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                        Registered</th>
                                    <th scope="col"
                                        class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden rounded-e-[6px] capitalize">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="group hover:bg-primary/10">
                                        <td
                                            class="px-4 py-[10px] font-medium  capitalize text-[14px] text-dark dark:text-title-dark border-none group hover:bg-primary/10-hover:bg-transparent  whitespace-nowrap">
                                            <div class="flex items-center gap-[15px] w-full">
                                                <div
                                                    class="bg-primary/10 flex h-[34px] justify-center min-w-[34px] overflow-hidden relative rounded-full w-[34px]">
                                                    <img alt="contact-name" class="absolute bottom-0"
                                                        src="@if ($user->image) {{ $user->image }} @else /icons/placeholder.png @endif">
                                                </div>
                                                <div
                                                    class="flex items-center justify-between w-full max-ssm:flex-wrap gap-x-[15px] gap-y-[7px]">
                                                    <div>
                                                        <h6
                                                            class="font-medium text-15 text-theme-gray dark:text-subtitle-dark">
                                                            {{ $user->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td
                                            class="px-4 py-[10px] lowercase text-[14px]  font-medium text-dark dark:text-title-dark border-none group hover:bg-primary/10-hover:bg-transparent  whitespace-nowrap">
                                            {{ $user->email }}</td>
                                        <td
                                            class="px-4 py-[10px] font-medium  text-[14px] text-dark dark:text-title-dark border-none group hover:bg-primary/10-hover:bg-transparent  whitespace-nowrap">
                                            {{ $user->username }}</td>
                                        <td
                                            class="px-4 py-[10px] first-line:font-medium  capitalize text-[14px] text-dark dark:text-title-dark border-none group hover:bg-primary/10-hover:bg-transparent  whitespace-nowrap">
                                            {{ $user->created_at->diffForHumans() }}
                                        </td>
                                        <td
                                            class="px-4 py-[10px]font-medium text-end capitalize  text-[14px] text-dark dark:text-title-dark border-none group hover:bg-primary/10-hover:bg-transparent rounded-e-[6px] whitespace-nowrap">
                                            <div class="flex items-center justify-end table-actions">
                                                <div class="flex items-center justify-between dropdown dropdown-click">
                                                    <div
                                                        class="flex items-center gap-y-[10px] gap-x-[10px] justify-between">
                                                        <div class="flex items-center" data-te-dropdown-ref>
                                                            <button
                                                                class="text-[18px] z-998 text-light dark:text-subtitle-dark"
                                                                type="button" id="contact-" data-te-dropdown-toggle-ref
                                                                aria-expanded="false">
                                                                <i
                                                                    class="uil uil-ellipsis-v text-[18px] text-light-extra"></i>
                                                            </button>
                                                            <ul class="absolute z-[1000] ltr:float-left rtl:float-right hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down [&[data-te-dropdown-show]]:block opacity-100 px-[15px] py-[10px]"
                                                                aria-labelledby="contact-" data-te-dropdown-menu-ref>
                                                                <li>
                                                                    <a href="#"
                                                                        class="flex items-center gap-[10px] mb-[10px] capitalize text-light dark:text-subtitle-dark group hover:bg-primary/10 hover:text-primary text-[14px]">
                                                                        <i
                                                                            class="uil uil-edit text-body dark:text-subtitle-dark group hover:bg-primary/10-hover:text-current text-[15px]"></i>
                                                                        edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="flex items-center gap-[10px] capitalize text-light dark:text-subtitle-dark group hover:bg-primary/10 hover:text-primary text-[14px]">
                                                                        <i
                                                                            class="uil uil-trash-alt text-body dark:text-subtitle-dark group hover:bg-primary/10-hover:text-current text-[15px]"></i>
                                                                        delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
