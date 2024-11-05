<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

    <title>Bloom Academy Africa | Blog</title>
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
    <div class="bg-[#2D2D2B]">
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
                    <a href="" class="text-white">For Business</a>
                    <a href="/blog" class="text-[#FF8100]">Blog</a>
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
                            <a class="pl-6" href="/blog">Blog</a>
                            <a class="pl-6" href="#">Sign In</a>
                            <a class="pl-6 pb-2" href="#">Register</a>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- Floating Menu for mobile --> 

        <div class="flex flex-col items-center justify-center px-8">
            <h1 class="text-[#F0F0F0] text-center poppins-bold text-[60px] mb-5">This Should Be The Blog Title <br>It Could Be Two Lines</h1>
            <h1 class="text-[#F0F0F0] text-center poppins-normal text-[15px] mb-16">Day, Month, Year</h1>
            <div class="flex flex-col w-full mb-16">
                <img src="/images/blackboy.jpg" alt="" class="rounded-3xl">
            </div>

            <div class="flex flex-row w-full justify-between items-start space-x-16 mb-16">
                <div class="flex flex-col w-1/5 text-[#F0F0F0]">
                    <h3 class=" poppins-bold text-[16px] mb-10">Recent Blog Posts</h3>
                    <h1 class="poppins-bold text-[20px] mb-2">This Should Be The Blog Title It Could Be Two Lines</h1>
                    <h1 class="poppins-normal text-[10px] mb-5">This should be the sub text, basically a description or whatever they want it to be. Maybe the first few lines of the blog itself.</h1>
                    <h1 class="poppins-normal text-[10px] mb-7">25th August 2024</h1>
                    
                    <h1 class="poppins-bold text-[20px] mb-2">This Should Be The Blog Title It Could Be Two Lines</h1>
                    <h1 class="poppins-normal text-[10px] mb-5">This should be the sub text, basically a description or whatever they want it to be. Maybe the first few lines of the blog itself.</h1>
                    <h1 class="poppins-normal text-[10px] mb-7">25th August 2024</h1>

                    <h1 class="poppins-bold text-[20px] mb-2">This Should Be The Blog Title It Could Be Two Lines</h1>
                    <h1 class="poppins-normal text-[10px] mb-5">This should be the sub text, basically a description or whatever they want it to be. Maybe the first few lines of the blog itself.</h1>
                    <h1 class="poppins-normal text-[10px] mb-7">25th August 2024</h1>

                    <h1 class="poppins-bold text-[20px] mb-2">This Should Be The Blog Title It Could Be Two Lines</h1>
                    <h1 class="poppins-normal text-[10px] mb-5">This should be the sub text, basically a description or whatever they want it to be. Maybe the first few lines of the blog itself.</h1>
                    <h1 class="poppins-normal text-[10px] mb-7">25th August 2024</h1>
                </div>

                <div class="flex flex-col w-4/5 text-[#F0F0F0]">
                    <h1 class="poppins-bold text-[30px] mb-7">Privacy Policy for Bloom Marketing Academy</h1>

                    <h1 class="poppins-bold text-[28px] mb-7">Introduction</h1>

                    <p class="poppins-normal text-[16px] mb-3">bloommarketingacademy.com is provided by Bloom Marketing Academy (“Bloom Academy”). 
                        At Bloom Academy, we value your privacy, and we are committed to safeguarding your personal information. 
                        All personal data that you provide us will be protected and kept confidential among our affiliates, representatives, and privies.
                    </p>

                    <p class="poppins-normal text-[16px] mb-3">Throughout the website, the terms “we”, “us” and “our” refer to Bloom Academy.</p>

                    <p class="poppins-normal text-[16px] mb-3">This Privacy Policy explains how we collect, use, share and protect your personal data in connection with your relationship with us as 
                        a learner or potential learner. It applies to all our learners, potential learners, applicants, partners and every other person we hold information about.
                    </p>

                    <p class="poppins-normal text-[16px] mb-3">This policy also sets out your rights and who you may contact for further information. You agree to this Privacy Policy by visiting our website and when you use our services.</p>
                    
                    <p class="poppins-normal text-[16px] mb-3">Your use of our services, and any dispute over privacy is subject to this Policy and our Terms of Service including its applicable limitation on damages and resolution of disputes. Our Terms of Service are incorporated by reference into this Policy.</p>
                    
                    <p class="poppins-normal text-[16px] mb-10">Our website and services are not directed at you if we are prohibited by any law of any jurisdiction from making the information on our website available to you and is not intended for any use that would be contrary to local law or regulation.</p>
                    
                    <h2 class="poppins-extrabold text-[24px] mb-7">Definitions</h2>

                    <h3 class="poppins-bold text-[20px] mb-1">“consent”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means the consent of the data subject which must be a freely given, specific, informed, and unambiguous indication of the data subject’s wishes by which they (by a statement or by a clear affirmative action) signify their agreement to the processing of personal data relating to them;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">“data controller”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means the natural or legal person or organisation which, alone or jointly with others, determines the purposes and means of the processing of personal data. For the purposes of this policy, Bloom Academy is the data controller of all personal data relating to data subjects;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">“data processor”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means the office of Bloom Academy responsible for ensuring that all processing of personal data is in compliance with the Data Protection Legislation;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">“Data Protection Legislation”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means all applicable data protection and privacy laws including, but not limited to the Nigerian Data Protection Act 2023, the Nigeria Data Protection Regulation 2019 (NDPR), the General Data Protection Regulation 2018 and the United Kingdom’s General Data Protection Regulation ((EU) 2016/679) (GDPR), the Data Protection Act 2018 and any successor legislation;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">"Data Protection Office”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means the office of Bloom Academy responsible for ensuring that all processing of personal data is in compliance with the Data Protection Legislation;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">"data subject”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means a living, identified, or identifiable individual about whom Bloom Academy holds personal data;</p>
                    
                    <h3 class="poppins-bold text-[20px] mb-1">“personal data”</h3>
                    <p class="poppins-normal text-[16px] mb-5">means any information relating to a data subject who can be identified, directly or indirectly, in particular by reference to an identifier such as a name, identification number, location data, an online identifier, or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural, or social identity of that data subject;</p>
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
                <a href="https://bloomdigitmedia.com/#whoWeAre">
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        About
                    </li>
                </a>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    Bloom Digital Media Ltd
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
</body>
</html>