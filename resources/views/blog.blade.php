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
                    <a href="/business" class="text-white">For Business</a>
                    <a href="/blog" class="text-[#FF8100]">Blog</a>
                    <a href="https://app.bloomacademyafrica.com/student/login" class="text-white">Sign In</a>
                    <a href="https://app.bloomacademyafrica.com/student/register"
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
                            <a class="pl-6" href="https://app.bloomacademyafrica.com/student/login">Sign In</a>
                            <a class="pl-6 pb-2" href="https://app.bloomacademyafrica.com/student/register">Register</a>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- Floating Menu for mobile --> 

        <div class="flex flex-col items-center justify-center mx-5 lg:mx-8">
            <div class="flex flex-col w-full relative mb-12 lg:mb-16">
                @if($featured_post)
                    <img src="{{ Storage::url($featured_post->featured_image) }}" alt="{{ $featured_post->title }}" class="rounded-3xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent rounded-3xl"></div>
                    <div class="absolute bottom-5 lg:bottom-28 flex flex-col justify-start items-start mx-7 lg:mx-16">
                        <h3 class="text-[#F0F0F0] font-semibold lg:poppins-semibold text-base lg:poppins-bold lg:text-[20px] lg:mb-5">Featured</h3>
                        <h1 class="text-[#F0F0F0] font-bold lg:poppins-bold text-[20px] lg:text-[60px] leading-tight lg:mb-5">{{ $featured_post->title }}</h1>
                        <div class="flex flex-row w-full justify-between">
                            <h3 class="text-[#F0F0F0] poppins-normal text-[10px] lg:text-[20px] w-full">{{ Str::limit($featured_post->summary, 200) }}</h3>
                            <a href="{{ route('blog.preview', $featured_post->id) }}">
                                <svg width="70" height="70" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="justify-end items-end lg:w-[70%] lg:h-[70%] w-[60%] h-[60%]">
                                    <rect width="90" height="90" fill="url(#pattern0_2353_184)"/>
                                    <defs>
                                    <pattern id="pattern0_2353_184" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2353_184" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_2353_184" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACH0lEQVR4nO3cPY9NQRzH8UuxHppFsQqReCzpxAsQiYRXIEqlsK3tqLwFrZqEQqtgl5AgUVJReiqwWYXdrwxu9sbuvXse5pw598z38wbmP7/cTCZn/v87GEiSJEmSJEmSJElSzwDHgaOp6+gtYD+wyLol4EjqunoHuMdGX4HzqWvrFeAHm1sFbgDbU9fYC2ztETCXus4cgg4+AKdT1zrVKO4ncC11vTkEPXQH2J267qlDNa+Aw6lrzyHo4DNwLnX9U4N61oBbXgGbD3roIbC3yHrZIp73wKnU+8kh6GAFuJx6T51EM8IVcFfqveUQdPASONR08TuBeeAFsEy+PgJnmgr5IPAm9Q475BdwHdgW+5dsyJu7D8zGCjocFxrvLXAiRtDhTNZk4aHhYt2gv2+xiNbdBmaqBq1yliq93pRcRH8tGnR7jvmLbke5xp2Wiuobj44WPAudUlXOaK93LV3vnpdYKFfLwKVKAY8EfTX1LjruHXCyVsj/gt4BvE69m456AOypHfJI2AcMe8Nn0oWon0lHwp4BrgBPgW/k6xNwNnrA04hmn7LsZhpqKGQfZ/8XOWDbDcaJGLINNJNEbAnbN3Gh3FGPTY5F1Qj5i227JdRoRHcWsYwKITtaUUWJgB0WqqNgyI6/1VUgZAc6Gx5RDle3m86nRALcHTN0fyHWGhr8CXoOeDIS8mP/t6NBoYnFz5qSJEmSJEmSJEmSBh3yGzSYxDWhqSWVAAAAAElFTkSuQmCC"/>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            <div class="flex flex-col">
                <h1 class="text-[#F0F0F0] poppins-bold text-[16px] md:text-[18px] lg:text-[20px] mb-8">Recent Blog Posts</h1>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 mb-10 gap-10">
                    @foreach($posts as $post)
                        <div class="flex flex-col items-start">
                            @if($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full mb-3 rounded-lg">
                            @endif
                            <h1 class="text-[#F0F0F0] poppins-bold text-[24px]">{{ $post->title }}</h1>
                            <p class="text-[#F0F0F0] poppins-normal text-[11px] mb-6">{{ Str::limit($post->summary, 120) }}</p>
                            <p class="text-[#F0F0F0] poppins-normal text-[11px]">
                                {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d F Y') : '' }}
                            </p>
                            <a href="{{ route('blog.preview', $post->id) }}" class="mt-4 text-[#FF8100] text-sm">Read More →</a>
                        </div>
                    @endforeach
                </div>

                <!-- Add pagination links -->
                <div class="mt-8 flex justify-center">
                    {{ $posts->links() }}
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