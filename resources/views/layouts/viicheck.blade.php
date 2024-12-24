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
    <link href="https://kit-pro.fontawesome.com/releases/v6.7.2/css/pro.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<style>
    *:not(i) {
        font-family: "K2D", serif;
    }

    .nav-menu {
        position: relative;
        min-width: 70px;
    }

    .menu-active {
        color: #DB2D2E !important;

    }

    .menu-active::before {
        content: "";
        position: absolute;
        top: 108%;
        right: 0px;
        width: 100%;
        height: 15px;
        background-color: #DB2D2E;
        border-radius: 5px;
    }


    .dropdown {
        position: relative;
        display: inline-block;
    }

    .content-wrap {
        display: none;
        display: flex;
        position: absolute;
        top: 75px;
        right: 20px;
        background-color: white;
        width: max-content;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 10px;
        font-size: 16px;
        border: 2px solid #FF8E8E;
        text-align: left;
    }

    .cont {
        display: none;
    }

    .dropdown-content a {
        color: #db2d2e;
        text-decoration: none;
        display: block;
        font-size: 19px;
        margin: 10px;
        font-weight: bold;
        position: relative;
    }

    .dropdown-content {
        margin: 10px;
        padding: 5px;
    }

    .dropdown-content a:hover::before {
        content: "";
        position: absolute;
        top: 30px;
        right: 0px;
        width: 100%;
        height: 3px;
        background-color: #db2d2e;
        border-radius: 5px;
    }


    .wrap {
        border: 2px solid #191919;
        padding: 10px 0;
        border-radius: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        display: flex;
    }

    .dropbtn span {
        margin-left: 5px;
    }

    .active {
        display: block;
    }

    .bar {
        display: none;
        margin-left: auto;
        margin-right: 10px;
    }
</style>

<body class="bg-secondary">

    <!-- Navbar -->
    <nav class="bg-[#DB2D2E] fixed top-0 left-0 right-0 shadow-md z-10 rounded-br-[12px]">
        <div class="container mx-auto flex items-center justify-between px-4 py-1">
            <!-- Logo -->
            <div>
                <a href="" class="text-xl font-bold text-white-800">
                    <img src="https://www.viicheck.com/img/logo/logo-flex-line.png" alt="Logo" class="" width="77">
                </a>
            </div>
            <!-- Hamburger Menu -->
            <div>
                <button class="text-gray-800 text-2xl dropbtn">
                    <i class="fas fa-bars text-[#ffffff]"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="container mx-auto relative z-[100]">
        <div class="cont">
            <div class="content-wrap">
                <div class="dropdown-content">
                    <a href="{{ url('/policy') }}"><i class="fa-solid fa-file-contract me-1"></i> Policy</a>
                    <a href="{{ url('/term_of_service') }}"><i class="fa-solid fa-book-blank me-1"></i> Terms of service</a>
                    <a href="{{ url('/change_password') }}"><i class="fa-solid fa-key me-1"></i> Change password</a>
                    <a href="#"><i class="fa-solid fa-left-from-bracket me-1"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Content -->
    <main class="pt-16 pb-20 bg-gray-300 min-h-screen">
        @yield('content')
    </main>

    <!-- Bottom Bar -->
    <div class="bg-white fixed bottom-0 left-0 right-0 flex justify-around  items-center py-2 shadow-lg ">
        <!-- Home Button -->
        <a href="{{ url('/home') }}"
            class="nav-menu flex flex-col items-center text-gray-400 font-bold {{ Request::is('home') ? 'menu-active' : '' }}"
            id="home-btn">
            <i class="fas fa-home text-lg"></i>
            <span class="text-sm leading-3">Home</span>
        </a>
        <!-- Recent Button -->
        <a href="{{ url('/recent') }}"
            class="nav-menu flex flex-col items-center text-gray-400 font-bold {{ Request::is('recent') ? 'menu-active' : '' }}"
            id="recent-btn">
            <i class="fas fa-sync text-lg"></i>
            <span class="text-sm leading-3">Recent</span>
        </a>
        <!-- History Button -->
        <a href="{{ url('/history') }}"
            class="nav-menu flex flex-col items-center text-gray-400 font-bold {{ Request::is('history') ? 'menu-active' : '' }}"
            id="history-btn">
            <i class="fas fa-file-alt text-lg"></i>
            <span class="text-sm leading-3">History</span>
        </a>
        <!-- Profile Button -->
        <a href="{{ url('/profile') }}"
            class="nav-menu flex flex-col items-center text-gray-400 font-bold {{ Request::is('profile') ? 'menu-active' : '' }}"
            id="profile-btn">
            <i class="fas fa-user text-lg"></i>
            <span class="text-sm leading-3">Profile</span>
        </a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let buttons = document.querySelectorAll(".dropbtn");
        let dropdowns = document.querySelectorAll(".cont");
        let luis = document.getElementsByClassName("bar");
        let puc = document.getElementsByClassName("side-wrap");

        let documentClickHandler = function(event) {
            let isClickInsideDropdown = false;
            for (let i = 0; i < dropdowns.length; i++) {
                if (
                    dropdowns[i].contains(event.target) ||
                    buttons[i].contains(event.target)
                ) {
                    isClickInsideDropdown = true;
                }
            }

            for (let i = 0; i < dropdowns.length; i++) {
                if (!isClickInsideDropdown) {
                    dropdowns[i].classList.remove("active");
                }
            }

            for (let j = 0; j < puc.length; j++) {
                if (!puc[j].contains(event.target)) {
                    puc[j].classList.remove("sum");
                }
            }
        };

        let closeDropdowns = function() {
            for (let i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove("active");
            }
        };

        let closeSideMenu = function() {
            for (let j = 0; j < puc.length; j++) {
                puc[j].classList.remove("sum");
            }
        };

        for (let i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener("click", function(event) {
                let index = Array.from(buttons).indexOf(event.currentTarget);
                dropdowns[index].classList.toggle("active");
                for (let i = 0; i < dropdowns.length; i++) {
                    if (i !== index) {
                        dropdowns[i].classList.remove("active");
                    }
                }
                closeSideMenu();
                event.stopPropagation();
            });
        }

        for (let i = 0; i < luis.length; i++) {
            luis[i].addEventListener("click", function(event) {
                closeDropdowns();
                for (let j = 0; j < puc.length; j++) {
                    puc[j].classList.toggle("sum");
                }
                event.stopPropagation();
            });
        }

        window.addEventListener("resize", function() {
            closeDropdowns();
            closeSideMenu();
        });

        document.addEventListener("click", documentClickHandler);
    </script>
</body>

</html>
