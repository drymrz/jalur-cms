    <div data-te-modal-init
        class="fixed left-0 top-0 z-[9999] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-12 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto bg-clip-padding dark:bg-box-dark">
                <div
                    class="flex items-center justify-between flex-shrink-0 py-4 border-b-1 px-[25px] rounded-t-md border-neutral-100 dark:border-box-dark-up">
                    <!--Modal title-->
                    <h5 class="text-[17px] font-medium text-dark dark:text-title-dark leading-[22px] capitalize"
                        id="evenModal">
                        Add New Team Member
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="w-[34px] h-[34px] bg-normalBG text-dark border-1 border-regular dark:border-box-dark-up rounded-full flex items-center justify-center hover:bg-primary hover:text-white hover:border-primary duration-200 ease-in-out text-[15px] dark:bg-box-dark-up dark:text-title-dark dark:hover:bg-primary dark:hover:text-white dark:hover:border-primary hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close" data-te-ripple-init data-te-ripple-color="light">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>


                <form action="/admin/teams" method="POST">
                    @csrf
                    <div class="relative p-[25px]">
                        <div class="mb-[20px]">
                            <label for="name"
                                class="after:content-[':']  block text-14 font-medium text-dark dark:text-title-dark capitalize">
                                name
                            </label>
                            <input type="text"
                                class="block w-full px-3 py-[15px] mt-2 bg-transparent border-1 rounded-md border-normal dark:border-box-dark-up placeholder-light dark:placeholder:text-subtitle-dark focus:outline-none focus:border-primary focus:border-1 focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)] sm:text-sm focus:ring-0 text-body dark:text-subtitle-dark"
                                id="name" name="name" autocomplete="off" placeholder="Your Name" />
                        </div>
                        <div class="mb-[20px]">
                            <label for="role"
                                class="after:content-[':']  block text-14 font-medium text-dark dark:text-title-dark capitalize">
                                Role
                            </label>
                            <input type="text"
                                class="block w-full px-3 py-[15px] mt-2 bg-transparent border-1 rounded-md border-normal dark:border-box-dark-up placeholder-light dark:placeholder:text-subtitle-dark focus:outline-none focus:border-primary focus:border-1 focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)] sm:text-sm focus:ring-0 text-body dark:text-subtitle-dark"
                                id="role" name="role" autocomplete="off" placeholder="Role" />
                        </div>
                        <div>
                            <label for="experience"
                                class="after:content-[':']  block text-14 font-medium text-dark dark:text-title-dark capitalize">
                                Experience
                            </label>
                            <input type="text"
                                class="block w-full px-3 py-[15px] mt-2 bg-transparent border-1 rounded-md border-normal dark:border-box-dark-up placeholder-light dark:placeholder:text-subtitle-dark focus:outline-none focus:border-primary focus:border-1 focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)] sm:text-sm focus:ring-0 text-body dark:text-subtitle-dark"
                                id="experience" name="experience" autocomplete="off" placeholder="Experience" />
                        </div>
                    </div>
                    <div class="px-[25px] pb-[20px] pt-[20px] rounded-b-md">
                        <button type="submit"
                            class="inline-block px-5 py-3 shadow-[0_5px_10px_rgba(130,49,211,0.1)] font-medium leading-normal text-white capitalize transition duration-150 ease-in-out rounded bg-primary text-14 hover:bg-primary-hbr">
                            add new Member
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
