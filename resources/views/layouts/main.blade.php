<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- CDN  --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    {{-- StyleCSS Tailwind --}}
    @vite('resources/css/app.css')
    {{-- AlpineJS --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title>Tempat-Transit Dev</title>
</head>
    <body class="bg-gray-950">
        
        
        <nav class="py-9 px-4" x-data="{navOpen : true}">
            {{-- <div class="container mx-auto "> --}}
                <div class="flex justify-between">
                    <img src="/assets/Tempattransit-logo.png" class="w-52 order-1 sm:order-2">
                    <ion-icon @click="navOpen = ! navOpen" name="reorder-three" class="text-biru lg:hidden text-4xl order-2 sm:order-1"></ion-icon>
                    <div class="order-2 self-center hidden lg:block">
                        <ul class="flex gap-16 ">
                            <li class="text-white font-bold text-sm font-Circular"><a href="">About Us</a></li>
                            <li class="text-white font-normal text-sm font-Circular opacity-50"><a href="">Prices</a></li>
                            <li class="text-white font-normal text-sm font-Circular opacity-50"><a href="">Portofolio</a></li>
                            <li class="text-white font-normal text-sm font-Circular opacity-50"><a href="">Partner</a></li>
                        </ul>
                    </div>
                    <div class="order-3 hidden sm:block">
                        <button class="grow font-bold text-white px-6 py-4  rounded-full text-sm">Login</button>
                        <button class="grow font-bold bg-biru px-6 py-3 text-white rounded-full text-sm">Logout</button>
                    </div>
                </div>
                {{-- Navbar --}}
                <div x-show="navOpen" x-data="{open : false}" class="fixed bottom-0 w-full right-0 left-0 p-4 bg-blue-950 bg-opacity-50 lg:hidden"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">
                    <ul class="flex justify-between">
                        <li>
                            <button class="flex justify-center flex-col items-center gap-1">
                                <ion-icon name="globe-outline" class="text-2xl  text-white"></ion-icon>
                                <span class="text-white text-base font-bold">About Us</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex justify-center flex-col items-center gap-1">
                                <ion-icon name="pricetags-outline" class="text-white text-2xl opacity-50"></ion-icon>
                                <span class="text-white text-base opacity-50 font-normal">Prices</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex justify-center flex-col items-center gap-1">
                                <ion-icon name="book-outline" class="text-white text-2xl opacity-50"></ion-icon>
                                <span class="text-white text-base opacity-50 font-normal">Portofolio</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex justify-center flex-col items-center gap-1">
                                <ion-icon name="people-outline" class="text-white text-2xl opacity-50"></ion-icon>
                                <span class="text-white text-base opacity-50 font-normal">Partner</span>
                            </button>
                        </li>
                        <li>
                            <button @click="open = !open" class="flex justify-center flex-col items-center gap-1">
                                <ion-icon name="reorder-three-outline" class="text-white text-2xl opacity-50"></ion-icon>
                                <span class="text-white text-base opacity-50 font-normal">More</span>
                            </button>
                        </li>
                    </ul>
                    <div x-show="open" class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90">
                        <button class="grow font-bold bg-white px-8 py-4 text-black rounded-full text-sm">Login</button>
                        <button class="grow font-bold bg-blue-400 px-8 py-4 text-white rounded-full text-sm">Logout</button>
                    </div>
                </div>
            </div>
        </nav>
    
        @yield('content')
        
      
    </body>
</html>