@extends('frontend.layouts.main')
@section('content')
    <div class="main-wrapper-home">
        <section class="hero-section p-[16px] md:p-[32px] w-full">
            <div class="section-wrapper relative w-full">
                <div class="img-wrapper absolute">
                    <img class="object-cover rounded-[25px] object-top brightness-[.80] w-screen h-[75vh] xl:h-[92vh]"
                        src="/img/hero-image.webp" alt="">
                </div>
                <div class="text-wrapper relative h-[75vh] xl:h-[92vh] flex items-center px-[24px] xl:pl-[148px] w-full"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <div class="text-content flex flex-col gap-[18px]">
                        <h1
                            class="text-[40px] md:text-[64px] xl:text-[80px] font-[400] leading-[1] xl:leading-[80px] text-white md:max-w-[60%]">
                            Pray
                            Comfortably
                            On The Go With
                            Jalur!</h1>
                        <p class="text-[16px] md:text-[18px] leading-[22px] md:leading-[25px] text-white md:max-w-[40%]">
                            Plan
                            your trip and find
                            the mosque based
                            on
                            prayer times
                            during your journey</p>
                        <div class="download-button max-w-fit md:pt-[36px">
                            <a href=""
                                class="flex gap-[16px] px-[29px] py-[14px] bg-jalur-bold hover:bg-jalur-base text-black rounded-[50px] border border-black transition-all">
                                <span>Download</span>
                                <img src="/icons/arrow-down.svg" alt="download-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero-title-section py-[24px] md:py-[48px]">
            <div class="img-top-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <img class="hidden xl:block w-screen object-cover" src="/img/image-top.svg" alt="">
                <img class="hidden md:block xl:hidden w-screen md:px-[32px] xl:px-0" src="/img/image-top-md.svg"
                    alt="">
                <img class="md:hidden w-screen h-[170px] object-cover" src="/img/image-top-sm.svg" alt="">
            </div>
            <div class="text-wrapper flex item-center justify-center py-[24px] md:py-[36px]">
                <h2 class="text-[24px] md:text-[32px] xl:text-[48px] text-center leading-[1] xl:leading-[48px] max-w-[80%]"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    Muslim drivers face
                    challenges in
                    fulfilling
                    their prayer
                    obligations during the long journey on the road.
                    Jalur offers a solution that blends faith with the practicalities of travel, ensuring your spiritual
                    journey
                    is as smooth as your physical one.</h2>
            </div>
            <div class="img-bot-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <img class="hidden xl:block w-screen object-cover" src="/img/image-bottom.svg" alt="">
                <img class="hidden md:block xl:hidden w-screen md:px-[32px] xl:px-0" src="/img/image-bottom-md.svg"
                    alt="">
                <img class="md:hidden w-screen h-[170px] object-cover" src="/img/image-bottom-sm.svg" alt="">
            </div>
        </section>

        <section class="xl:pt-[88px] xl:pb-[56px] mt-[48px] w-screen">
            <div
                class="section-wrapper flex flex-col xl:flex-row justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
                <div class="text-wrapper flex gap-[18px] flex-col basis-2/5" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-once="true">
                    <h1
                        class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                        You make
                        the plan, we’ll
                        find the
                        mosque</h1>
                    <p class="md:text-[18px] md:max-w-[55%] xl:max-w-fit">Create a travel plan by entering your starting
                        location, destination, and
                        departure time.
                        <br>
                        Jalur will recommend the most suitable mosque options for each prayer time along the route.
                    </p>
                    <a href=""
                        class="font-[500] md:text-[16px] pb-[56px] hover:text-jalur-base decoration-jalur-base decoration-[2px] w-fit">Learn
                        More
                        <hr class="bg-jalur-base h-[3px]">
                    </a>
                </div>
                <div class="flex w-full justify-center xl:w-fit">
                    <div class="img-wrapper w-[60%] md:w-fit xl:px-[72px]" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-once="true" data-aos-delay="350">
                        <img src="/img-feature/result-plan.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[56px] md:pt-[88px] md:pb-[56px] mt-[48px] w-screen bg-jalur-dark text-white">
            <div
                class="section-wrapper flex flex-col xl:flex-row-reverse justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
                <div class="text-wrapper flex gap-[18px] flex-col basis-2/5" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-once="true">
                    <h1
                        class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                        Easily find the nearest Mosque around
                        you</h1>
                    <p class="md:text-[18px] md:max-w-[55%] xl:max-w-fit">
                        Need to find the nearest mosque for prayer?
                        <br>
                        Jalur will help you find the nearest mosque based on your current location.
                    </p>
                    <a href=""
                        class="font-[500] md:text-[16px] pb-[56px] hover:text-jalur-base decoration-jalur-base decoration-[2px] w-fit">Learn
                        More
                        <hr class="bg-jalur-base h-[3px]">
                    </a>
                </div>
                <div class="flex w-full justify-center xl:w-fit">
                    <div class="img-wrapper w-fit" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true"
                        data-aos-delay="350">
                        <img src="/img-feature/nearby-mosque.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="md:pt-[88px] md:pb-[56px] mt-[48px] w-screen">
            <div
                class="section-wrapper flex flex-col xl:flex-row justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
                <div class="text-wrapper flex gap-[18px] flex-col basis-2/5" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-once="true">
                    <h1
                        class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                        Personalize Choice</h1>
                    <p class="md:text-[18px] md:max-w-[55%] xl:max-w-fit">
                        Not every mosque will meet your needs. Jalur allows you to select alternate mosque
                        <br>
                        Your route and prayer times will then be recallibrated accordingly.
                    </p>
                    <a href=""
                        class="font-[500] md:text-[16px] pb-[56px] hover:text-jalur-base decoration-jalur-base decoration-[2px] w-fit">Learn
                        More
                        <hr class="bg-jalur-base h-[3px]">
                    </a>
                </div>
                <div class="flex w-full justify-center xl:w-fit">
                    <div class="img-wrapper w-[60%] md:w-fit xl:px-[72px]" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-once="true" data-aos-delay="350">
                        <img src="/img-feature/mosque-options.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="md:pt-[88px] md:pb-[56px] mt-[48px] w-screen pb-[32px]">
            <div
                class="section-wrapper flex flex-col xl:flex-row-reverse justify-between xl:items-center xl:mx-auto max-w-[1056px] px-[24px] md:px-[32px] xl:px-0">
                <div class="text-wrapper flex gap-[18px] flex-col basis-2/5" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-once="true">
                    <h1
                        class="text-[32px] md:text-[48px] md:max-w-[50%] xl:max-w-fit leading-[1] xl:text-[60px] xl:leading-[60px]">
                        Push Notification</h1>
                    <p class="md:text-[18px] md:max-w-[55%] xl:max-w-fit">
                        As you drive, Jalur keeps you updated with notiications about upcoming prayer times.
                        <br>
                        If traffic condition change, Jalur will automatically recalculate suggested mosques for the closest
                        prayer time via notifications
                    </p>
                    <a href=""
                        class="font-[500] md:text-[16px] pb-[56px] hover:text-jalur-base decoration-jalur-base decoration-[2px] w-fit">Learn
                        More
                        <hr class="bg-jalur-base h-[3px]">
                    </a>
                </div>
                <div class="flex w-full justify-center xl:w-fit">
                    <div class="img-wrapper w-[60%] md:w-fit xl:px-[72px]" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-once="true" data-aos-delay="350">
                        <img src="/img-feature/notif-late.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
