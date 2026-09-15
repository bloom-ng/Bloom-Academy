<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <title>About Us | Bloom Academy</title>
    <meta name="description" content="Bloom Academy is a practical learning platform that equips individuals,
        entrepreneurs, and professionals with the skills they need to thrive in a digital economy. Learn. Build.
        Bloom." />
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />

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
</head>

<body class="">
    <div class="relative">
        <!-- Hero Section -->
        <div class="relative h-[620px] md:h-[560px] lg:h-[700px] xl:h-[760px]">
            <!-- hero image: mobile crop -->
            <div class="block md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat" style="
                    background-image: url('/images/mobile-about-us-hero.png');
                "></div>
            <!-- hero image: desktop -->
            <div class="hidden md:block absolute inset-0 bg-cover bg-center bg-no-repeat" style="
                    background-image: url('/images/about-us-hero.png');
                "></div>
            <div
                class="hidden md:block absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% inset-0 bg-opacity-0">
            </div>
            <div class="block md:hidden absolute z-10 inset-0 bg-black bg-opacity-80"></div>

            <!-- Floating Menu -->
            <nav class="hidden md:block absolute top-0 left-0 right-0 bg-opacity-75 z-10">
                <div class="mx-auto px-10 lg:px-6 2xl:px-24 py-8 flex justify-between">
                    <a href="/" class="block 2xl:hidden text-white font-semibold"><img src="/images/logo_main.png"
                            class="w-32 h-auto" alt="Bloom Academy Africa Logo" /></a>
                    <a href="/" class="hidden 2xl:block text-white font-semibold"><img src="/images/logo_main.png"
                            class="w-32 h-auto" alt="Bloom Academy Africa Logo" /></a>
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
                                            <a href="/business">
                                                <li class="py-2 flex">
                                                    Business
                                                    <img class="pl-20" src="/images/Forward.svg" alt="" />
                                                </li>
                                            </a>
                                        </div>
                                        <a href="/marketing">
                                            <div class="flex">
                                                <li class="py-2 flex">
                                                    Marketing
                                                    <img class="pl-20" src="/images/Forward.svg" alt="" />
                                                </li>
                                            </div>
                                        </a>

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
                        <a href="/for-business" class="text-white">For Business</a>
                        <!-- <a href="/blogs" class="text-white">Blog</a> -->
                        <a href="https://app.bloomacademyafrica.com/student/login" class="text-white">Sign In</a>
                        <a href="https://app.bloomacademyafrica.com/student/register"
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
                                <button type="button" onclick="toggleMobileLearnMenu()"
                                    class="flex items-center justify-between pl-6 pr-6 pt-2">
                                    <span>Learn</span>
                                    <img id="mobile-learn-arrow" src="/images/collapse-arrow.svg" alt="Collapse Arrow"
                                        class="w-3 h-3 transition-transform duration-200" />
                                </button>
                                <div id="mobile-learn-menu" class="hidden flex-col gap-2 pl-10 pb-2">
                                    <a class="" href="/business">Business</a>
                                </div>
                                <!-- <a class="pl-6" href="/blogs">Blog</a> -->
                                <a class="pl-6" href="/for-business">For Business</a>
                                <a class="pl-6" href="https://app.bloomacademyafrica.com/">Sign In</a>
                                <a class="pl-6 pb-2"
                                    href="https://app.bloomacademyafrica.com/student/register">Register</a>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- Floating Menu for mobile -->

            <!-- jumbotron -->
            <div class="h-full flex items-center">
                <div
                    class="lg:container pt-24 md:pt-20 px-6 md:px-14 lg:px-14 2xl:px-28 md:w-3/4 lg:w-2/3 break-normal flex flex-col justify-center items-center md:justify-start md:items-start relative z-20">
                    <p
                        class="montserrat-semi-bold text-[12px] md:text-[14px] lg:text-[16px] tracking-[0.2em] uppercase text-[#FF8100] pb-4 md:pb-6">
                        About Bloom Academy
                    </p>
                    <h1
                        class="text-[35px] leading-[38px] text-center md:text-left sm:text-[44px] sm:leading-[48px] md:text-[50px] md:leading-[54px] lg:text-[64px] lg:leading-[68px] xl:text-[73px] xl:leading-[76px] poppins-bold text-white">
                        Learn. <span class="text-[#C73029]">Build.</span>
                        <span class="text-[#FF8100]">Bloom.</span>
                    </h1>
                    <p
                        class="text-[14px] leading-[22px] text-center md:text-left md:text-[16px] md:leading-[25px] lg:text-[18px] lg:leading-[30px] pt-6 md:pt-8 md:w-5/6 lg:w-4/5 text-white poppins-light">
                        Businesses are becoming more digital, new career paths are emerging, and the skills needed
                        to succeed are constantly evolving. At Bloom Academy, we believe that everyone deserves the
                        opportunity to learn the right skills, build confidence, and create a better future.
                    </p>
                    <div class="flex flex-col justify-center md:justify-start items-center md:items-start">
                        <a href="#our-approach">
                            <p
                                class="text-white text-[15px] md:text-[18px] lg:text-[22px] text-center md:text-left bg-[#C73029] montserrat-semi-bold px-8 md:px-10 lg:px-12 py-2 md:py-2 lg:py-3 mt-10 md:mt-12 lg:mt-14 rounded-full">
                                Discover Bloom
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section -->

        <!-- Who we are -->
        <div class="bg-white px-6 sm:px-10 md:px-14 lg:px-20 xl:px-32 py-16 md:py-20 lg:py-28">
            <div class="flex flex-col lg:flex-row lg:gap-20 xl:gap-28">
                <div class="lg:basis-5/12">
                    <h2
                        class="text-[26px] leading-[30px] sm:text-[32px] sm:leading-[38px] md:text-[36px] md:leading-[42px] lg:text-[44px] lg:leading-[50px] poppins-bold">
                        A practical learning platform,
                        <span class="text-[#FF8100]">built for the digital economy.</span>
                    </h2>
                </div>
                <div class="lg:basis-7/12 pt-6 lg:pt-2">
                    <p
                        class="text-[15px] leading-[26px] md:text-[17px] md:leading-[30px] lg:text-[19px] lg:leading-[34px] poppins-regular">
                        Bloom Academy is a practical learning platform that equips individuals, entrepreneurs, and
                        professionals with the skills they need to thrive in a digital economy. From digital
                        marketing and Meta Ads to content creation, photography, and cinematography, our programmes
                        are designed around skills that can be applied beyond the classroom.
                    </p>
                </div>
            </div>
        </div>
        <!-- Who we are -->

        <!-- Our Approach -->
        <div id="our-approach" class="relative bg-[#FFE8D1] pb-16 md:pb-24 lg:pb-32">
            <div class="flex justify-center z-20 items-center">
                <div class="hidden md:block absolute flex justify-center z-20 items-center -mt-2">
                    <p
                        class="bg-[#FF8100] md:text-[30px] lg:text-[45px] leading-[50px] text-white poppins-bold px-8 py-3 lg:px-16 lg:py-6">
                        Our Approach
                    </p>
                </div>
            </div>
            <div
                class="relative z-30 pt-12 md:pt-20 lg:pt-32 px-6 sm:px-10 md:px-10 lg:px-20 xl:px-32 flex flex-col lg:flex-row items-center gap-10 md:gap-12 lg:gap-20">
                <div class="w-full lg:basis-1/2 order-2 lg:order-1">
                    <p
                        class="block md:hidden bg-[#FF8100] text-[22px] leading-[30px] text-white poppins-bold px-6 py-2 mb-6 w-fit">
                        Our Approach
                    </p>
                    <p
                        class="text-[15px] leading-[26px] md:text-[17px] md:leading-[30px] lg:text-[19px] lg:leading-[34px] poppins-regular">
                        Our programmes combine practical knowledge, real-world application, expert guidance, and
                        recognized certification. We believe learning should not only equip you with skills you can
                        apply but also give you a credential that validates your knowledge and strengthens your
                        professional profile.
                    </p>
                    <p
                        class="text-[15px] leading-[26px] md:text-[17px] md:leading-[30px] lg:text-[19px] lg:leading-[34px] poppins-regular pt-5 md:pt-6">
                        Whether you are starting your career, changing career paths, growing a business, or adding a
                        new skill to your expertise, Bloom Academy provides the knowledge, experience, and
                        certification to help you move forward.
                    </p>
                    <p
                        class="text-[15px] leading-[32px] md:text-[17px] md:leading-[40px] lg:text-[19px] lg:leading-[44px] pl-4 lg:pl-8 border-l-8 border-[#C73029] poppins-regular mt-8 md:mt-10">
                        Practical knowledge<br />
                        Real-world application<br />
                        Expert guidance<br />
                        Recognized certification<br />
                    </p>
                </div>
                <div class="w-full lg:basis-1/2 order-1 lg:order-2">
                    <div class="bg-cover bg-no-repeat bg-center rounded-2xl md:surround md:shadow-custom w-full h-[240px] sm:h-[320px] md:h-[400px] lg:h-[460px]"
                        style="
                            background-image: url('/images/grid-about-us.png');
                        ">
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Approach -->

        <!-- Mission & Vision -->
        <div class="bg-[#151515] px-6 sm:px-10 md:px-14 lg:px-20 xl:px-32 py-16 md:py-20 lg:py-28">
            <div class="flex flex-col md:flex-row gap-12 md:gap-14 lg:gap-24">
                <div class="md:basis-1/2">
                    <h2
                        class="text-[24px] leading-[28px] md:text-[30px] md:leading-[36px] lg:text-[40px] lg:leading-[46px] md:min-h-[2.4em] poppins-bold text-white pb-5 md:pb-6">
                        Our Mission is <span class="text-[#FF8100]">what we Believe</span>
                    </h2>
                    <p
                        class="text-[15px] leading-[26px] md:text-[16px] md:leading-[28px] lg:text-[18px] lg:leading-[32px] poppins-light text-[#E8E9EB]">
                        Our mission is to make relevant, practical, and accessible skills available to people who
                        want to grow their careers, businesses, and opportunities. We want our learners to leave
                        Bloom Academy with more than knowledge. We want them to have the confidence to apply what
                        they have learned, solve real problems, and pursue meaningful opportunities.
                    </p>
                </div>
                <div class="md:basis-1/2">
                    <h2
                        class="text-[24px] leading-[28px] md:text-[30px] md:leading-[36px] lg:text-[40px] lg:leading-[46px] md:min-h-[2.4em] poppins-bold text-white pb-5 md:pb-6">
                        Our <span class="text-[#FF8100]">Vision</span>
                    </h2>
                    <p
                        class="text-[15px] leading-[26px] md:text-[16px] md:leading-[28px] lg:text-[18px] lg:leading-[32px] poppins-light text-[#E8E9EB]">
                        To become a leading learning platform in Africa, empowering individuals and businesses with
                        the skills, knowledge, and confidence to succeed in a rapidly changing world.
                    </p>
                </div>
            </div>
        </div>
        <!-- Mission & Vision -->

        <!-- What We Believe -->
        <div class="relative bg-white pb-16 md:pb-24 lg:pb-32">
            <div class="flex justify-center z-20 items-center">
                <div class="hidden md:block absolute flex justify-center z-20 items-center -mt-2">
                    <p
                        class="bg-[#FF8100] md:text-[30px] lg:text-[45px] leading-[50px] text-white poppins-bold px-8 py-3 lg:px-16 lg:py-6">
                        What We Believe
                    </p>
                </div>
            </div>
            <div class="block md:hidden relative z-30 pt-12 sm:pt-16 px-6 sm:px-10">
                <p class="bg-[#FF8100] text-[22px] leading-[30px] text-white poppins-bold px-6 py-2 w-fit">
                    What We Believe
                </p>
            </div>
            <div
                class="relative z-30 pt-8 md:pt-20 lg:pt-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 lg:gap-14 px-6 sm:px-10 md:px-10 lg:px-20 xl:px-32">
                <!-- Belief 1 -->
                <div class="flex flex-col z-50 py-6 lg:py-8 bg-white rounded-2xl md:surround md:shadow-custom">
                    <div class="flex justify-center px-4 lg:px-6">
                        <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-full h-[180px] lg:h-[220px]"
                            style="background-image: url('/images/teaching-diligent-young-students.png');">
                        </div>
                    </div>
                    <div class="px-6 lg:px-8 mt-6 flex flex-col flex-grow">
                        <h3
                            class="text-[22px] md:text-[24px] lg:text-[26px] xl:text-[28px] leading-tight poppins-bold break-words">
                            Skills create <br />opportunities
                        </h3>
                        <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-4">
                            The right skill can open a door to a new career, business, or possibility. Learning
                            should be practical. Knowledge becomes valuable when you can apply it in the real world.
                        </p>
                    </div>
                </div>

                <!-- Belief 2 -->
                <div class="flex flex-col z-50 py-6 lg:py-8 bg-white rounded-2xl md:surround md:shadow-custom">
                    <div class="flex justify-center px-4 lg:px-6">
                        <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-full h-[180px] lg:h-[220px]"
                            style="background-image: url('/images/young-student-working-assignment.png');">
                        </div>
                    </div>
                    <div class="px-6 lg:px-8 mt-6 flex flex-col flex-grow">
                        <h3
                            class="text-[22px] md:text-[24px] lg:text-[26px] xl:text-[28px] leading-tight poppins-bold break-words">
                            Growth is <br />continuous
                        </h3>
                        <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-4">
                            The digital world never stops changing, and neither should your learning.
                        </p>
                    </div>
                </div>

                <!-- Belief 3 -->
                <div class="flex flex-col z-50 py-6 lg:py-8 bg-white rounded-2xl md:surround md:shadow-custom">
                    <div class="flex justify-center px-4 lg:px-6">
                        <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-full h-[180px] lg:h-[220px]"
                            style="background-image: url('/images/group-of-workers.png');">
                        </div>
                    </div>
                    <div class="px-6 lg:px-8 mt-6 flex flex-col flex-grow">
                        <h3
                            class="text-[22px] md:text-[24px] lg:text-[26px] xl:text-[28px] leading-tight poppins-bold break-words">
                            Everyone can <br />bloom
                        </h3>
                        <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-4">
                            Your starting point does not determine your destination. With the right skills, support,
                            and opportunity, you can grow into your potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- What We Believe -->

        <!-- Testimonials -->
        <div class="relative bg-[#FFE8D1] pb-16 md:pb-24 lg:pb-32">
            <div class="flex justify-center z-20 items-center">
                <div class="hidden md:block absolute flex justify-center z-20 items-center -mt-2">
                    <p
                        class="bg-[#FF8100] md:text-[30px] lg:text-[45px] leading-[50px] text-white poppins-bold px-8 py-3 lg:px-16 lg:py-6">
                        What Our Students Say
                    </p>
                </div>
            </div>
            <div class="block md:hidden relative z-30 pt-12 sm:pt-16 px-6 sm:px-10">
                <p class="bg-[#FF8100] text-[22px] leading-[30px] text-white poppins-bold px-6 py-2 w-fit">
                    What Our Students Say
                </p>
            </div>
            <div
                class="relative z-30 pt-8 md:pt-20 lg:pt-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 lg:gap-14 px-6 sm:px-10 md:px-10 lg:px-20 xl:px-32">
                <!-- Testimonial 1 -->
                <div class="flex flex-col z-50 items-center text-center px-6 lg:px-8 py-8 lg:py-10 bg-white rounded-2xl md:surround md:shadow-custom">
                    <div class="bg-cover bg-no-repeat bg-center rounded-full w-24 h-24 md:w-28 md:h-28"
                        style="background-image: url('/images/testimonial-joshua-eli.jpg');">
                    </div>
                    <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-6">
                        “The instructors were able to share their years of experience with us through the live
                        classes. If you’re looking to get started with digital skills, Bloom Academy is the best
                        option.”
                    </p>
                    <h3 class="text-[18px] md:text-[20px] poppins-bold mt-6">
                        Joshua Eli
                    </h3>
                    <p class="text-[14px] md:text-[15px] text-[#FF8100] montserrat-semi-bold mt-1">
                        Digital Marketing
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="flex flex-col z-50 items-center text-center px-6 lg:px-8 py-8 lg:py-10 bg-white rounded-2xl md:surround md:shadow-custom">
                    <div class="bg-cover bg-no-repeat bg-center rounded-full w-24 h-24 md:w-28 md:h-28"
                        style="background-image: url('/images/testimonial-adenle-blessing.png');">
                    </div>
                    <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-6">
                        “Learning with Bloom Academy has been a great experience. I love the live classes because
                        they helped explain the notes and course materials better, making it easier for me to
                        understand the lessons.”
                    </p>
                    <h3 class="text-[18px] md:text-[20px] poppins-bold mt-6">
                        Adenle Blessing
                    </h3>
                    <p class="text-[14px] md:text-[15px] text-[#FF8100] montserrat-semi-bold mt-1">
                        Digital Marketing
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="flex flex-col z-50 items-center text-center px-6 lg:px-8 py-8 lg:py-10 bg-white rounded-2xl md:surround md:shadow-custom sm:col-span-2 lg:col-span-1 sm:mx-auto sm:w-full sm:max-w-md lg:max-w-none">
                    <div class="bg-cover bg-no-repeat bg-center rounded-full w-24 h-24 md:w-28 md:h-28"
                        style="background-image: url('/images/testimonial-nora-ahamefuna.jpeg');">
                    </div>
                    <p class="text-[15px] lg:text-[16px] leading-relaxed poppins-regular mt-6">
                        “I had always run Meta Ads, but taking the class helped me discover and understand certain
                        things I didn’t know before. The classes gave me new insights that have improved my
                        knowledge of Meta Ads.”
                    </p>
                    <h3 class="text-[18px] md:text-[20px] poppins-bold mt-6">
                        Nora Ahamefuna
                    </h3>
                    <p class="text-[14px] md:text-[15px] text-[#FF8100] montserrat-semi-bold mt-1">
                        Meta Ads
                    </p>
                </div>
            </div>
        </div>
        <!-- Testimonials -->

        <!-- Your Growth Starts Here -->
        <div class="bg-[#FFE8D1] px-6 sm:px-10 md:px-14 lg:px-20 xl:px-32 py-16 md:py-20 lg:py-28">
            <div class="flex flex-col items-center text-center">
                <h2
                    class="text-[28px] leading-[32px] sm:text-[34px] sm:leading-[40px] md:text-[40px] md:leading-[46px] lg:text-[52px] lg:leading-[58px] poppins-bold">
                    Your Growth <span class="text-[#C73029]">Starts Here</span>
                </h2>
                <p
                    class="text-[15px] leading-[26px] md:text-[17px] md:leading-[30px] lg:text-[19px] lg:leading-[34px] poppins-regular pt-6 md:pt-8 md:w-4/5 lg:w-3/5">
                    Whether you're looking to get your first digital skill, advance your career, grow your business,
                    or discover a new path, Bloom Academy is here to help you learn, build, and bloom.
                </p>
                <p
                    class="text-[18px] leading-[26px] md:text-[22px] md:leading-[32px] lg:text-[26px] lg:leading-[36px] poppins-bold pt-8 md:pt-10">
                    Get the skills. Create the opportunities.
                    <span class="text-[#FF8100]">Bloom.</span>
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 pt-10 md:pt-12">
                    <a href="https://app.bloomacademyafrica.com/student/register"
                        class="text-white text-[15px] md:text-[18px] lg:text-[20px] bg-[#C73029] py-3 px-10 lg:px-12 rounded-full montserrat-bold">Register</a>
                    <a href="/marketing"
                        class="text-[#C73029] text-[15px] md:text-[18px] lg:text-[20px] border-2 border-[#C73029] py-3 px-10 lg:px-12 rounded-full montserrat-bold">Explore
                        Courses</a>
                </div>
            </div>
        </div>
        <!-- Your Growth Starts Here -->
    </div>

    <!-- Footer Mobile -->
    <footer class="block md:hidden">
        <div class="bg-[#151515] flex flex-col justify-center items-center">
            <div class="flex items-center justify-center pt-4">
                <img class="mr-1 -mt-1" src="/images/Copyright.svg" alt="Copyright icon" />
                <p class="text-white text-[10px] montserrat-extra-light leading-10 mb-1 lg:mb-0">
                    2026 Bloom Media Group. All rights reserved.
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
                <img src="/images/bloom-logo-footer.png" class="h-9 w-auto" alt="Bloom Logo" />
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
                <a href="/blogs">
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        Blog
                    </li>
                </a>
                <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a href="/about-us">About</a>
                </li>
                <!-- <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    <a href="#">Bloom Digital Media Ltd
                    </a>
                </li> -->
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
                        2026 Bloom Media Group. All rights reserved.
                    </p>
                </div>

                <div class="flex justify-end">
                    <a href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank"><img src="/images/Instagram.svg" alt="Instagram Link" /></a>
                    <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"><img src="/images/Twitter.svg"
                            alt="X Link" /></a>
                    <a href="https://www.linkedin.com/company/bloom-digital-media-nigeria/" target="_blank"><img
                            src="/images/LinkedIn.svg" alt="LinkedIn Link" /></a>
                    <a href="https://www.facebook.com/bloomdigitmedia/" target="_blank"><img src="/images/Facebook.svg"
                            alt="Facebook Link" /></a>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-end">
                    <p
                        class="flex items-center justify-end text-white mt-3 md:mt-0 lg:mt-3 text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0">
                        Bloom Academy is a registered trademark of
                        <img src="/images/bloom-logo-footer.png" class="pl-2 h-7 w-auto" alt="Bloom Logo" />
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ... -->
    <script>
        function toggleMobileLearnMenu() {
            const menu = document.getElementById('mobile-learn-menu');
            const arrow = document.getElementById('mobile-learn-arrow');

            if (!menu || !arrow) return;

            const isHidden = menu.classList.contains('hidden');

            if (isHidden) {
                menu.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            } else {
                menu.classList.add('hidden');
                arrow.classList.remove('rotate-180');
            }
        }

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
        document.addEventListener("click", function (event) {
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
