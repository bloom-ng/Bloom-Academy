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
                class="relative bg-cover bg-center h-screen"
                style="
                    background-image: url('/images/busy-handicapped-employee-answering-phone-office-1.png');
                "
            >
                <div
                    class="absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% bg-black inset-0 bg-opacity-0"
                ></div>

                <!-- Floating Menu -->
                <nav class="top-0 left-0 right-0 bg-opacity-75 z-50">
                    <div
                        class="container mx-auto px-6 py-8 flex justify-between"
                    >
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
                                <a
                                    href="#"
                                    class="text-white hover:text-blue-500"
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
                <div class="py-[6%]">
                    <div
                        class="container px-14 w-1/2 break-normal flex flex-col justify-start items-left relative z-10"
                    >
                        <h1
                            class="text-[45px] leading-[55px] poppins-bold text-white"
                        >
                            Transform a Business <br />
                            or Brand With
                            <span class="text-[#FF8100]">
                                Practical <br />
                                Marketing Skills!</span
                            >
                        </h1>
                        <div
                            class="flex flex-col justify-start items-start w-6/7"
                        >
                            <h1
                                class="text-[20px] leading-[30px] pt-2 text-white poppin-light"
                            >
                                Learn modern marketing strategies, understand
                                how to<br />
                                use digital channels to drive conversion ,
                                develop expert<br />
                                media buying skills, and get certified for
                                learning.
                            </h1>
                            <p
                                class="text-white text-[22px] text-left bg-[#C73029] montserrat-semi-bold px-12 py-3 mt-16 rounded-full"
                            >
                                Take Course
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second section -->
            <div class="relative h-screen bg-[#FFE8D1]" style="height: 250vh">
                <div class="flex justify-center z-20 items-center">
                    <div
                        class="absolute flex justify-center z-20 items-center -mt-2"
                    >
                        <p
                            class="bg-[#FF8100] text-[45px] leading-[50px] text-white poppins-bold px-16 py-6"
                        >
                            Our Courses
                        </p>
                    </div>
                </div>
                <div class="absolute mt-32 grid grid-cols-2 gap-24 px-32">
                    <div
                        class="flex flex-col py-16 bg-white rounded-[35px] h-screen shadow"
                        style="height: 215vh"
                    >
                        <div class="flex justify-center">
                            <div
                                class="bg-[#FF8100] rounded-3xl w-[400px] h-[250px]"
                            ></div>
                        </div>
                        <div class="mx-12 mt-16">
                            <h1 class="text-[40px] leading-[40px] poppins-bold">
                                Bloom Digital <br />Marketing <br />Certificate
                            </h1>
                            <p class="text-2xl poppins-regular mt-6">
                                A high-demand course for marketing and sales
                                professionals looking to succeed in fintechs,
                                banks, telecoms, FMCGs, e-commerce, SaaS, and
                                other B2C or direct-to-customer businesses.
                            </p>
                            <p
                                class="text-2xl pl-4 leading-[50px] border-l-8 border-[#FF8100] mb-16 poppins-regular mt-6"
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
                                class="text-white text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold"
                                >Register</a
                            >
                        </div>
                    </div>
                    <div
                        class="flex flex-col py-16 bg-white rounded-[35px] h-screen shadow"
                        style="height: 190vh"
                    >
                        <div class="flex justify-center">
                            <div
                                class="bg-[#FF8100] rounded-3xl w-[400px] h-[250px]"
                            ></div>
                        </div>
                        <div class="mx-12 mt-16">
                            <h1 class="text-[40px] leading-[40px] poppins-bold">
                                Bloom Digital <br />
                                AD Expert
                            </h1>
                            <p class="text-2xl poppins-regular mt-6">
                                A 5-day practical training for entrepreneurs,
                                CEOs, and digital marketing executives on how to
                                use digital platforms such as Meta, Google,
                                TikTok, Microsoft Advertising, LinkedIn,
                                Snapchat, X and other platforms for effective
                                performance marketing.
                            </p>
                            <p
                                class="text-2xl pl-4 leading-[50px] border-l-8 border-[#FF8100] mb-16 poppins-regular mt-6"
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
                                class="text-white text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold"
                                >Register</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second section -->

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
        </div>

        <!-- ... -->
    </body>
</html>
