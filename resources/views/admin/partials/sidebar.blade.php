@php
    use App\Models\WebSetting;
    $settings = WebSetting::first();
@endphp

<aside id="asideBar"
    class="asidebar dark:bg-box-dark fixed start-0 top-0 z-[1035] h-screen overflow-hidden bg-white xl:!w-[280px] xl:[&.collapsed]:!w-[80px] [&.collapsed]:!w-[250px] xl:[&.TopCollapsed]:!w-[0px] [&.TopCollapsed]:!w-[250px] !transition-all !duration-[0.2s] ease-linear delay-[0s] !w-0 xl:[&.collapsed>.logo-wrapper]:w-[80px]">
    <div
        class="flex w-[280px] border-e border-[#edf2f9] dark:border-box-dark-up logo-wrapper items-center h-[71px] dark:bg-box-dark-up max-xl:hidden">
        <a href="index.html" class="block text-center">
            <div class="logo-full">
                <img class="ps-[27px] dark:hidden" src={{ '/img/' . $settings->logo_image }} alt="Logo">
                <img class="ps-[27px] hidden dark:block" src={{ '/img/' . $settings->alternate_logo_image }}
                    alt="Logo">
            </div>
            <div class="hidden logo-fold">
                <img class="p-[27px] max-w-[80px]" src="/icons/app-icon.svg" alt="Logo">
            </div>
        </a>
    </div>
    <nav id="navBar"
        class="navBar dark:bg-box-dark start-0 max-xl:top-[80px] z-[1035] h-full overflow-y-auto bg-white xl:!w-[280px] xl:[&.collapsed]:!w-[80px] [&.collapsed]:!w-[250px] xl:[&.TopCollapsed]:!w-[0px] [&.TopCollapsed]:!w-[250px] !transition-all !duration-[0.2s] ease-linear delay-[0s] !w-0 pb-[100px] scrollbar xl:[&.collapsed]:ps-[7px] relative">
        <ul class="relative m-0 list-none px-[0.2rem] ">
            <li class="relative ">
                <a href="/admin/dashboard"
                    class="{{ Request::is('admin/dashboard*') ? 'active' : '' }} group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-apps"></i>
                    </span>
                    <span class="capitalize title">Dashboard</span>
                </a>
            </li>
            <li class="relative">
                <a href="/admin/websetting"
                    class="{{ Request::is('admin/websetting*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-setting"></i>
                    </span>
                    <span class="capitalize title">Web Setting</span>
                </a>
            </li>
            <li class="relative">
                <span
                    class="slug dark:text-white/40 mb-[10px] mt-[30px] block px-6 text-[12px] font-medium uppercase text-light">Pages</span>
                <a href="/admin/versions"
                    class="{{ Request::is('admin/versions*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-arrow-growth"></i>
                    </span>
                    <span class="capitalize title">App Version</span>
                </a>
            </li>
            <li class="relative">
                <a href="/admin/teams"
                    class="{{ Request::is('admin/teams*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-user"></i>
                    </span>
                    <span class="capitalize title">Teams</span>
                </a>
            </li>
            <li class="relative">
                <a href="/admin/contactin"
                    class="{{ Request::is('admin/contactin*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-envelopes"></i>
                    </span>
                    <span class="capitalize title">Contact In</span>
                </a>
            </li>
            <li class="relative">
                <a href="/admin/heroes"
                    class="{{ Request::is('admin/heroes*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-window"></i>
                    </span>
                    <span class="capitalize title">Hero Section</span>
                </a>
            </li>
            <li class="relative">
                <a href="/admin/features"
                    class="{{ Request::is('admin/features*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-images"></i>
                    </span>
                    <span class="capitalize title">Features Section</span>
                </a>
            </li>

            <li class="relative">
                <a href="/admin/users"
                    class="{{ Request::is('admin/users*') ? 'active' : '' }} rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                    <span
                        class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                        <i class="uil uil-key-skeleton"></i>
                    </span>
                    <span class="capitalize title">Registered Users</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
