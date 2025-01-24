<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0&icon_names=menu" />
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
</body>
</html>