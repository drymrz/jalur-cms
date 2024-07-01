@extends('frontend.layouts.main')
@section('content')
    <div class="jalur-linear-grad">
        <section
            class="w-screen md:w-[70vw] md:min-h-[88vh] xl:min-h-[80vh] flex flex-col xl:flex-row mx-auto py-[64px] gap-[64px] px-[24px] md:px-0">
            <div class="text-wrapper basis-1/2">
                <h1 class="text-[42px] font-[500]">Get in touch</h1>
                <p class="text-[18px] antialiased">Have a question or want to work together? We'd love to hear from you. Send
                    us a
                    message and we'll respond
                    as soon as possible.</p>

                <a href="" class="block font-semibold mt-[12px]"><span class="underline">Find us on
                        Instagram</span></a>
            </div>
            <div class="form-wrapper basis-1/2">
                <form action="" class="grid grid-cols-2 gap-[16px]">
                    <div class="flex flex-col gap-[4px]">
                        <label for="name" class="text-[14px] font-medium">First Name</label>
                        <input class="pl-[12px] py-[6px] rounded-[10px] border-[1px] border-gray-200" type="text"
                            id="first-name" name="first-name" class="input" placeholder="First name">
                    </div>
                    <div class="flex flex-col gap-[4px]">
                        <label for="name" class="text-[14px] font-medium">Last Name</label>
                        <input class="pl-[12px] py-[6px] rounded-[10px] border-[1px] border-gray-200" type="text"
                            id="last-name" name="last-name" class="input" placeholder="Last name">
                    </div>
                    <div class="flex flex-col col-span-2 gap-[4px]">
                        <label for="email" class="text-[14px] font-medium">Email</label>
                        <input class="pl-[12px] py-[6px] rounded-[10px] border-[1px] border-gray-200" type="email"
                            id="email" name="email" class="input" placeholder="your@company.com">
                    </div>
                    <div class="flex flex-col col-span-2 gap-[4px]">
                        <label for="message" class="text-[14px] font-medium">Message</label>
                        <textarea class="pl-[12px] py-[6px] rounded-[10px] border-[1px] border-gray-200" rows="4" name="message"
                            id="message" class="input" placeholder="Leave us a message.."></textarea>
                    </div>
                    <div class="col-span-2">
                        <input type="submit" value="Send message"
                            class="btn btn-primary text-white w-full mt-[16px] bg-jalur-bold p-[8px] rounded-[8px]">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
