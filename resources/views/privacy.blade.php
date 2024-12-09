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
                    <a href="" class="text-white">For Business</a>
                    <a href="/blog" class="text-white">Blog</a>
                    <a href="#" class="text-white"></a>
                    <a href="#"
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
                            <a class="pl-6 pt-2" href="/marketing">Learn</a>

                            <a class="pl-6" href="/business">For Business</a>
                            <a href="/blog" class="text-white">Blog</a>
                            <a class="pl-6" href="#"></a>
                            <a class="pl-6 pb-2" href="/submit">Register</a>
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
                            Privacy Policy for Bloom Marketing Academy
                        </div>
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Introduction
                        </div>
                        Privacy Policy for Bloom Marketing Academy
                        Introduction bloommarketingacademy.com is provided
                        by Bloom Marketing Academy (“Bloom Academy”). At
                        Bloom Academy, we value your privacy, and we are
                        committed to safeguarding your personal information.
                        All personal data that you provide us will be
                        protected and kept confidential among our
                        affiliates, representatives, and privies.<br /><br />
                        Throughout the website, the terms “we”, “us” and
                        “our” refer to Bloom Academy.<br /><br />
                        This Privacy Policy explains how we collect, use,
                        share and protect your personal data in connection
                        with your relationship with us as a learner or
                        potential learner. It applies to all our learners,
                        potential learners, applicants, partners and every
                        other person we hold information about.<br /><br />
                        This policy also sets out your rights and who you
                        may contact for further information. You agree to
                        this Privacy Policy by visiting our website and when
                        you use our services.<br /><br />
                        Your use of our services, and any dispute over
                        privacy is subject to this Policy and our Terms of
                        Service including its applicable limitation on
                        damages and resolution of disputes. Our Terms of
                        Service are incorporated by reference into this
                        Policy.<br /><br />
                        Our website and services are not directed at you if
                        we are prohibited by any law of any jurisdiction
                        from making the information on our website available
                        to you and is not intended for any use that would be
                        contrary to local law or regulation.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Definitions
                        </div>
                        <div class="poppins-bold text-base md:text-xl">
                            “consent”
                        </div>
                        means the consent of the data subject which must be
                        a freely given, specific, informed, and unambiguous
                        indication of the data subject’s wishes by which
                        they (by a statement or by a clear affirmative
                        action) signify their agreement to the processing of
                        personal data relating to them; <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “data controller”
                        </div>
                        means the natural or legal person or organisation
                        which, alone or jointly with others, determines the
                        purposes and means of the processing of personal
                        data. For the purposes of this policy, Bloom Academy
                        is the data controller of all personal data relating
                        to data subjects; <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “data processor”
                        </div>
                        means the office of Bloom Academy responsible for
                        ensuring that all processing of personal data is in
                        compliance with the Data Protection Legislation;
                        <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Data Protection Legislation”
                        </div>
                        means all applicable data protection and privacy
                        laws including, but not limited to the Nigerian Data
                        Protection Act 2023, the Nigeria Data Protection
                        Regulation 2019 (NDPR), the General Data Protection
                        Regulation 2018 and the United Kingdom’s General
                        Data Protection Regulation ((EU) 2016/679) (GDPR),
                        the Data Protection Act 2018 and any successor
                        legislation;
                        <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “Data Protection Office”
                        </div>
                        means the office of Bloom Academy responsible for
                        ensuring that all processing of personal data is in
                        compliance with the Data Protection Legislation;
                        “data subject” means a living, identified, or
                        identifiable individual about whom Bloom Academy
                        holds personal data;
                        <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “personal data”
                        </div>
                        means any information relating to a data subject who
                        can be identified, directly or indirectly, in
                        particular by reference to an identifier such as a
                        name, identification number, location data, an
                        online identifier, or to one or more factors
                        specific to the physical, physiological, genetic,
                        mental, economic, cultural, or social identity of
                        that data subject;<br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “personal data breach”
                        </div>
                        means a breach of security leading to the accidental
                        or unlawful destruction, loss, alteration,
                        unauthorised disclosure of, or access to, personal
                        data transmitted, stored, or otherwise processed;
                        <br /><br />
                        <div class="poppins-bold text-base md:text-xl">
                            “processing”
                        </div>
                        means any operation or set of operations performed
                        on personal data or sets of personal data, whether
                        or not by automated means, such as collection,
                        recording, organisation, structuring, storage,
                        adaptation or alteration, retrieval, consultation,
                        use, disclosure by transmission, dissemination or
                        otherwise making available, alignment or
                        combination, restriction, erasure or destruction.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Data Protection Officer & Scope of Policy
                        </div>
                        3.1. Bloom Academy's Data Protection Office contact
                        information is
                        <!-- datacompliance@bloomdigitmedia.com -->
                        The Data Protection Office is responsible for
                        working together with the HR and other relevant
                        Departments in administering this policy and for
                        developing and implementing any applicable related
                        policies, procedures, and guidelines. <br /><br />
                        3.2. All managers, department heads and supervisors
                        are responsible for ensuring that all employees,
                        agents, contractors, or other parties working on
                        behalf of Bloom Academy comply with this policy and,
                        where applicable, must implement such practices,
                        processes, controls, and training as are reasonably
                        necessary to ensure such compliance.
                        <br /><br />3.3. Any questions relating to this
                        policy, Bloom Academy's collection, processing, or
                        holding of personal data, or to the Data Protection
                        Legislation should be referred to the Data
                        Protection Office. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Consent
                        </div>
                        4.1. Where processing of your personal data is based
                        on consent, we shall obtain the requisite consent at
                        the time of collection of the personal information.
                        In this regard, you consent to the processing of
                        your personal information when you access our
                        website, or use our services, content, features,
                        technologies or functions offered on our website or
                        other digital platforms. You can withdraw your
                        consent at any time but such withdrawal will not
                        affect the lawfulness of the processing of your data
                        based on consent given before its withdrawal. Where
                        your personal data is to be processed for a
                        different purpose that is incompatible with the
                        purpose or purposes for which that personal data was
                        originally collected that was not disclosed to you
                        when you first provided your consent, we will obtain
                        your consent to the new purpose or purposes.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Age Restriction
                        </div>
                        5.1. You affirm that you are over 18 years old and
                        have the right to contract in your own name, and
                        that you have read the above authorisation and fully
                        understand its contents. <br /><br />5.2.
                        Individuals under 18 years old are only allowed to
                        sign up for our services or provide us with their
                        information when an adult above the age of 18 is
                        signing contracts in their stead. Data Protection
                        Principles The Data Protection Legislation sets out
                        the following principles with which anyone handling
                        personal data must comply. We, our employees,
                        agents, contractors and third-party service
                        providers comply with the following principles when
                        collecting or processing your personal data.
                        <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            All personal data must be:
                        </div>
                        6.1. processed lawfully, fairly, and in a
                        transparent manner in relation to the data subject;
                        collected for specified, explicit, and legitimate
                        purposes and not further processed in a manner that
                        is incompatible with those purposes. Further
                        processing for archiving purposes in the public
                        interest, scientific or historical research purposes
                        or statistical purposes shall not be considered to
                        be incompatible with the initial purposes;
                        <br /><br />6.2. adequate, relevant, and limited to
                        what is necessary in relation to the purposes for
                        which it is processed; accurate and, where
                        necessary, kept up to date. Every reasonable step
                        must be taken to ensure that personal data that is
                        inaccurate, having regard to the purposes for which
                        it is processed, is erased, or rectified without
                        delay; <br /><br />6.3. kept in a form which permits
                        identification of data subjects for no longer than
                        is necessary for the purposes for which the personal
                        data is processed. Personal data may be stored for
                        longer periods insofar as the personal data will be
                        processed solely for archiving purposes in the
                        public interest, scientific or historical research
                        purposes, or statistical purposes, subject to
                        implementation of the appropriate technical and
                        organisational measures required by the Data
                        Protection Legislation in order to safeguard the
                        rights and freedoms of the data subject;
                        <br /><br />6.4. processed in a manner that ensures
                        appropriate security of the personal data, including
                        protection against unauthorised or unlawful
                        processing and against accidental loss, destruction,
                        or damage, using appropriate technical or
                        organisational measures.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Information We Collect.
                        </div>
                        In providing our educational services to you, we
                        collect certain non-personal and personal data about
                        you. Our policy is to keep this information
                        confidential and strictly safeguarded, and to use or
                        disclose it only as needed to provide services to
                        you, or as permitted or required by the Data
                        Protection Legislation.
                        <br /><br />There are two categories of information
                        we collect. We collect a variety of information from
                        our users and visitors to our website. As described
                        below, some information is automatically collected
                        when you visit our website, and some you provide to
                        us when filling out a form or communicating with us.
                        <span class="poppins-bold text-base md:text-xl">
                            7.1. Information Collected Automatically:
                        </span>
                        Whenever you visit our website, our web servers
                        automatically collect non-personal information such
                        as the domain name of the internet access provider,
                        the internet protocol address used to connect the
                        computer to the internet, the average time spent on
                        our website, pages viewed, information searched for,
                        access times, and other relevant statistics.
                        <br /><br />
                        <span class="poppins-bold text-base md:text-xl">
                            7.2. Information You Provide Us: </span>If you provide us with personal information, by
                        contacting us, or subscribing to our services we
                        collect the following personal information:
                        <br /><br />
                        7.1.1. Username and password; <br /><br />7.1.2.
                        Contact information; <br /><br />7.1.3. Educational
                        information (e.g., academic history, CV, employment
                        status etc.); <br /><br />7.1.4. Financial
                        information where you make any payment for our
                        services; and <br /><br />7.1.5. Any other
                        information you provide to us.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Using Your Personal Data
                        </div>
                        8.1. We primarily collect your personal data to
                        ensure that we provide the most efficient
                        educational service to you, monitor the use and
                        improve our website and other legitimate interests.
                        Your information will solely be used and disclosed
                        for the following purposes:
                        <br /><br />8.1.1. To help us verify your identity;
                        <br /><br />8.1.2. To carry out our obligations
                        ensuing from any contracts entered into between you
                        and us; <br /><br />8.1.3. To provide you with the
                        products, services and information you request from
                        us; <br /><br />8.1.4. To assist you with enquiries
                        and improve our customer service; <br /><br />8.1.5.
                        To assist us in carrying out marketing analysis and
                        customer profiling (including transactional
                        information), conduct research, including creating
                        statistical and testing information;
                        <br /><br />8.1.6. To allow us to communicate with
                        you in any way (including e-mail, telephone, visit,
                        and text or multimedia messages); <br /><br />8.1.7.
                        For our billing and account purposes; 8.1.8. To help
                        prevent and detect fraud or loss; <br /><br />8.1.9.
                        To update our records; <br /><br />8.1.10. To make
                        recommendations and suggestions to you about
                        services offered by us unless you have previously
                        asked us not to do so; <br /><br />8.1.11. To send
                        you service or support messages, such as updates,
                        security alerts, email notifications and /or
                        newsletters; <br /><br />8.1.12. To conduct
                        investigations and risk assessments; and
                        <br /><br />8.1.13. For compliance with legal and
                        regulatory obligations. <br /><br />8.2. Employees,
                        agents, contractors, or other parties working on
                        behalf of Bloom Academy shall collect your personal
                        data only to the extent required for the performance
                        of their job duties and only in accordance with this
                        policy. Excessive personal data must not be
                        collected. <br /><br />8.3. Employees, agents,
                        contractors, or other parties working on behalf of
                        Bloom Academy shall process your personal data only
                        when the performance of their job duties requires
                        it. Your personal data held by Bloom Academy cannot
                        be processed for any unrelated reasons.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Data Accuracy
                        </div>
                        Your personal data must be accurate and kept up to
                        date. In this regard, Bloom Academy shall ensure
                        that any data it collects and/or processes is
                        accurate and not misleading in a way that could be
                        harmful to you; make efforts to keep your personal
                        data updated where reasonable and applicable; and
                        make timely efforts to correct or erase your
                        personal data when inaccuracies are discovered.
                        <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Data Retention
                        </div>
                        Bloom Academy shall not keep personal data for any
                        longer than is necessary in light of the purpose or
                        purposes for which that personal data was originally
                        collected, held, and processed. In the case of your
                        educational data, the purpose for which the data was
                        collected is to provide you with our educational
                        services which will equip you with technical skills
                        needed for the careers of the future. Unless Bloom
                        Academy receives a valid request to erase your
                        educational data, the data is retained permanently.
                        This allows your record of participation and
                        progress in our educational program to be
                        maintained. If the data were deleted, we would have
                        no record of your performance and completion of our
                        educational program. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Other Information
                        </div>
                        We Collect Other information which may be
                        automatically collected from you when you visit our
                        website include; domain name of your internet
                        service provider, the internet protocol address used
                        to connect the computer to the internet, the average
                        time spent on our website, pages viewed, information
                        searched for, access times, your geographical
                        location, operating system, referral source, and
                        other relevant statistics. <br /><br />We may also
                        collect information from you using cookies and other
                        analytical tools especially when you use our
                        products and services. More details are provided
                        below in our section on Cookies. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Data Confidentiality
                        </div>
                        Your information is regarded as confidential and
                        will not be divulged to any third party, except
                        under legal and/or regulatory conditions. You have
                        the right to request copies of any and all
                        information we keep on you, if such requests are
                        made in compliance with applicable laws and other
                        relevant enactments. While we are responsible for
                        safeguarding the information entrusted to us, your
                        role in fulfilling confidentiality duties includes,
                        but is not limited to, adopting and enforcing
                        appropriate security measures such as non-sharing of
                        passwords and other platform login details,
                        adherence with physical security protocols on our
                        premises, dealing with only authorized officers of
                        Bloom Academy.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Disclosures
                        </div>
                        13.1. We will not sell, publish, or disclose to
                        third parties your personal data collected on our
                        website, through our servers or otherwise obtained
                        by us, other than to provide our services and as set
                        forth in this policy. We may share generic
                        aggregated demographic information not linked to any
                        personally identifiable information regarding
                        visitors and users with our business partners,
                        trusted affiliates, professional advisers and
                        advertisers for the purposes outlined above. We may
                        share your information with these third parties for
                        those limited purposes if you have given us your
                        permission and in compliance with the Data
                        Protection Legislation. <br /><br />13.2. We may
                        request and provide information about you from and
                        to third parties to provide our services.
                        <br /><br />13.3. We will notify you as soon as we
                        become aware of a harmful data breach which may
                        result in a risk of your rights and freedom.
                        <br /><br />13.4. You have the right to request an
                        erasure of your data at any time. <br /><br />13.5.
                        We will notify you if we are transferring your data.
                        <br /><br />13.6. You may request at any time that
                        we halt further dissemination of your data or cease
                        to use your data. <br /><br />13.7. If you submit
                        content in a public forum or a social media post, or
                        use a similar feature on our website, that content
                        is publicly visible. <br /><br />13.8. We may
                        disclose Personally Identifiable Information if
                        required to do so by law or in the good faith belief
                        that such action is necessary to (a) conform with
                        the requirements of the law or comply with legal
                        process served on us, or (b) act in urgent
                        circumstances to protect the personal safety of
                        users of our service or members of the public.
                        <br /><br />13.9. To the extent practicable and
                        legally permitted, we will attempt to advise you
                        prior to any such disclosure, so that you may seek a
                        protective order or other relief limiting such
                        disclosure. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Transfer of Personal Data
                        </div>
                        <div class="poppins-bold text-base md:text-xl">
                            14.1. Third Party Processor
                        </div>
                        <br /><br />We may engage the services of third
                        parties in order to process your personal data. The
                        processing by such third parties shall be governed
                        by a written contract with Bloom Academy to ensure
                        adequate protection and security measures are put in
                        place by the third party for the protection of your
                        personal data in accordance with the terms of this
                        policy and the Data Protection Regulation.<br /><br />
                        14.2. Transfer of your personal data to a country
                        outside the UK or the EU would be in accordance with
                        the provisions of the GDPR. Bloom Academy will
                        therefore only transfer your personal data out of
                        the UK or the EU on one of the following conditions:
                        <br /><br />
                        a. Your explicit consent has been obtained;
                        <br /><br />b. The transfer is necessary for the
                        performance of a contract between you and Bloom
                        Academy; <br /><br />c. The transfer is necessary to
                        conclude a contract between Bloom Academy and a
                        third party in your interest; <br /><br />d. The
                        transfer is necessary for reason of public interest;
                        <br /><br />e. The transfer is for the
                        establishment, exercise or defense of legal claims;
                        f. The transfer is necessary in order to protect
                        your vital interests or the interests of other
                        persons, where you are physically or legally
                        incapable of giving consent. <br /><br />14.3.3.
                        Provided, in all circumstances, that you have been
                        manifestly made to understand through clear warnings
                        of the specific principle(s) of data protection that
                        are likely to be violated in the event of transfer
                        to a third country, this provision shall not apply
                        to any instance where you are answerable in duly
                        established legal action for any civil or criminal
                        claim in another country. <br /><br />14.3.4. We
                        will take all necessary steps to ensure that your
                        personal data is transmitted in a safe and secure
                        manner. Details of the protection given to your
                        Information when it is transferred outside the UK or
                        the EU shall be provided to you upon request.
                        <br /><br />14.3.5. Where the recipient country does
                        not ensure adequate an adequate level of protection
                        and none of the conditions stipulated in clause
                        <br /><br />14.3.2 of this policy is met, Bloom
                        Academy will engage with the Information
                        Commissioner’s Office for approval with respect to
                        such transfer. <br /><br />14.4. Transfer of
                        Personal Data of Nigerian Citizens to a Foreign
                        Country <br /><br />14.4.1. Where your personal data
                        is to be transferred to a country outside Nigeria,
                        Bloom Academy shall put adequate measures in place
                        to ensure the security of such data. In particular,
                        Bloom Academy shall ensure that such transfer is in
                        accordance with Data Protection Laws and that the
                        foreign country receiving such data has adequate
                        data protection laws. We will also always document
                        the basis of such international transfers and the
                        adequacy of data protection relied upon.
                        <br /><br />14.4.2. Provided, in all circumstances,
                        that you have been manifestly made to understand
                        through clear warnings of the specific principle(s)
                        of data protection that are likely to be violated in
                        the event of transfer to a third country, this
                        provision shall not apply to any instance where you
                        are answerable in duly established legal action for
                        any civil or criminal claim in another country.
                        <br /><br />14.4.3. We will take all necessary steps
                        to ensure that your personal data is transmitted in
                        a safe and secure manner. Details of the protection
                        given to your information when it is transferred
                        outside Nigeria shall be provided to you upon
                        request.<br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Your Rights
                        </div>
                        Subject to certain limitations and exceptions, you
                        are entitled to the following principal rights under
                        the Data Protection Legislation: <br /><br />15.1.
                        You have the right to be notified if we are
                        transferring your personal information.
                        <br /><br />15.2. You have the right to request an
                        erasure of your personal data at any time.
                        <br /><br />15.3. You have the right to request that
                        we rectify inaccurate personal information.
                        <br /><br />15.4. You may request at any time that
                        we halt further dissemination of your data or cease
                        to use your personal information. <br /><br />15.5.
                        You have the right to request for copies of your
                        personal information. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Website Security
                        </div>
                        We are committed to ensuring that your information
                        is secure. In order to prevent unauthorised access
                        or disclosure, we have put in place suitable
                        physical, electronic and managerial procedures such
                        as secure sockets layer (SSL) to safeguard and
                        secure the information we collect online. We use
                        encryption tools when accepting and transmitting
                        delicate visitor information through our website.
                        Some of the other safeguards we use are firewalls
                        and physical access controls to our data centres,
                        and information access authorization controls.
                        <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Training
                        </div>
                        We shall ensure that employees who collect, access
                        and process your personal data receive adequate data
                        privacy and protection training in order to develop
                        the necessary knowledge, skills and competence
                        required to effectively manage the compliance
                        framework under this policy and the Data Protection
                        Legislation with regard to the protection of
                        personal data. On an annual basis, we shall develop
                        a capacity building plan for our employees on data
                        privacy and protection in accordance with the Data
                        Protection Legislation. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Use of Cookies
                        </div>
                        We use cookies to identify you as a user and make
                        your user experience easier, customise our services,
                        content and advertising; help you ensure that your
                        account security is not compromised, mitigate risk
                        and prevent fraud; and to promote trust and safety
                        on our website. Cookies allow our servers to
                        remember your account log-in information when you
                        visit our website, IP addresses, date and time of
                        visits, monitor web traffic and prevent fraudulent
                        activities. If your browser or browser add-on
                        permits, you have the choice to disable cookies on
                        our website; however, this may limit your ability to
                        use our website. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            The Data We Retain
                        </div>
                        We will retain your information for as long as
                        needed to provide you with our services, comply with
                        our legal and statutory obligations or verify your
                        information with a financial institution. We are
                        statutory obligated to retain the data you provide
                        us with in order to process transactions, ensure
                        settlements, make refunds, identify fraud and in
                        compliance with laws and regulatory guidelines
                        applicable to us. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Data Breach Management Procedure
                        </div>
                        20.1. In the event where there is any accidental or
                        unlawful destruction, processing, loss, alteration,
                        unauthorized disclosure of, or access to your
                        personal data, we shall: <br /><br />20.1.1. notify
                        you within 24 hours of the occurrence of the data
                        breach; <br /><br />20.1.2. properly investigate the
                        breach and take the necessary steps to mitigate such
                        breach; <br /><br />20.1.3. identify remediation
                        requirements and track the resolution of such
                        breach; and <br /><br />20.1.4. notify the
                        Information Commissioner’s Office or any other
                        regulatory authority, where necessary. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Links to Third Party Websites
                        </div>
                        21.1. Our website may contain links to third-party
                        websites or services that are not owned or
                        controlled by us. <br /><br />21.2. We have no
                        control over, and assume no responsibility for, the
                        content, privacy policies, or practices of any
                        third-party websites or services. You further
                        acknowledge and agree that we shall not be
                        responsible or liable, directly or indirectly, for
                        any damage or loss caused or alleged to be caused by
                        or in connection with use of or reliance on any such
                        content, goods or services available on or through
                        any such websites or services. <br /><br />21.3. We
                        strongly advise you to read the terms and conditions
                        and privacy policies of any third-party websites or
                        services that you visit. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Limitation of Liability
                        </div>
                        We exercise reasonable efforts to safeguard the
                        security and confidentiality of your personal data;
                        however, we will not be liable for unauthorised
                        disclosure of personal data that occurs through no
                        fault of ours.
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Changes to this Privacy Policy
                        </div>
                        Changes may be made to this Privacy Policy from
                        time. Whenever such changes are made, we will notify
                        you. These changes will take effect immediately
                        after you have been notified. <br /><br />
                        <div
                            class="poppins-bold text-[18px] leading-[28px] md:text-[24px] md:leading-[35px] pb-2 md:pb-6">
                            Contact Us
                        </div>
                        If you would like more information or you have any
                        comments or questions on our Privacy Policy, please
                        contact us at;
                        <!-- academysupport@Bloomdigitmedia.com -->
                        <br />
                        Tel: 0708 627 8644 <br />
                        Email: bloomacademy@bloomdigitmedia.com <br />
                        Address: S03 Pathfield Mall, 4th Avenue, Gwarimpa,
                        Abuja.
                        <br />
                        <br />
                        This policy is effective as of 1st April, 2024
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
