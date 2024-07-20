@extends('admin.layouts.main')

@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Breadcrumb Section -->
            <div
                class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                <!-- Title -->
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">data Contact In</h4>
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
                                    class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Contact
                                    In</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-span-12">
            <div
                class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                <div
                    class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                    <h1
                        class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        Recent Data</h1>
                </div>
                <div class="p-[25px]">

                    <div class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto">
                        <table class="min-w-full text-sm font-light text-left whitespace-nowrap ">
                            <thead>
                                <tr>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-[25px] py-4 text-start text-light dark:text-title-dark text-[14px] font-medium border-none before:hidden rounded-s-[4px]">
                                        No</th>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-[25px] py-4 text-start text-light dark:text-title-dark text-[14px] font-medium border-none before:hidden rounded-s-[4px]">
                                        Name</th>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-4 py-4 text-light dark:text-title-dark text-[14px] font-medium border-none before:hidden">
                                        Email</th>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-4 py-4 text-light dark:text-title-dark text-[14px] font-medium border-none before:hidden">
                                        Message</th>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-4 py-4 text-light dark:text-title-dark text-[14px] font-medium border-none before:hidden">
                                        Time</th>
                                    <th
                                        class="sticky top-0 capitalize bg-regularBG dark:bg-box-dark-up px-[25px] py-2.5 text-end text-light dark:text-title-dark text-[12px] font-medium border-none before:hidden rounded-e-[4px]">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-box-dark">

                                @foreach ($contactIns as $contactIn)
                                    <tr class="group">
                                        <td
                                            class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="ps-[25px] pe-4 py-2.5 text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                            <div class="flex items-center gap-x-[20px] gap-y-[10px]">
                                                <div class="">
                                                    <p
                                                        class="font-medium text-[14px] text-dark dark:text-title-dark capitalize mb-0 leading-[21px]">
                                                        {{ $contactIn->firstname }} {{ $contactIn->lastname }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-2.5 font-normal last:text-end text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                            {{ $contactIn->email }}
                                        </td>
                                        <td
                                            class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                            {{ $contactIn->message }}
                                        </td>
                                        <td
                                            class="px-4 py-2.5 font-normal last:text-end text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                            {{ $contactIn->created_at->diffForHumans() }}
                                        </td>
                                        <td
                                            class="ps-4 pe-[25px] py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[4px]">
                                            <div class="flex items-center" data-te-dropdown-ref>
                                                <button class="text-[18px] text-light dark:text-subtitle-dark"
                                                    type="button" id="fileManager-21" data-te-dropdown-toggle-ref
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </button>
                                                <ul class="absolute z-[1000] ltr:float-left rtl:float-right hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down [&[data-te-dropdown-show]]:block opacity-100 px-[15px] py-[10px]"
                                                    aria-labelledby="fileManager-21" data-te-dropdown-menu-ref>
                                                    <li>
                                                        <form action="/admin/contactin/{{ $contactIn->id }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf

                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure to delete this?')"
                                                                class="flex items-center gap-[10px] capitalize text-light dark:text-subtitle-dark group hover:text-primary text-[14px]">
                                                                <i
                                                                    class="uil uil-trash-alt text-body dark:text-subtitle-dark group-hover:text-current text-[15px]"></i>
                                                                delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
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
