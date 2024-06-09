<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Include Tailwind CSS -->
        @vite('resources/css/app.css')

        <title>Bloom Academy Africa | Terms & Conditions</title>
        <link rel="shortcut icon" href="/images/bloom-academy.svg" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('css/font.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />
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
        <div
            class="ph1:h-[15180px] ph2:h-[12999px] ph3:h-[11725px] sm:h-[9615px] md:h-[16150px] lg:h-[13910px] xl:h-[11290px] 2xl:h-[10390px] bg-[#2D2D2B]"
        >
            <nav
                class="hidden md:block top-0 left-0 right-0 bg-opacity-75 z-50"
            >
                <div
                    class="xl:container mx-auto md:pl-12 md:pr-6 lg:pl-12 lg:pr-6 xl:px-6 py-8 flex justify-between"
                >
                    <a href="/" class="text-white font-semibold"
                        ><img
                            src="/images/bloom-academy.svg"
                            class=""
                            alt="Bloom Logo"
                    /></a>
                    <div
                        class="flex text-[16px] lg:text-[18px] leading-[36px] items-center justify-center poppins-medium space-x-16"
                    >
                        <div class="relative" id="dropdownButton">
                            <div
                                onclick="toggleDropdown()"
                                class="flex items-center justify-center"
                            >
                                <a href="#" class="text-[#FF8100]">Learn</a>
                                <img
                                    class=""
                                    src="/images/collapse-arrow-orange.svg"
                                    alt="Collapse Arrow"
                                />
                            </div>
                            <div
                                id="dropdown"
                                class="absolute hidden top-0 z-20 pt-10 flex flex-col justify-between"
                            >
                                <ul
                                    class="bg-white px-8 w-60 mb-14 poppins-regular py-5 text-base text-black rounded-[35px]"
                                >
                                    <div class="relative">
                                        <div class="flex">
                                            <a href="/marketing"
                                                ><li class="py-2 flex">
                                                    Marketing
                                                    <img
                                                        class="pl-20"
                                                        src="/images/Forward.svg"
                                                        alt=""
                                                    /></li
                                            ></a>
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
                                            <li
                                                class="text-[#F0F0F0] py-2 flex flex-row"
                                            >
                                                Data
                                                <img
                                                    class="pl-[120px]"
                                                    src="/images/Forward.svg"
                                                    alt=""
                                                />
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
                                            <li
                                                class="text-[#F0F0F0] py-2 flex flex-row"
                                            >
                                                Engineering
                                                <img
                                                    class="pl-16"
                                                    src="/images/Forward.svg"
                                                    alt=""
                                                />
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
                                            <li
                                                class="text-[#F0F0F0] py-2 flex flex-row"
                                            >
                                                Product
                                                <img
                                                    class="pl-24"
                                                    src="/images/Forward.svg"
                                                    alt=""
                                                />
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
                        <a href="#" class="text-white">Sign In</a>
                        <a
                            href="#"
                            class="text-white bg-[#C73029] py-1 px-10 rounded-full montserrat-bold"
                            >Register</a
                        >
                        <!-- Add more links as needed -->
                    </div>
                </div>
            </nav>
            <!-- Floating Menu for mobile -->
            <nav
                class="block md:hidden absolute top-0 left-0 right-0 bg-opacity-75 z-10"
            >
                <section
                    class="container mx-auto px-7 py-8 flex justify-between"
                >
                    <a href="/">
                        <div class="logo">
                            <img
                                src="/images/bloom-academy-mobile.svg"
                                alt=""
                            />
                        </div>
                    </a>

                    <div class="" id="">
                        <!-- DROPDOWN MENU -->
                        <div class="dropdown icon">
                            <img src="/images/menu.svg" alt="" />
                        </div>
                        <!-- /DROPDOWN MENU -->
                    </div>
                </section>
            </nav>
            <!-- Floating Menu for mobile -->

            <div class="px-4 sm:px-12 md:px-32 pt-24 md:pt-20">
                <div
                    class="text-black text-sm md:text-lg bg-white rounded-[35px] poppins-regular py-12 md:py-20 px-4 sm:px-6 md:px-20"
                >
                    <div
                        class="poppins-bold text-center md:text-left text-[30px] leading-[30px] sm:text-[37px] sm:leading-[40px] md:text-[45px] md:leading-[50px] text-[#FF8100] pb-12"
                    >
                        Terms of Service
                    </div>
                    <div>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-8"
                        >
                            TERMS AND CONDITIONS FOR BLOOM ACADEMY AFRICA
                            LIMITED
                        </div>
                        Please read these Terms of Use (“Terms”), which set
                        forth the legally binding terms and conditions between
                        You (“You”) and Bloom Marketing Academy (“Bloom Academy”
                        or “We”, “Our” or “Us”). It governs your access to the
                        Course contents and the use of Bloom Academy’s website,
                        slack channel and any other platform introduced by Bloom
                        Academy (together the “Platform”) <br /><br />
                        Bloom Academy reserves the right, at its sole
                        discretion, to modify or replace these Terms of Use from
                        time to time. If You object to such changes, your sole
                        recourse will be to cease using the Platform. Your
                        continued use of the Platform following the changes to
                        the Terms will indicate your acknowledgement of such
                        changes and agreement to be bound by the amended
                        Terms.<br /><br />
                        Please read these Terms carefully before accepting to be
                        bound by the Terms. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Definitions and Interpretation
                        </div>
                        <div class="poppins-bold text-base md:text-xl">
                            1.1. Definitions
                        </div>
                        For the purposes of these Terms, unless the context
                        otherwise requires:<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Account or Student Account”
                        </div>
                        means an account created by the Learner on the Bloom
                        Academy’s Website<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Course Contents”
                        </div>
                        means all information and data (including text, images,
                        photos, videos, audio and documents) contained in the
                        courses available on the Bloom Academy’s Platform or
                        made available by Bloom Academy. <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Course Fees”
                        </div>
                        means the tuition payable by the Learner.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Event of Default”
                        </div>
                        shall have the meaning ascribed to it in clause 10.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Party”
                        </div>
                        means the Learner and Bloom Academy individually.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Parties”
                        </div>
                        means the Learner and Bloom Academy collectively.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Personal Data”
                        </div>
                        means any information about the Learner provided to Us
                        by You or in the Use of Our Platform and services such
                        as your name, email address, physical address, password,
                        billing and payment information. This includes
                        non-personal information like the domain name of your
                        internet service provider, your geographical location,
                        operating system and other relevant statistics.<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Privacy Policy”
                        </div>
                        means our privacy policy available on the Site, which
                        sets out the manner in which personal data We collect
                        from You, or You provide to Us, will be used and
                        processed by Us. “Site” means Bloom Academy Website
                        accessible at<br /><br />

                        <div class="poppins-bold text-base md:text-xl">
                            1.2. Interpretations
                        </div>
                        All headings in these Terms are for convenience only and
                        shall not be used in the interpretation. Unless these
                        Terms indicates a contrary intention.<br /><br />
                        1.2.1. the singular shall include the plural and vice
                        versa.<br /><br />
                        1.2.2. a reference to any one gender shall be capable of
                        being construed as a reference of any of the others.<br /><br />
                        1.2.3. words or phrases defined in these Terms shall
                        have the meanings assigned to them.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Acceptance of Terms and Conditions
                        </div>
                        2.1. The Platform and the Courses contents are offered
                        subject to acceptance of all the terms and conditions
                        contained in these Terms and all other course rules,
                        conditions, policies and procedures that may be
                        introduced from time to time by Bloom Academy, which are
                        incorporated by reference.<br /><br />
                        2.2. Some of the Courses contents available through the
                        Platform may be subject to additional terms and
                        conditions adopted by Bloom Academy. Your use of those
                        Courses contents is subject to those additional terms
                        and conditions, which are incorporated into these Terms
                        by this reference.<br /><br />
                        2.3. Bloom Academy reserves the right to change,
                        suspend, or discontinue the Courses contents or any part
                        of it (including but not limited to, the availability of
                        any feature, database, or content) at any time for any
                        reason. Bloom Academy may also impose limits on certain
                        features or restrict your access to parts of or the
                        entire Platform without notice or liability.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Learner Account
                        </div>
                        3.1. In order to access Our Platform, you must set up an
                        Account on the Site You will be required to provide Us
                        with certain information about yourself when setting up
                        this Account. By providing Us with this information, you
                        represent and warrant that You have the authority to
                        legally use Our Platform and grant Us all permissions
                        and licenses to perform Our obligations as provided in
                        these Terms.<br /><br />
                        3.2. Our services, can only be utilised by persons over
                        the age of 18 (eighteen). Bloom Academy reserves the
                        right to verify the authenticity of any accounts created
                        on the Site.<br /><br />
                        3.3. You must provide Us with accurate, current and
                        complete information at all times during the application
                        process. Failure to do so constitutes a breach of these
                        Terms, which may result in immediate termination of your
                        Account on our Platform and access to the Course
                        contents.<br /><br />
                        3.4. You are responsible for safeguarding the password
                        that you use to access the Platform and for any
                        activities or actions under your password.<br /><br />
                        3.5. You agree not to disclose your password to any
                        third party. You must notify us immediately upon
                        becoming aware of any breach of security or unauthorized
                        use of your Learner Account.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Notices and Communications
                        </div>
                        4.1. By creating an Account, you agree to the
                        following:<br /><br />
                        4.1.1. We can provide materials and other information
                        about Your legal rights and duties to You
                        electronically; <br /><br />4.1.2. We can send all
                        important communications, reminders (collectively
                        referred to as “Notifications”) to You electronically
                        via Our Platform or to an email address You have
                        provided Us with; <br /><br />4.1.3. We are authorised
                        to share, receive and Use Your data/information;
                        <br /><br />4.1.4. We can alert You when Notifications
                        are available, by sending You an electronic
                        communication; and <br /><br />4.1.5. By consenting, the
                        electronic Notifications shall have the same meaning and
                        effect as if We provided paper Notifications to You.
                        When We send You an email alerting You that
                        Notifications are available to You, such electronic
                        Notifications shall have the same effect as paper
                        Notifications whether or not You chose to view the
                        Notifications, unless You had previously withdrawn Your
                        consent to receive electronic Notifications.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            The Learner's Obligations
                        </div>
                        5.1. The Learner shall: <br /><br />5.1.1. adhere to
                        general code of conduct as prescribed by Bloom Academy;
                        <br /><br />5.1.2. pay the requisite Course Fee upon
                        acceptance of an admission offer into any Course on the
                        Bloom Academy’s Platform;<br /><br />
                        5.1.3. not make copies or reselling, donating or
                        transferring of the Course content to third parties;<br /><br />
                        5.1.4. participate in all trainings, assignments and
                        projects assigned by Bloom Academy or any its
                        instructors; <br /><br />5.1.5. notify Bloom Academy of
                        any intention to withdraw from the any Course;
                        <br /><br />5.1.6. notify and seek Bloom Academy’s
                        permission for the deferment of the Learner’s admission
                        into Course; <br /><br />5.1.7. be responsible for the
                        provision of all devices needed to effectively
                        participate in the Course such as laptops, internet
                        access etc; <br /><br />5.1.8. timely inform Bloom
                        Academy of any circumstances that may prevent it from
                        fulfilling its obligations under these Terms;
                        <br /><br />5.1.9. be available for discussions with
                        Bloom Academy to resolve issues that may arise, when
                        necessary; <br /><br />5.1.10. fully cooperate with
                        Bloom Academy to carry out its obligations under these
                        Terms; and <br /><br />5.1.11. perform such other
                        responsibilities as may be reasonably necessary to
                        fulfil its obligations under these Terms.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Course Fees and Payment
                        </div>
                        6.1. Upon the acceptance of the admission offer, the
                        Learner shall pay the prescribed fee on the course as
                        Course Fees to access the Course Contents.<br /><br />
                        6.2. Bloom Academy uses a third- party payment processor
                        to process your payments for the Course Fees. By
                        initiating the payment of the course fees, you autho<br /><br />rize
                        Bloom Academy to disclose your information and payment
                        instructions to the payment processor and agree to be
                        bound by the current version of processor’s privacy
                        policy and terms of service.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Intellectual Property
                        </div>
                        7.1. The Site and the Course contents contained therein,
                        original content, features and functionality are and
                        shall remain the exclusive property of Bloom Academy.
                        Our trademarks and trade name may not be Used in
                        connection with any product or service without Our prior
                        written consent.<br /><br />
                        7.2. You shall not Use, adapt, modify, prepare
                        derivative works of, distribute, license, sell,
                        transfer, publicly display, publicly perform, transmit,
                        broadcast or otherwise exploit the Site or collective
                        content except as expressly permitted by Bloom
                        Academy.<br /><br />
                        7.3. You acknowledge and agree that all Course contents
                        and all related materials provided by Bloom Academy
                        shall remain the property of Bloom Academy and that
                        Bloom Academy shall be the sole and exclusive owner of
                        all copyrights and other intellectual property rights in
                        the courses.<br /><br />
                        7.4. Subject to your compliance with these Terms, Bloom
                        Academy grants You a limited, non-exclusive, revocable,
                        non-transferable licence to access and view any content
                        made available on or through the Site and accessible to
                        You.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Changes to Course Contents
                        </div>
                        8.1. Bloom Academy reserves the right to cancel,
                        interrupt, reschedule, or modify any Course contents, or
                        change the point value or weight of any assignment,
                        quiz, or other assessment, and shall only communicate
                        such changes to Learners currently enrolled in the
                        affected course at the time of such change.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Scholarships, Gifts and Promotional Codes
                        </div>
                        9.1. Bloom Academy or our partners may offer
                        scholarships, gifts and promotional codes (“Promotions”)
                        to Learners. These Promotions may be used to access
                        Course contents on the Platform subject to the terms and
                        conditions of each Promotion.<br /><br />
                        9.2. These Promotions, and the value linked to them, may
                        expire if not used within the period specified by Bloom
                        Academy. Gift and promotional codes offered by Bloom
                        Academy may not be refunded for cash, unless otherwise
                        specified in the terms included with the Promotion or as
                        required by applicable law.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Usage of the Contents Submitted by You
                        </div>
                        10.1. The content you post as a Learner (including
                        courses) remains yours. By posting any content, you
                        allow Bloom Academy to reuse and share it but you do not
                        lose any ownership rights you may have over your
                        content.<br /><br />
                        10.2. When you post content, comments, questions,
                        reviews, and when you submit to us ideas and suggestions
                        for new features or improvements, you authorize Bloom
                        Academy to use and share this content with anyone,
                        distribute it and promote it on any platform and in any
                        media, and to make modifications or edits to it as we
                        see fit.<br /><br />
                        10.3. By submitting or posting content on or through the
                        platforms, you grant us a worldwide, non-exclusive,
                        royalty-free license (with the right to sublicense) to
                        use, copy, reproduce, process, adapt, modify, publish,
                        transmit, display, and distribute your content
                        (including your name and image) in any and all media or
                        distribution methods (existing now or later developed).
                        This includes making your content available to other
                        companies, organizations, or individuals who partner
                        with Bloom Academy, as well as using your content for
                        marketing purposes. You also waive any rights of
                        privacy, publicity, or other rights of a similar nature
                        applicable to all these uses, to the extent permissible
                        under applicable law. You represent and warrant that you
                        have all the rights, power, and authority necessary to
                        authorize us to use any content that you submit. You
                        also agree to all such uses of your content with no
                        compensation paid to you.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Live and Interactive Sessions
                        </div>
                        11.1. You may not do any of the following while during
                        any Live and Interactive Sessions (the “Sessions”): a.
                        use the Sessions for any purpose other than to perform
                        the activities as instructed by Bloom Academy or its
                        instructors; b. exceed the usage limitations as
                        prescribed by Bloom Academy; c. take any action in the
                        Sessions that results in a disruption or interference of
                        the Platform or the stability of Our infrastructure; or
                        d. use any data or information other than simulated,
                        anonymous, non-personal, non-live data or information
                        during the Sessions.<br /><br />
                        11.2. These restrictions are in addition to any other
                        restrictions stated in the Bloom Academy Code of
                        Conduct.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Representations and Warranties
                        </div>
                        You make the following representations and warranties to
                        us at the time of agreeing to these Terms:<br /><br />
                        12.1. You are over the age of 18 (eighteen) years;<br /><br />
                        12.2. You are of sound mind and have the capacity to use
                        the Course contents as a learner; and<br /><br />
                        12.3. All information that You provide to Us is true and
                        accurate to the best of Your knowledge.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Event of Default
                        </div>
                        13.1. An Event of Default refers to the following
                        instances where:<br /><br />
                        1.1.1. You fail to pay the complete Course Fee as at
                        when due;<br /><br />
                        1.2.1. You continuously fail to participate in tasks or
                        projects assigned to You;<br /><br />
                        1.3.1. You refuse to submit assignment and task as at
                        when due; and<br /><br />
                        1.4.1. You engage in acts which is against the codes and
                        conduct of Bloom Academy. <br /><br />1.2. Upon the
                        occurrence of an Event of default as mentioned above, We
                        may without prejudice to any other right or remedy
                        granted to Us under any law: <br /><br />2.1.1.
                        Terminate these Terms in accordance with clause 14;
                        <br /><br />2.1.2. revoke Your admission into the
                        course; and <br /><br />2.1.3. withdraw all access to
                        Our Platform and all Course contents. 1.3. Bloom Academy
                        reserves the right to institute legal proceedings
                        against You to recover the Course fee, with or without
                        prior notice. <br /><br />1.4. You shall be liable for
                        all legal costs and expenses incurred by Bloom Academy
                        for any action taken against you by it for the recovery
                        of fees. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Termination
                        </div>
                        2.1. We may terminate or suspend your Account
                        immediately with or without prior notice or liability,
                        for any reason whatsoever, including: <br /><br />2.1.1.
                        upon the occurrence of an Event of Default as stated in
                        clause 13 above; <br /><br />2.2. Upon termination, Your
                        right to Use Our Platform will immediately cease.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Indemnity
                        </div>
                        3.1. You agree to indemnify and hold harmless Bloom
                        Academy, its affiliates and subsidiaries, its officers,
                        directors, and employees, against all liabilities,
                        costs, expenses, damages and losses (including any
                        direct, indirect or consequential losses, loss of
                        profits, loss of reputation and all interest penalties
                        and legal and other reasonable professional costs and
                        expenses) suffered or incurred by it, its affiliates and
                        subsidiaries, its officers, directors, and employees, as
                        a result of: <br /><br />a. Your fraudulent or illegal
                        Use of Our Platform or Course contents; <br /><br />b.
                        any inaccurate, incomplete or misleading information
                        that You have provided to us; <br /><br />c. any
                        unauthorised access to Your Account as a result of Your
                        failure to keep Your Username and password confidential;
                        <br /><br />d. any service that you have offered,
                        whether with or without our permission to a third-party
                        Using Bloom Academy’s Course contents or Platform; and
                        <br /><br />e. any claim made against Bloom Academy
                        and/or its stakeholders for actual or alleged
                        infringement of a third party’s intellectual property
                        rights arising out of or in connection with the Use of
                        Our Course contents or Use of the Platform.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            No Class Action
                        </div>
                        4.1. Except as expressly provided for under applicable
                        laws, both Parties agree that we can each only bring
                        claims against the other on an individual basis. This
                        means: <br /><br />a. neither Party can bring a claim as
                        a plaintiff or class member in a class action,
                        consolidated action, or representative action;
                        <br /><br />b. an arbitrator can’t combine multiple
                        people’s claims into a single case (or preside over any
                        consolidated, class, or representative action); and
                        <br /><br />c. an arbitrator’s decision or award in one
                        claimant’s case can only decide the disputes of that
                        user, not other users. <br /><br />4.2. Nothing in this
                        clause limits the Parties’ rights to resolve a Dispute
                        by mutual agreement through a class-wide settlement of
                        claims.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Force Majere
                        </div>
                        Neither Party shall be liable for failure to perform, or
                        for delay in performing its obligations hereunder if
                        such failure or delay shall be due to acts of God, war,
                        riot, civil commotion, Weather, labour disputes, failure
                        of sub-contractors or any other cause beyond its
                        reasonable control. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Limitation of Liability
                        </div>
                        In no event shall Bloom Academy, its directors,
                        employees, partners or affiliates, be liable for any
                        indirect, incidental, special, consequential or punitive
                        damages, including without limitation, loss of profits,
                        data, Use, goodwill, or other intangible losses,
                        resulting from Our services or Your inability to Use the
                        Site or Our services. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Severability
                        </div>
                        If any part of these Terms is held to be invalid or
                        unenforceable in any jurisdiction, the invalidity and
                        unenforceability of all remaining provisions contained
                        in these Terms shall not in any way be affected or
                        impaired. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Entire Agreement
                        </div>
                        These Terms contains the entire agreement between the
                        Parties with respect to the subject matter and
                        supersedes all prior arrangements and understandings
                        (whether oral or written). <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Waiver
                        </div>
                        In the event that Bloom Academy does not strictly
                        enforce its rights under these Terms (including its
                        right to insist on the payment of the Course Fee as and
                        when due), Bloom Academy shall not be deemed to have
                        waived or lost those rights and will not be prevented
                        from enforcing such rights at a later date.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Assignment
                        </div>
                        Bloom Academy reserves the right to transfer or assign
                        its rights and obligations under these Terms. Bloom
                        Academy will only notify You if such an assignment will
                        change the arrangements for the course you have
                        registered for.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Amendment
                        </div>
                        Bloom Academy may at any time vary and revise these
                        Terms by updating this document. You agree to be bound
                        by subsequent revisions and agree to review these Terms
                        periodically for changes. The most updated version of
                        this document will be available for Your review under
                        the “Terms” that appears on the Site.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Governing Law and Dispute Resolution
                        </div>
                        12.1. These Terms shall be governed by and construed in
                        accordance with the Laws of the Federal Republic of
                        Nigeria. <br /><br />12.2. Any disputes arising under or
                        in connection with the validity, interpretation and
                        performance of these Terms that cannot be resolved
                        amicably by the parties through negotiation within 30
                        (thirty) days shall be resolved by Arbitration at the
                        Lagos Court of Arbitration (LCA) before a single
                        arbitrator in accordance with the Arbitration and
                        Mediation Act, 2023. <br /><br />12.3. The Parties shall
                        endeavour in good faith to mutually agree on the
                        selection of an arbitrator. If the Parties cannot
                        mutually agree on the selection of an arbitrator within
                        ten (10) days of the request, they shall apply to the
                        LCA to appoint an arbitrator. Arbitration proceedings
                        shall be conducted in Abuja. The arbitrator will be
                        requested to render an award within ninety (90) days and
                        to provide, in writing the reasoning for the award. The
                        decision of any such arbitrator shall be final and
                        binding on the Parties. <br /><br />12.4. Each Party
                        shall bear its cost in connection with the Arbitration
                        and the arbitrator’s fees shall be split equally between
                        both Parties. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6"
                        >
                            Contact Us
                        </div>
                        If You have any questions about this Terms, please
                        contact us at  <br />
                        Tel: 0708 627 8644 <br />
                        Email: bloomacademy@bloomdigitmedia.com <br />
                        Address: S03 Pathfield Mall, 4th Avenue, Gwarimpa, Abuja.
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Mobile -->
        <footer class="block md:hidden">
            <div class="bg-[#151515] flex flex-col justify-center items-center">
                <div class="flex items-center justify-center pt-4">
                    <img
                        class="mr-1 -mt-1"
                        src="/images/Copyright.svg"
                        alt="Copyright icon"
                    />
                    <p
                        class="text-white text-[10px] montserrat-extra-light leading-10 mb-1 lg:mb-0"
                    >
                        2024 Bloom Digital Media Ltd. All rights reserved.
                    </p>
                </div>
                <div class="mb-2 ml-2 flex justify-center items-center">
                    <a
                        href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank"
                        ><img src="/images/Instagram.svg" alt="Instagram Link"
                    /></a>
                    <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"
                        ><img src="/images/Twitter.svg" alt="X Link"
                    /></a>
                    <a
                        href="https://www.linkedin.com/company/bloom-digital-media-nigeria/"
                        target="_blank"
                        ><img src="/images/LinkedIn.svg" alt="LinkedIn Link"
                    /></a>
                    <a
                        href="https://www.facebook.com/bloomdigitmedia/"
                        target="_blank"
                        ><img src="/images/Facebook.svg" alt="Facebook Link"
                    /></a>
                </div>
                <div>
                    <p
                        class="text-white mb-2 text-center text-[11px] montserrat-extra-light leading-[14px] lg:mb-0"
                    >
                        Bloom Academy is a <br />registered trademark of
                    </p>
                </div>
                <div class="flex items-center pb-8 justify-center">
                    <img
                        src="/images/bloom-logo-white-mobile.svg"
                        class="pl-2"
                        alt="Bloom Logo"
                    />
                </div>
            </div>
        </footer>
        <!-- Footer -->
        <!-- Footer -->
        <!-- Footer -->
        <footer
            class="hidden md:block bg-[#151515] max-w-[100vw] px-14 py-6 flex-col flex sm:flex-row items-center justify-between"
        >
            <div
                class="flex-col flex text-white sm:flex-row md:gap-16 lg:gap-20 items-center"
            >
                <ul class="flex flex-col items-left list-none">
                    <li class="montserrat-bold mb-4 text-sm md:text-xs">
                        Company
                    </li>
                    <li class="montserrat-extra-light mb-2 text-sm md:text-xs">
                        About
                    </li>
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
            <div
                class="md:-mt-24 lg:-mt-24 justify-end items-end flex flex-col"
            >
                <div>
                    <div class="flex items-center justify-end">
                        <p
                            class="flex items-center justify-end text-white text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0"
                        >
                            <img
                                class="mr-1"
                                src="/images/Copyright.svg"
                                alt="Copyright icon"
                            />
                            2024 Bloom Digital Media Ltd. All rights reserved.
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
                    <div class="flex items-center justify-end">
                        <p
                            class="flex items-center justify-end text-white mt-3 md:mt-0 lg:mt-3 text-xs montserrat-extra-light leading-10 mb-10 md:mb-0 lg:mb-0"
                        >
                            Bloom Academy is a registered trademark of
                            <img
                                src="/images/bloom-logo-white.svg"
                                class="pl-2"
                                alt="Bloom Logo"
                            />
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
