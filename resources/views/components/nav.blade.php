<nav id="navbar" class="fixed w-full bg-biru shadow-md transition-transform duration-300 transform-gpu z-50">
    <div class="container mx-auto px-12 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/">
            <img  class="max-h-16 min-w-0 " src="{{asset('assets/logo/Logo 1.png')}}" alt="" srcset="">
        </a>

        <!-- Navigation Links -->
        <ul class="hidden md:flex space-x-12 text-2xl text-white font-superDream font-bold ">
            <li><a href="/" class="hover:text-blue">Home</a></li>
            <li><a href="/ticket" class="hover:text-blue">Ticket</a></li>
            <li><a href="/lineup" class="hover:text-blue">Line up</a></li>
            <li><a href="/venue" class="hover:text-blue">Venue</a></li>
            <li><a href="/merch" class="hover:text-blue">Merch</a></li>
            <li><a href="/about" class="hover:text-blue">About Tfest</a></li>    
        </ul>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden flex items-center ">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-yellow md:hidden shadow-md">
        <ul class="space-y-4 text-gray-700 font-inter font-bold">
            <li class="hover:bg-pink hover:rotate-1 group-hover:text-white p-4 hover:text-white"><a href="/">Home</a></li>
                    <li class="hover:bg-blue hover:-rotate-1 group-hover:text-white p-4 hover:text-white"><a href="/ticket">Ticket</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/lineup">Line up</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/venue">Venue</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/merch">Merch</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/about">About Tfest</a></li>
        </ul>
    </div>
</nav>