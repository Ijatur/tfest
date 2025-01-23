@extends('layout.app')
@section('content')
    <x-nav />
    <header id="scrolling-header" class="w-full overflow-hidden bg-yellow-400 fixed top-[110px] left-0 right-0 z-40 bg-blue">
        <div class="marquee whitespace-nowrap flex justify-around text-lg font-semibold py-2">
            <span class="marquee-content">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-white">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-white">LAGI LAGI PESTARPORA</span>
        </div>
    </header>

    <section class="relative w-full h-[80vh] mt-[150px] overflow-hidden bg-gray-100">
        <!-- Slider Wrapper -->
        <div id="slider" class="absolute inset-0 flex slider">
            <img src="https://assets.bosscreator.xyz/banner/slide-4.webp" alt="Foto 3" class="w-full h-full object-cover">
        </div>

        <!-- Gambar di Tengah -->
        <div class="absolute inset-0 flex items-center justify-center">
            <img src="https://pestapora.com/_nuxt/hero._FwySz7d.png" alt="Gambar Tengah" class="w-2/3 lg:w-1/3">
        </div>
    </section>
    <section class="w-full overflow-hidden bg-yellow-400 z-40 bg-red">
        <div class="marquee whitespace-nowrap flex justify-around text-lg font-semibold py-2">
            <span class="marquee-content text-yellow">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-white">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-yellow">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-white">LAGI LAGI PESTARPORA</span>
        </div>
    </section>
    <section class="w-full h-[130vh] lg:h-[100vh] bg-blue">
        <div class="flex justify-center items-center pt-11">
            <img src="https://pestapora.com/_nuxt/tiket-pestapora-2025.CPKrUcjQ.png" alt=""
                class="w-[60%] lg:w-[45%]">
        </div>
        <div
            class="flex flex-col lg:flex-row justify-center items-center lg:space-x-80 pt-[75px] lg:pt-[150px] space-y-24 lg:space-y-0">
            <img src="https://assets.bosscreator.xyz/ticket/2025/early-bird.png" class="w-[10rem] lg:w-[15rem]">
            <img src="https://assets.bosscreator.xyz/ticket/2025/presale.png" class="w-[10rem] lg:w-[15rem]">
            <img src="https://assets.bosscreator.xyz/ticket/2025/reguler-pass.png" class="w-[10rem] lg:w-[15rem]">
        </div>
    </section>
    <section class="w-full overflow-hidden bg-yellow-400 z-40 bg-yellow">
        <div class="marquee whitespace-nowrap flex justify-around text-lg font-semibold py-2">
            <span class="marquee-content text-pink">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content text-pink">LAGI LAGI PESTARPORA</span>
            <span class="marquee-content">LAGI LAGI PESTARPORA</span>
        </div>
    </section>
    <section class="w-full h-full bg-pink">
        <div class="flex justify-center items-center pt-11">
            <img src="https://pestapora.com/_nuxt/section-submit-foto-kamu.BYcgTvbt.png" alt=""
                class="w-[60%] lg:w-[45%]">
        </div>
        <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="height: 450px; background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&amp;m=1179614034&amp;s=612x612&amp;w=0&amp;h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Dr.
                            Abdullah Abdullah's Presidential Election Campaign
                        </a>
                    </main>

                </div>

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="height: 450px; background-image:url(https://media.gettyimages.com/photos/ashraf-ghani-afghanistans-president-speaks-at-the-council-on-foreign-picture-id850794338?k=6&amp;m=850794338&amp;s=612x612&amp;w=0&amp;h=b_XBw5S38Cioslqr6VL3e36cWQU205IsInqDXZpDOD4=);">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's
                            President Ashraf Ghani Speaks At The Council
                        </a>
                    </main>

                </div>

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="height: 450px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-arrives-to-the-welcoming-ceremony-the-picture-id694155252?k=6&amp;m=694155252&amp;s=612x612&amp;w=0&amp;h=IIJPetzJL-hAgPkE4hm2wUKvO4YOav8jJp484CgLEUs=);">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Middle
                            East Participants Gather In Warsaw
                        </a>
                    </main>
                </div>
                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="height: 450px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-speaks-during-a-gathering-in-jalalabad-picture-id1205021905?k=6&amp;m=1205021905&amp;s=612x612&amp;w=0&amp;h=nwAH1XuZxF_H4f6LfHv-lgqtZe0h1tVFXfzhpMwFqao=);">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghan
                            President Ashraf Ghani Visits Jalalabad
                        </a>
                    </main>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row justify-center items-center lg:space-x-80 pt-[50px] space-y-24 lg:space-y-0">
            <img src="https://pestapora.com/_nuxt/button-submit-foto-kamu.t_oVm57k.png" class="w-[10rem] lg:w-[15rem]">
            <img src="https://pestapora.com/_nuxt/button-lihat-semua-foto.hpEAqso3.png" class="w-[10rem] lg:w-[15rem]">
        </div>
    </section>
    <section class="w-full h-full bg-pink p-8">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            @foreach ($merchandises as $merchandise)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ Storage::url($merchandise->thumbnail) }}" alt="Product 1" class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold mb-2">{{ $merchandise->name }}</h2>
                        <p class="text-sm text-gray-700 mb-4">{{ $merchandise->description }}</p>
                        <p class="text-sm text-gray-700 mb-4">Rp {{ number_format($merchandise->price, 0, ',', '.') }}
                        </p>
                        <a href="#" class="block text-center bg-pink text-white py-2 px-4 rounded">Buy</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
