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
            rel="stylesheet"
        />
        <!-- Include Mont Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="">
        <div class="grid grid-cols-2">
            <div
                class="relative bg-cover bg-top h-screen bg-right-top"
                style="
                    background-image: url('/images/teaching-diligent-young-students.png');
                "
            >
                <div class="top-0 left-0 right-0 px-10 py-6">
                    <a href="/"
                        ><img
                            src="/images/Bloom Academy-black.svg"
                            alt="Bloom Academy Logo"
                    /></a>
                </div>
            </div>
            <div class="flex justify-center items-center bg-[#2D2D2B]">
                <div
                    class="flex flex-col bg-white rounded-[43px] px-[74px] pt-16 pb-10 items-center justify-center"
                >
                    <div class="items-center justify-center flex flex-col pb-8">
                        <p
                            class="text-[26px] text-center leading-[23px] poppins-bold"
                        >
                            Sign in to continue <br />
                            learning.
                        </p>
                    </div>
                    <div class="">
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-5"
                            >
                                <img src="/images/Envelope.svg" alt="" />
                            </div>
                            <input
                                type="email"
                                id="email"
                                class="ps-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6 px-52"
                                placeholder="Email Address"
                                required
                            />
                        </div>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-5"
                            >
                                <img src="/images/lock.svg" alt="" />
                            </div>
                            <input
                                type="email"
                                id="email"
                                class="ps-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 block w-full py-6 px-52"
                                placeholder="Password"
                                required
                            />
                            <div
                                class="absolute inset-y-0 end-0 flex items-center pe-5"
                            >
                                <img
                                    class="w-4"
                                    src="/images/hide.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="relative">
                            <div
                                class="flex text-[11px] justify-end poppins-medium text-[12px] mt-4 mb-8"
                            >
                                <p>Forgot Password?</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a
                            href="#"
                            class="text-white text-xl leading-[45px] bg-[#C73029] py-3 px-40 rounded-full montserrat-bold"
                            >Log In</a
                        >
                    </div>
                    <div
                        class="items-center justify-center flex flex-col mt-24"
                    >
                        <p class="text-[13px] leading-[50px] poppins-medium">
                            Don't have an account?
                            <span class="text-[#FF8100]"
                                ><a href="#">Register</a></span
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Mobile -->
        <footer class="block md:hidden">
            <div class="bg-[#151515] flex flex-col justify-center items-center">
                <div class="flex items-center justify-center pt-4">
                    <img
                        class="mr-1 -mt-1"
                        src="/images/Copyright.svg"
                        alt="Copyright icon"
                    />
                    <p
                        class="text-white text-[10px] montserrat-extra-light leading-10 mb-1 lg:mb-0"
                    >
                        2024 Bloom Digital Media Ltd. All rights reserved.
                    </p>
                </div>
                <div class="mb-2 ml-2 flex justify-center items-center">
                    <a
                        href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank"
                        ><img src="/images/Instagram.svg" alt="Instagram Link"
                    /></a>
                    <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"
                        ><img src="/images/Twitter.svg" alt="X Link"
                    /></a>
                    <a
                        href="https://www.linkedin.com/company/bloom-digital-media-nigeria/"
                        target="_blank"
                        ><img src="/images/LinkedIn.svg" alt="LinkedIn Link"
                    /></a>
                    <a
                        href="https://www.facebook.com/bloomdigitmedia/"
                        target="_blank"
                        ><img src="/images/Facebook.svg" alt="Facebook Link"
                    /></a>
                </div>
                <div>
                    <p
                        class="text-white mb-2 text-center text-[11px] montserrat-extra-light leading-[14px] lg:mb-0"
                    >
                        Bloom Academy is a <br />registered trademark of
                    </p>
                </div>
                <div class="flex items-center pb-8 justify-center">
                    <img
                        src="/images/bloom-logo-white-mobile.svg"
                        class="pl-2"
                        alt="Bloom Logo"
                    />
                </div>
            </div>
        </footer>
        <!-- Footer -->
        <!-- Footer -->
        <!-- Footer -->
        <footer
            class="hidden md:block bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex sm:flex-row items-center justify-between"
        >
            <div
                class="flex-col flex text-white sm:flex-row md:gap-16 lg:gap-20 items-center"
            >
                <ul class="flex flex-col items-left list-none">
                    <li class="montserrat-bold mb-4 text-sm md:text-xs">
                        Company
                    </li>
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        About
                    </li>
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        Bloom Digital Media Ltd
                    </li>
                </ul>
                <ul class="flex flex-col items-left list-none">
                    <li class="montserrat-bold mb-4 text-sm md:text-xs">
                        Legal
                    </li>
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        Terms of Service
                    </li>
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        Privacy Policy
                    </li>
                </ul>
            </div>
            <div
                class="md:-mt-24 lg:-mt-24 justify-end items-end flex flex-col"
            >
                <div>
                    <div class="flex items-center justify-end">
                        <p
                            class="flex items-center justify-end text-white text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0"
                        >
                            <img
                                class="mr-1"
                                src="/images/Copyright.svg"
                                alt="Copyright icon"
                            />
                            2024 Bloom Digital Media Ltd. All rights reserved.
                        </p>
                    </div>

                    <div class="flex justify-end">
                        <a
                            href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"
                            ><img
                                src="/images/Instagram.svg"
                                alt="Instagram Link"
                        /></a>
                        <a
                            href="https://x.com/bloomdigitmedia?s=20"
                            target="_blank"
                            ><img src="/images/Twitter.svg" alt="X Link"
                        /></a>
                        <a
                            href="https://www.linkedin.com/company/bloom-digital-media-nigeria/"
                            target="_blank"
                            ><img
                                src="/images/LinkedIn.svg"
                                alt="LinkedIn Link"
                        /></a>
                        <a
                            href="https://www.facebook.com/bloomdigitmedia/"
                            target="_blank"
                            ><img
                                src="/images/Facebook.svg"
                                alt="Facebook Link"
                        /></a>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-end">
                        <p
                            class="flex items-center justify-end text-white mt-3 md:mt-0 lg:mt-3 text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0"
                        >
                            Bloom Academy is a registered trademark of
                            <img
                                src="/images/bloom-logo-white.svg"
                                class="pl-2"
                                alt="Bloom Logo"
                            />
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
