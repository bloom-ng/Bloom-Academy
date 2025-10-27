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
        rel="stylesheet" />
    <!-- Include Mont Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <script src="https://checkout.flutterwave.com/v3.js"></script>

    <title>Bloom Academy Africa</title>
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />
</head>

<body class="">
    <div class="relative h-screen">
        <!-- Hero Section -->
        <div class="relative bg-cover bg-center h-[700px] md:h-[650px] lg:h-[890px] 2xl:h-[1330px] md:relative bg-cover bg-center"
            style="
                    background-image: url('/images/young-student-working-assignment.png');
                ">
            <div
                class="hidden md:block absolute z-10 bg-gradient-to-r from-[#000000E5] from-10.81% via-[#000000BF] via-32.98% via-[#0000008C] via-60.71% to-[#00000026] to-85.73% inset-0 bg-opacity-0">
            </div>
            <div class="block md:hidden absolute z-10 inset-0 bg-black bg-opacity-80"></div>

            <!-- Floating Menu -->
            <nav class="hidden md:block absolute top-0 left-0 right-0 bg-opacity-75 z-10">
                <div class="mx-auto px-10 lg:px-6 2xl:px-24 py-8 flex justify-between">
                    <a href="/" class="lg:pl-8 block 2xl:hidden text-white font-semibold"><img
                            src="/images/logo_main.png" class="w-32 h-auto" alt="Bloom Academy Africa Logo" /></a>
                    <a href="/" class="hidden 2xl:block text-white font-semibold"><img src="/images/logo_main.png"
                            class="w-32 h-auto" alt="Bloom Academy Africa Logo" /></a>
                    <div class="pr-8">
                        <a href="#" class="text-white font-semibold"><img src="/images/Male-user.svg"
                                class="w-12" alt="Bloom Academy Africa Logo" /></a>
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
                                <a href="/blogs" class="text-white">Blog</a>
                                <a class="pl-6" href="#"></a>
                                <a class="pl-6 pb-2" href="https://app.bloomacademyafrica.com/student/register">Register</a>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- Floating Menu for mobile -->

            <div class="py-[6%]">
                <div
                    class="lg:container pt-6 md:pt-24 px-6 md:px-14 md:w-3/4 lg:w-3/4 break-normal flex flex-col justify-start items-left relative z-10">
                    <div class="text-center md:text-left pt-12 lg:pt-8 flex-1">
                        <h1
                            class="text-sm md:text-base lg:text-2xl lg:leading-[15px] 2xl:text-[40px] 2xl:leading-[55px] text-[#F0F0F0] poppins-medium">
                            Welcome to the Bloom Marketing Academy.
                        </h1>
                        <h1
                            class="text-[30px] leading-[35px] sm:text-[38px] sm:leading-[45px] md:text-[34px] md:leading-[40px] lg:text-[73px] lg:leading-[69px] 2xl:text-[140px] 2xl:leading-[130px] pt-10 md:pt-2 lg:pt-10 pb-4 md:pb-1 poppins-extrabold text-[#E8E9EB] md:text-[#F0F0F0]">
                            Its
                            <span class="text-[#FF8100]"> Awesome </span>to
                            <br />
                            have you with us.
                        </h1>
                    </div>

                    <div
                        class="flex flex-col text-center items-center justify-center md:justify-start md:items-start lg:w-4/6">
                        <h1
                            class="hidden sm:block [14px] leading-[20px] text-left md:text-[14px] md:leading-[20px] lg:text-[35px] lg:leading-[43px] 2xl:text-[40px] 2xl:leading-[55px] pt-2 lg:pt-16 text-[#F0F0F0] poppins-light">
                            <span class="poppins-bold">Make a payment to unlock the course
                                curriculum</span>
                            and proceed to the academic programme

                            <div class="poppins-bold pt-16">
                                Click on any course to begin
                            </div>
                        </h1>
                        <h1
                            class="block sm:hidden px-2 text-[14px] leading-[20px] md:text-[20px] md:leading-[30px] pt-2 text-white poppins-light">
                            <span class="poppins-bold">Make a payment to unlock the course
                                curriculum</span>
                            and proceed to the academic programme

                            <div class="poppins-bold pt-16">
                                Click on any course to begin
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second section -->
        <div
            class="relative z-50 h-[750px] ph3:h-[750px] sm:h-[430px] md:h-[690px] lg:h-[699px] 2xl:h-[720px] bg-[#FFE8D1]">
            <div
                class="absolute -mt-44 md:-mt-16 grid sm:grid-cols-2 gap-12 md:gap-24 px-6 ph3:px-[16%] sm:px-6 md:px-10 lg:px-16 xl:px-32 2xl:px-[15%]">
                <div
                    class="flex flex-col py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-[35px] h-[410px] sm:h-[550px] md:h-[660px] lg:h-[690px] xl:h-[670px] md:surround md:shadow-custom2">
                    <div class="flex justify-center">
                        <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[400px] lg:h-[250px]"
                            style="
                                    background-image: url('/images/social-media-marketing-concept-marketing-with-applications.png');
                                ">
                        </div>
                    </div>
                    <div class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16">
                        <h1
                            class="text-[20px] leading-[20px] sm:text-[26px] sm:leading-[30px] md:text-[30px] md:leading-[40px] lg:text-[36px] lg:leading-[40px] poppins-bold">
                            Bloom Digital Marketing Certificate
                        </h1>
                        <p class="text-base md:text-2xl mb-8 sm:mb-20 md:mb-14 lg:mb-14 poppins-regular mt-6">
                            $100 or ₦100,000
                        </p>
                        {{-- <a href="https://flutterwave.com/pay/ep6qot9y4kky" href="/submit?id=ep6qot9y4kky"
                            class="text-white md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold text-sm">Pay
                            Now</a> --}}
                        <button onclick="makePayment(100000, 'Bloom Digital Marketing Certificate')"
                            class="text-white md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold text-sm">Pay
                            Now</button>
                    </div>
                </div>
                <div
                    class="flex flex-col py-7 sm:pt-10 md:py-8 lg:py-16 bg-white rounded-[35px] h-[410px] sm:h-[550px] md:h-[660px] lg:h-[690px] xl:h-[670px] md:surround md:shadow-custom2">
                    <div class="flex justify-center">
                        <div class="bg-cover bg-no-repeat bg-center md:surround md:shadow-custom2 rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[400px] lg:h-[250px]"
                            style="
                                    background-image: url('/images/businessman-with-chart.png');
                                ">
                        </div>
                    </div>
                    <div class="mx-6 mt-8 sm:mx-10 md:mx-7 lg:mx-12 md:mt-16">
                        <h1
                            class="text-[20px] leading-[20px] sm:text-[26px] sm:leading-[30px] md:text-[30px] md:leading-[40px] lg:text-[36px] lg:leading-[40px] poppins-bold">
                            Bloom Digital AD Expert
                        </h1>
                        <p
                            class="text-base md:text-2xl mb-8 sm:mb-20 md:mb-44 md:mb-14 lg:mb-14 2xl:mb-24 poppins-regular mt-6 sm:mt-14 md:mt-16 xl:mt-6">
                            $60 or ₦65,000
                        </p>
                        {{-- <a href="https://flutterwave.com/pay/l8islsz4eivp" href="/submit?id=l8islsz4eivp"
                            class="text-white md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold text-sm">Pay
                            Now</a> --}}
                        <button onclick="makePayment(65000, 'Bloom Digital AD Expert')"
                            class="text-white
                            md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold
                            text-sm">Pay
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- former payment details -->
            <!-- <div
                    class="absolute bottom-0 pb-10 lg:pb-24 px-6 md:px-10 xl:px-32"
                >
                    <div
                        class="text-[24px] leading-[30px] sm:text-[27px] sm:leading-[34px] 2xl:text-[70px] 2xl:leading-[80px] lg:text-[36px] poppins-bold pb-8"
                    >
                        <p>Pay To</p>
                    </div>
                    <div
                        class="flex flex-wrap lg:flex-nowrap flex-cols gap-12 sm:gap-24 lg:gap-36 2xl:gap-52 pb-6 lg:pb-16 text-[15px] leading-[23px] lg:text-[35px] lg:leading-[43px] 2xl:text-[60px] 2xl:leading-[70px] poppins-regular"
                    >
                        <div>
                            <p>
                                <span
                                    class="text-[20px] leading-[30px] sm:text-[25px] sm:leading-[35px] 2xl:text-[65px] 2xl:leading-[90px] lg:text-[36px] poppins-bold"
                                    >$ Account</span
                                ><br />
                                003414041542414 <br />
                                XXXXX Bank <br />Bloom Digital Media
                            </p>
                        </div>
                        <div>
                            <p>
                                <span
                                    class="text-[20px] leading-[30px] sm:text-[25px] sm:leading-[35px] 2xl:text-[65px] 2xl:leading-[90px] lg:text-[35px] lg:leading-[43px] poppins-bold"
                                    >₦ Account</span
                                ><br />
                                3356436435413 <br />XXXXX Bank <br />Bloom
                                Digital Media
                            </p>
                        </div>
                    </div>
                    <p
                        class="block sm:hidden text-[15px] leading-[23px] sm:text-[20px] sm:leading-[30px] lg:text-[29px] pb-8 lg:pb-16"
                    >
                        Send proof of payment by email to
                        <span class="poppins-bold"
                            >bloomacademy <br />
                            @bloomdigitmedia.com</span
                        >
                    </p>
                    <p
                        class="hidden sm:block text-[15px] leading-[23px] sm:text-[20px] sm:leading-[30px] 2xl:text-[60px] 2xl:leading-[70px] lg:text-[29px] pb-8 lg:pb-16"
                    >
                        Send proof of payment by email to
                        <span class="poppins-bold"
                            >bloomacademy@bloomdigitmedia.com</span
                        >
                    </p>
                    <p
                        class="text-[15px] leading-[23px] sm:text-[20px] sm:leading-[29px] 2xl:text-[60px] 2xl:leading-[70px] lg:text-[29px]"
                    >
                        Lets get started with unlocking marketing strategies and
                        practice!
                    </p>
                </div> -->
        </div>
        <!-- Second section -->

        {{-- <div id="paymentModal"
            class="fixed z-50 w-full h-full inset-0 flex items-center justify-center bg-[#222]/40 hidden">
            <div class="bg-white rounded-3xl shadow-sm lg:w-[50%] h-auto p-12">
                <div
                    class="flex w-full h-fit flex-col items-center justify-start max-h-[90%] overflow-y-scroll pt-4 px-4 text-center">
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="text" placeholder="Full Name" value="{{ $userData->name ?? '' }}"
                            id="payment-name" required>
                    </div>
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="email" placeholder="Email Address" value="{{ $userData->email ?? '' }}"
                            id="payment-email" required>
                    </div>
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="text" placeholder="Phone Number" id="payment-phone"
                            value="{{ $userData->phone ?? '' }}" required>
                    </div>
                    <div class="hidden">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="number" placeholder="Amount" value="100000" id="payment-amount" required>

                    </div>
                    <div class="mt-6">
                        <button onclick="makePayment()"
                            class="text-white
                            md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold
                            text-sm">
                            Pay Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="paymentModal2"
            class="fixed z-50 w-full h-full inset-0 flex items-center justify-center bg-[#222]/40 hidden">
            <div class="bg-white rounded-3xl shadow-sm lg:w-[50%] h-auto p-12">
                <div
                    class="flex w-full h-fit flex-col items-center justify-start max-h-[90%] overflow-y-scroll pt-4 px-4 text-center">
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="text" placeholder="Full Name" id="payment-name" required>
                    </div>
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="email" placeholder="Email Address" id="payment-email" required>
                    </div>
                    <div class="w-full">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="text" placeholder="Phone Number" id="payment-phone" required>
                    </div>
                    <div class="hidden">
                        <input
                            class="px-12 bg-white border montserrat-regular placeholder:italic border-[#FF8100] text-gray-900 text-[10px] rounded-full h-6 mb-6 block w-full py-6"
                            type="number" placeholder="Amount" value="65000" id="payment-amount" required>
                    </div>
                    <div class="mt-6">
                        <button onclick="makePayment()"
                            class="text-white
                            md:text-xl bg-[#C73029] py-2 px-8 sm:py-4 sm:px-10 rounded-full montserrat-extra-bold
                            text-sm">
                            Pay Now
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}

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
                    <a href="https://www.facebook.com/bloomdigitmedia/" target="_blank"><img
                            src="/images/Facebook.svg" alt="Facebook Link" /></a>
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
        <!-- Footer Mobile -->

        <!-- Footer PC -->
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
                            2024 Bloom Digital Media Ltd. All rights
                            reserved.
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
        <!-- Footer PC -->
    </div>

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


    {{-- FLUTTERWAVE SCRIPT START --}}
    <script>
        function openPaymentModal() {
            document.getElementById('paymentModal').classList.remove('hidden');
        }

        function closePaymentModal() {
            document.getElementById('paymentModal').classList.add('hidden');
        }

        function openPaymentModal() {
            document.getElementById('paymentModal2').classList.remove('hidden');
        }

        function closePaymentModal() {
            document.getElementById('paymentModal2').classList.add('hidden');
        }

        function makePayment(amount, course) {
            FlutterwaveCheckout({
                public_key: "{{ env('FLUTTERWAVE_PUBLIC_KEY') }}",
                tx_ref: 'bloom_academy_ref' + Math.floor(Math.random() * 1000000000 + 1),
                amount: amount,
                currency: "NGN",
                redirect_url: "{{ env('APP_URL') }}/confirm-payment?name={{ $userData->name }}&email={{ $userData->email }}&phone={{ $userData->phone }}&course=" +
                    course + "&amount=" + amount,
                meta: {
                    consumer_id: '',
                    consumer_mac: "",
                },
                customer: {
                    email: "{{ $userData->email }}",
                    phone_number: "{{ $userData->phone }}",
                    name: "{{ $userData->name }}",
                    location: "{{ $userData->location }}",
                    course: course,
                },
                customizations: {
                    title: "Bloom Academy Africa",
                    description: "Bloom Academy Africa Course Payment",
                    logo: "{{ asset('/images/bloom-academy-logo-2.png') }}",
                },
                callback: function(data) {
                    console.log("payment callback:", data);
                },
                onclose: function() {
                    console.log("Payment cancelled!");
                }
            });
        }
    </script>
    {{-- FLUTTERWAVE SCRIPT END --}}
</body>

</html>
