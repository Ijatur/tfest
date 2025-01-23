<nav class="fixed top-0 items-center justify-between w-full px-10 bg-white shadow-lg flex p-6 z-50 bg-yellow"
    x-data="{ open: false }" @click.away="open = false">
    <a href="/"><img class="h-16" src="https://pestapora.com/_nuxt/logo-pestapora-2025.MuvH88kW.png"
            alt="Logo"></a>
    <ul class="gap-8 w-full justify-end hidden md:flex">
        <li><a href="/" class="hover:text-yellow-700">Home</a></li>
        <li><a href="/about" class="hover:text-yellow-700">Ticket</a></li>
        <li><a href="/lineup" class="hover:text-yellow-700">Line up</a></li>
        <li><a href="/venue" class="hover:text-yellow-700">Venue</a></li>
        <li><a href="/merch" class="hover:text-yellow-700">Merch</a></li>
        <li><a href="/about" class="hover:text-yellow-700">About Tfest</a></li>
    </ul>
    <a href="#" class="md:hidden flex justify-end" @click="open = !open">
        <span class="material-symbols-outlined">menu</span>
    </a>

    <!-- Mobile menu -->
    <div x-show="open" x-transition class="md:hidden absolute top-0 right-0 bg-white shadow-lg w-full p-6">
        <ul class="space-y-4">
            <li><a href="/" class="hover:text-yellow-700">Home</a></li>
            <li><a href="/about" class="hover:text-yellow-700">Ticket</a></li>
            <li><a href="/lineup" class="hover:text-yellow-700">Line up</a></li>
            <li><a href="/venue" class="hover:text-yellow-700">Venue</a></li>
            <li><a href="/merch" class="hover:text-yellow-700">Merch</a></li>
            <li><a href="/about" class="hover:text-yellow-700">About Tfest</a></li>
        </ul>
    </div>
</nav>
