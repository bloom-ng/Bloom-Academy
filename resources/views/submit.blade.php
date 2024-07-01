<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />

    <!-- Include Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- Include Mont Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <title>Bloom Academy Africa</title>
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />
</head>

<body class="">
    <div class="grid grid-cols-2">
        <div class="relative bg-cover bg-bottom h-screen bg-left-top"
            style="
                    background-image: url('/images/happy-young-african-american-male-analyst-with-tab.png');
                ">
            <div class="top-0 left-0 right-0 px-12 py-6">
                <a href="/"><img class="w-10" src="/images/bloom-academy-logo-2.png"
                        alt="Bloom Academy Logo" /></a>
            </div>
        </div>
        <div class="flex justify-center items-center bg-[#2D2D2B]">
            <div class="flex flex-col bg-white rounded-[43px] px-16 pt-16 pb-10 items-center justify-center">
                <div class="items-center justify-center flex flex-col pb-8">
                    <p class="text-[25px] text-center leading-[23px] poppins-bold">
                        Register to join our <br> community of learners.
                    </p>
                </div>
                <form action="/process-payment" method="POST" class="">
                    @csrf

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-6">
                            <img src="/images/person.svg" alt="" />
                        </div>
                        <input type="text" name="name"
                            class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6 px-52"
                            placeholder="Full Name" required />
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-6">
                            <img src="/images/Envelope.svg" alt="" />
                        </div>
                        <input type="email" name="email"
                            class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6 px-52"
                            placeholder="Email Address" required />
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-6">
                            <img src="/images/phone.svg" alt="" />
                        </div>
                        <input type="text" name="phone"
                            class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6 px-52"
                            placeholder="Phone" required />
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-6">
                            <img src="/images/pin.svg" alt="" />
                        </div>
                        <input type="text" name="location"
                            class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6 px-52"
                            placeholder="Location" required />
                    </div>

                    <div>
                        <textarea type="text" name="how_did_you_hear"
                            class="bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-2xl mb-6 block w-full py-6 px-6"
                            placeholder="How did you hear about us" rows="5" cols="10" required></textarea>
                    </div>

                    <input type="hidden" name="payment_id" value="{{ request()->query('id') }}">

                    <div>
                        <button type="submit"
                            class="text-white text-lg leading-[45px] bg-[#C73029] py-3 px-40 rounded-full montserrat-semi-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex lg:flex-row items-center justify-between">
        <div class="flex-col flex text-white lg:flex-row gap-20 items-center justify-between">
            <ul class="flex flex-col items-left list-none">
                <li class="montserrat-bold mb-4 text-sm">Company</li>
                <a href="https://bloomdigitmedia.com/#whoWeAre">
                    <li class="montserrat-extra-light mb-2 text-sm">
                        About
                    </li>
                </a>
                <li class="montserrat-extra-light mb-2 text-sm">
                    Bloom Digital Media Ltd
                </li>
            </ul>
            <ul class="flex flex-col items-left list-none">
                <li class="montserrat-bold mb-4 text-sm">Legal</li>
                <li class="montserrat-extra-light mb-2 text-sm">
                    Terms of Service
                </li>
                <li class="montserrat-extra-light mb-2 text-sm">
                    Privacy Policy
                </li>
            </ul>
        </div>
        <div>
            <div>
                <div class="flex items-center justify-end">
                    <img class="mr-1" src="/images/Copyright.svg" alt="Copyright icon" />
                    <p class="text-white text-xs montserrat-extra-light leading-10 mb-10 lg:mb-0">
                        2024 Bloom Digital Media Ltd. All rights reserved.
                    </p>
                </div>

                <div class="flex justify-end">
                    <a href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank"><img src="/images/Instagram.svg" alt="Instagram Link" /></a>
                    <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"><img src="/images/Twitter.svg"
                            alt="X Link" /></a>
                    <a href="https://www.linkedin.com/company/bloom-digital-media-nigeria/" target="_blank"><img
                            src="/images/LinkedIn.svg" alt="LinkedIn Link" /></a>
                    <a href="https://www.facebook.com/bloomdigitmedia/" target="_blank"><img
                            src="/images/Facebook.svg" alt="Facebook Link" /></a>
                </div>
            </div>
            <div>
                <div class="flex items-center">
                    <p class="text-white mt-3 text-xs montserrat-extra-light leading-10 mb-10 lg:mb-0">
                        Bloom Academy is a registered trademark of
                    </p>
                    <img src="/images/bloom-logo-white.svg" class="pl-2" alt="Bloom Logo" />
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
