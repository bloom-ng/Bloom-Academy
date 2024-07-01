<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <title>
        Bloom Academy | Trainings and courses in tech, marketing, product,
        software, and sales.
    </title>
    <meta name="description"
        content="Unlock your potential with Bloom
        Academy's courses in tech, marketing, product, software, and sales.
        Learn online and advance your career with expert-led training./>
        <link
            rel="shortcut
        icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />
    <meta name="description" content="Get the skill for a great Job!" />

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
    <div class="relative h-screen">
        <!-- Hero Section -->
        <div class="relative bg-cover bg-center h-screen"
            style="
                    background-image: url('/images/medium-shot-students.png');
                ">
            <div
                class="hidden md:block absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% inset-0 bg-opacity-0">
            </div>
            <div class="block md:hidden absolute z-10 inset-0 bg-black bg-opacity-80"></div>
            <!-- Floating Menu -->
            <nav class="hidden md:block absolute top-0 left-0 right-0 bg-opacity-75 z-10">
                <div class="mx-auto px-10 lg:px-6 2xl:px-24 py-8 flex justify-between">
                    <a href="/" class="block 2xl:hidden text-white font-semibold"><img
                            src="/images/bloom-academy-logo-2.png" class="w-10" alt="Bloom Logo" /></a>
                    <a href="/" class="hidden 2xl:block text-white font-semibold"><img
                            src="/images/bloom-academy-logo-2.png" class="w-16" alt="Bloom Logo" /></a>
                    <div
                        class="flex md:text-[13px] md:leading-[30px] lg:text-[18px] lg:leading-[36px] 2xl:text-[30px] 2xl:leading-[40px] items-center justify-center poppins-medium md:space-x-10 lg:space-x-16 2xl:space-x-24">
                        <div class="relative" id="dropdownButton">
                            <div onclick="toggleDropdown()" class="flex items-center justify-center">
                                <a href="#" class="text-white mr-1">Learn</a>
                                <img class="" src="/images/collapse-arrow.svg" alt="Collapse Arrow" />
                            </div>
                            <div id="dropdown" class="absolute hidden top-0 z-20 pt-10 flex flex-col justify-between">
                                <ul
                                    class="bg-white px-8 w-60 mb-14 poppins-regular py-5 text-base text-black rounded-[35px]">
                                    <div class="relative">
                                        <div class="flex">
                                            <a href="/marketing">
                                                <li class="py-2 flex">
                                                    Marketing
                                                    <img class="pl-20" src="/images/Forward.svg" alt="" />
                                                </li>
                                            </a>
                                        </div>
                                        <!-- marketing dropdown i was asked to remove -->
                                        <!-- <div
                                                id="dropdown1"
                                                class="absolute hidden pl-[210px] top-0 z-20 pt-10 flex flex-col"
                                            >
                                                <ul
                                                    class="bg-white px-8 w-64 poppins-regular py-5 text-[16px] text-black rounded-[35px]"
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
                                            </div> -->
                                    </div>
                                    <div class="relative">
                                        <div class="flex">
                                            <li class="text-[#F0F0F0] py-2 flex flex-row">
                                                Data
                                                <img class="pl-[120px]" src="/images/Forward.svg" alt="" />
                                            </li>
                                        </div>
                                        <!-- <div
                                                id=""
                                                class="absolute hidden pl-[210px] top-0 z-20 pt-10 flex flex-col"
                                            >
                                                <ul
                                                    class="bg-white px-8 w-64 poppins-regular py-5 text-base text-black rounded-[35px]"
                                                >
                                                    <li
                                                        class="py-2 flex flex-row"
                                                    >
                                                        Data Engineering
                                                    </li>
                                                    <li class="py-2">
                                                        Data Analysis
                                                    </li>
                                                    <li class="py-2">
                                                        Data Science
                                                    </li>
                                                </ul>
                                            </div> -->
                                    </div>
                                    <div class="relative">
                                        <div class="flex">
                                            <li class="text-[#F0F0F0] py-2 flex flex-row">
                                                Engineering
                                                <img class="pl-16" src="/images/Forward.svg" alt="" />
                                            </li>
                                        </div>
                                        <!-- <div
                                                id="dropdown3"
                                                class="absolute hidden pl-[210px] top-0 z-20 pt-10 flex flex-col"
                                            >
                                                <ul
                                                    class="bg-white px-8 w-64 poppins-regular py-5 text-base text-black rounded-[35px]"
                                                >
                                                    <li
                                                        class="py-2 flex flex-row"
                                                    >
                                                        Frontend Development
                                                    </li>
                                                    <li class="py-2">
                                                        Backend Development
                                                    </li>
                                                    <li class="py-2">
                                                        Artificial Intelligence
                                                    </li>
                                                    <li class="py-2">
                                                        Cloud Computing
                                                    </li>
                                                </ul>
                                            </div> -->
                                    </div>
                                    <div class="relative">
                                        <div class="flex">
                                            <li class="text-[#F0F0F0] py-2 flex flex-row">
                                                Product
                                                <img class="pl-24" src="/images/Forward.svg" alt="" />
                                            </li>
                                        </div>
                                        <!-- <div
                                                id="dropdown4"
                                                class="absolute hidden pl-[210px] top-0 z-20 flex flex-col"
                                            >
                                                <ul
                                                    class="bg-white px-8 w-64 poppins-regular py-5 text-base text-black rounded-[35px]"
                                                >
                                                    <li
                                                        class="py-2 flex flex-row"
                                                    >
                                                        Product Design
                                                    </li>
                                                    <li class="py-2">
                                                        PMP/CPM Certification
                                                        Exam
                                                    </li>
                                                </ul>
                                            </div> -->
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <a href="/business" class="text-white">For Business</a>
                        <a href="#" class="text-white">Sign In</a>
                        <a href="#"
                            class="text-white bg-[#C73029] py-1 px-8 lg:px-10 rounded-full montserrat-bold">Register</a>
                        <!-- Add more links as needed -->
                    </div>
                </div>
            </nav>
            <!-- Floating Menu for mobile -->
            <nav class="block md:hidden absolute top-0 left-0 right-0 bg-opacity-75 z-30">
                <section class="container mx-auto px-7 py-8 flex justify-between">
                    <a href="/">
                        <div class="logo">
                            <img src="/images/bloom-academy-logo-2.png" class="w-6" alt="" />
                        </div>
                    </a>

                    <div class="relative" id="dropdownButton2">
                        <div onclick="toggleDropdown2()" class="flex justify-end">
                            <a href="#"><img src="/images/menu.svg" alt="" /></a>
                        </div>
                        <div id="dropdown2"
                            class="text-black hidden static -ml-[200px] ph1:-ml-[240px] ph2:-ml-[300px] ph3:-ml-[345px] sm:-ml-[562px] pt-4 z-20">
                            <div
                                class="flex flex-col bg-black -mx-7 bg-opacity-75 text-white gap-2 montserrat-regular">
                                <a class="pl-6 pt-2" href="/marketing">Learn</a>

                                <a class="pl-6" href="/business">For Business</a>
                                <a class="pl-6" href="#">Sign In</a>
                                <a class="pl-6 pb-2" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- Floating Menu for mobile -->

            <!-- jumbotron -->
            <!-- for screens smaller than md -->
            <div class="md:py-[10%] flex flex-col justify-center items-center block md:hidden">
                <div
                    class="container pt-44 px-4 md:px-14 md:w-1/2 break-normal flex flex-col justify-center items-center md:justify-start md:items-left relative z-10">
                    <h1
                        class="text-[35px] text-center leading-[35px] md:text-[70px] lg:text-[65px] md:leading-[70px] poppins-bold text-white">
                        Get the <span class="text-[#C73029]">skill</span>
                        <span class="text-[#FF8100]">
                            for <br />A GREAT JOB!</span>
                    </h1>

                    <div class="flex flex-col justify-center md:justify-start items-center md:items-start w-3/5">
                        <p
                            class="text-white text-[15px] md:text-[22px] text-center md:text-left bg-[#C73029] montserrat-semi-bold px-4 md:px-12 py-2 md:py-3 mt-8 md:mt-16 rounded-full">
                            <a href="/marketing"> Get Started Today </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- for screens smaller than md -->
            <!-- for screens larger than md -->
            <div class="md:py-[10%] items-center hidden md:block">
                <div
                    class="container pt-24 md:pt-40 lg:pt-24 2xl:pt-36 px-4 md:px-14 md:w-3/4 lg:px-14 2xl:px-28 lg:w-2/3 break-normal flex flex-col justify-center items-center md:justify-start md:items-start relative z-10">
                    <h1
                        class="text-[35px] text-center md:text-left lg:text-left leading-[35px] md:text-[50px] md:leading-[55px] lg:text-[60px] lg:leading-[65px] xl:text-[73px] xl:leading-[70px] 2xl:text-[100px] 2xl:leading-[90px] poppins-bold text-white">
                        Get the <span class="text-[#C73029]">skill</span>
                        <span class="text-[#FF8100]">
                            for <br />A GREAT JOB!</span>
                    </h1>
                    <p
                        class="md:hidden block poppins-light text-center text-sm leading-[20px] text-white px-4 pt-10 pb-2">
                    </p>
                    <div class="flex flex-col justify-center md:justify-start items-center md:items-start w-4/5">
                        <p
                            class="text-white text-[15px] md:text-[17px] lg:text-[22px] 2xl:text-[47px] text-center md:text-left bg-[#C73029] montserrat-semi-bold px-4 md:px-10 lg:px-12 2xl:px-20 py-2 lg:py-3 2xl:py-3 mt-10 md:mt-20 2xl:mt-32 rounded-full">
                            <a href="/marketing"> Get Started Today </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- for screens larger than md -->
        </div>
    </div>
    <!-- Footer Mobile -->
    <footer class="block md:hidden">
        <div class="bg-[#151515] flex flex-col justify-center items-center">
            <div class="flex items-center justify-center pt-4">
                <img class="mr-1 -mt-1" src="/images/Copyright.svg" alt="Copyright icon" />
                <p class="text-white text-[10px] montserrat-extra-light leading-10 mb-1 lg:mb-0">
                    2024 Bloom Digital Media Ltd. All rights reserved.
                </p>
            </div>
            <div class="mb-2 ml-2 flex justify-center items-center">
                <a href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank"><img src="/images/Instagram.svg" alt="Instagram Link" /></a>
                <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"><img src="/images/Twitter.svg"
                        alt="X Link" /></a>
                <a href="https://www.linkedin.com/company/bloom-digital-media-nigeria/" target="_blank"><img
                        src="/images/LinkedIn.svg" alt="LinkedIn Link" /></a>
                <a href="https://www.facebook.com/bloomdigitmedia/" target="_blank"><img src="/images/Facebook.svg"
                        alt="Facebook Link" /></a>
            </div>
            <div>
                <p class="text-white mb-2 text-center text-[11px] montserrat-extra-light leading-[14px] lg:mb-0">
                    Bloom Academy is a <br />registered trademark of
                </p>
            </div>
            <div class="flex items-center pb-8 justify-center">
                <img src="/images/bloom-logo-white-mobile.svg" class="pl-2" alt="Bloom Logo" />
            </div>
        </div>
    </footer>
    <!-- Footer -->
    <!-- Footer -->
    <!-- Footer -->
    <footer
        class="hidden md:block bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex sm:flex-row items-center justify-between">
        <div class="flex-col flex text-white sm:flex-row md:gap-16 lg:gap-20 items-center">
            <ul class="flex flex-col items-left list-none">
                <li class="montserrat-bold mb-4 text-sm md:text-xs">
                    Company
                </li>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a target="_blank" href="https://bloomdigitmedia.com/#whoWeAre">About</a>
                </li>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a target="_blank" href="https://bloomdigitmedia.com/#whoWeAre">Bloom Digital Media Ltd
                    </a>
                </li>
            </ul>
            <ul class="flex flex-col items-left list-none">
                <li class="montserrat-bold mb-4 text-sm md:text-xs">
                    Legal
                </li>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a href="/terms-of-service">Terms of Service</a>
                </li>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a href="/privacy">Privacy Policy</a>
                </li>
            </ul>
        </div>
        <div class="md:-mt-24 lg:-mt-24 justify-end items-end flex flex-col">
            <div>
                <div class="flex items-center justify-end">
                    <p
                        class="flex items-center justify-end text-white text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0">
                        <img class="mr-1" src="/images/Copyright.svg" alt="Copyright icon" />
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
                <div class="flex items-center justify-end">
                    <p
                        class="flex items-center justify-end text-white mt-3 md:mt-0 lg:mt-3 text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0">
                        Bloom Academy is a registered trademark of
                        <img src="/images/bloom-logo-white.svg" class="pl-2" alt="Bloom Logo" />
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ... -->
    <script>
        function toggleDropdown() {
            let dropdown = document.querySelector(
                "#dropdownButton #dropdown"
            );
            dropdown.classList.toggle("hidden");
        }

        function toggleDropdown1() {
            let dropdown1 = document.querySelector(
                "#dropdownButton1 #dropdown1"
            );
            dropdown1.classList.toggle("hidden");
        }

        function toggleDropdown2() {
            let dropdown2 = document.querySelector(
                "#dropdownButton2 #dropdown2"
            );
            dropdown2.classList.toggle("hidden");
        }

        function toggleDropdown3() {
            let dropdown3 = document.querySelector(
                "#dropdownButton3 #dropdown3"
            );
            dropdown3.classList.toggle("hidden");
        }

        function toggleDropdown4() {
            let dropdown4 = document.querySelector(
                "#dropdownButton4 #dropdown4"
            );
            dropdown4.classList.toggle("hidden");
        }

        function toggleDropdown7() {
            let dropdown7 = document.querySelector(
                "#dropdownButton7 #dropdown7"
            );
            dropdown7.classList.toggle("hidden");
        }

        // Add event listener to hide dropdown when clicking outside
        document.addEventListener("click", function(event) {
            // Check if the click event target is not inside the dropdown

            if (
                !event.target.closest("#dropdown") &&
                !event.target.closest("#dropdownButton")
            ) {
                let dropdown = document.querySelector(
                    "#dropdownButton #dropdown"
                );
                dropdown.classList.add("hidden");
            }
            if (
                !event.target.closest("#dropdown7") &&
                !event.target.closest("#dropdownButton7")
            ) {
                let dropdown = document.querySelector(
                    "#dropdownButton7 #dropdown7"
                );
                dropdown.classList.add("hidden");
            }
            if (
                !event.target.closest("#dropdown1") &&
                !event.target.closest("#dropdownButton1")
            ) {
                let dropdown1 = document.querySelector(
                    "#dropdownButton1 #dropdown1"
                );
                dropdown1.classList.add("hidden");
            }

            if (
                !event.target.closest("#dropdown2") &&
                !event.target.closest("#dropdownButton2")
            ) {
                let dropdown2 = document.querySelector(
                    "#dropdownButton2 #dropdown2"
                );
                dropdown2.classList.add("hidden");
            }
            if (
                !event.target.closest("#dropdown3") &&
                !event.target.closest("#dropdownButton3")
            ) {
                let dropdown3 = document.querySelector(
                    "#dropdownButton3 #dropdown3"
                );
                dropdown3.classList.add("hidden");
            }
            if (
                !event.target.closest("#dropdown4") &&
                !event.target.closest("#dropdownButton4")
            ) {
                let dropdown4 = document.querySelector(
                    "#dropdownButton4 #dropdown4"
                );
                dropdown4.classList.add("hidden");
            }
        });
    </script>
</body>

</html>
