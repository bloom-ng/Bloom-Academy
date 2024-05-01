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
        <div class="relative h-screen">
            <!-- Hero Section -->
            <div
                class="relative bg-cover bg-center h-[850px] md:h-[650px] md:relative bg-cover bg-center lg:h-[800px]"
                style="
                    background-image: url('/images/busy-handicapped-employee-answering-phone-office-1.png');
                "
            >
                <div
                    class="hidden md:block absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% inset-0 bg-opacity-0"
                ></div>
                <div
                    class="block md:hidden absolute z-10 inset-0 bg-black bg-opacity-80"
                ></div>

                <!-- Floating Menu -->
                <nav
                    class="hidden md:block absolute top-0 left-0 right-0 bg-opacity-75 z-10"
                >
                    <div
                        class="mx-auto px-10 lg:px-6 2xl:px-24 py-8 flex justify-between"
                    >
                        <a
                            href="/"
                            class="lg:pl-8 block 2xl:hidden text-white font-semibold"
                            ><img
                                src="/images/bloom-academy.svg"
                                class=""
                                alt="Bloom Logo"
                        /></a>
                        <a
                            href="/"
                            class="hidden 2xl:block text-white font-semibold"
                            ><img
                                src="/images/bloom-academy.svg"
                                class="w-[270px] h-[150px]"
                                alt="Bloom Logo"
                        /></a>
                        <div
                            class="flex md:text-[13px] md:leading-[30px] lg:text-[18px] lg:leading-[36px] 2xl:text-[34px] 2xl:leading-[45px] items-center justify-center poppins-medium md:space-x-10 lg:space-x-16 2xl:space-x-32"
                        >
                            <div class="relative" id="dropdownButton">
                                <div
                                    onclick="toggleDropdown()"
                                    class="flex items-center justify-center"
                                >
                                    <a href="#" class="text-white">Learn</a>
                                    <img
                                        class=""
                                        src="/images/collapse-arrow.svg"
                                        alt="Bloom Logo"
                                    />
                                </div>
                                <div
                                    id="dropdown"
                                    class="absolute hidden top-0 z-20 pt-10 flex flex-col justify-center items-center"
                                >
                                    <ul
                                        class="bg-white px-16 poppins-regular py-5 text-base text-black rounded-[35px]"
                                    >
                                        <div
                                            class="relative"
                                            id="dropdownButton1"
                                        >
                                            <div
                                                onclick="toggleDropdown1()"
                                                class="flex items-center justify-center"
                                            >
                                                <li class="py-2 flex flex-row">
                                                    Performance Marketing
                                                </li>
                                                <li class="py-2">
                                                    Media Buying
                                                </li>
                                                <li class="py-2">
                                                    Social Media
                                                </li>
                                                <li class="py-2">
                                                    Advertising Regulation
                                                </li>
                                            </div>
                                        </div>
                                        <li class="py-2">Data</li>
                                        <li class="py-2">Engineering</li>
                                        <li class="py-2">Product</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="text-white">For Business</a>
                            <a href="#" class="text-white">Sign In</a>
                            <a
                                href="#"
                                class="text-white bg-[#C73029] py-1 px-8 lg:px-10 rounded-full montserrat-bold"
                                >Register</a
                            >
                            <!-- Add more links as needed -->
                        </div>
                    </div>
                </nav>
                <!-- Floating Menu for mobile -->
                <nav
                    class="block md:hidden absolute top-0 left-0 right-0 bg-opacity-75 z-10"
                >
                    <section
                        class="container mx-auto px-7 py-8 flex justify-between"
                    >
                        <a href="/">
                            <div class="logo">
                                <img
                                    src="/images/bloom-academy-mobile.svg"
                                    alt=""
                                />
                            </div>
                        </a>

                        <div class="" id="">
                            <!-- DROPDOWN MENU -->
                            <div class="dropdown icon">
                                <img src="/images/menu.svg" alt="" />
                            </div>
                            <!-- /DROPDOWN MENU -->
                        </div>
                    </section>
                </nav>
                <!-- Floating Menu for mobile -->

                <div class="py-[6%]">
                    <div
                        class="lg:container pt-6 md:pt-24 px-6 md:px-14 md:w-3/4 lg:w-3/4 break-normal flex flex-col justify-start items-left relative z-10"
                    >
                        <div class="text-center md:text-left pt-8 flex-1">
                            <h1
                                class="text-[24px] leading-[27px] sm:text-[38px] sm:leading-[45px] md:text-[34px] md:leading-[40px] lg:text-[40px] lg:leading-[45px] xl:text-[48px] xl:leading-[50px] pt-10 md:pt-2 lg:pt-10 pb-4 md:pb-1 poppins-bold text-[#E8E9EB] md:text-white"
                            >
                                Transform a Business <br />
                                or Brand With
                                <span class="text-[#FF8100]">
                                    Practical <br />
                                    Marketing Skills!</span
                                >
                            </h1>
                        </div>

                        <div
                            class="flex flex-col text-center items-center justify-center md:justify-start md:items-start w-6/7"
                        >
                            <h1
                                class="hidden sm:block [14px] leading-[20px] text-left md:text-[14px] md:leading-[20px] lg:text-[18px] lg:leading-[25px] pt-2 text-white poppins-light"
                            >
                                Learn modern marketing strategies, understand
                                how to<br />
                                use digital channels to drive conversion ,
                                develop expert<br />
                                media buying skills, and get certified for
                                learning.
                            </h1>
                            <h1
                                class="block sm:hidden px-10 text-[14px] leading-[20px] md:text-[20px] md:leading-[30px] pt-2 text-white poppins-light"
                            >
                                Learn modern marketing strategies, understand
                                how to use digital channels to drive conversion
                                , develop expert media buying skills, and get
                                certified for learning.
                            </h1>
                            <p
                                class="text-white md:text-[18px] lg:text-[22px] text-[12px] md:text-left bg-[#C73029] montserrat-semi-bold px-8 md:px-10 lg:px-12 py-2 md:py-2 lg:py-3 mt-16 rounded-full"
                            >
                                Take Course
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second section -->
            <div
                class="relative h-[2120px] sm:h-[1900px] md:h-[1295px] lg:h-[1685px] bg-[#FFE8D1]"
            >
                <div class="flex justify-center z-20 items-center">
                    <div
                        class="hidden md:block absolute flex justify-center z-20 items-center -mt-2"
                    >
                        <p
                            class="bg-[#FF8100] md:text-[30px] lg:text-[45px] leading-[50px] text-white poppins-bold px-8 py-3 lg:px-16 lg:py-6"
                        >
                            Our Courses
                        </p>
                    </div>
                </div>
                <div
                    class="absolute -mt-60 md:mt-20 lg:mt-32 grid md:grid-cols-2 gap-12 md:gap-20 lg:gap-24 px-6 sm:px-[10%] md:px-10 xl:px-32"
                >
                    <div
                        class="flex flex-col z-50 py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-2xl h-[1160px] sm:h-[1100px] md:h-[1170px] lg:h-[1465px] md:surround md:shadow-custom"
                    >
                        <div class="flex justify-center">
                            <div
                                class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[190px] lg:w-[400px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/social-media-marketing-concept-marketing-with-applications.png');
                                "
                            ></div>
                        </div>
                        <div
                            class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16"
                        >
                            <h1
                                class="text-[20px] leading-[20px] sm:text-[30px] sm:leading-[35px] md:leading-[30px] lg:text-[40px] lg:leading-[40px] poppins-bold"
                            >
                                Bloom Digital <br />Marketing <br />Certificate
                            </h1>
                            <p
                                class="text-base md:text-[18px] md:leading-[23px] md:mr-4 lg:mr-1 lg:text-2xl mb-10 lg:mb-14 poppins-regular mt-6"
                            >
                                A high-demand course for marketing and sales
                                professionals looking to succeed in fintechs,
                                banks, telecoms, FMCGs, e-commerce, SaaS, and
                                other B2C or direct-to-customer businesses.
                            </p>
                            <p
                                class="text-base leading-[43px] lg:text-2xl lg:leading-[50px] pl-4 lg:pl-8 border-l-8 border-[#FF8100] mb-16 poppins-regular mt-6"
                            >
                                Instructor-Led<br />
                                Self-Paced<br />
                                8 Weeks<br />
                                Online<br />
                                Milestone Projects<br />
                                Weekends or Weekdays<br />
                                Certificate<br />
                                No Application Fee<br />
                                No Certificate Fee<br />
                                Pay One-Time Tuition Fee
                            </p>
                            <a
                                href="#"
                                class="text-white text-xl bg-[#C73029] py-4 px-8 lg:px-10 rounded-full montserrat-extra-bold"
                                >Register</a
                            >
                        </div>
                    </div>
                    <div
                        class="flex flex-col z-50 py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-2xl h-[1100px] sm:h-[940px] md:h-[1040px] lg:h-[1305px] md:surround md:shadow-custom"
                    >
                        <div class="flex justify-center">
                            <div
                                class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[190px] lg:w-[400px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/businessman-with-chart.png');
                                "
                            ></div>
                        </div>
                        <div
                            class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16"
                        >
                            <h1
                                class="text-[20px] leading-[20px] sm:text-[30px] sm:leading-[35px] md:leading-[30px] lg:text-[40px] lg:leading-[40px] poppins-bold"
                            >
                                Bloom Digital <br />
                                AD Expert
                            </h1>
                            <p
                                class="text-base md:text-[18px] md:leading-[23px] md:mr-4 lg:mr-1 lg:text-2xl mb-10 lg:mb-14 poppins-regular mt-6"
                            >
                                A 5-day practical training for entrepreneurs,
                                CEOs, and digital marketing executives on how to
                                use digital platforms such as Meta, Google,
                                TikTok, Microsoft Advertising, LinkedIn,
                                Snapchat, X and other platforms for effective
                                performance marketing.
                            </p>
                            <p
                                class="text-base leading-[43px] lg:text-2xl lg:leading-[50px] pl-4 lg:pl-8 border-l-8 border-[#FF8100] mb-16 poppins-regular mt-6"
                            >
                                Instructor-Led<br />
                                5 Days<br />
                                Online or In Person
                                <br />
                                1x Post-Training Support on Learners Personal
                                Campaign<br />
                                No Application Fee
                                <br />
                                Pay One-Time Tuition Fee
                                <br />
                            </p>
                            <a
                                href="#"
                                class="text-white text-xl bg-[#C73029] py-4 px-8 lg:px-10 rounded-full montserrat-extra-bold"
                                >Register</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second section -->

            <!-- Footer Mobile -->
            <footer class="block md:hidden">
                <div
                    class="bg-[#151515] flex flex-col justify-center items-center"
                >
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
                        <li
                            class="montserrat-extra-light mb-2 text-sm md:text-xs"
                        >
                            About
                        </li>
                        <li
                            class="montserrat-extra-light mb-2 text-sm md:text-xs"
                        >
                            Bloom Digital Media Ltd
                        </li>
                    </ul>
                    <ul class="flex flex-col items-left list-none">
                        <li class="montserrat-bold mb-4 text-sm md:text-xs">
                            Legal
                        </li>
                        <li
                            class="montserrat-extra-light mb-2 text-sm md:text-xs"
                        >
                            Terms of Service
                        </li>
                        <li
                            class="montserrat-extra-light mb-2 text-sm md:text-xs"
                        >
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
                                2024 Bloom Digital Media Ltd. All rights
                                reserved.
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
        </div>
    </body>
</html>
