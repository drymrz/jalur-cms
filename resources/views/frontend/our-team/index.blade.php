@extends('frontend.layouts.main')

@section('content')
    <section class="hero-section p-[16px] md:p-[32px] w-full">
        <div class="section-wrapper relative w-full">
            <div class="text-wrapper w-full py-[56px] flex flex-col gap-[16px] items-center text-center">
                <h1 class="text-[36px] md:text-[64px] font-[600] leading-[1] md:leading-[72px]">Our Team, <br> Our Strength
                </h1>
                <p class="md:max-w-[40%] text-[18px]">Together, we deliver value, while also supporting each other's growth
                    and
                    development
                </p>
            </div>
            <div class="img-wrapper">
                <img class="object-contain md:object-cover rounded-[25px] brightness-[.75] w-screen md:h-[50vh] xl:h-[90vh] object-bottom"
                    src="/img-teams/hero.webp" alt="">
            </div>
        </div>
    </section>

    <section class="team-member p-[16px] md:p-[32px] w-screen mt-[64px]">
        <div class="text-wrapper w-full flex flex-col items-center text-center">
            <h2 class="text-[24px] md:text-[36px] font-[600]">Team Behind The App</h2>
            <p class="md:max-w-[50%]">We are a team of passionate individuals who are committed to
                delivering
                value to our users. We are always looking for ways to improve our services and make our users' lives easier.
            </p>
        </div>
        <div
            class="team-wrapper max-w-[85%] md:max-w-[90%] xl:max-w-[70%] mx-auto grid grid-cols-1 md:grid-cols-3 gap-[48px] py-[48px] leading-[1]">
            <div class="team-member-card">
                <div class="img-wrapper rounded-[16px] overflow-hidden">
                    <img class="hover:scale-[1.05] transition-all" src="/img-teams/safik.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">Safik Widiantoro</h3>
                    <p class="text-[16px] font-[500]">Project Manager</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">2+ years in IT
                        industry</p>
                </div>
            </div>
            <div class="team-member-card">
                <div class="img-wrapper">
                    <img class="rounded-[16px]" src="/img-teams/adry.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">Adry Mirza Savaras</h3>
                    <p class="text-[16px] font-[500]">iOS Developer</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">2+ years as
                        Freelance Fullstack
                        Developer</p>
                </div>
            </div>
            <div class="team-member-card">
                <div class="img-wrapper">
                    <img class="rounded-[16px]" src="/img-teams/alita.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">Nindya Alita Rosalia</h3>
                    <p class="text-[16px] font-[500]">UI/UX Designer</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">Informatics
                        Engineering
                        Graduate</p>
                </div>
            </div>
            <div class="team-member-card">
                <div class="img-wrapper">
                    <img class="rounded-[16px]" src="/img-teams/wahyu.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">Wahyu Alfandi</h3>
                    <p class="text-[16px] font-[500]">iOS Developer</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">2+ years as
                        Freelance Mobile
                        Developer</p>
                </div>
            </div>
            <div class="team-member-card">
                <div class="img-wrapper">
                    <img class="rounded-[16px]" src="/img-teams/roli.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">Roli Bernanda</h3>
                    <p class="text-[16px] font-[500]">iOS Developer</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">5+ years in IT &
                        Other Industry
                    </p>
                </div>
            </div>
            <div class="team-member-card">
                <div class="img-wrapper">
                    <img class="rounded-[16px]" src="/img-teams/iki.png" alt="">
                </div>
                <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                    <h3 class="text-[22px] font-[600]">Rizki Rahmadi</h3>
                    <p class="text-[16px] font-[500]">UI/UX Designer</p>
                    <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">2+ years as
                        Freelance Graphic
                        Designer</p>
                </div>
            </div>
        </div>
    </section>
@endsection
