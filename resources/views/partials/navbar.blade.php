@php
$currentUrl = url()->current();
@endphp

<nav class="block z-99 right-0 left-0 fixed w-full px-4 py-12 bg-transparent transition-all ease-in-out duration-500 lg:px-8 lg:py-8" id="navbar-main">
    <div class="flex items-center w-full justify-between text-slate-800">
        <div class="flex flex-row">
            <a href="#" class="mr-12 flex justify-center items-center cursor-pointer py-1.5 text-base text-slate-800 font-semibold rounded-xl">
                <img src="/assets/images/Logo/Brand-Logo.png" alt="Logo Almisbah" class="h-15 w-auto">
                <div class="flex flex-col" id="navbar-slogan">
                    <span class="text-white italic">#UmrohBerkah</span>
                    <span class="text-white italic">#BerkahDalamKesederhanaan</span>
                </div>
            </a>

            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6 text-white" id="navbar-main-li">
                <li class="flex items-center p-1 text-sm gap-x-2 px-3 py-1.5" id="navbar-li" data-route="{{ route('beranda') }}">
                    <i class="fi fi-br-home"></i>

                    <a href="{{ route('beranda') }}" class="flex items-center">
                        Beranda
                    </a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2" id="navbar-li" data-route="{{ route('keberangkatan') }}">
                    <i class="fi fi-br-time-fast"></i>

                    <a href="{{ route('keberangkatan') }}" class="flex items-center">
                        Jadwal Keberangkatan
                    </a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2" id="navbar-li" data-route="#">
                    <i class="fi fi-br-mobile-notch"></i>

                    <a href="#" class="flex items-center">
                        Social Media
                    </a>
                </li>
                <li
                    class="flex items-center p-1 text-sm gap-x-2" id="navbar-li" data-route="#">
                    <i class="fi fi-br-building-user"></i>

                    <a href="#" class="flex items-center">
                        Tentang Kami
                    </a>
                </li>
                <li
                    class="flex items-center p-1 text-sm gap-x-2" id="navbar-li" data-route="#">
                    <i class="fi fi-br-browser"></i>

                    <a href="#" class="flex items-center">
                        Artikel
                    </a>
                </li>
            </ul>
        </div>

        <div class="items-center hidden gap-x-2 lg:flex bg-white px-4 py-3 rounded-2xl">
            <div class="w-full max-w-sm min-w-[200px]">
                <div class="relative">
                    <i class="fi fi-br-search absolute top-2.5 w-5 h-5 left-2.5 text-gray-600"></i>
                    <input type="text" class="w-full pl-10 pr-3 py-2 bg-transparent placeholder:text-slate-400 text-white text-sm border border-[var(--color-secondary)] rounded-md transition duration-300 ease focus:outline-none focus:border-[var(--color-secondary)] hover:border-[var(--color-secondary)] shadow-sm outline-none focus:ring-2 focus:ring-[var(--color-secondary)]" placeholder="Telusuri Paket..." />
                </div>
            </div>
            <button class="rounded-md bg-[var(--color-secondary)] py-2 px-4 text-center text-sm text-white active:scale-95 hover:cursor-pointer transition-all shadow-md hover:shadow-lg font-bold focus:shadow-none active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Cari
            </button>
        </div>
        <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <i class="fi fi-br-search"></i>
        </button>
    </div>
</nav>

<script>
    $(document).ready(function() {

        const currentUrl = window.location.pathname;

        const $navItems = $("#navbar-li");
        const $navbar = $("#navbar-main");
        const $navbarTextArea = $("#navbar-main-li");
        const $slogans = $("#navbar-slogan span");

        $navItems.each(function() {
            const route = $(this).data("route");
            let isActive = false;

            if (route === "/") {
                isActive = (currentUrl === "/");
            } else {
                isActive = currentUrl.startsWith(route);
            }

            if (isActive) {
                $(this).addClass("bg-[var(--color-secondary)] rounded-2xl");
            } else {
                $(this).removeClass("bg-[var(--color-secondary)] rounded-2xl");
            }
        });

        const changePoint = $(window).height() * 0.6;

        function updateNavbar() {
            if ($(window).scrollTop() > changePoint) {
                $navbar
                    .addClass("bg-white text-gray-700 shadow-md")
                    .removeClass("bg-transparent");

                $navbarTextArea
                    .removeClass("text-white")
                    .addClass("text-gray-700");

                $slogans
                    .removeClass("text-white")
                    .addClass("text-gray-700");

            } else {
                $navbar
                    .removeClass("bg-white shadow-md")
                    .addClass("bg-transparent");

                $navbarTextArea
                    .removeClass("text-gray-700")
                    .addClass("text-white");

                $slogans
                    .removeClass("text-gray-700")
                    .addClass("text-white");
            }
        }

        updateNavbar();
        $(window).on("scroll", updateNavbar);

    });
</script>