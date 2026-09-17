@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PLYR CSS KWA AJILI YA YOUTUBE-LIKE VIDEO PLAYER --}}
{{-- ============================================================ --}}
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<style>
    /* Custom Styling kwa Player na Grid */
    .plyr--video { border-radius: 1rem; overflow: hidden; width: 100%; height: 100%; }
    .plyr__control--overlaid { background: rgba(14, 165, 233, 0.9) !important; }
    .plyr--video .plyr__control.plyr__tab-focus, 
    .plyr--video .plyr__control:hover, 
    .plyr--video .plyr__control[aria-expanded=true] { background: #ea580c !important; }
    
    /* Hakikisha player inachukua nafasi nzima kwenye container */
    .plyr { height: 100%; }
    .plyr__video-wrapper { height: 100%; background: #000; }
</style>

{{-- ============================================================ --}}
{{-- PHP LOGIC: KUSOMA PICHA NA VIDEO LIVE --}}
{{-- ============================================================ --}}
@php
    $categories = [
        'clinical' => 'Clinical Work',
        'community' => 'Community Outreach',
        'training' => 'Training',
        'events' => 'Events',
        'videos' => 'Videos',
        'team' => 'Team'
    ];
    
    // MAELEZO MAALUM YA TEAM NA PICHA NYINGINE
    $imageCaptions = [
        // ======= TEAM MEMBERS =======
        '1.jpg' => ['title' => 'Dr. Theresia Dawasa', 'desc' => 'Founder & Executive Director'],
        '2.jpg' => ['title' => 'Dr. Michael Mahole', 'desc' => 'Founder & Co Director'],
        '3.jpg' => ['title' => 'Dr. Nehemia Mbimbi, MD', 'desc' => 'Board Member'],
        '4.jpg' => ['title' => 'Dr. Clement Marmo, MD', 'desc' => 'Board Member'],
        '5.jpg' => ['title' => 'Ms. Anna Rahhi', 'desc' => 'Board Member & Logistics'],
        '6.jpg' => ['title' => 'Ms. Josephine Laizer', 'desc' => 'Board Member'],
        
        // ======= PICHA NYINGINE =======
        'mfano-1.jpg' => ['title' => 'Maternal Checkup', 'desc' => 'Our clinical team providing routine checkups.'],
    ];
    
    $galleryItems = [];
    
    foreach($categories as $folder => $label) {
        
        if ($folder === 'videos') {
            $path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/images/videos';
            $assetUrl = 'images/videos/';
        } else {
            $path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/images/gallery/' . $folder;
            $assetUrl = 'images/gallery/' . $folder . '/';
        }
        
        if(file_exists($path) && is_dir($path)) {
            try {
                $dir = new \DirectoryIterator($path);
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot() && !$fileinfo->isDir()) {
                        $ext = strtolower($fileinfo->getExtension());
                        
                        $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                        $isVideo = in_array($ext, ['mp4', 'webm', 'ogg', 'mov', 'avi']);
                        
                        if($isImage || $isVideo) {
                            
                            $filename = $fileinfo->getFilename();
                            $type = $isVideo ? 'video' : 'image';
                            
                            $captionInfo = $imageCaptions[$filename] ?? [
                                'title' => $label . ($type === 'Event' ? ' Video' : ' Events'),
                                'desc' => 'A snapshot from our ' . strtolower($label) . ' initiatives.'
                            ];

                            $galleryItems[] = [
                                'url' => asset($assetUrl . $filename),
                                'type' => $type,
                                'category' => $folder,
                                'label' => $label,
                                'filename' => $filename,
                                'title' => $captionInfo['title'],
                                'desc' => $captionInfo['desc'],
                                'ext' => $ext
                            ];
                        }
                    }
                }
            } catch (\Exception $e) {
                // Ignore errors
            }
        }
    }
    
    $displayItems = $galleryItems;
    
    // Tunapanga picha kwa majina ya faili zake (1.jpg itangulie kisha 2.jpg)
    usort($displayItems, function($a, $b) {
        return strnatcmp($a['filename'], $b['filename']);
    });
@endphp

{{-- ============================================================ --}}
{{-- PAGE HERO (Ipo dark by default) --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[50vh] py-28">
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/gallery-bg.jpg'); ?>');">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Visual Stories</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                Our<br>
                <span class="text-sky-400">Gallery</span>
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                Moments from our outreach, clinical work, community programs, and the faces 
                behind the impact of Hope Memorial Spark Foundation.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- GALLERY GRID & FILTERS (Imeongezwa Dark Mode) --}}
{{-- ============================================================ --}}
<section class="py-24 bg-slate-50 dark:bg-slate-900 min-h-[60vh] transition-colors duration-300">
    <div class="container mx-auto px-4 max-w-7xl">

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12" id="gallery-filters">
            <button data-filter="all" class="filter-btn active text-[11px] font-black uppercase tracking-widest px-6 py-3 rounded-full border bg-sky-600 text-white border-sky-600 shadow-md transition-all duration-200">
                All
            </button>
            @foreach($categories as $key => $label)
            <button data-filter="{{ $key }}" class="filter-btn text-[11px] font-black uppercase tracking-widest px-6 py-3 rounded-full border bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 border-slate-200 dark:border-slate-700 hover:border-sky-300 dark:hover:border-sky-500 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-200 shadow-sm">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Gallery Items Grid --}}
        @if(count($displayItems) > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6" id="gallery-grid">
                @foreach($displayItems as $item)
                    
                    @if($item['type'] === 'video')
                        {{-- MUONEKANO WA VIDEO (Umeboreshwa kuwa Mstatili na Kuchukua Nafasi Kubwa) --}}
                        <div class="gallery-item relative overflow-hidden rounded-xl sm:rounded-2xl bg-slate-900 shadow-sm hover:shadow-2xl transition-all duration-500 group col-span-2 md:col-span-2 lg:col-span-2 aspect-video flex items-center justify-center" 
                             data-category="{{ $item['category'] }}">
                            
                            {{-- Overlay info ya Video itakaa hapa juu --}}
                            <div class="absolute top-0 left-0 right-0 p-4 sm:p-5 bg-gradient-to-b from-slate-950/90 to-transparent pointer-events-none z-10 rounded-t-2xl">
                                <span class="text-orange-400 text-[10px] sm:text-[11px] font-black uppercase tracking-widest mb-1">{{ $item['label'] }}</span>
                                <h4 class="text-white font-bold text-sm sm:text-base leading-tight">{{ $item['title'] }}</h4>
                            </div>
                            
                            {{-- HTML5 Video (Imeongezwa preload="metadata" na kuondolewa object-cover ili video ikae vizuri) --}}
                            <video class="plyr-video w-full h-full" playsinline controls preload="metadata">
                                <source src="{{ $item['url'] }}" type="video/{{ $item['ext'] }}">
                            </video>
                        </div>
                        
                    @else
                        {{-- MUONEKANO WA IMAGE ITEM (Pamoja na Logic ya Team Members) --}}
                        <div class="gallery-item relative overflow-hidden rounded-xl sm:rounded-2xl cursor-pointer bg-slate-200 dark:bg-slate-800 shadow-sm hover:shadow-2xl transition-all duration-500 transform group aspect-[4/5] sm:aspect-square" 
                             data-category="{{ $item['category'] }}"
                             data-url="{{ $item['url'] }}"
                             data-filename="{{ $item['filename'] }}"
                             data-label="{{ $item['label'] }}"
                             data-title="{{ $item['title'] }}"
                             data-desc="{{ $item['desc'] }}"
                             onclick="openLightbox(this)">
                            
                            <img src="{{ $item['url'] }}" 
                                 alt="{{ $item['title'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" 
                                 loading="lazy">
                            
                            @if($item['category'] === 'team')
                                {{-- DESIGN YA TEAM: Majina yanaonekana muda wote na Gradient Nyeusi kwa chini --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/30 to-transparent flex flex-col justify-end p-3 sm:p-5">
                                    <h4 class="text-white font-black text-[12px] sm:text-lg leading-tight mb-1 drop-shadow-md">{{ $item['title'] }}</h4>
                                    <p class="text-orange-400 text-[8px] sm:text-[10px] font-bold uppercase tracking-widest">{{ $item['desc'] }}</p>
                                </div>
                            @else
                                {{-- DESIGN YA KAWAIDA: Text inakuja ukigusa (Hover) --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 sm:p-6">
                                    <span class="text-sky-300 text-[9px] sm:text-[10px] font-black uppercase tracking-widest mb-1">{{ $item['label'] }}</span>
                                    <h4 class="text-white font-bold text-sm sm:text-lg leading-tight translate-y-4 group-hover:translate-y-0 transition-transform duration-300">{{ $item['title'] }}</h4>
                                </div>
                            @endif
                        </div>
                    @endif
                    
                @endforeach
            </div>
        @else
            {{-- Empty State (Imeongezwa Dark Mode) --}}
            <div class="text-center py-20 space-y-6 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm transition-colors duration-300">
                <div class="flex justify-center text-slate-300 dark:text-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-black text-slate-700 dark:text-white tracking-normal leading-snug">Gallery Coming Soon</h3>
                <p class="text-slate-500 dark:text-slate-400 max-w-md mx-auto leading-relaxed text-lg font-light">
                    Photos and visual stories from our programs, clinical work, and community outreach 
                    will be shared here.
                </p>
            </div>
        @endif

    </div>
</section>

{{-- ============================================================ --}}
{{-- LIGHTBOX MODAL KWA AJILI YA PICHA --}}
{{-- ============================================================ --}}
<div id="lightbox" class="fixed inset-0 z-[100] bg-slate-950/98 backdrop-blur-xl hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4 sm:p-8">
    
    <button onclick="closeLightbox()" class="absolute top-4 right-4 md:top-6 md:right-8 text-white/70 hover:text-white transition-colors bg-white/10 hover:bg-white/20 p-3 rounded-full backdrop-blur-md z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>

    <button onclick="prevImage(event)" class="absolute left-2 md:left-8 top-1/2 -translate-y-1/2 text-white/70 hover:text-white bg-white/10 hover:bg-sky-600 p-3 md:p-4 rounded-full backdrop-blur-md transition-all z-50 group">
        <svg class="w-6 h-6 md:w-8 md:h-8 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <button onclick="nextImage(event)" class="absolute right-2 md:right-8 top-1/2 -translate-y-1/2 text-white/70 hover:text-white bg-white/10 hover:bg-sky-600 p-3 md:p-4 rounded-full backdrop-blur-md transition-all z-50 group">
        <svg class="w-6 h-6 md:w-8 md:h-8 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
    </button>

    <div class="relative w-full max-w-5xl flex flex-col items-center justify-center pt-8 md:pt-0">
        <img id="lightbox-img" src="" alt="Gallery Image" class="max-h-[65vh] w-auto max-w-full object-contain rounded-lg shadow-2xl transition-opacity duration-200">
        
        <div class="mt-8 text-center max-w-2xl px-4">
            <span id="lightbox-label" class="text-sky-400 text-[10px] font-black uppercase tracking-[0.2em] mb-2 block"></span>
            <h3 id="lightbox-title" class="text-2xl font-bold text-white mb-3"></h3>
            <p id="lightbox-desc" class="text-slate-300 text-sm md:text-base leading-relaxed font-light mb-6"></p>
            
            <a id="download-btn" href="" download class="inline-flex items-center text-sky-400 hover:text-white text-xs uppercase tracking-widest font-bold transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Download Image
            </a>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- SCRIPTS ZA FILTER, LIGHTBOX NA VIDEO PLAYER --}}
{{-- ============================================================ --}}
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        /* -----------------------------------------
           1. FILTER LOGIC (Imerekebishwa kusupport Grid layout)
        ----------------------------------------- */
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        const activeClasses = ['bg-sky-600', 'text-white', 'border-sky-600', 'shadow-md', 'active'];
        // Imeongezwa class za dark mode hapa chini ili JavaScript isizifute wakati wa kufanya filter
        const inactiveClasses = [
            'bg-white', 'dark:bg-slate-800', 
            'text-slate-500', 'dark:text-slate-400', 
            'border-slate-200', 'dark:border-slate-700', 
            'hover:border-sky-300', 'dark:hover:border-sky-500', 
            'hover:text-sky-600', 'dark:hover:text-sky-400'
        ];

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove(...activeClasses);
                    b.classList.add(...inactiveClasses);
                });
                
                btn.classList.remove(...inactiveClasses);
                btn.classList.add(...activeClasses);

                const filterValue = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = ''; // Hii inarudisha item kwenye mfumo wa grid kwa usahihi
                        setTimeout(() => {
                            item.classList.remove('scale-95', 'opacity-0');
                            item.classList.add('scale-100', 'opacity-100');
                        }, 50);
                    } else {
                        item.classList.remove('scale-100', 'opacity-100');
                        item.classList.add('scale-95', 'opacity-0');
                        setTimeout(() => {
                            item.style.display = 'none';
                            
                            const video = item.querySelector('video');
                            if (video) video.pause();
                        }, 300);
                    }
                });
            });
        });

        /* -----------------------------------------
           2. LIGHTBOX LOGIC YA PICHA
        ----------------------------------------- */
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxLabel = document.getElementById('lightbox-label');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDesc = document.getElementById('lightbox-desc');
        const downloadBtn = document.getElementById('download-btn');
        
        let currentVisibleItems = [];
        let currentIndex = 0;

        window.openLightbox = function(element) {
            currentVisibleItems = Array.from(document.querySelectorAll('.gallery-item'))
                                       .filter(item => item.style.display !== 'none' && item.hasAttribute('data-url'));
                                       
            currentIndex = currentVisibleItems.indexOf(element);
            
            if(currentIndex === -1) return; 

            updateLightboxContent();

            lightbox.classList.remove('hidden');
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            }, 10);
            
            document.body.style.overflow = 'hidden'; 
        }

        function updateLightboxContent() {
            if(currentVisibleItems.length === 0) return;
            const item = currentVisibleItems[currentIndex];
            
            lightboxImg.style.opacity = '0.4'; 
            
            setTimeout(() => {
                lightboxImg.src = item.dataset.url;
                lightboxLabel.textContent = item.dataset.label;
                lightboxTitle.textContent = item.dataset.title;
                lightboxDesc.textContent = item.dataset.desc;
                
                downloadBtn.href = item.dataset.url;
                downloadBtn.download = item.dataset.filename;
                lightboxImg.style.opacity = '1'; 
            }, 150);
        }

        window.nextImage = function(e) {
            if(e) e.stopPropagation();
            currentIndex = (currentIndex + 1) % currentVisibleItems.length;
            updateLightboxContent();
        }

        window.prevImage = function(e) {
            if(e) e.stopPropagation();
            currentIndex = (currentIndex - 1 + currentVisibleItems.length) % currentVisibleItems.length;
            updateLightboxContent();
        }

        window.closeLightbox = function() {
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightboxImg.src = '';
            }, 300);
            
            document.body.style.overflow = ''; 
        }

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.parentElement === lightbox) closeLightbox();
        });

        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('hidden')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });

        /* -----------------------------------------
           3. SETUP YA VIDEO PLAYER
        ----------------------------------------- */
        try {
            if (typeof Plyr !== 'undefined') {
                const players = Plyr.setup('.plyr-video', {
                    controls: [
                        'play-large', 'play', 'progress', 'current-time', 
                        'mute', 'volume', 'captions', 'settings', 
                        'pip', 'airplay', 'fullscreen'
                    ],
                    settings: ['quality', 'speed']
                });
                
                players.forEach(player => {
                    player.on('play', () => {
                        players.forEach(p => {
                            if (p !== player) p.pause();
                        });
                    });
                });
            }
        } catch (error) {
            console.warn("Video player setup imeshindwa:", error);
        }
        
    });
</script>

@endsection