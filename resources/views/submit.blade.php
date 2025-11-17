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
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="hidden lg:flex bg-cover bg-bottom h-screen bg-left-top"
            style="
                    background-image: url('/images/happy-young-african-american-male-analyst-with-tab.png');
                ">
            <div class="top-0 left-0 right-0 px-12 py-6">
                <a href="/"><img class="w-32 h-auto" src="/images/logo_main.png"
                        alt="Bloom Academy Africa Logo" /></a>
            </div>
        </div>
        <div class="flex justify-center items-center bg-[#2D2D2B] w-full">
            <form action="/process-payment" method="POST"
                class="flex flex-col bg-white rounded-[43px] px-8 lg:px-16 pt-16 pb-10 items-center justify-center w-[90%] md:w-[80%]">

                <p class="text-[25px] text-center leading-[23px] poppins-bold mb-5">
                    Join our <br> community of learners.
                </p>
                @csrf

                <div class="relative w-full">
                    <div class="ps-1 mb-10 absolute inset-y-0 start-0 flex items-center m-5">
                        <img src="/images/person.svg" alt="" />
                    </div>
                    <input type="text" name="name"
                        class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                        placeholder="Full Name" required />
                </div>

                <div class="relative w-full">
                    <div class="ps-1 mb-10 absolute inset-y-0 start-0 flex items-center m-5">
                        <img src="/images/Envelope.svg" alt="" />
                    </div>
                    <input type="email" name="email"
                        class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                        placeholder="Email Address" required />
                </div>

                <div class="relative w-full">
                    <div class="ps-1 mb-10 absolute inset-y-0 start-0 flex items-center m-5">
                        <img src="/images/phone.svg" alt="" />
                    </div>
                    <input type="text" name="phone"
                        class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                        placeholder="Phone" required />
                </div>

                <div class="relative w-full">
                    <div class="ps-1 mb-10 absolute inset-y-0 start-0 flex items-center m-5">
                        <img src="/images/pin.svg" alt="" />
                    </div>
                    <input type="text" name="location"
                        class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                        placeholder="Location" required />
                </div>

                <textarea type="text" name="how_did_you_hear"
                    class="bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-2xl mb-6 block w-full py-6 px-6"
                    placeholder="How did you hear about us" rows="5" cols="3"></textarea>

                {{-- <input type="hidden" name="payment_id" value="{{ request()->query('id') }}"> --}}

                {{-- <div class="my-5">
                        <input type="checkbox" name="policy" value="accepted" required id="policy" />
                        <label for="policy">I agree to the <a href="/terms-of-service">Terms of Service</a> and <a
                                href="/privacy">Privacy Policy</a></label>
                    </div> --}}


                <button type="submit"
                    class="text-white text-lg leading-[45px] bg-[#C73029] py-3 px-12 rounded-full montserrat-semi-bold mb-5 w-full">Submit</button>


                <div>
                    <p class="poppins-light text-sm text-center">By clicking “Submit”, I agree to
                        receive
                        further<br>
                        information about Bloom Academy
                        courses.</p>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex lg:flex-row items-center justify-between">
        <div class="flex-col flex text-white lg:flex-row gap-20 items-center justify-between">
            <ul class="flex flex-col items-left list-none">
                <li class="montserrat-bold mb-4 text-sm">Company</li>
                <a href="/blogs">
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        Blog
                    </li>
                </a>
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
