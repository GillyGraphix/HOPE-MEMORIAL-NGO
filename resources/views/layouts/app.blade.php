<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    {{-- ========================================== --}}
    {{-- PWA META TAGS (APP ICON & INSTALLATION) --}}
    {{-- ========================================== --}}
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ea580c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="/images/icon-192x192.png">

    <title>Hope Memorial Spark Foundation</title>
    
    {{-- SCRIPTS & FONTS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    {{-- ========================================== --}}
    {{-- TAILWIND CONFIG & DARK MODE INIT --}}
    {{-- ========================================== --}}
    <script>
        tailwind.config = {
            darkMode: 'class', // Hii ndio inaruhusu site nzima kutumia class ya "dark"
        }
    </script>
    <script>
        // Hii script inazuia site kuleta weupe ghafla kabla ya kuwa nyeusi (Prevent FOUC)
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            overflow-x: hidden; 
            width: 100%;
        }
        .hashtag { font-variant: small-caps; font-weight: 600; color: #0284c7; }
        
        /* FOOTER PATTERN */
        .ngo-custom-footer {
            background-color: #0f172a; 
            background-image: url('/images/pattern.png'); 
            background-repeat: repeat;
            background-size: 600px auto; 
            position: relative;
            animation: pattern-scroll 50s linear infinite;
        }

        @keyframes pattern-scroll {
            0% { background-position: 0 0; }
            100% { background-position: 0 600px; }
        }

        .footer-overlay {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.99), rgba(15, 23, 42, 0.95));
        }

        @keyframes spark-glow {
            0%, 100% { opacity: 1; transform: scale(1); text-shadow: 0 0 0px rgba(14, 165, 233, 0); }
            50% { opacity: 0.8; transform: scale(1.05); text-shadow: 0 0 10px rgba(14, 165, 233, 0.6); }
        }
        .animate-spark { animation: spark-glow 3s infinite ease-in-out; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .apple-spring {
            transition-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* HEADER FIXED TRANSITION */
        #main-header {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                        background-color 0.4s ease,
                        border-color 0.4s ease,
                        box-shadow 0.4s ease;
        }

        /* SCROLL PROGRESS BAR */
        #scroll-indicator {
            background: linear-gradient(to right, #0ea5e9, #f97316, #0ea5e9);
            background-size: 200% 100%;
            animation: shimmer-bar 3s linear infinite;
        }

        @keyframes shimmer-bar {
            0% { background-position: 200% center; }
            100% { background-position: -200% center; }
        }

        /* ── BACK TO TOP BUTTON ── */
        #back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 1.75rem;
            z-index: 999;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            color: #ffffff;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(14, 165, 233, 0.45), 0 2px 8px rgba(0,0,0,0.12);
            opacity: 0;
            transform: translateY(20px) scale(0.85);
            pointer-events: none;
            transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
                        background 0.3s ease,
                        box-shadow 0.3s ease;
        }

        #back-to-top.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        #back-to-top:hover {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            box-shadow: 0 10px 30px rgba(249, 115, 22, 0.45), 0 2px 8px rgba(0,0,0,0.15);
            transform: translateY(-3px) scale(1.08);
        }
        
        .dropdown-menu {
            transform-origin: top;
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
        }
    </style>
</head>

<body class="antialiased bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-200 selection:bg-orange-400 selection:text-white transition-colors duration-300">
    
    {{-- MAIN HEADER - FIXED --}}
    <header id="main-header" class="bg-white/95 dark:bg-slate-950/90 backdrop-blur-md border-b border-sky-100/50 dark:border-slate-800 fixed top-0 left-0 right-0 w-full z-50 shadow-sm transition-colors duration-300">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between max-w-7xl relative z-20">
            
            {{-- LOGO (Imeongezwa dark:brightness-0 dark:invert ili iwe nyeupe kwenye dark mode) --}}
            <a href="/" class="flex items-center group shrink-0">
                <img src="{{ asset('images/logo.png') }}" 
                     alt="Hope Memorial Logo" 
                     class="h-12 sm:h-14 w-auto object-contain transition-transform duration-300 group-hover:scale-105 dark:brightness-0 dark:invert">
            </a>
            
            {{-- DESKTOP NAVIGATION --}}
            <nav class="hidden lg:flex items-center space-x-1">
                @php 
                    $navItems = [
                        '/' => ['label' => 'Home'],
                        'foundation' => [
                            'label' => 'Foundation', 
                            'submenu' => [
                                '/foundation#leadership-team' => 'Our Team'
                            ]
                        ],
                        'our_work' => ['label' => 'Our Work'],
                        'dispensary' => ['label' => 'Clinical'],
                        'gallery' => ['label' => 'Gallery'],
                        'donate' => ['label' => 'Donate'],
                        'news' => ['label' => 'Updates'],
                        'contact' => ['label' => 'Contact'],
                    ];
                @endphp

                @foreach($navItems as $url => $item)
                    @if(isset($item['submenu']))
                        {{-- DROPDOWN --}}
                        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative group">
                            <a href="{{ $url == '/' ? '/' : '/'.$url }}" 
                               class="inline-flex items-center gap-1 px-4 py-2 text-[11px] font-bold uppercase tracking-widest transition-colors duration-300 rounded-full {{ request()->is($url == '/' ? '/' : $url) ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : 'text-slate-500 dark:text-slate-400 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }}">
                                {{ $item['label'] }}
                                <svg class="w-3.5 h-3.5 text-current transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                            
                            {{-- Dropdown Menu (Dark Mode enabled) --}}
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 translate-y-2"
                                 class="absolute left-1/2 -translate-x-1/2 mt-1 w-48 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl shadow-xl p-2 z-50 dropdown-menu"
                                 style="display: none;">
                                
                                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white dark:bg-slate-900 border-l border-t border-slate-100 dark:border-slate-800 rotate-45"></div>
                                
                                <ul class="relative z-10 flex flex-col space-y-1">
                                    @foreach($item['submenu'] as $subUrl => $subLabel)
                                    <li>
                                        <a href="{{ $subUrl }}" class="block px-4 py-2 text-[10px] font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-sky-50 dark:hover:bg-slate-800 rounded-xl transition-colors">
                                            {{ $subLabel }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        {{-- LINKS ZA KAWAIDA --}}
                        <a href="{{ $url == '/' ? '/' : '/'.$url }}" 
                            class="px-4 py-2 text-[11px] font-bold uppercase tracking-widest transition-colors duration-300 rounded-full {{ request()->is($url == '/' ? '/' : $url) ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : 'text-slate-500 dark:text-slate-400 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }}">
                            {{ $item['label'] }}
                        </a>
                    @endif
                @endforeach
            </nav>
            
            <div class="flex items-center space-x-2 sm:space-x-4">
                
                {{-- DARK MODE TOGGLE BUTTON --}}
                <button id="theme-toggle" type="button" class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none rounded-full text-sm p-2 transition-colors" title="Toggle Dark Mode">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                {{-- DESKTOP DONATE BUTTON --}}
                <div class="hidden lg:block">
                    <a href="/donate" class="bg-orange-500 text-white font-black text-[11px] uppercase tracking-widest px-8 py-3.5 rounded-full hover:bg-slate-800 dark:hover:bg-slate-700 transition duration-300 shadow-lg shadow-orange-500/20">
                        Support Us
                    </a>
                </div>

                {{-- MOBILE MENU BUTTON --}}
                <button id="menu-toggle" class="lg:hidden relative w-10 h-10 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:text-sky-600 dark:hover:text-sky-400 focus:outline-none transition-colors group">
                    <div class="relative w-6 h-[18px] flex flex-col justify-between overflow-hidden">
                        <span id="line-1" class="w-full h-0.5 bg-current rounded-full transition-all duration-300 origin-left"></span>
                        <span id="line-2" class="w-full h-0.5 bg-current rounded-full transition-all duration-300"></span>
                        <span id="line-3" class="w-full h-0.5 bg-current rounded-full transition-all duration-300 origin-left"></span>
                    </div>
                </button>
            </div>
        </div>

        {{-- MOBILE MENU --}}
        <div id="mobile-menu-wrapper" class="absolute top-[110%] left-4 right-4 z-10 opacity-0 scale-95 -translate-y-4 pointer-events-none transition-all duration-500 apple-spring invisible">
            <nav class="bg-white/90 dark:bg-slate-900/95 backdrop-blur-2xl border border-white/60 dark:border-slate-700/60 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.15)] rounded-3xl p-5 max-h-[80vh] overflow-y-auto overflow-x-hidden">
                <ul class="flex flex-col space-y-1">
                    @foreach($navItems as $url => $item)
                        <li>
                            @if(isset($item['submenu']))
                                <div x-data="{ mobOpen: false }" class="w-full">
                                    <div class="flex items-center justify-between w-full rounded-2xl transition-all duration-300 {{ request()->is($url == '/' ? '/' : $url) ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800' }}">
                                        <a href="{{ $url == '/' ? '/' : '/'.$url }}" class="block flex-grow px-5 py-3.5 text-[12px] font-black uppercase tracking-widest text-left">
                                            {{ $item['label'] }}
                                        </a>
                                        <button @click="mobOpen = !mobOpen" class="p-3.5 text-slate-400 hover:text-sky-600 focus:outline-none transition-colors" aria-label="Toggle Submenu">
                                            <svg class="w-5 h-5 transition-transform duration-300" :class="{ 'rotate-180': mobOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                        </button>
                                    </div>
                                    <ul x-show="mobOpen" x-transition class="pl-4 pr-2 mt-1 space-y-1" style="display: none;">
                                        @foreach($item['submenu'] as $subUrl => $subLabel)
                                        <li>
                                            <a href="{{ $subUrl }}" class="block px-5 py-3 text-[10px] font-bold uppercase tracking-widest rounded-xl transition-all duration-300 text-slate-500 dark:text-slate-400 hover:bg-sky-50 dark:hover:bg-slate-800 hover:text-sky-600 dark:hover:text-sky-400 border-l-2 border-transparent hover:border-sky-500">
                                                {{ $subLabel }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <a href="{{ $url == '/' ? '/' : '/'.$url }}" 
                                   class="block px-5 py-3.5 text-[12px] font-black uppercase tracking-widest rounded-2xl transition-all duration-300 {{ request()->is($url == '/' ? '/' : $url) ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-sky-600 dark:hover:text-sky-400 hover:translate-x-1' }}">
                                    {{ $item['label'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                    <li class="pt-4 mt-2 border-t border-slate-100 dark:border-slate-800"> 
                        <a href="/donate" class="flex items-center justify-center bg-orange-500 text-white font-black text-[12px] uppercase tracking-widest py-4 rounded-2xl shadow-lg shadow-orange-500/20 active:scale-95 transition-transform">
                            Support Our Mission
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        {{-- SCROLL PROGRESS BAR --}}
        <div id="scroll-indicator" 
             class="absolute bottom-0 left-0 h-[2.5px] transition-all duration-100 ease-out"
             style="width: 0%;">
        </div>
    </header>

    {{-- BACK TO TOP BUTTON --}}
    <button id="back-to-top" aria-label="Back to top" title="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" 
             stroke="currentColor" stroke-width="2.5" stroke-linecap="round" 
             stroke-linejoin="round" width="22" height="22">
            <path d="M18 15l-6-6-6 6"/>
        </svg>
    </button>

    {{-- MAIN CONTENT --}}
    <main class="min-h-[70vh] w-full relative z-0 pt-[73px] lg:pt-[80px]">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="ngo-custom-footer text-slate-400 pt-24 pb-12 border-t-8 border-orange-500 relative w-full overflow-hidden">
        <div class="absolute inset-0 footer-overlay pointer-events-none"></div>

        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-24">
                
                <div class="space-y-6">
                    <h4 class="text-white text-lg font-black tracking-normal uppercase">HOPE <span class="text-sky-500">MEMORIAL</span></h4>
                    <p class="text-sm leading-relaxed font-light text-slate-300/80">
                        Improving maternal and child health through community-led solutions and professional clinical support in Tanzania.
                    </p>
                    <div class="flex items-center space-x-3">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white">Impact Mission Active</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase text-[11px] tracking-[0.2em] mb-8 border-l-4 border-sky-500 pl-4">Focus Areas</h4>
                    <ul class="space-y-4 text-xs font-bold uppercase tracking-[0.15em] text-slate-300">
                        <li><a href="/our_work" class="hover:text-sky-400 transition-colors">Anaemia Reduction</a></li>
                        <li><a href="/our_work" class="hover:text-sky-400 transition-colors">Safe Delivery Initiative</a></li>
                        <li><a href="/our_work" class="hover:text-sky-400 transition-colors">Maternal Education</a></li>
                        <li><a href="/our_work" class="hover:text-sky-400 transition-colors">Community Nutrition</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase text-[11px] tracking-[0.2em] mb-8 border-l-4 border-orange-500 pl-4">Contact Info</h4>
                    <ul class="space-y-6 text-sm text-slate-300">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-orange-500 mr-4 mt-0.5 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            <span>Mto wa Mbu, Arusha, Tanzania</span>
                        </li>
                        
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-orange-500 mr-4 mt-0.5 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.076-7.076l1.293-.97c.362-.271.527-.733.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <div class="flex flex-col space-y-1.5 text-[13px] text-white font-bold tracking-wider">
                                <a href="tel:+255763117674" class="hover:text-sky-400 transition-colors">+255 763 117 674</a>
                                <a href="tel:+255622041699" class="hover:text-sky-400 transition-colors">+255 622 041 699</a>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-orange-500 mr-4 mt-0.5 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.909A2.25 2.25 0 012.25 6.993V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25" />
                            </svg>
                            <div class="flex flex-col space-y-1.5 text-[12px] font-medium text-slate-300">
                                <a href="mailto:info@hopememorial.org" class="hover:text-white transition-colors">info@hopememorial.org</a>
                                <a href="mailto:director@hopememorial.org" class="hover:text-white transition-colors">director@hopememorial.org</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase text-[11px] tracking-[0.2em] mb-8 border-l-4 border-sky-500 pl-4">Support Us</h4>
                    <div class="flex flex-col space-y-4">
                        <input type="email" placeholder="EMAIL ADDRESS" class="bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-xs font-bold tracking-widest focus:ring-1 focus:ring-sky-500 outline-none text-white transition-all">
                        <button class="bg-sky-600 hover:bg-sky-700 text-white font-black py-4 rounded-xl transition text-[10px] uppercase tracking-[0.25em]">Subscribe</button>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center text-[10px] font-bold uppercase tracking-[0.25em] gap-4">
                <p class="text-slate-500">© 2026 Hope Memorial Spark Foundation. All rights reserved</p>
            </div>
        </div>
    </footer>

    {{-- PWA INSTALL PROMPT --}}
    <div x-data="{ show: false, deferredPrompt: null }" 
        x-init="
            window.addEventListener('beforeinstallprompt', (e) => {
                e.preventDefault();
                deferredPrompt = e;
                if (!sessionStorage.getItem('hope_pwa_dismissed')) {
                    setTimeout(() => { show = true }, 3000); 
                }
            });
        "
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-10"
        class="fixed bottom-6 left-4 right-4 md:left-auto md:right-6 md:w-[360px] z-[9999] bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-2xl border border-slate-100 dark:border-slate-800"
        style="display: none;">

        <div class="flex flex-col">
            <div class="flex items-center space-x-3 mb-3">
                <div class="w-10 h-10 bg-sky-50 dark:bg-sky-900/30 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </div>
                <h3 class="text-slate-800 dark:text-slate-200 font-black tracking-normal">Install Hope App</h3>
            </div>
            
            <p class="text-slate-500 dark:text-slate-400 text-[13px] mb-5 leading-relaxed">
                Stay connected. Get instant updates, track our impact, and support our mission directly from your home screen.
            </p>
            
            <div class="flex gap-3">
                <button @click="show = false; sessionStorage.setItem('hope_pwa_dismissed', 'true')" 
                        class="flex-1 px-4 py-2.5 text-[11px] font-black uppercase tracking-widest text-slate-500 hover:text-sky-700 dark:text-slate-400 dark:hover:text-sky-400 bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition">
                    Not Now
                </button>
                <button @click="deferredPrompt.prompt(); show = false;" 
                        class="flex-1 px-4 py-2.5 bg-orange-500 text-white rounded-lg text-[11px] font-black uppercase tracking-widest shadow-lg shadow-orange-500/30 hover:bg-orange-600 transition">
                    Install Now
                </button>
            </div>
        </div>
    </div>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                .then(registration => console.log('ServiceWorker registered:', registration.scope))
                .catch(err => console.log('ServiceWorker registration failed:', err));
            });
        }

        document.addEventListener('DOMContentLoaded', function() {

            /* ── DARK MODE TOGGLE LOGIC ── */
            const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            const themeToggleBtn = document.getElementById('theme-toggle');

            themeToggleBtn.addEventListener('click', function() {
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });

            /* ── MOBILE MENU TOGGLE ── */
            const btn = document.getElementById('menu-toggle');
            const menuWrapper = document.getElementById('mobile-menu-wrapper');
            const line1 = document.getElementById('line-1');
            const line2 = document.getElementById('line-2');
            const line3 = document.getElementById('line-3');
            let isMenuOpen = false;

            btn.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    line1.classList.add('rotate-45', 'translate-x-[2px]', '-translate-y-[1px]');
                    line2.classList.add('opacity-0', 'translate-x-2');
                    line3.classList.add('-rotate-45', 'translate-x-[2px]', 'translate-y-[1px]');
                    menuWrapper.classList.remove('invisible', 'opacity-0', 'scale-95', '-translate-y-4', 'pointer-events-none');
                    menuWrapper.classList.add('opacity-100', 'scale-100', 'translate-y-0', 'pointer-events-auto');
                } else {
                    line1.classList.remove('rotate-45', 'translate-x-[2px]', '-translate-y-[1px]');
                    line2.classList.remove('opacity-0', 'translate-x-2');
                    line3.classList.remove('-rotate-45', 'translate-x-[2px]', 'translate-y-[1px]');
                    menuWrapper.classList.remove('opacity-100', 'scale-100', 'translate-y-0', 'pointer-events-auto');
                    menuWrapper.classList.add('opacity-0', 'scale-95', '-translate-y-4', 'pointer-events-none');
                    setTimeout(() => { if (!isMenuOpen) menuWrapper.classList.add('invisible'); }, 500);
                }
            });

            /* ── SMART SCROLL EFFECTS ── */
            const header = document.getElementById('main-header');
            const scrollBar = document.getElementById('scroll-indicator');
            const backToTop = document.getElementById('back-to-top');
            let lastScroll = 0;

            window.addEventListener('scroll', function () {
                const currentScroll = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;

                const scrollPercent = docHeight > 0 ? (currentScroll / docHeight) * 100 : 0;
                scrollBar.style.width = scrollPercent.toFixed(1) + '%';

                if (currentScroll > 400) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }

                if (currentScroll > 60) {
                    header.classList.add('!bg-white/90', 'dark:!bg-slate-950/90', '!shadow-md');
                    header.classList.remove('shadow-sm', 'bg-white/95', 'dark:bg-slate-950/90');
                } else {
                    header.classList.remove('!bg-white/90', 'dark:!bg-slate-950/90', '!shadow-md');
                    header.classList.add('shadow-sm', 'bg-white/95', 'dark:bg-slate-950/90');
                }

                if (currentScroll > 200) {
                    if (currentScroll > lastScroll + 8) {
                        header.style.transform = 'translateY(-100%)';
                        if (isMenuOpen) btn.click();
                    } else if (currentScroll < lastScroll - 4) {
                        header.style.transform = 'translateY(0)';
                    }
                } else {
                    header.style.transform = 'translateY(0)';
                }

                lastScroll = currentScroll <= 0 ? 0 : currentScroll;
            }, { passive: true });

            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>