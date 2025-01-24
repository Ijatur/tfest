<nav class="fixed top-0 items-center justify-between w-full shadow-md px-10 py-6 flex z-50 bg-yellow"
x-data="{ open: false }" @click.away="open = false">
 <a href="/"><img  class="h-16 min-w-fit " src="https://pestapora.com/_nuxt/logo-pestapora-2025.MuvH88kW.png" alt="" srcset=""></a>
    <ul class="gap-8 w-full justify-end hidden md:flex font-inter font-bold">
      <li><a href="/" class="hover:text-blue">Home</a></li>
      <li><a href="/ticket" class="hover:text-blue">Ticket</a></li>
      <li><a href="/lineup" class="hover:text-blue">Line up</a></li>
      <li><a href="/venue" class="hover:text-blue">Venue</a></li>
      <li><a href="/merch" class="hover:text-blue">Merch</a></li>
      <li><a href="/about" class="hover:text-blue">About Tfest</a></li>
    </ul> 
    <a href="#" class="md:hidden flex justify-end" @click="open = !open">
      <span class="material-symbols-outlined">menu</span>
  </a>

  <div x-show="open" x-transition class="md:hidden absolute top-0 mt-24 right-0 bg-yellow shadow-lg w-full">
    <ul class="font-inter font-bold">
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/">Home</a></li>
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/ticket">Ticket</a></li>
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/lineup">Line up</a></li>
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/venue">Venue</a></li>
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/merch">Merch</a></li>
        <li class="hover:bg-blue group-hover:text-white p-4 hover:text-white"><a href="/about">About Tfest</a></li>
    </ul>
  </div>
</nav>