@extends('layouts.app')
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

@section('content')

    <body class="font-sans text-gray-700 antialiased bg-white">
        <div class="h-24 z-50 relative container mx-auto px-6 grid grid-cols-3">
            <!-- Side Menu / Mobile -->
            <div x-data="{ showMenu: false }" class="flex items-center">
                <button x-on:click="showMenu = true">
                </button>
                <!-- Overlay Menu -->
            </div>
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <a href="/"
                    style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-decoration: none;"
                    class="text-white uppercase font-extrabold text-2xl tracking-wide">
                    <img src="{{ asset('assets/img/visora1.svg') }}" alt="Logo"
                        style="height: 50%; margin-bottom: 50%;">
                </a>
            </div>
        </div>
        <div class="w-full h-24 bg-yellow-900 bg-opacity-95 absolute top-0 left-0"></div>
        <div class="-mt-24 relative w-full py-12 px-12 bg-yellow-900">
            <div class="relative z-10 text-center py-24 md:py-48">
                <h1
                    class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-12">
                </h1><a href="/blog"
                    class="inline-block bg-yellow-800 text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Get
                    Started</a>
            </div>
            <div
                class="relative z-10 mx-auto max-w-4xl flex justify-between uppercase text-white font-heading tracking-widest text-sm">
                <a href="{{ url('/register') }}" class="border-b border-white">Register</a> <a href="{{ url('/login') }}"
                    class="border-b border-white">Login</a>
            </div><img
                src="https://images.unsplash.com/photo-1490129375591-2658b3e2ee50?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2244&amp;q=80"
                class="w-full h-full absolute inset-0 object-cover opacity-70">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-white p-12 md:p-24 flex justify-end items-center">
                <a href="/layanan/fotografi">
                    <img src="https://images.unsplash.com/photo-1501631259223-89d4e246ed23?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1960&amp;q=80"
                        class="w-full max-w-md">
                </a>
            </div>
            <div class="bg-gray-100 p-12 md:p-24 flex justify-start items-center">
                <div class="max-w-md">
                    <div class="w-24 h-2 bg-yellow-800 mb-4"></div>
                    <h2 class="font-display font-bold text-2xl md:text-3xl lg:text-4xl mb-6">Layanan Terbaru untuk Kebutuhan
                        Visual Anda</h2>
                    <p class="font-light text-gray-600 text-sm md:text-base mb-6 leading-relaxed">
                        Temukan jasa fotografi, videografi, dan editing terbaik di Indramayu dengan sistem pemesanan dan
                        rekomendasi yang cepat dan terpercaya. Cocok untuk kebutuhan pribadi, bisnis, atau event spesial
                        Anda.
                    </p>
                    <a href="/layanan/fotografi"
                        class="inline-block border-2 border-yellow-800 font-light text-yellow-800 text-sm uppercase tracking-widest py-3 px-8 hover:bg-yellow-800 hover:text-white">
                        Lihat Layanan
                    </a>
                </div>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1501901609772-df0848060b33?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
            class="w-full h-screen object-cover">
        <div class="max-w-xl mx-auto text-center py-24 md:py-32">
            <div class="w-24 h-2 bg-yellow-800 mb-4 mx-auto"></div>
            <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">Kami Hadir untuk Visual Terbaik Anda
            </h2>
            <p class="font-light text-gray-600 mb-6 leading-relaxed">
                Sistem kami membantu Anda menemukan jasa fotografi, videografi, dan editing paling sesuai berdasarkan
                preferensi dan kebutuhan, langsung di wilayah Indramayu.
            </p>
        </div>
        <div class="flex flex-wrap bg-black"><a href="/categories/sandy-beaches/"
                class="bg-black relative w-full md:w-auto md:flex-1 flex items-center justify-center h-72 font-heading text-white uppercase tracking-widest hover:opacity-75">
                <div class="relative z-10">Sandy Beaches</div><img
                    src="https://images.unsplash.com/photo-1528855275993-0f4a23fedd62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    class="absolute inset-0 w-full h-full object-cover opacity-50">
            </a><a href="/categories/forest-trials/"
                class="bg-black relative w-full md:w-auto md:flex-1 flex items-center justify-center h-72 font-heading text-white uppercase tracking-widest hover:opacity-75">
                <div class="relative z-10">Forest Trails</div><img
                    src="https://images.unsplash.com/photo-1449495169669-7b118f960251?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80"
                    class="absolute inset-0 w-full h-full object-cover opacity-50">
            </a><a href="/categories/city-streets/"
                class="bg-black relative w-full md:w-auto md:flex-1 flex items-center justify-center h-72 font-heading text-white uppercase tracking-widest hover:opacity-75">
                <div class="relative z-10">City Streets</div><img
                    src="https://images.unsplash.com/uploads/1411070807173e4d6762d/f84a3a01?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    class="absolute inset-0 w-full h-full object-cover opacity-50">
            </a></div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-white p-12 md:p-24 flex justify-start items-center"><a href="/blog/my-third-big-post/"><img
                        src="https://images.unsplash.com/photo-1521145239174-279dc2227166?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                        class="w-full max-w-md"></a></div>
            <div class="md:order-first bg-gray-100 p-12 md:p-24 flex justify-end items-center">
                <div class="max-w-md">
                    <div class="w-24 h-2 bg-yellow-800 mb-4"></div>
                    <h2 class="font-display font-bold text-2xl md:text-3xl lg:text-4xl mb-6">
                        Sistem Rekomendasi Jasa Visual Terdepan
                    </h2>
                    <p class="font-light text-gray-600 text-sm md:text-base mb-6 leading-relaxed">
                        Temukan penyedia jasa fotografi, videografi, dan editing terbaik di Indramayu melalui sistem kami
                        yang menggunakan metode Content-Based Filtering untuk hasil yang sesuai dengan keinginan dan
                        kebutuhan Anda.
                    </p>
                    <a href="/blog/my-third-big-post/"
                        class="inline-block border-2 border-yellow-800 font-light text-yellow-800 text-sm uppercase tracking-widest py-3 px-8 hover:bg-yellow-800 hover:text-white">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <div class="relative w-full py-12 px-12">
            <div class="relative z-10 text-center py-12 md:py-24">
                <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-6">
                    Rekomendasi Jasa Visual yang Tepat untuk Anda
                </h1>
                <p class="text-white mb-10 text-base md:text-lg font-bold">
                    Temukan jasa fotografi, videografi, dan editing terbaik di Indramayu dengan sistem cerdas berbasis
                    Content-Based Filtering yang disesuaikan dengan kebutuhan Anda.
                </p>
                <a href="/pages/about-us"
                    class="inline-block bg-yellow-800 text-white uppercase text-sm tracking-widest font-heading px-8 py-4">
                    Selengkapnya
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1503516459261-40c66117780a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1949&amp;q=80"
                class="w-full h-full absolute inset-0 object-cover">
        </div>

        <footer class="relative bg-yellow-900 pt-8 pb-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl font-semibold text-white">Let's keep in touch!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-white">
                            Find us on any of these platforms, we respond 1-2 business days.
                        </h5>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-white text-sm font-semibold mb-2">Useful Links</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Github</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Free Products</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">MIT License</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a class="text-white hover:text-yellow-200 font-semibold block pb-2 text-sm transition duration-300"
                                            href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-yellow-700">
                <div class="flex flex-wrap items-center justify-center">
                    <div class="w-full px-4 text-center">
                    </div>
                </div>
                <div class="mt-4 text-center text-white text-sm">
                    ©2023 Visora. All rights reserved.
                </div>
            </div>
        </footer>
        <script src="/static/js/alpine.js"></script>
    </body>
@endsection
