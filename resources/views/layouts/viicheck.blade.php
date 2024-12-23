<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('/partner/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">

    <!-- Navbar -->
    <nav class="bg-white fixed top-0 left-0 right-0 shadow-md z-10 ">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <!-- Logo -->
            <div>
                <a href="" class="text-xl font-bold text-white-800">
                    <img src="https://www.viicheck.com/img/logo/VII-check-LOGO-W-v1.png" alt="Logo" class="h-8">
                </a>
            </div>
            <!-- Hamburger Menu -->
            <div>
                <button class="text-gray-800 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-16 pb-20 bg-gray-300 min-h-screen">
        @yield('content')
    </main>

    <!-- Bottom Bar -->
    <div class="bg-white fixed bottom-0 left-0 right-0 flex justify-around items-center p-2 shadow-lg">
        <!-- Home Button -->
        <a href="{{ url('/home') }}"
           class="flex flex-col items-center text-gray-400 hover:text-primary {{ Request::is('home') ? 'text-red-500' : '' }}"
           id="home-btn">
            <i class="fas fa-home text-lg"></i>
            <span class="text-sm">Home</span>
        </a>
        <!-- Recent Button -->
        <a href="{{ url('/recent') }}"
           class="flex flex-col items-center text-gray-400 hover:text-primary {{ Request::is('recent') ? 'text-red-500' : '' }}"
           id="recent-btn">
            <i class="fas fa-sync text-lg"></i>
            <span class="text-sm">Recent</span>
        </a>
        <!-- History Button -->
        <a href="{{ url('/history') }}"
           class="flex flex-col items-center text-gray-400 hover:text-primary {{ Request::is('history') ? 'text-red-500' : '' }}"
           id="history-btn">
            <i class="fas fa-file-alt text-lg"></i>
            <span class="text-sm">History</span>
        </a>
        <!-- Profile Button -->
        <a href="{{ url('/profile') }}"
           class="flex flex-col items-center text-gray-400 hover:text-primary {{ Request::is('profile') ? 'text-red-500' : '' }}"
           id="profile-btn">
            <i class="fas fa-user text-lg"></i>
            <span class="text-sm">Profile</span>
        </a>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Active bottom bar เมนู
            const buttons = document.querySelectorAll('.flex.flex-col.items-center');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // ลบ active class ออกจากปุ่มทั้งหมด
                    buttons.forEach(btn => btn.classList.remove('text-red-500'));

                    // เพิ่ม active class ให้ปุ่มที่ถูกคลิก
                    button.classList.add('text-red-500');
                });
            });
        });
    </script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
