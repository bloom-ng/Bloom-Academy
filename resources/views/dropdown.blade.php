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

    <title>Bloom Academy Africa</title>
    <link rel="shortcut icon" href="/images/bloom-academy-logo-2.png" type="image/x-icon" />
</head>

<body class="bg-black">
    <div class="relative" id="dropdownButton">
        <div onclick="toggleDropdown()" class="flex text-white items-center justify-center">
            <a href="#" class="">Learn</a>
            <button id="" type="button">
                <img class="" src="/images/collapse-arrow.svg" alt="Bloom Logo" />
            </button>
        </div>
        <div id="dropdown" class="hidden pt-10 flex flex-col justify-center items-center">
            <ul class="bg-white px-20 py-4 text-black rounded-[35px]">
                <li class="py-2 flex flex-row">
                    Marketing
                    <img class="pl-6" src="/images/Forward.svg" alt="" />
                </li>
                <li class="py-2">Data</li>
                <li class="py-2">Engineering</li>
                <li class="py-2">Product</li>
            </ul>
        </div>
    </div>
    <script>
        function toggleDropdown() {
            let dropdown = document.querySelector(
                "#dropdownButton #dropdown"
            );
            dropdown.classList.toggle("hidden");
        }
    </script>
</body>

</html>
