<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0&icon_names=menu" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
    @vite('resources\css\app.css')
    <style>
        @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @keyframes marquee {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(-0%);
            }
        }
        .marquee {
            animation: marquee 33s linear infinite;
        }
    </style>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Tfest</title>
</head>
<body class="font-sans">
    @yield('content')
    @vite('resources\js\app.js')

    <script>
        let prevScrollPos = window.pageYOffset;
        const navbar = document.getElementById("navbar");

        // Auto-hide Navbar on scroll
        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                navbar.style.transform = "translateY(0)";
            } else {
                navbar.style.transform = "translateY(-100%)";
            }
            prevScrollPos = currentScrollPos;
        };

        // Mobile Menu Toggle
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>

</body>
</html>