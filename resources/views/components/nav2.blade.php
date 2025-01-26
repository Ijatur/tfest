{{-- Navbar --}}
<!--<div class="navbar sticky top-0 z-50 bg-yellow px-8 md:px-22 lg:px-56 shadow-md">
    {{-- Navbar kiri --}}
    <div class="navbar-start w-fit">
        <a href="/"><img  class="h-16 min-w-fit " src="https://pestapora.com/_nuxt/logo-pestapora-2025.MuvH88kW.png" alt="" srcset=""></a>
    </div>

    {{-- Navbar tengah --}}
    <div class="navbar-center">

    </div>

    {{-- Navbar kanan --}}
    <div class="navbar-end w-full flex justify-end">
        {{-- Navbar desktop --}}
        <div class="hidden md:flex">
            <ul class="gap-8 menu-horizontal font-inter font-bold">
                <li><a href="/" class="hover:text-blue">Home</a></li>
                <li><a href="/ticket" class="hover:text-blue">Ticket</a></li>
                <li><a href="/lineup" class="hover:text-blue">Line up</a></li>
                <li><a href="/venue" class="hover:text-blue">Venue</a></li>
                <li><a href="/merch" class="hover:text-blue">Merch</a></li>
                <li><a href="/about" class="hover:text-blue">About Tfest</a></li>
              </ul>
        </div>
        
        {{-- Navbar mobile --}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost md:hidden">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="absolute px-[45px] w-full">
                <ul tabindex="0" class="menu-lg dropdown-content shadow-md bg-yellow rounded-b-md mt-[16px] w-screen font-inter font-bold">
                    <li class="hover:bg-pink hover:rotate-1 group-hover:text-white p-4 hover:text-white"><a href="/">Home</a></li>
                    <li class="hover:bg-blue hover:-rotate-1 group-hover:text-white p-4 hover:text-white"><a href="/ticket">Ticket</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/lineup">Line up</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/venue">Venue</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/merch">Merch</a></li>
                    <li class="hover:bg-pink group-hover:text-white p-4 hover:text-white"><a href="/about">About Tfest</a></li>
                </ul>
            </div>
        </div>
        
    </div>
  </div>-->
  <nav id="navbar" class="fixed w-full bg-yellow shadow-md transition-transform duration-300 transform-gpu z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/">
            <img  class="h-16 min-w-fit " src="https://pestapora.com/_nuxt/logo-pestapora-2025.MuvH88kW.png" alt="" srcset="">
        </a>

        <!-- Navigation Links -->
        <ul class="hidden md:flex space-x-6 font-inter font-bold">
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