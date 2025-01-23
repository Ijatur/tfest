<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0&icon_names=menu" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources\css\app.css')
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
                /* Mulai dari luar layar sebelah kanan */
            }

            100% {
                transform: translateX(-100%);
                /* Keluar dari layar sebelah kiri */
            }
        }

        .marquee {
            animation: marquee 25s linear infinite;
            /* Waktu animasi lebih singkat */
        }

        .marquee-content {
            display: inline-block;
            /* Mengatur agar konten tetap horizontal */
            padding-right: 50px;
            /* Menambahkan jarak antar konten */
        }
    </style>
    <title>Tfest</title>
</head>

<body class="font-sans">
    @yield('content')
    @vite('resources\js\app.js')
    <script>
        window.onscroll = function() {
            toggleHeader()
        };

        function toggleHeader() {
            var header = document.getElementById("scrolling-header");
            if (window.pageYOffset > 50) { // Header akan hilang setelah scroll lebih dari 50px
                header.style.display = "none";
            } else {
                header.style.display = "block";
            }
        }
    </script>
</body>

</html>
