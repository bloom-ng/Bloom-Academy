<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

    <title>Bloom Academy Africa</title>
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />
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
</head>

<body class="">
    <div class="h-[850px] sm:h-[1000px] md:h-[650px] lg:h-[710px] xl:h-[795px] bg-[#2D2D2B]">
        <nav class="hidden md:block top-0 left-0 right-0 bg-opacity-75 z-50">
            <div class="xl:container mx-auto md:pl-12 md:pr-6 lg:pl-12 lg:pr-6 xl:px-6 py-8 flex justify-between">
                <a href="/" class="text-white font-semibold"><img src="/images/logo_main.png" class="w-32 h-auto"
                        alt="Bloom Academy Africa Logo" /></a>
                <div
                    class="flex text-[16px] lg:text-[18px] leading-[36px] items-center justify-center poppins-medium space-x-16">
                    <div class="relative" id="dropdownButton">
                        <div onclick="toggleDropdown()" class="flex items-center justify-center">
                            <a href="#" class="text-white">Learn</a>
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
                                                id="dropdown2"
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
                    <a href="/business" class="text-[#FF8100]">For Business</a>
                    <a href="#" class="text-white">Sign In</a>
                    <a href="/submit"
                        class="text-white bg-[#C73029] py-1 px-10 rounded-full montserrat-bold">Register</a>
                    <!-- Add more links as needed -->
                </div>
            </div>
        </nav>
        <!-- Floating Menu for mobile -->
        <nav class="block md:hidden absolute top-0 left-0 right-0 bg-opacity-75 z-30">
            <section class="container mx-auto px-7 py-8 flex justify-between">
                <a href="/">
                    <div class="logo">
                        <img src="/images/logo_main.png" class="w-24" alt="Bloom Academy Africa Logo" />
                    </div>
                </a>

                <div class="relative" id="dropdownButton2">
                    <div onclick="toggleDropdown2()" class="flex justify-end">
                        <a href="#"><img src="/images/menu.svg" alt="" /></a>
                    </div>
                    <div id="dropdown2"
                        class="text-black hidden static -ml-[200px] ph1:-ml-[240px] ph2:-ml-[300px] ph3:-ml-[345px] sm:-ml-[562px] pt-4 z-20">
                        <div class="flex flex-col bg-black -mx-7 bg-opacity-75 text-white gap-2 montserrat-regular">
                            <a class="pl-6 pt-2" href="/marketing">Learn</a>

                            <a class="pl-6" href="/business">For Business</a>
                            <a class="pl-6" href="#">Sign In</a>
                            <a class="pl-6 pb-2" href="/submit">Register</a>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- Floating Menu for mobile -->
        <div
            class="flex flex-col px-7 md:px-14 pt-10 items-center md:items-start gap-6 md:gap-14 lg:gap-20 md:flex-row">
            <div class="text-center md:text-left pt-8 flex-1">
                <h1
                    class="text-[22px] leading-[27px] sm:text-[38px] sm:leading-[45px] md:text-[34px] md:leading-[40px] lg:text-[40px] lg:leading-[45px] xl:text-[48px] xl:leading-[50px] pt-10 md:pt-2 lg:pt-10 pb-4 md:pb-16 poppins-bold text-[#E8E9EB] md:text-white">
                    Bloom Academy helps <br />
                    organizations
                    <span class="text-[#FF8100]"> upskill <br />staff</span>
                    and expand their <br />capabilities.
                </h1>
                <div class="flex flex-row items-center justify-start">
                    <a href="https://bloomdigitmedia.com/contact"
                        class="hidden md:block text-white text-base lg:text-xl bg-[#C73029] py-4 px-8 rounded-full montserrat-extra-bold">Book
                        a Demo</a>
                </div>
            </div>
            <div class="relative pr rounded-tr-[30px] flex justify-end items-end rounded-bl-[30px] md:rounded-bl-[43px] md:rounded-tr-[43px] bg-cover bg-center py-[10%] w-[241.428px] h-[172.4px] sm:w-[345px] sm:h-[241.2px] lg:w-[420px] lg:h-[300.6px] xl:w-[575px] xl:h-[402px] xl:flex-none"
                style="background-image: url('/images/mask-group-2.png')">
                <!-- <div class="z-0 md:flex-none">
                        <img
                            class="w-[330px] h-[258px]"
                            src="/images/mask-group.png"
                            alt="Mask Group"
                        />
                    </div> -->
                <div
                    class="absolute -mb-20 -mr-4 md:-mb-36 md:-mr-8 lg:-mb-44 lg:-mr-8 xl:-mb-52 xl:-mr-8 z-10 w-[195px] md:w-[270px] lg:w-[360px] xl:w-[477px]">
                    <p
                        class="bg-[#FFE8D1] text-center py-4 px-4 md:py-8 md:px-[37px] rounded-tl-[30px] rounded-tr-[30px] rounded-bl-[30px] md:rounded-tl-[40px] rounded-tr-[40px] rounded-bl-[40px] text-[10px] leading-[13px] lg:text-[14px] lg:leading-[19px] xl:text-[18px] xl:leading-[25px] poppins-regular">
                        Our Marketing Academy teaches your team
                        <b>practical techniques and tools</b> to achieve
                        Awareness, Consideration, and Conversion at scale ,
                        while building new positioning strategies for a
                        competitive industry.
                    </p>
                </div>
            </div>
            <div class="pt-24 z-20 block md:hidden">
                <a href="https://bloomdigitmedia.com/contact"
                    class="text-white text-base bg-[#C73029] py-3 px-7 rounded-full montserrat-extra-bold">Book a
                    Demo</a>
            </div>
        </div>
    </div>
    <div class="relative h-[970px] sm:h-[1000px] md:h-[890px] bg-[#FFE8D1]">
        <div class="absolute -mt-44 md:-mt-16 grid md:grid-cols-2 gap-12 md:gap-24 px-6 md:px-10 xl:px-32">
            <div
                class="flex flex-col py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-2xl h-[500px] sm:h-[520px] md:h-[900px] lg:h-[860px] md:surround md:shadow-custom">
                <div class="flex justify-center">
                    <div class="bg-contain bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[400px] lg:h-[250px]"
                        style="
                                background-image: url('/images/coat-of-arms.png');
                            ">
                    </div>
                </div>
                <div class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16">
                    <h1
                        class="text-[20px] leading-[20px] sm:text-[30px] sm:leading-[35px] md:text-[40px] md:leading-[40px] poppins-bold">
                        Bloom Academy <br />For Government
                    </h1>
                    <p class="text-base md:text-2xl mb-20 md:mb-48 poppins-regular mt-6">
                        Upskill and reskill government workers and citizens!
                    </p>
                    <a href="https://bloomdigitmedia.com/contact"
                        class="text-white text-sm md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-bold md:montserrat-extra-bold">Learn
                        More</a>
                </div>
            </div>
            <div
                class="flex flex-col py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-2xl h-[540px] sm:h-[520px] md:h-[900px] lg:h-[860px] md:surround md:shadow-custom">
                <div class="flex justify-center">
                    <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[400px] lg:h-[250px]"
                        style="
                                background-image: url('/images/african-business-male-people-shaking-hands.png');
                            ">
                    </div>
                </div>
                <div class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16">
                    <h1
                        class="text-[20px] leading-[20px] sm:text-[30px] sm:leading-[35px] md:text-[40px] md:leading-[40px] poppins-bold">
                        Bloom Academy <br />For Business
                    </h1>
                    <p class="text-base md:text-2xl mb-20 md:mb-44 lg:mb-32 poppins-regular mt-6">
                        Get your team to have super individuals and
                        organizational effectiveness through our training
                        programmes.
                    </p>
                    <a href="https://bloomdigitmedia.com/contact"
                        class="text-white text-sm md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-bold md:montserrat-extra-bold">Learn
                        More</a>
                </div>
            </div>
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
                    <a target="_blank" href="https://bloomdigitmedia.com/#whoWeAre">
                        Bloom Digital Media Ltd
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

    <!-- scripts -->
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
