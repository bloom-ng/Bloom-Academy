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
        <div class="h-screen bg-[#2D2D2B]" style="height: 120vh">
            <nav class="top-0 left-0 right-0 bg-opacity-75 z-50">
                <div class="container mx-auto px-6 py-8 flex justify-between">
                    <a href="#" class="text-white font-semibold"
                        ><img
                            src="/images/bloom-academy.svg"
                            class=""
                            alt="Bloom Logo"
                    /></a>
                    <div
                        class="flex text-[18px] leading-[36px] items-center justify-center poppins-medium space-x-16"
                    >
                        <div class="flex items-center justify-center">
                            <a href="#" class="text-white hover:text-blue-500"
                                >Learn</a
                            >
                            <img
                                class=""
                                src="/images/collapse-arrow.svg"
                                alt="Bloom Logo"
                            />
                        </div>
                        <a href="#" class="text-white hover:text-blue-500"
                            >For Business</a
                        >
                        <a href="#" class="text-white hover:text-blue-500"
                            >Sign In</a
                        >
                        <a
                            href="#"
                            class="text-white bg-[#C73029] py-1 px-10 rounded-full montserrat-bold"
                            >Register</a
                        >
                        <!-- Add more links as needed -->
                    </div>
                </div>
            </nav>
            <div
                class="flex flex-col pl-14 pr-20 pt-10 items-center md:items-start gap-6 md:gap-20 md:flex-row"
            >
                <div class="md:text-left pt-8 flex-1">
                    <h1
                        class="text-[48px] leading-[50px] pt-10 pb-20 poppins-bold text-white"
                    >
                        Bloom Academy helps <br />
                        organization
                        <span class="text-[#FF8100]"> upskill <br />staff</span>
                        and expand their <br />capabilities.
                    </h1>
                    <a
                        href="#"
                        class="text-white text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold"
                        >Book a Demo</a
                    >
                </div>
                <div
                    class="relative pr rounded-tr-[50px] flex justify-end items-end rounded-bl-[50px] bg-cover bg-center py-[10%] w-[575px] h-[402px] md:flex-none"
                    style="background-image: url('/images/mask-group.png')"
                >
                    <!-- <div class="z-0 md:flex-none">
                        <img
                            class="w-[330px] h-[258px]"
                            src="/images/mask-group.png"
                            alt="Mask Group"
                        />
                    </div> -->
                    <div class="absolute -mb-52 -mr-6 z-10 w-[477px]">
                        <p
                            class="bg-[#FFE8D1] text-center py-8 px-2 rounded-tl-[50px] rounded-tr-[50px] rounded-bl-[50px] text-[18px] leading-[25px] poppins-regular"
                        >
                            Our Marketing Academy teaches your team <br />
                            <b>practical techniques and tools</b> to achieve
                            <br />
                            Awareness, Consideration, and Conversion <br />
                            at scale , while building new position <br />
                            strategies for a competitive industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-screen bg-[#FFE8D1]" style="height: 118vh">
            <div class="absolute -mt-16 grid grid-cols-2 gap-24 px-32">
                <div
                    class="flex flex-col py-16 bg-white rounded-[35px] h-screen shadow"
                    style="height: 115vh"
                >
                    <div class="flex justify-center">
                        <div
                            class="bg-[#FF8100] rounded-3xl w-[400px] h-[250px]"
                        ></div>
                    </div>
                    <div class="mx-12 mt-16">
                        <h1 class="text-[40px] leading-[40px] poppins-bold">
                            Bloom Academy <br />For Government
                        </h1>
                        <p class="text-2xl mb-32 poppins-regular mt-6">
                            Upskill and reskill government workers and citizens!
                        </p>
                        <a
                            href="#"
                            class="text-white text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold"
                            >Learn More</a
                        >
                    </div>
                </div>
                <div
                    class="flex flex-col py-16 bg-white rounded-[35px] h-screen shadow"
                    style="height: 115vh"
                >
                    <div class="flex justify-center">
                        <div
                            class="bg-[#FF8100] rounded-3xl w-[400px] h-[250px]"
                        ></div>
                    </div>
                    <div class="mx-12 mt-16">
                        <h1 class="text-[40px] leading-[40px] poppins-bold">
                            Bloom Academy <br />For Business
                        </h1>
                        <p class="text-2xl mb-16 poppins-regular mt-6">
                            Get your team to have super individuals and
                            organizational effectiveness through our training
                            programmes.
                        </p>
                        <a
                            href="#"
                            class="text-white text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold"
                            >Learn More</a
                        >
                    </div>
                </div>
            </div>
        </div>

        <!-- Rest of the page content -->
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
        <!-- ... -->
    </body>
</html>
