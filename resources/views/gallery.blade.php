@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PHP LOGIC: KUSOMA PICHA LIVE NA VIMAELEZO (CAPTIONS) --}}
{{-- ============================================================ --}}
@php
    $categories = [
        'clinical' => 'Clinical Work',
        'community' => 'Community Outreach',
        'training' => 'Training',
        'events' => 'Events',
        'team' => 'Team'
    ];
    
    // HAPA NDIPO UNAPOWEKA MAELEZO YA PICHA ZAKO KULINGANA NA JINA LA FAILi
    $imageCaptions = [
        // Mfano: 'jina-la-picha.jpg' => ['title' => 'Kichwa cha Habari', 'desc' => 'Maelezo marefu kidogo...']
        'mfano-1.jpg' => [
            'title' => 'Maternal Checkup', 
            'desc' => 'Our clinical team providing routine checkups to expecting mothers in Monduli.'
        ],
        'mfano-2.jpg' => [
            'title' => 'Community Training', 
            'desc' => 'Educating local leaders on the importance of early prenatal care.'
        ],
        // Unaweza kuongeza picha zako zote hapa chini...
    ];
    
    $galleryImages = [];
    
    foreach($categories as $folder => $label) {
        
        $path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/images/gallery/' . $folder;
        
        if(file_exists($path) && is_dir($path)) {
            try {
                $dir = new \DirectoryIterator($path);
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot() && !$fileinfo->isDir()) {
                        $ext = strtolower($fileinfo->getExtension());
                        if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                            
                            $filename = $fileinfo->getFilename();
                            
                            // Tafuta kama hii picha ina maelezo maalum, kama haina tumia maelezo ya kawaida
                            $captionInfo = $imageCaptions[$filename] ?? [
                                'title' => $label . ' Moment',
                                'desc' => 'A snapshot from our ' . strtolower($label) . ' initiatives impacting the community.'
                            ];

                            $galleryImages[] = [
                                'url' => asset('images/gallery/' . $folder . '/' . $filename),
                                'category' => $folder,
                                'label' => $label,
                                'filename' => $filename,
                                'title' => $captionInfo['title'],
                                'desc' => $captionInfo['desc']
                            ];
                        }
                    }
                }
            } catch (\Exception $e) {
                // Catch errors silently
            }
        }
    }
    
    $displayImages = $galleryImages;
    shuffle($displayImages);
@endphp

{{-- ============================================================ --}}
{{-- PAGE HERO --}}
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
{{-- GALLERY GRID & FILTERS --}}
{{-- ============================================================ --}}
<section class="py-24 bg-slate-50 min-h-[60vh]">
    <div class="container mx-auto px-4 max-w-7xl">

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12" id="gallery-filters">
            <button data-filter="all" class="filter-btn active text-[11px] font-black uppercase tracking-widest px-6 py-3 rounded-full border bg-sky-600 text-white border-sky-600 shadow-md transition-all duration-200">
                All
            </button>
            @foreach($categories as $key => $label)
            <button data-filter="{{ $key }}" class="filter-btn text-[11px] font-black uppercase tracking-widest px-6 py-3 rounded-full border bg-white text-slate-500 border-slate-200 hover:border-sky-300 hover:text-sky-600 transition-all duration-200 shadow-sm">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Gallery Images Grid --}}
        @if(count($displayImages) > 0)
            <div class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6" id="gallery-grid">
                @foreach($displayImages as $image)
                <div class="gallery-item break-inside-avoid relative overflow-hidden rounded-2xl cursor-pointer bg-slate-200 shadow-sm hover:shadow-2xl transition-all duration-500 transform group" 
                     data-category="{{ $image['category'] }}"
                     data-url="{{ $image['url'] }}"
                     data-filename="{{ $image['filename'] }}"
                     data-label="{{ $image['label'] }}"
                     data-title="{{ $image['title'] }}"
                     data-desc="{{ $image['desc'] }}"
                     onclick="openLightbox(this)">
                    
                    <img src="{{ $image['url'] }}" 
                         alt="{{ $image['title'] }}" 
                         class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700 ease-out" 
                         loading="lazy">
                    
                    {{-- Hover Overlay yenye Kichwa cha Habari --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-sky-300 text-[10px] font-black uppercase tracking-widest mb-1">{{ $image['label'] }}</span>
                        <h4 class="text-white font-bold text-lg leading-tight translate-y-4 group-hover:translate-y-0 transition-transform duration-300">{{ $image['title'] }}</h4>
                    </div>
                </div>
                @endforeach
            </div>

        @else
            {{-- Empty State --}}
            <div class="text-center py-20 space-y-6 bg-white rounded-3xl border border-slate-100 shadow-sm">
                <div class="flex justify-center text-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-black text-slate-700 tracking-normal leading-snug">Gallery Coming Soon</h3>
                <p class="text-slate-500 max-w-md mx-auto leading-relaxed text-lg font-light">
                    Photos and visual stories from our programs, clinical work, and community outreach 
                    will be shared here.
                </p>
            </div>
        @endif

    </div>
</section>

{{-- ============================================================ --}}
{{-- LIGHTBOX MODAL (Imerekebishwa kuonyesha Maelezo) --}}
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
        
        {{-- Sehemu ya Maelezo (Captions) Ndani ya Lightbox --}}
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        const activeClasses = ['bg-sky-600', 'text-white', 'border-sky-600', 'shadow-md', 'active'];
        const inactiveClasses = ['bg-white', 'text-slate-500', 'border-slate-200', 'hover:border-sky-300', 'hover:text-sky-600'];

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
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.classList.remove('scale-95', 'opacity-0');
                            item.classList.add('scale-100', 'opacity-100');
                        }, 50);
                    } else {
                        item.classList.remove('scale-100', 'opacity-100');
                        item.classList.add('scale-95', 'opacity-0');
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxLabel = document.getElementById('lightbox-label');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDesc = document.getElementById('lightbox-desc');
        const downloadBtn = document.getElementById('download-btn');
        
        let currentVisibleItems = [];
        let currentIndex = 0;

        window.openLightbox = function(element) {
            currentVisibleItems = Array.from(document.querySelectorAll('.gallery-item')).filter(item => item.style.display !== 'none');
            currentIndex = currentVisibleItems.indexOf(element);

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
    });
</script>

@endsection