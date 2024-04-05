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
                    background-image: url('/images/medium-shot-students.png');
                "
            >
                <div
                    class="absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% inset-0 bg-opacity-0"
                ></div>
                <!-- Floating Menu -->
                <nav class="absolute top-0 left-0 right-0 bg-opacity-75 z-10">
                    <div
                        class="container mx-auto px-6 py-8 flex justify-between"
                    >
                        <a href="/" class="text-white font-semibold"
                            ><img
                                src="/images/bloom-academy.svg"
                                class=""
                                alt="Bloom Logo"
                        /></a>
                        <div
                            class="flex text-[18px] leading-[36px] items-center justify-center poppins-medium space-x-16"
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
                                                    Marketing
                                                    <img
                                                        class="pl-8"
                                                        src="/images/Forward.svg"
                                                        alt=""
                                                    />
                                                </li>
                                            </div>
                                            <div
                                                id="dropdown1"
                                                class="absolute hidden pl-44 top-0 z-20 pt-10 flex flex-col justify-center items-center"
                                            >
                                                <ul
                                                    class="bg-white px-16 poppins-regular py-5 text-base text-black rounded-[35px]"
                                                >
                                                    <li
                                                        class="py-2 flex flex-row"
                                                    >
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
                                                </ul>
                                            </div>
                                        </div>
                                        <li class="py-2">Data</li>
                                        <li class="py-2">Engineering</li>
                                        <li class="py-2">Product</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="/business" class="text-white"
                                >For Business</a
                            >
                            <a href="/sign-in" class="text-white">Sign In</a>
                            <a
                                href="/register"
                                class="text-white bg-[#C73029] py-1 px-10 rounded-full montserrat-bold"
                                >Register</a
                            >
                            <!-- Add more links as needed -->
                        </div>
                    </div>
                </nav>
                <div class="py-[10%]">
                    <div
                        class="container pt-24 px-14 w-1/2 break-normal flex flex-col justify-start items-left relative z-10"
                    >
                        <h1
                            class="text-[73px] leading-[70px] poppins-bold text-white"
                        >
                            Get the <span class="text-[#C73029]">skill</span>
                            <span class="text-[#FF8100]">
                                for <br />A GREAT JOB!</span
                            >
                        </h1>
                        <div
                            class="flex flex-col justify-start items-start w-3/5"
                        >
                            <p
                                class="text-white text-[22px] text-left bg-[#C73029] montserrat-semi-bold px-12 py-3 mt-20 rounded-full"
                            >
                                Get Started Today
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer
                class="bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex lg:flex-row items-center justify-between"
            >
                <div
                    class="flex-col flex text-white lg:flex-row gap-20 items-center justify-between"
                >
                    <ul class="flex flex-col items-left list-none">
                        <li class="montserrat-bold mb-4 text-sm">Company</li>
                        <li class="montserrat-extra-light mb-2 text-sm">
                            About
                        </li>
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
                            <img
                                class="mr-1"
                                src="/images/Copyright.svg"
                                alt="Copyright icon"
                            />
                            <p
                                class="text-white text-xs montserrat-extra-light leading-10 mb-10 lg:mb-0"
                            >
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
                        <div class="flex items-center">
                            <p
                                class="text-white mt-3 text-xs montserrat-extra-light leading-10 mb-10 lg:mb-0"
                            >
                                Bloom Academy is a registered trademark of
                            </p>
                            <img
                                src="/images/bloom-logo-white.svg"
                                class="pl-2"
                                alt="Bloom Logo"
                            />
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- ... -->
        <script>
            function toggleDropdown() {
                let dropdown = document.querySelector(
                    "#dropdownButton #dropdown"
                );
                dropdown.classList.toggle("hidden");
            }
        </script>
        <script>
            function toggleDropdown1() {
                let dropdown1 = document.querySelector(
                    "#dropdownButton1 #dropdown1"
                );
                dropdown1.classList.toggle("hidden");
            }
        </script>
    </body>
</html>
