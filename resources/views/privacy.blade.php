<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

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

    <title>Bloom Academy Africa</title>
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />
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
                            <a href="#" class="text-[#FF8100]">Learn</a>
                            <img class="" src="/images/collapse-arrow-orange.svg" alt="Collapse Arrow" />
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
                    <a href="/for-business" class="text-white">For Business</a>
                    <!-- <a href="/blogs" class="text-white">Blog</a> -->
                    <a href="#" class="text-white"></a>
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
                        <img src="/images/logo_main.png" class="w-24" alt="" />
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
                            <!-- <a href="/blogs" class="text-white">Blog</a> -->
                            <a class="pl-6" href="/for-business">For Business</a>
                            <a class="pl-6" href="https://app.bloomacademyafrica.com/student/login">Sign In</a>
                            <a class="pl-6 pb-2" href="https://app.bloomacademyafrica.com/student/register">Register</a>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- Floating Menu for mobile -->

        <div class="flex flex-row items-center justify-center pb-16">
            <div class="px-4 sm:px-12 md:px-32 pt-24 md:pt-20">
                <div
                    class="text-black text-sm md:text-lg bg-white rounded-[35px] poppins-regular py-12 md:py-20 px-4 sm:px-6 md:px-20">
                    <div
                        class="poppins-bold text-center md:text-left text-[30px] leading-[30px] sm:text-[37px] sm:leading-[40px] md:text-[45px] md:leading-[50px] text-[#FF8100] pb-12">
                        Privacy
                    </div>
                    <div>
                        <div class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-8">
                            PRIVACY POLICY FOR BLOOM ACADEMY AFRICA
                        </div>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            1. Introduction
                        </div>
                        Welcome to Bloom Academy Africa. Throughout the
                        website, the terms “we,” “us,” and “our” refer to
                        Bloom Academy Africa. Bloom Academy Africa is
                        committed to protecting the privacy, confidentiality,
                        and security of the personal information entrusted to
                        us by our learners, prospective learners, website
                        visitors, instructors, partners, applicants, clients,
                        and other individuals who interact with us.<br /><br />
                        This Privacy Policy explains how Bloom Academy Africa
                        collects, uses, stores, discloses, transfers, and
                        protects personal data when you:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Visit or use our website;</li>
                            <li>Create or use an account on our learning platform;</li>
                            <li>Register for a course, programme, event or community;</li>
                            <li>Purchase or access our educational services;</li>
                            <li>Communicate with us;</li>
                            <li>Participate in assessments, discussions, or other learning activities;</li>
                            <li>Subscribe to our communications or marketing;</li>
                            <li>Interact with our social media pages; or</li>
                            <li>Otherwise, provide personal information to us.</li>
                        </ul>
                        This Privacy Policy should be read together with our
                        <a href="/terms-of-service" class="text-[#FF8100]">Terms of Service</a> and any
                        other privacy notices that we may provide at the
                        point where personal data is collected. Our
                        processing of personal data is primarily governed by
                        the Nigeria Data Protection Act, 2023 (NDP Act) and
                        applicable regulations, directives and guidance
                        issued by the Nigeria Data Protection Commission
                        (NDPC), including the NDP Act General Application and
                        Implementation Directive (GAID) 2025.<br /><br />
                        Where another applicable data-protection law applies
                        to a particular individual or processing activity, we
                        will comply with that law to the extent required. The
                        NDP Act and GAID 2025 emphasize lawful, fair, and
                        transparent processing, data minimisation, purpose
                        limitation, security, accountability and respect for
                        data-subject rights.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            2. Who We Are
                        </div>
                        For purposes of applicable data-protection law, Bloom
                        Academy Africa may act as a data controller where we
                        determine why and how personal data is processed.
                        Where we process personal data on behalf of another
                        organisation, we may act as a data processor.<br /><br />
                        Our website is:
                        <a href="https://bloomacademyafrica.com" target="_blank"
                            class="text-[#FF8100] break-words">https://bloomacademyafrica.com</a><br /><br />
                        Our learning platform is:
                        <a href="https://app.bloomacademyafrica.com" target="_blank"
                            class="text-[#FF8100] break-words">https://app.bloomacademyafrica.com</a><br /><br />
                        If you have questions about this Privacy Policy or
                        how we process your personal data, please contact us
                        using the details provided in Section 26.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            3. What Is Personal Data?
                        </div>
                        “Personal data” means information relating to an
                        identified or identifiable individual.<br /><br />
                        Depending on your relationship with Bloom Academy
                        Africa, this may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>full name;</li>
                            <li>username;</li>
                            <li>email address;</li>
                            <li>telephone number;</li>
                            <li>residential or contact address;</li>
                            <li>account and login information;</li>
                            <li>educational and professional information;</li>
                            <li>course registration information;</li>
                            <li>assessment and learning-progress information;</li>
                            <li>certificates and course-completion information;</li>
                            <li>CV or employment information where voluntarily provided;</li>
                            <li>payment and transaction information;</li>
                            <li>information contained in enquiries or communications with us;</li>
                            <li>photographs, videos or other media where provided or lawfully collected;</li>
                            <li>information posted in discussion forums or other community features;</li>
                            <li>device and browser information;</li>
                            <li>IP address;</li>
                            <li>approximate location information;</li>
                            <li>website usage information;</li>
                            <li>cookie and analytics information;</li>
                            <li>marketing preferences; and</li>
                            <li>other information you voluntarily provide to us.</li>
                        </ul>
                        We will only collect personal data that is reasonably
                        necessary for a specific and legitimate
                        purpose.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            4. How We Collect Personal Data
                        </div>
                        We may collect personal data directly from you or
                        through technology and third parties.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            4.1 Information You Provide Directly
                        </div>
                        We may collect information when you:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>register for an account;</li>
                            <li>enroll in a course;</li>
                            <li>purchase a programme;</li>
                            <li>complete a registration or application form;</li>
                            <li>submit an assessment;</li>
                            <li>participate in a discussion forum or learning community;</li>
                            <li>contact our support team;</li>
                            <li>subscribe to newsletters or marketing communications;</li>
                            <li>request information;</li>
                            <li>attend an event or webinar;</li>
                            <li>provide feedback or complete a survey; or</li>
                            <li>otherwise communicate with us.</li>
                        </ul>
                        <div class="poppins-bold text-base md:text-xl">
                            4.2 Information Collected Automatically
                        </div>
                        When you access our website or learning platform,
                        certain information may be collected automatically,
                        including:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>IP address;</li>
                            <li>browser type;</li>
                            <li>operating system;</li>
                            <li>device information;</li>
                            <li>pages visited;</li>
                            <li>links clicked;</li>
                            <li>dates and times of visits;</li>
                            <li>referring website;</li>
                            <li>approximate geographic information;</li>
                            <li>website and platform activity; and</li>
                            <li>technical information relating to your interaction with our services.</li>
                        </ul>
                        This information helps us operate, secure, analyse
                        and improve our website and learning
                        platform.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            4.3 Information Received From Third Parties
                        </div>
                        Where permitted by applicable law, we may receive
                        information from service providers and other third
                        parties, such as:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>payment processors;</li>
                            <li>learning-platform providers;</li>
                            <li>email and communication providers;</li>
                            <li>analytics providers;</li>
                            <li>authentication providers;</li>
                            <li>advertising and marketing platforms;</li>
                            <li>business partners; and</li>
                            <li>organisations that engage Bloom Academy Africa to provide training.</li>
                        </ul>
                        We will only use such information for lawful and
                        relevant purposes.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            5. Personal Data of Learners
                        </div>
                        If you register for or participate in a Bloom Academy
                        Africa programme, we may process information
                        necessary to administer your learning
                        experience.<br /><br />
                        This may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>registration details;</li>
                            <li>course enrolment;</li>
                            <li>attendance;</li>
                            <li>learning progress;</li>
                            <li>assessments and grades;</li>
                            <li>certificates;</li>
                            <li>instructor feedback;</li>
                            <li>submitted assignments;</li>
                            <li>participation in learning communities;</li>
                            <li>communications relating to your course; and</li>
                            <li>information necessary to provide learner support.</li>
                        </ul>
                        We may use this information to administer courses,
                        evaluate learning progress, issue certificates,
                        provide support, improve our programmes and maintain
                        appropriate educational records.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            6. Lawful Bases for Processing Personal Data
                        </div>
                        We will process personal data only where there is a
                        lawful basis for doing so. Depending on the
                        circumstances, our lawful bases may include:<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            6.1 Consent
                        </div>
                        We may process personal data where you have freely
                        and knowingly provided consent. You may withdraw
                        consent where processing is based on consent.
                        Withdrawal will not affect processing that occurred
                        lawfully before withdrawal.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            6.2 Performance of a Contract
                        </div>
                        We may process information where necessary to:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>register you for a course;</li>
                            <li>provide educational services;</li>
                            <li>process payments;</li>
                            <li>provide access to your account;</li>
                            <li>issue certificates; or</li>
                            <li>fulfil obligations under an agreement with you.</li>
                        </ul>
                        <div class="poppins-bold text-base md:text-xl">
                            6.3 Legal or Regulatory Obligation
                        </div>
                        We may process personal data where necessary to
                        comply with applicable legal, regulatory, tax,
                        accounting or other obligations.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            6.4 Legitimate Interests
                        </div>
                        Where permitted by law, we may process information
                        for legitimate business purposes, provided that those
                        interests do not override your fundamental privacy
                        rights and interests.<br /><br />
                        Examples may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>improving our services;</li>
                            <li>maintaining platform security;</li>
                            <li>preventing fraud or abuse;</li>
                            <li>conducting internal administration;</li>
                            <li>analysing service performance; and</li>
                            <li>communicating with existing customers about relevant services.</li>
                        </ul>
                        <div class="poppins-bold text-base md:text-xl">
                            6.5 Protection of Vital Interests
                        </div>
                        In limited circumstances, personal data may be
                        processed where necessary to protect the vital
                        interests of an individual.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            6.6 Public Interest or Other Lawful Bases
                        </div>
                        Where applicable, we may rely on another lawful basis
                        recognised under the NDP Act or other applicable
                        data-protection law.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            7. How We Use Personal Data
                        </div>
                        We may use personal data to:
                        <ol class="list-decimal pl-6 md:pl-8 py-3 space-y-2">
                            <li>create and manage user accounts;</li>
                            <li>register learners for courses and programmes;</li>
                            <li>provide educational content and services;</li>
                            <li>process payments and transactions;</li>
                            <li>administer assessments and learning activities;</li>
                            <li>track learning progress and course completion;</li>
                            <li>issue and verify certificates;</li>
                            <li>provide customer and learner support;</li>
                            <li>communicate important service information;</li>
                            <li>send administrative notifications;</li>
                            <li>send newsletters, promotional communications and marketing where legally permitted;</li>
                            <li>manage events, webinars and programmes;</li>
                            <li>improve our courses, website and learning platform;</li>
                            <li>understand how users interact with our services;</li>
                            <li>conduct research, analysis and reporting using appropriate safeguards;</li>
                            <li>detect, prevent and investigate fraud, abuse and security incidents;</li>
                            <li>maintain the security and integrity of our systems;</li>
                            <li>comply with legal and regulatory obligations;</li>
                            <li>establish, exercise or defend legal claims; and</li>
                            <li>perform other purposes that are disclosed to you at the time your information is
                                collected or are otherwise permitted by law.</li>
                        </ol>
                        We will not use personal data for an unrelated
                        purpose that is incompatible with the purpose for
                        which it was collected unless permitted by law or,
                        where required, we obtain your consent.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            8. Marketing Communications
                        </div>
                        We may send you information about Bloom Academy
                        Africa's programmes, courses, events, resources and
                        services. Where consent is required by applicable
                        law, we will obtain it before sending marketing
                        communications. You can unsubscribe from promotional
                        email communications by using the unsubscribe option
                        provided in the communication or by contacting us.
                        Please note that even if you opt out of marketing
                        communications, we may still send essential service
                        communications, such as account notifications,
                        security alerts, course information, payment
                        confirmations and important changes to our
                        services.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            9. Cookies and Similar Technologies
                        </div>
                        Bloom Academy Africa may use cookies, pixels, web
                        beacons and similar technologies on our website and
                        learning platform.<br /><br />
                        These technologies may help us:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>keep you signed in;</li>
                            <li>remember your preferences;</li>
                            <li>maintain account security;</li>
                            <li>understand website usage;</li>
                            <li>analyse traffic and performance;</li>
                            <li>improve the user experience;</li>
                            <li>detect fraudulent or suspicious activity; and</li>
                            <li>where permitted, support relevant marketing and advertising activities.</li>
                        </ul>
                        Where required, non-essential cookies will only be
                        activated after obtaining the appropriate consent.
                        You may control cookies through your browser or any
                        cookie-management tools we make available. Disabling
                        certain cookies may affect the functionality of parts
                        of our website or learning platform.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            10. Sharing Personal Data With Third Parties
                        </div>
                        Bloom Academy Africa does not sell your personal
                        data. We may disclose personal data to trusted third
                        parties where necessary and lawful to operate our
                        business and provide our services.<br /><br />
                        These may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>learning management system providers;</li>
                            <li>cloud hosting and storage providers;</li>
                            <li>payment processors;</li>
                            <li>email and messaging service providers;</li>
                            <li>customer-support platforms;</li>
                            <li>analytics providers;</li>
                            <li>cybersecurity providers;</li>
                            <li>website and software service providers;</li>
                            <li>professional advisers;</li>
                            <li>auditors;</li>
                            <li>instructors and authorised course personnel;</li>
                            <li>business partners where necessary to provide a service;</li>
                            <li>government, regulatory or law-enforcement authorities where legally required; and</li>
                            <li>other processors or service providers engaged by us for legitimate business purposes.
                            </li>
                        </ul>
                        Third-party service providers that process personal
                        data on our behalf will be required, where
                        applicable, to maintain appropriate confidentiality,
                        security and data-protection obligations. We do not
                        authorise third parties to use your personal data for
                        purposes unrelated to the services they provide to
                        Bloom Academy Africa unless such use is independently
                        lawful and properly disclosed.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            11. International Transfers of Personal Data
                        </div>
                        Some of our service providers, technology providers
                        or business partners may process personal data
                        outside Nigeria. Where personal data is transferred
                        outside Nigeria, Bloom Academy Africa will comply
                        with the applicable requirements of the NDP Act and
                        GAID concerning cross-border data transfers.<br /><br />
                        Depending on the circumstances, an international
                        transfer may be supported by an adequacy decision, an
                        approved transfer mechanism, contractual or other
                        lawful safeguards, consent, contractual necessity,
                        legal claims, public interest, vital interests or
                        another lawful basis recognised under applicable
                        law.<br /><br />
                        We will take reasonable steps to ensure that personal
                        data transferred internationally receives an
                        appropriate level of protection. The NDPC confirms
                        that Sections 41–43 of the NDP Act govern transfers
                        of personal data to foreign countries and require
                        appropriate protection for such transfers.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            12. Data Security
                        </div>
                        We take reasonable technical, organisational and
                        administrative measures to protect personal data
                        against:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>unauthorised access;</li>
                            <li>unlawful processing;</li>
                            <li>accidental loss;</li>
                            <li>destruction;</li>
                            <li>alteration;</li>
                            <li>unauthorised disclosure; and</li>
                            <li>other forms of compromise.</li>
                        </ul>
                        Depending on the nature and sensitivity of the
                        information, safeguards may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>access controls;</li>
                            <li>authentication mechanisms;</li>
                            <li>encryption or secure transmission technologies;</li>
                            <li>secure hosting;</li>
                            <li>monitoring and logging;</li>
                            <li>backups;</li>
                            <li>restricted employee access;</li>
                            <li>confidentiality obligations;</li>
                            <li>security procedures; and</li>
                            <li>privacy and data-protection training.</li>
                        </ul>
                        However, no online system can be guaranteed to be
                        completely secure. You should keep your passwords and
                        account credentials confidential and notify us
                        promptly if you believe your account has been
                        compromised.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            13. Data Breach Management
                        </div>
                        If Bloom Academy Africa becomes aware of a
                        personal-data breach, we will assess the incident and
                        take appropriate measures to contain, investigate,
                        remediate and document it. Where notification is
                        required under applicable law, we will notify the
                        appropriate regulatory authority and affected data
                        subjects within the applicable statutory or
                        regulatory timelines.<br /><br />
                        We will not make an inaccurate or misleading
                        statement regarding a data breach and will provide
                        information reasonably necessary for affected
                        individuals to understand the nature of the incident
                        and steps they can take to protect
                        themselves.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            14. Data Retention
                        </div>
                        We will retain personal data only for as long as
                        reasonably necessary to fulfil the purpose for which
                        it was collected, unless a longer retention period is
                        required or permitted by law.<br /><br />
                        Retention periods may depend on:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>the type of information;</li>
                            <li>the purpose for processing;</li>
                            <li>whether you maintain an active account;</li>
                            <li>whether you are an active or former learner;</li>
                            <li>legal, tax or accounting requirements;</li>
                            <li>dispute-resolution requirements;</li>
                            <li>security and fraud-prevention requirements; and</li>
                            <li>our legitimate business needs.</li>
                        </ul>
                        Educational records, course-completion records and
                        certificate-verification information may be retained
                        for longer periods where reasonably necessary to
                        verify participation, completion or certification and
                        where permitted by law.<br /><br />
                        When personal data is no longer required, we will
                        take reasonable steps to delete, anonymise or
                        securely dispose of it.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            15. Your Data Protection Rights
                        </div>
                        Subject to applicable law and any lawful limitations,
                        you may have the right to:
                        <ol class="list-decimal pl-6 md:pl-8 py-3 space-y-2">
                            <li>Be informed about how your personal data is processed;</li>
                            <li>Access personal data we hold about you;</li>
                            <li>Request correction of inaccurate or incomplete information;</li>
                            <li>Request erasure of your personal data in appropriate circumstances;</li>
                            <li>Object to certain processing;</li>
                            <li>Request restriction of processing in applicable circumstances;</li>
                            <li>Request data portability where applicable;</li>
                            <li>Withdraw consent where processing is based on consent;</li>
                            <li>Object to or request human intervention regarding certain automated
                                decision-making, where applicable; and</li>
                            <li>Lodge a complaint with the Nigeria Data Protection Commission where you believe your
                                privacy rights have been infringed.</li>
                        </ol>
                        The NDPC identifies these rights under the NDP Act,
                        including the rights to be informed, access,
                        rectification, objection, restriction, portability,
                        erasure and protection against certain automated
                        decision-making.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            16. How to Exercise Your Rights
                        </div>
                        To exercise a privacy right or make a data-protection
                        request, contact us using the details in Section
                        26.<br /><br />
                        Your request should, where reasonably possible,
                        include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>your full name;</li>
                            <li>the email address associated with your account;</li>
                            <li>the nature of your request;</li>
                            <li>the information or processing to which the request relates; and</li>
                            <li>any other information reasonably necessary for us to verify your identity and process
                                your request.</li>
                        </ul>
                        We may request additional information to verify your
                        identity and protect against unauthorised access to
                        personal data. We will respond to valid requests
                        within the timeframe required by applicable law. The
                        NDPC currently provides that data-subject access
                        requests under Sections 34–38 of the NDP Act may
                        include requests concerning access, processing
                        information, retention periods, rectification,
                        erasure and restriction.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            17. Automated Decision-Making and Artificial
                            Intelligence
                        </div>
                        Where Bloom Academy Africa uses automated systems,
                        algorithms or artificial intelligence technologies
                        that process personal data, we will seek to do so
                        responsibly and in accordance with applicable
                        data-protection requirements.<br /><br />
                        Where applicable law provides you with rights
                        concerning automated decision-making, including the
                        right to human intervention or to contest a decision,
                        we will respect those rights. We will take
                        appropriate steps to ensure that the use of automated
                        technologies does not unlawfully infringe the rights
                        and freedoms of data subjects.<br /><br />
                        Where a processing activity presents a significant
                        risk to individuals' privacy, Bloom Academy Africa
                        will consider whether a Data Privacy Impact
                        Assessment (DPIA) or other risk assessment is
                        required. The GAID 2025 expressly incorporates
                        privacy-by-design and privacy-by-default
                        considerations and provides for DPIAs in appropriate
                        circumstances.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            18. Children's Privacy
                        </div>
                        Bloom Academy Africa primarily provides services to
                        adults and does not intentionally collect personal
                        data from children in circumstances where such
                        collection is prohibited by applicable law. Where our
                        services are made available to individuals under 18,
                        we will apply appropriate safeguards and obtain
                        parental or guardian authorisation where required by
                        applicable law.<br /><br />
                        If you believe that a child has provided personal
                        data to us in circumstances where this was not
                        permitted, please contact us so that we can
                        investigate and take appropriate action.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            19. Public Forums, Communities and User-Generated
                            Content
                        </div>
                        Bloom Academy Africa may provide discussion forums,
                        communities, comments, social features or other areas
                        where users can share information. Information that
                        you voluntarily post in a public or accessible
                        community area may be visible to other users and may
                        be copied or shared by them. You should therefore
                        avoid publishing sensitive personal information,
                        passwords, financial information or other information
                        that you do not want others to see. Bloom Academy
                        Africa cannot guarantee the privacy of information
                        that you voluntarily make publicly
                        available.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            20. Third-Party Websites and Services
                        </div>
                        Our website, learning platform, emails, or other
                        communications may contain links to websites,
                        applications or services operated by third parties.
                        These third-party services operate under their own
                        privacy policies and terms. Bloom Academy Africa does
                        not control the privacy practices of third-party
                        websites and is not responsible for their policies or
                        practices. We encourage you to review the privacy
                        policy of any third-party service before providing
                        personal information.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            21. Data Accuracy
                        </div>
                        We take reasonable steps to ensure that personal data
                        we hold is accurate, complete and up to date where
                        necessary. You should notify us if your personal
                        information changes or if you become aware that
                        information we hold about you is inaccurate. Where
                        appropriate, we will correct or update inaccurate
                        information.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            22. Confidentiality and Employee Access
                        </div>
                        Access to personal data within Bloom Academy Africa
                        will be limited to individuals who require the
                        information for legitimate business, educational,
                        operational, administrative or legal purposes.
                        Employees, contractors, instructors and authorised
                        service providers may be subject to confidentiality
                        and data-protection obligations. Personal data should
                        not be accessed, copied, disclosed or processed for
                        purposes unrelated to the individual's authorised
                        responsibilities.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            23. Data Protection Governance
                        </div>
                        Bloom Academy Africa will maintain appropriate
                        policies, procedures and organisational measures
                        designed to support compliance with applicable
                        data-protection requirements. Where required by
                        applicable law, we will designate an appropriate Data
                        Protection Officer or responsible privacy function
                        and maintain appropriate records, assessments,
                        contracts, policies and controls.<br /><br />
                        Where applicable, we will also comply with NDPC
                        requirements concerning registration, compliance
                        audits, data-protection governance and other
                        regulatory obligations. The GAID 2025 introduced
                        specific compliance requirements concerning data
                        controllers and processors, including governance, DPO
                        responsibilities and compliance audit
                        obligations.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            24. Data Protection Complaints and Grievance
                            Redress
                        </div>
                        We encourage you to contact Bloom Academy Africa
                        first if you have a concern about the way we process
                        your personal data. We will investigate reasonable
                        privacy complaints and take appropriate steps to
                        resolve them. Where you are not satisfied with our
                        response, or where applicable law permits or requires
                        it, you may lodge a complaint with the Nigeria Data
                        Protection Commission (NDPC). The GAID 2025 includes
                        mechanisms intended to strengthen grievance redress
                        and provide data subjects with avenues for seeking
                        remedies for privacy violations.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            25. Changes to This Privacy Policy
                        </div>
                        We may update this Privacy Policy from time to time
                        to reflect:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>changes in our services;</li>
                            <li>changes in our technology;</li>
                            <li>changes in how we process personal data;</li>
                            <li>changes in applicable laws or regulatory requirements; or</li>
                            <li>improvements to our privacy practices.</li>
                        </ul>
                        When we make material changes, we will take
                        reasonable steps to notify users through our website,
                        learning platform, email or other appropriate
                        communication channels.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            26. Contact Us
                        </div>
                        If you have questions, concerns or requests relating
                        to this Privacy Policy or your personal data, please
                        contact Bloom Academy Africa:<br /><br />
                        Bloom Academy Africa <br />
                        Tel: 0708 627 8644 <br />
                        Address: Plot 91A, 43 Cres, Gwarinpa Estate, Gwarinpa
                        901108, Federal Capital Territory<br /><br />
                        For privacy-related requests, please clearly state
                        “Data Protection Request” in the subject line of your
                        email.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            27. Regulatory Authority
                        </div>
                        For matters relating to data protection in Nigeria,
                        the relevant supervisory authority is the Nigeria
                        Data Protection Commission (NDPC). Bloom Academy
                        Africa recognises the role of the NDPC as Nigeria's
                        data-protection supervisory authority.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            28. Applicable Law
                        </div>
                        This Privacy Policy is intended to operate in
                        accordance with applicable laws and regulations
                        governing personal data protection and privacy. For
                        processing subject to Nigerian law, this includes the
                        Nigeria Data Protection Act, 2023, the NDP Act
                        General Application and Implementation Directive
                        (GAID) 2025, and other applicable regulatory
                        requirements issued by the Nigeria Data Protection
                        Commission. Where another mandatory data-protection
                        law applies to particular processing activities,
                        Bloom Academy Africa will comply with the applicable
                        requirements to the extent required by law.<br /><br />
                        © 2026 Bloom Academy Africa. All rights reserved.
                    </div>
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
                <a href="/about-us">
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        About
                    </li>
                </a>
                <!-- <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                    Bloom Digital Media Ltd
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

    <!-- scripts -->
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