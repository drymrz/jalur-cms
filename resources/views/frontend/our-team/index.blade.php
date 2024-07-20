@extends('frontend.layouts.main')

@section('content')
    <div class="jalur-linear-grad">
        <section class="hero-section p-[16px] md:p-[32px] w-full">
            <div class="section-wrapper relative w-full">
                <div class="text-wrapper w-full py-[56px] xl:py-[32px] flex flex-col gap-[16px] items-center text-center"
                    data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <h1 class="text-[36px] md:text-[64px] font-[600] leading-[1] md:leading-[72px]">
                        {!! $heroes->title !!}
                    </h1>
                    <p class="md:max-w-[40%] text-[18px]">{{ $heroes->description }}
                    </p>
                </div>
                <div class="img-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                    <img class="object-contain md:object-cover rounded-[25px] brightness-[.75] w-screen md:h-[50vh] xl:h-[90vh] object-bottom"
                        src="{{ $heroes->image }}" alt="">
                </div>
            </div>
        </section>

        <section class="team-member p-[16px] md:p-[32px] w-screen mt-[64px]">
            <div class="text-wrapper w-full flex flex-col items-center text-center" data-aos="fade-up"
                data-aos-duration="1500" data-aos-once="true">
                <h2 class="text-[24px] md:text-[36px] font-[600]">{{ $heroes->title_2 }}</h2>
                <p class="md:max-w-[50%]">{{ $heroes->description_2 }}
                </p>
            </div>
            <div class="team-wrapper max-w-[85%] md:max-w-[90%] xl:max-w-[70%] mx-auto grid grid-cols-1 md:grid-cols-3 gap-[48px] py-[48px] leading-[1]"
                data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                @foreach ($teams as $team)
                    <div class="team-member-card">
                        <div class="img-wrapper rounded-[16px] overflow-hidden">
                            <img class="hover:scale-[1.05] transition-all w-full"
                                src="@if ($team['image']) {{ '/img-teams/' . $team['image'] }} @else /img-teams/placeholder.jpg @endif"
                                alt="">
                        </div>
                        <div class="text-wrapper py-[16px] flex flex-col gap-[4px] text-center items-center">
                            <h3 class="text-[22px] md:text-[18px] xl:text-[22px] font-[600]">{{ $team['name'] }}</h3>
                            <p class="text-[16px] font-[500]">{{ $team['role'] }}</p>
                            <p class="text-[14px] text-gray-500 pt-[4px] max-w-[65%] md:max-w-[80%] xl:max-w-[65%]">
                                {{ $team['experience'] }}</p>
                            <div class="flex mt-[8px] gap-[16px]">
                                @if (isset($team['linkedin']))
                                    <a href="{{ $team['linkedin'] }}" target="_blank">
                                        <i class="fa-brands fa-linkedin text-[18px] hover:text-blue-600"></i>
                                    </a>
                                @endif
                                @if (isset($team['website']))
                                    <a href="{{ $team['website'] }}" target="_blank">
                                        <i class="fa-solid fa-globe text-[18px] hover:text-blue-600"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
