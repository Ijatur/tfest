<nav id="navbar" class="fixed w-full bg-biru shadow-md transition-transform duration-300 transform-gpu z-50">
  <div class="container mx-auto md:px-4 px-12 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="/">
          <img  class="max-h-16 min-w-0 " src="{{asset('assets/logo/logo_fest.png')}}" alt="" srcset="">
      </a>

      <!-- Navigation Links -->
      <ul class="hidden md:flex md:space-x-8 space-x-12 text-2xl text-white font-superDream font-bold ">
          <li><a href="/" class="hover:text-krem">Home</a></li>
          <li><a href="/ticket" class="hover:text-krem">Ticket</a></li>
          <li><a href="/lineup" class="hover:text-krem">Line up</a></li>
          <li><a href="/venue" class="hover:text-krem">Venue</a></li>
          <li><a href="/merch" class="hover:text-krem">Merch</a></li>
          <li><a href="/about" class="hover:text-krem">About Tfest</a></li>    
      </ul>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="md:hidden flex items-center ">
          <span class="material-symbols-outlined text-white font-bold">menu</span>
      </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden bg-biru md:hidden shadow-md">
      <ul class="text-white font-superDream font-thin">
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block" href="/">Home</a></li>
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block"href="/ticket">Ticket</a></li>
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block" href="/lineup">Line up</a></li>
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block" href="/venue">Venue</a></li>
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block" href="/merch">Merch</a></li>
          <li><a class="hover:bg-krem p-4 hover:text-biru w-full inline-block" href="/about">About</a></li>
      </ul>
  </div>
</nav>