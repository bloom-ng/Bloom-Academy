<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')

    <title>Bloom Academy Africa | Terms & Conditions</title>
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
                        Terms of Service
                    </div>
                    <div>
                        <div class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-8">
                            TERMS OF SERVICE FOR BLOOM ACADEMY AFRICA
                            LIMITED
                        </div>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            1. Introduction
                        </div>
                        Welcome to Bloom Academy Africa. Throughout the
                        website, the terms “we,” “us,” and “our” refer to
                        Bloom Academy Africa. These Terms of Service
                        constitute a legally binding agreement between you
                        (“you,” “your,” or “Learner”) and Bloom Academy
                        Africa concerning your access to and use of our
                        website, learning platform, courses, programs,
                        educational content, events, communities, and
                        related services. Bloom Academy Africa reserves the
                        right, at its sole discretion, to modify or replace
                        these Terms of Use from time to time. If you object
                        to any such changes, your sole recourse is to cease
                        using the platform. Your continued use of the
                        Platform following any changes to these Terms will
                        constitute your acknowledgement of, and agreement to
                        be bound by, the amended Terms.<br /><br />
                        Our website is available at:
                        <a href="https://bloomacademyafrica.com" target="_blank"
                            class="text-[#FF8100] break-words">https://bloomacademyafrica.com</a><br /><br />
                        Our learning platform is available at:
                        <a href="https://app.bloomacademyafrica.com" target="_blank"
                            class="text-[#FF8100] break-words">https://app.bloomacademyafrica.com</a><br /><br />
                        By creating an account, enrolling in a course,
                        purchasing a program, accessing our platform, or
                        otherwise using our services, you acknowledge that
                        you have read, understood, and agree to be bound by
                        these terms. If you do not agree to these terms, you
                        should not use our platform or services. These terms
                        should be read together with our
                        <a href="/privacy" class="text-[#FF8100]">Privacy Policy</a>, which explains
                        how Bloom Academy Africa collects, uses, stores, and
                        protects personal data.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            2. Definitions and Interpretation
                        </div>
                        <div class="poppins-bold text-base md:text-xl">
                            2.1 Definitions
                        </div>
                        For purposes of these Terms:<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Account” or “Learner Account”
                        </div>
                        means the account created by a Learner to access the
                        Bloom Academy Africa Platform and Services.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Bloom Academy Africa”
                        </div>
                        means Bloom Academy Africa Limited and, where
                        applicable, its authorised affiliates,
                        representatives, instructors, contractors and service
                        providers.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Course”
                        </div>
                        means any educational course, programme, training,
                        workshop, bootcamp or learning programme offered by
                        Bloom Academy Africa.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Course Content”
                        </div>
                        means educational information and materials made
                        available through a course, including text, images,
                        photographs, videos, audio, documents, presentations,
                        assignments, assessments, templates and other
                        learning materials.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Course Fee”
                        </div>
                        means the applicable fee payable for a course or
                        service.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Learner”
                        </div>
                        means any individual who creates an Account,
                        registers for, purchases, enrols in or accesses a
                        Course or Service.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Platform”
                        </div>
                        means Bloom Academy Africa's website, learning
                        management system, mobile or web applications, online
                        communities, communication channels and any other
                        digital platform we may make available from time to
                        time.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Services”
                        </div>
                        means the Courses, educational programmes, events,
                        resources, learning-platform services, community
                        services and other services provided by Bloom Academy
                        Africa.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Personal Data”
                        </div>
                        means personal data as defined under applicable
                        data-protection law, including information relating
                        to an identified or identifiable individual.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Privacy Policy”
                        </div>
                        means Bloom Academy Africa's Privacy Policy,
                        available on our website, as amended from time to
                        time.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Third-Party Service”
                        </div>
                        means any product, platform, technology, payment
                        processor, software, website or service operated by a
                        third party and used in connection with our
                        Services.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “User Content”
                        </div>
                        means content submitted, uploaded, posted or
                        otherwise provided by a Learner through the Platform
                        or in connection with our Services.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            3. Acceptance of These Terms
                        </div>
                        3.1. By accessing or using the Platform or Services,
                        you agree to comply with these Terms and any
                        additional rules, policies or requirements
                        communicated to you in connection with a particular
                        Course or Service.<br /><br />
                        3.2. Certain Courses, promotions, events or Services
                        may have additional terms. Where additional terms
                        apply, they will be communicated to you before or at
                        the time they become applicable.<br /><br />
                        3.3. If there is a conflict between these Terms and a
                        specific written agreement applicable to a particular
                        Course or Service, the specific agreement will apply
                        to the extent of the conflict.<br /><br />
                        3.4. We may update these Terms from time to time.
                        Where we make material changes, we will provide
                        reasonable notice through the Platform, email or
                        another appropriate communication method. Your
                        continued use of the Platform after the effective
                        date of an updated version constitutes acceptance of
                        the revised Terms, unless applicable law requires a
                        different form of acceptance.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            4. Eligibility and Learner Accounts
                        </div>
                        4.1. You must provide accurate, current and complete
                        information when creating an Account or registering
                        for a Course.<br /><br />
                        4.2. You are responsible for keeping your Account
                        information accurate and up to date.<br /><br />
                        4.3. Unless otherwise stated for a particular
                        programme, our Services are intended primarily for
                        persons aged 18 and above. Where a Service is made
                        available to a person under 18, the applicable
                        parental or guardian requirements will apply.<br /><br />
                        4.4. You are responsible for maintaining the
                        confidentiality of your login credentials.<br /><br />
                        4.5. You must not:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>share your account with another person;</li>
                            <li>sell, transfer or assign your account;</li>
                            <li>allow another person to access paid course content through your account;</li>
                            <li>attempt to gain unauthorised access to another person's account; or</li>
                            <li>use another person's credentials without permission.</li>
                        </ul>
                        4.6. You must notify Bloom Academy Africa promptly if
                        you suspect that your Account has been compromised or
                        accessed without authorisation.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            5. Platform Access and Availability
                        </div>
                        5.1. We will use reasonable efforts to keep the
                        platform available and functioning properly. However,
                        we do not guarantee that the platform will always be:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>uninterrupted;</li>
                            <li>error-free;</li>
                            <li>available at all times;</li>
                            <li>free from bugs or technical issues; or</li>
                            <li>compatible with every device or internet connection.</li>
                        </ul>
                        5.2. The platform may occasionally be unavailable
                        because of:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>scheduled maintenance;</li>
                            <li>system upgrades;</li>
                            <li>technical problems;</li>
                            <li>cybersecurity incidents;</li>
                            <li>third-party service interruptions;</li>
                            <li>internet or telecommunications failures; or</li>
                            <li>circumstances beyond our reasonable control.</li>
                        </ul>
                        5.3. We may modify, suspend or discontinue a feature
                        or part of the platform where reasonably necessary
                        for operational, technical, legal, security or
                        business reasons. Where a change materially affects a
                        paid Course, we will take reasonable steps to notify
                        affected Learners and, where appropriate, provide a
                        reasonable alternative.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            6. Electronic Communications
                        </div>
                        6.1. By creating an account, you agree that Bloom
                        Academy Africa may communicate with you
                        electronically. Communications may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>emails;</li>
                            <li>Platform notifications;</li>
                            <li>course announcements;</li>
                            <li>assessment reminders;</li>
                            <li>payment confirmations;</li>
                            <li>account notifications;</li>
                            <li>security alerts;</li>
                            <li>support communications; and</li>
                            <li>other administrative notices.</li>
                        </ul>
                        6.2. Electronic communications may satisfy legal or
                        contractual notice requirements where permitted by
                        applicable law.<br /><br />
                        6.3. You are responsible for maintaining access to
                        the email address associated with your account and
                        ensuring that messages from Bloom Academy Africa can
                        be received.<br /><br />
                        6.4. Marketing communications are subject to
                        applicable consent and opt-out requirements described
                        in our <a href="/privacy" class="text-[#FF8100]">Privacy Policy</a>.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            7. Learner Responsibilities
                        </div>
                        As a learner, you agree to:
                        <ol class="list-decimal pl-6 md:pl-8 py-3 space-y-2">
                            <li>Comply with these Terms and applicable course rules;</li>
                            <li>Provide accurate information;</li>
                            <li>Pay applicable course fees;</li>
                            <li>Participate appropriately in classes, assignments, and learning activities;</li>
                            <li>Meet applicable assessment deadlines;</li>
                            <li>Respect instructors, staff, and other learners;</li>
                            <li>Use the platform only for lawful purposes;</li>
                            <li>Protect your login credentials;</li>
                            <li>Respect Bloom Academy Africa's intellectual property;</li>
                            <li>Refrain from sharing paid course content without permission;</li>
                            <li>Avoid behavior that disrupts the learning environment;</li>
                            <li>Comply with reasonable instructions from instructors and platform administrators; and</li>
                            <li>Notify us promptly of issues that materially affect your ability to participate in a
                                course.</li>
                        </ol>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            8. Community and Code of Conduct
                        </div>
                        Where Bloom Academy Africa provides discussion forums,
                        WhatsApp communities, social communities, live
                        classes, or other interactive spaces, you must behave
                        respectfully and professionally.<br /><br />
                        You must not:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Harass, threaten or intimidate other users;</li>
                            <li>Post discriminatory or abusive content;</li>
                            <li>Impersonate another person;</li>
                            <li>Share another person's private information without authorisation;</li>
                            <li>Upload malicious software;</li>
                            <li>Distribute spam or unsolicited advertising;</li>
                            <li>Attempt to disrupt the Platform;</li>
                            <li>Use the community for unlawful purposes;</li>
                            <li>Share sexually explicit or otherwise prohibited material;</li>
                            <li>Engage in fraud or deceptive activity; or</li>
                            <li>Repeatedly disrupt classes or learning activities.</li>
                        </ul>
                        We may remove content or restrict access where
                        reasonably necessary to protect Learners,
                        instructors, staff, our systems or the integrity of
                        the learning environment.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            9. Course Fees and Payments
                        </div>
                        9.1. Course Fees will be displayed or otherwise
                        communicated before you complete a paid
                        registration.<br /><br />
                        9.2. You are responsible for paying the applicable
                        course fee in accordance with the payment terms
                        communicated for the course.<br /><br />
                        9.3. Payments may be processed through third-party
                        payment providers. By making a payment, you authorise
                        the applicable payment provider to process the
                        transaction and acknowledge that the provider may
                        have its own terms and privacy policy.<br /><br />
                        9.4. Bloom Academy Africa does not ordinarily store
                        complete payment card information where payment
                        processing is handled by a third-party payment
                        provider.<br /><br />
                        9.5. You agree not to use fraudulent payment
                        information or attempt to circumvent applicable
                        payment requirements.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            10. Refunds, Cancellations and Withdrawals
                        </div>
                        10.1. Refund eligibility will depend on the refund
                        terms communicated for the specific Course or service
                        at the time of purchase.<br /><br />
                        10.2. Where a course has a specific refund or
                        cancellation policy, that policy forms part of these
                        terms.<br /><br />
                        10.3. Where no specific refund policy applies,
                        refunds will be considered on a case-by-case basis,
                        subject to applicable law and the circumstances of
                        the request.<br /><br />
                        10.4. Nothing in these Terms is intended to exclude
                        any consumer right or other statutory right that
                        cannot lawfully be excluded or restricted.<br /><br />
                        10.5. Promotional codes, scholarships and discounts
                        may have additional terms, including expiration dates
                        and eligibility requirements.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            11. Scholarships, Promotions, and Discounts
                        </div>
                        Bloom Academy Africa or its partners may offer:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Scholarships;</li>
                            <li>Promotional codes;</li>
                            <li>Discounts;</li>
                            <li>Free courses;</li>
                            <li>Gifts;</li>
                            <li>Grants; or</li>
                            <li>Other promotional opportunities.</li>
                        </ul>
                        Each promotion may have specific eligibility
                        requirements, deadlines, and conditions.<br /><br />
                        Unless expressly stated otherwise, promotions:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Cannot be exchanged for cash;</li>
                            <li>Cannot be transferred;</li>
                            <li>Cannot be combined with other promotions; and</li>
                            <li>May expire after the stated validity period.</li>
                        </ul>
                        Where applicable law requires otherwise, the law will
                        prevail.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            12. Course Content and Educational Materials
                        </div>
                        12.1. Bloom Academy Africa owns or has appropriate
                        rights to use the course content made available
                        through our platform.<br /><br />
                        12.2. Course Content may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Videos;</li>
                            <li>Written materials;</li>
                            <li>Presentations;</li>
                            <li>Templates;</li>
                            <li>Assignments;</li>
                            <li>Assessments;</li>
                            <li>Graphics;</li>
                            <li>Audio;</li>
                            <li>Recordings;</li>
                            <li>Guides; and</li>
                            <li>Other educational materials.</li>
                        </ul>
                        12.3. Subject to your compliance with these Terms and
                        payment of applicable fees, Bloom Academy Africa
                        grants you a limited, personal, non-exclusive,
                        non-transferable and revocable licence to access and
                        use the Course Content for your own educational
                        purposes.<br /><br />
                        12.4. You may not, without our prior written
                        permission:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Copy substantial portions of course content;</li>
                            <li>Reproduce or redistribute course content;</li>
                            <li>Sell course content;</li>
                            <li>Sublicense Course Content;</li>
                            <li>Share paid course content with persons who have not enrolled;</li>
                            <li>Upload course content to another platform;</li>
                            <li>Create a competing course substantially based on our course content;</li>
                            <li>Commercially exploit our course content; or</li>
                            <li>Remove copyright, trademark or other proprietary notices.</li>
                        </ul>
                        12.5. Reasonable personal use, including taking notes
                        for your own learning, is permitted provided that it
                        does not infringe our intellectual property
                        rights.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            13. Intellectual Property
                        </div>
                        13.1. All intellectual property rights in Bloom
                        Academy Africa's website, platform, branding,
                        trademarks, course content, original materials,
                        software, graphics, designs and other proprietary
                        materials remain with Bloom Academy Africa or the
                        relevant rights holder.<br /><br />
                        13.2. Nothing in these Terms transfers ownership of
                        Bloom Academy Africa's intellectual property to a
                        learner.<br /><br />
                        13.3. The Bloom Academy Africa name, logo, trademarks
                        and brand assets may not be used without prior
                        written permission.<br /><br />
                        13.4. You retain ownership of original user content
                        that you create, subject to the licence granted to us
                        under Section 14.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            14. User Content and Learner Submissions
                        </div>
                        14.1. You may submit content through the platform,
                        including:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Assignments;</li>
                            <li>Project work;</li>
                            <li>Comments;</li>
                            <li>Questions;</li>
                            <li>Reviews;</li>
                            <li>Feedback;</li>
                            <li>Discussion posts;</li>
                            <li>Testimonials;</li>
                            <li>Suggestions; and</li>
                            <li>Other materials.</li>
                        </ul>
                        14.2. You retain ownership of intellectual property
                        rights that you legally own in your user
                        content.<br /><br />
                        14.3. By submitting User Content, you grant Bloom
                        Academy Africa a non-exclusive, worldwide,
                        royalty-free licence to host, store, reproduce,
                        display and process that content to the extent
                        reasonably necessary to:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Operate the Platform;</li>
                            <li>Provide educational services;</li>
                            <li>Administer Courses;</li>
                            <li>Facilitate assessment;</li>
                            <li>Provide learner support;</li>
                            <li>Maintain records;</li>
                            <li>Improve our services; and</li>
                            <li>Comply with legal obligations.</li>
                        </ul>
                        14.4. We will not automatically assume that because
                        you submit content to a course or community, we have
                        unrestricted rights to use your name, photograph,
                        image, testimonial or submitted work for public
                        advertising. Where your image, testimonial, personal
                        story or identifiable work is intended for
                        promotional use, we will obtain the appropriate
                        permission or rely on another lawful basis where
                        permitted by law.<br /><br />
                        14.5. You represent that you have the necessary
                        rights to submit any content you provide to us and
                        that your submission does not unlawfully infringe
                        another person's rights.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            15. Live Classes and Recordings
                        </div>
                        15.1. Bloom Academy Africa may conduct live classes,
                        webinars, workshops, mentoring sessions and other
                        interactive learning activities.<br /><br />
                        15.2. Where a session is recorded, we will provide
                        appropriate notice where required.<br /><br />
                        15.3. Recordings may be used to provide enrolled
                        learners with access to educational material, support
                        course delivery and maintain appropriate course
                        records.<br /><br />
                        15.4. Learners must not record, reproduce,
                        redistribute or commercially exploit live sessions or
                        recordings without Bloom Academy Africa's prior
                        written permission.<br /><br />
                        15.5. Learners should avoid unnecessarily sharing
                        sensitive personal information during recorded
                        sessions.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            16. Assessments, Certificates and Course
                            Completion
                        </div>
                        16.1. Where applicable, learners may be required to
                        complete assignments, assessments, attendance
                        requirements, projects or other learning activities
                        to qualify for course completion.<br /><br />
                        16.2. Certificate eligibility may depend on the
                        requirements communicated for the relevant
                        Course.<br /><br />
                        16.3. Bloom Academy Africa reserves the right to
                        verify course completion and certificate
                        eligibility.<br /><br />
                        16.4. Certificates may be revoked where they were
                        obtained through:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Fraud;</li>
                            <li>Impersonation;</li>
                            <li>Academic dishonesty;</li>
                            <li>Unauthorised sharing of accounts;</li>
                            <li>Falsification of information; or</li>
                            <li>Other material breaches of these Terms.</li>
                        </ul>
                        16.5. Bloom Academy Africa may introduce paid
                        certificates or certificate-related fees for
                        applicable courses, provided that such fees are
                        communicated before they become payable.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            17. Academic and Professional Integrity
                        </div>
                        Learners must submit their own work unless
                        collaboration is expressly permitted.<br /><br />
                        You must not:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Impersonate another learner;</li>
                            <li>Submit another person's work as your own;</li>
                            <li>Falsify assessment results;</li>
                            <li>Manipulate platform records;</li>
                            <li>Use unauthorised assistance during assessments;</li>
                            <li>Share answers to restricted assessments; or</li>
                            <li>Otherwise, engage in academic dishonesty.</li>
                        </ul>
                        Bloom Academy Africa may investigate suspected
                        violations and take proportionate action.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            18. Changes to Courses
                        </div>
                        Bloom Academy Africa may reasonably modify,
                        reschedule, update, or discontinue course content or
                        components of a course where necessary.<br /><br />
                        Changes may include:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Instructors;</li>
                            <li>Schedules;</li>
                            <li>Learning materials;</li>
                            <li>Assessment methods;</li>
                            <li>Course structure;</li>
                            <li>Technology;</li>
                            <li>Delivery format; or</li>
                            <li>Other operational details.</li>
                        </ul>
                        Where a material change substantially affects a paid
                        course, Bloom Academy Africa will take reasonable
                        steps to notify affected learners and, where
                        appropriate, offer a reasonable alternative.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            19. Third-Party Services
                        </div>
                        Bloom Academy Africa may integrate or rely on
                        third-party services, including:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Payment processors;</li>
                            <li>Video-conferencing platforms;</li>
                            <li>Email platforms;</li>
                            <li>Messaging platforms;</li>
                            <li>Cloud services;</li>
                            <li>Analytics tools;</li>
                            <li>Learning technologies; and</li>
                            <li>Other software or technology providers.</li>
                        </ul>
                        Third-party services are governed by their own terms
                        and policies. Bloom Academy Africa is not responsible
                        for the availability, security, functionality or
                        practices of a third-party service beyond the extent
                        required by applicable law.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            20. Prohibited Use
                        </div>
                        You must not use the platform or services to:
                        <ol class="list-decimal pl-6 md:pl-8 py-3 space-y-2">
                            <li>Violate applicable law;</li>
                            <li>Infringe intellectual property rights;</li>
                            <li>Commit fraud;</li>
                            <li>Distribute malware;</li>
                            <li>Attempt unauthorised access;</li>
                            <li>Interfere with platform operations;</li>
                            <li>Scrape or systematically extract course content without permission;</li>
                            <li>Reverse engineer the platform except where permitted by law;</li>
                            <li>Resell access to the platform;</li>
                            <li>Share paid accounts;</li>
                            <li>Impersonate another person or organisation;</li>
                            <li>Distribute harmful or abusive material;</li>
                            <li>Collect another user's personal data without lawful authority; or</li>
                            <li>Engage in activity that could reasonably harm Bloom Academy Africa, its learners, or
                                its systems.</li>
                        </ol>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            21. Suspension and Termination
                        </div>
                        21.1. We may suspend or terminate your account where
                        reasonably necessary because of:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Material breach of these Terms;</li>
                            <li>Non-payment;</li>
                            <li>Fraud;</li>
                            <li>Unlawful activity;</li>
                            <li>Serious misconduct;</li>
                            <li>Unauthorised account sharing;</li>
                            <li>Intellectual-property infringement;</li>
                            <li>Security risks; or</li>
                            <li>Other conduct that materially threatens the platform or other users.</li>
                        </ul>
                        21.2. Where appropriate, we may provide notice and an
                        opportunity to remedy a breach before termination.
                        Immediate suspension may occur where necessary to
                        protect the security of the platform, other users, or
                        Bloom Academy Africa.<br /><br />
                        21.3. Upon termination, your right to access the
                        platform and course content may cease.<br /><br />
                        21.4. Termination does not affect rights or
                        obligations that by their nature should survive
                        termination, including intellectual property rights,
                        payment obligations, confidentiality, limitations of
                        liability and dispute-resolution provisions.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            22. Refund or Access Consequences Following
                            Termination
                        </div>
                        Where an account is terminated because of a learner's
                        material breach, any refund will be determined in
                        accordance with the applicable refund policy and
                        applicable law.<br /><br />
                        Where Bloom Academy Africa terminates or materially
                        discontinues a paid service for reasons unrelated to
                        a learner's breach, we will consider an appropriate
                        remedy where required by the applicable circumstances
                        and law.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            23. Disclaimers
                        </div>
                        23.1. Bloom Academy Africa provides educational and
                        training services. Our courses are intended to
                        provide education, skills, and learning
                        opportunities. Unless expressly stated otherwise, we
                        do not guarantee:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Employment;</li>
                            <li>Promotion;</li>
                            <li>Income;</li>
                            <li>Business revenue;</li>
                            <li>Client acquisition;</li>
                            <li>Academic admission;</li>
                            <li>Investment returns;</li>
                            <li>Professional certification by an external organisation; or</li>
                            <li>Any particular career outcome.</li>
                        </ul>
                        23.2. Information provided through our courses is
                        educational in nature and should not be treated as
                        legal, financial, medical, tax, or other professional
                        advice unless expressly stated and appropriately
                        qualified.<br /><br />
                        23.3. Learners are responsible for evaluating how
                        they apply information obtained through our
                        services.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            24. Limitation of Liability
                        </div>
                        To the maximum extent permitted by applicable law,
                        Bloom Academy Africa will not be liable for indirect,
                        incidental, special, consequential, or punitive
                        losses arising from your use of the Platform or
                        Services.<br /><br />
                        This may include loss of:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Profits;</li>
                            <li>Business opportunities;</li>
                            <li>Goodwill;</li>
                            <li>Anticipated savings;</li>
                            <li>Data; or</li>
                            <li>Other intangible losses.</li>
                        </ul>
                        Nothing in these Terms excludes or limits liability
                        that cannot lawfully be excluded or limited under
                        applicable Nigerian law, including liability arising
                        from fraud or other liability that applicable law
                        requires us to retain.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            25. Indemnification
                        </div>
                        To the extent permitted by applicable law, you agree
                        to indemnify and hold harmless Bloom Academy Africa,
                        its directors, officers, employees, and authorised
                        representatives against reasonable losses,
                        liabilities, claims, and expenses arising directly
                        from:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Your material breach of these terms;</li>
                            <li>Your unlawful use of the platform;</li>
                            <li>Fraud or intentional misconduct;</li>
                            <li>Infringement of another person's intellectual property rights through content you
                                submit; or</li>
                            <li>Unauthorised use of your account caused by your failure to protect your credentials.
                            </li>
                        </ul>
                        This clause does not require you to indemnify Bloom
                        Academy Africa for losses caused by Bloom Academy
                        Africa's own unlawful conduct or negligence where
                        such liability cannot legally be excluded.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            26. Force Majeure
                        </div>
                        Neither party will be responsible for failure or
                        delay in performing obligations caused by
                        circumstances beyond its reasonable control,
                        including:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>Natural disasters;</li>
                            <li>Severe weather;</li>
                            <li>War;</li>
                            <li>Terrorism;</li>
                            <li>Civil unrest;</li>
                            <li>Labour disputes;</li>
                            <li>Government action;</li>
                            <li>Widespread internet or telecommunications failures;</li>
                            <li>Cyber incidents affecting critical infrastructure;</li>
                            <li>Failure of essential third-party service providers; or</li>
                            <li>Other events beyond the reasonable control of the affected party.</li>
                        </ul>
                        The affected party will take reasonable steps to
                        minimise the impact and resume performance as soon as
                        reasonably practicable.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            27. Data Protection and Privacy
                        </div>
                        Bloom Academy Africa processes personal data in
                        accordance with applicable data-protection laws and
                        our <a href="/privacy" class="text-[#FF8100]">Privacy Policy</a>.<br /><br />
                        Our Privacy Policy explains:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li>The categories of personal data we collect;</li>
                            <li>Why we process personal data;</li>
                            <li>Lawful bases for processing;</li>
                            <li>Data-sharing arrangements;</li>
                            <li>International transfers;</li>
                            <li>Retention;</li>
                            <li>Security;</li>
                            <li>Your privacy rights; and</li>
                            <li>How to make a data-protection request or complaint.</li>
                        </ul>
                        By using our services, you acknowledge that your
                        personal data may be processed in accordance with our
                        Privacy Policy and applicable law.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            28. Dispute Resolution
                        </div>
                        <div class="poppins-bold text-base md:text-xl">
                            28.1 Informal Resolution
                        </div>
                        If a dispute arises between you and Bloom Academy
                        Africa, the parties should first attempt to resolve
                        the matter amicably through good-faith
                        discussions.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            28.2 Mediation
                        </div>
                        Where appropriate, the parties may agree to mediation
                        before commencing arbitration or court
                        proceedings.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            28.3 Arbitration
                        </div>
                        Subject to applicable law, any dispute arising out of
                        or in connection with these Terms that cannot be
                        resolved amicably within thirty (30) days may be
                        referred to arbitration in accordance with the
                        applicable arbitration law of Nigeria and the
                        applicable rules of the agreed arbitral
                        institution.<br /><br />
                        Where the parties agree to institutional arbitration
                        through the Lagos Court of Arbitration (LCA), the
                        arbitration will be administered under the applicable
                        LCA rules. The arbitration shall be conducted by a
                        single arbitrator unless the parties agree otherwise.
                        The seat of arbitration shall be Lagos, Nigeria,
                        unless the parties agree otherwise in writing. The
                        language of the arbitration shall be English. The
                        arbitrator's decision shall be final and binding,
                        subject to any rights of review or challenge
                        available under applicable law.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            28.4 Court Proceedings
                        </div>
                        Nothing in these Terms prevents either party from
                        seeking urgent interim or protective relief from a
                        court of competent jurisdiction where such relief is
                        necessary.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            29. Governing Law
                        </div>
                        These Terms shall be governed by and interpreted in
                        accordance with the laws of the Federal Republic of
                        Nigeria. Where mandatory consumer protection or other
                        statutory rights apply, those rights will not be
                        excluded by these Terms.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            30. No Class Action
                        </div>
                        To the extent permitted by applicable law, disputes
                        between a learner and Bloom Academy Africa shall be
                        brought on an individual basis. Nothing in this
                        clause is intended to remove or restrict any
                        statutory right that cannot legally be waived.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            31. Severability
                        </div>
                        If any provision of these Terms is found to be
                        invalid, unlawful, or unenforceable, that provision
                        shall be interpreted or modified to the minimum
                        extent necessary to make it enforceable where legally
                        possible. The remaining provisions shall continue in
                        full force and effect.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            32. Entire Agreement
                        </div>
                        These Terms, together with the Privacy Policy and any
                        applicable course-specific terms, constitute the
                        agreement between you and Bloom Academy Africa
                        concerning your use of the relevant services. They
                        supersede previous terms or understandings concerning
                        the same subject matter, except where a separate
                        written agreement expressly states otherwise.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            33. No Waiver
                        </div>
                        A failure by Bloom Academy Africa to enforce a
                        provision of these Terms does not constitute a waiver
                        of our right to enforce that provision later.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            34. Assignment
                        </div>
                        You may not transfer or assign your rights or
                        obligations under these Terms without our prior
                        written consent. Bloom Academy Africa may assign or
                        transfer its rights and obligations in connection
                        with a merger, acquisition, restructuring, sale of
                        assets, corporate reorganisation or other legitimate
                        business transaction, subject to applicable law.
                        Where such transfer materially affects your
                        contractual rights, we will provide notice where
                        required.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            35. Changes to These Terms
                        </div>
                        Bloom Academy Africa may amend these terms from time
                        to time. The latest version will be published on our
                        website. Where changes are material, we will provide
                        reasonable notice through the platform, email, or
                        another appropriate method. The updated terms will
                        state their effective date.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            36. Contact Us
                        </div>
                        If you have questions, concerns, or complaints
                        regarding these terms, please contact us:<br /><br />
                        Bloom Academy Africa Limited <br />
                        Tel: 0708 627 8644 <br />
                        Address: Plot 91A, 43 Cres, Gwarinpa Estate, Gwarinpa
                        901108, Federal Capital Territory <br />
                        Website:
                        <a href="https://bloomacademyafrica.com" target="_blank"
                            class="text-[#FF8100] break-words">https://bloomacademyafrica.com</a><br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            37. Related Policies
                        </div>
                        The following policies form part of Bloom Academy
                        Africa's legal and operational framework and should
                        be read together with these terms where applicable:
                        <ul class="list-disc pl-6 md:pl-8 py-3 space-y-2">
                            <li><a href="/privacy" class="text-[#FF8100]">Privacy Policy</a></li>
                            <li>Refund/Cancellation Policy</li>
                            <li>Code of Conduct</li>
                            <li>Course-specific rules</li>
                            <li>Community Guidelines</li>
                            <li>Any applicable promotional terms</li>
                        </ul>
                        © 2026 Bloom Academy Africa Limited. All rights
                        reserved.
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
                <a href="#">
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