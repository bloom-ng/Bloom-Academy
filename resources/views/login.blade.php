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
                class="relative bg-cover bg-top h-screen"
                style="
                    background-image: url('/images/teaching-diligent-young-students.png');
                "
            >
                <div class="top-0 left-0 right-0 px-10 py-6">
                    <img
                        src="/images/Bloom Academy-black.svg"
                        alt="Bloom Academy Logo"
                    />
                </div>
            </div>
            <div class="flex justify-center items-center bg-[#2D2D2B]">
                <div
                    class="flex flex-col bg-white rounded-[43px] px-12 py-10 items-center justify-center"
                >
                    <div class="items-center justify-center flex flex-col pb-8">
                        <p class="text-[22px] leading-[50px] poppins-black">
                            Sign In
                        </p>
                        <p
                            class="text-[15px] leading-[20px] poppins-regular bold"
                        >
                            Sign in to continue learning.
                        </p>
                    </div>
                    <div class="">
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-6"
                            >
                                <img src="/images/Envelope.svg" alt="" />
                            </div>
                            <input
                                type="email"
                                id="email"
                                class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-8 block w-full py-6 px-64"
                                placeholder="Email Address"
                                required
                            />
                        </div>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-6"
                            >
                                <img src="/images/lock.svg" alt="" />
                            </div>
                            <input
                                type="email"
                                id="email"
                                class="ps-14 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 block w-full py-6 px-64"
                                placeholder="Password"
                                required
                            />
                        </div>
                        <div class="relative">
                            <div
                                class="flex text- justify-end poppins-medium text-[12px] mt-4 mb-8"
                            >
                                <p>Forgot Password?</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a
                            href="#"
                            class="text-white text-xl leading-[45px] bg-[#C73029] py-3 px-44 rounded-full montserrat-bold"
                            >Log In</a
                        >
                    </div>
                    <div
                        class="items-center justify-center flex flex-col mt-16"
                    >
                        <p class="text-[14px] leading-[50px] poppins-medium">
                            Already have an account?
                            <span class="text-[#FF8100]"
                                ><a href="#">Register</a></span
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer
            class="bg-[#151515] max-w-[100vw] px-14 flex-col flex lg:flex-row items-center justify-between"
        >
            <div>
                <div class="flex items-center">
                    <img src="/images/Copyright.svg" alt="Copyright icon" />
                    <p
                        class="text-white text-xs montserrat-light leading-10 mb-10 lg:mb-0"
                    >
                        2024 Bloom Digital Media Ltd. All rights reserved.
                    </p>
                </div>

                <div class="flex">
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
            </div>
            <div>
                <div class="flex items-center">
                    <p
                        class="text-white mt-6 text-xs montserrat-light leading-10 mb-10 lg:mb-0"
                    >
                        Bloom Academy is a registered trademark of
                    </p>
                    <img
                        src="/images/bloom-logo-white.svg"
                        class="pl-4"
                        alt="Bloom Logo"
                    />
                </div>
            </div>
        </footer>
    </body>
</html>
