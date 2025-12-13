<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <title>Bloom Academy Africa</title>
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

<body class="min-h-screen flex justify-center">
    <main class="w-full grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
        <!-- Left preview -->
        <section class="bg-[#FFEEE7] flex items-center justify-center p-6 lg:p-10">
            <div class="max-w-md w-full overflow-hidden border border-[#2D2D2B]">
                <img src="/images/lhs-marketing.png" class="w-full max-h-[40vh] sm:max-h-[65vh] object-cover object-top" alt="Marketing KPIs preview">
                <div class="bg-[#1F1F1F] text-white px-8 py-6 space-y-4">
                    <h3 class="text-2xl  leading-7">THE TOP 45 MARKETING METRICS</h3>
                    <p class="text-sm font-extralight text-gray-200 leading-1">
                        Save yourself hours of work with this Top 45 Marketing KPIs Cheat Sheet.
                    </p>
                </div>
            </div>
        </section>

        <!-- Right copy & form -->
        <section class="bg-white flex flex-col justify-center px-8 lg:px-16 py-12 space-y-8">
            <div class="space-y-4">
                <p class="uppercase text-lg">Cheat Sheet</p>
                <h1 class="text-3xl md:text-6xl uppercase font-bold text-[#2B2B2B] leading-[20px] md:leading-[45px]">
                    Top 45
                </h1>
                <h1 class="text-3xl md:text-6xl uppercase font-bold text-[#2B2B2B] leading-[20px] md:leading-[45px]">
                    MARKETING
                </h1>
                <h1 class="text-3xl md:text-6xl uppercase font-bold text-[#2B2B2B] leading-[20px] md:leading-[45px]">
                    METRICS
                </h1>
                <p class="text-base font-extralight pt-2 leading-[12px]">
                    Download the high-resolution PDF! 
                </p>
                <p class="text-base font-extralight leading-[12px]">
                    It includes explanations & formulas for each METRIC
                </p>
            </div>

            <form method="POST" action="{{ route('marketing.download') }}" class="space-y-4">
                @csrf
                <p class="text-lg font-light">Please enter your details</p>
                <input type="text" name="first_name" placeholder="first name" required
                    class="w-full rounded-lg border border-[#2D2D2B]/30 px-5 py-4 text-gray-700" />
                <input type="email" name="email" placeholder="email address" required
                    class="w-full rounded-lg border border-[#2D2D2B]/30 px-5 py-4 text-gray-700" />
                <div class="pt-4">
                    <button type="submit"
                        class="w-full rounded-full bg-[#C73029] text-[#FFFFFF] text-lg font-semibold py-4">
                        Download the Pdf
                    </button>
                </div>    
                
            </form>

            <p class="text-sm text-gray-500">
                Please feel free to unsubscribe at any point you feel unsafe
            </p>
        </section>
    </main>
</body>

</html>