@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden min-h-[92vh] flex items-center justify-center">

    {{-- ------------------------------------------------------------ --}}
    {{-- THE BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX EFFECT) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/home-bg.jpg'); ?>');">
        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-sky-950/90 via-sky-900/80 to-slate-900/90"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5 z-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    {{-- Glowing Orbs --}}
    <div class="absolute top-20 right-10 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl pointer-events-none z-10"></div>
    <div class="absolute bottom-20 left-10 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl pointer-events-none z-10"></div>

    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20 py-32 text-center flex flex-col items-center">

        <div class="max-w-5xl space-y-10">
            <div class="inline-flex items-center space-x-3 bg-white/10 backdrop-blur border border-white/20 rounded-full px-5 py-2.5 shadow-xl">
                <span class="text-[11px] font-black uppercase tracking-[0.25em] text-sky-200">Active Since 2026 · Mto wa Mbu, Arusha - Tanzania</span>
            </div>

            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-normal drop-shadow-lg">
                When A Mother Survives<br>
                <span class="text-orange-400">Everything Changes.</span>
            </h1>

            <p class="text-sky-100 text-xl leading-relaxed max-w-3xl mx-auto font-light backdrop-blur-sm bg-black/10 rounded-2xl p-6 border border-white/5 drop-shadow-sm">
                Hope Memorial Spark Foundation is dedicated to eliminating preventable maternal deaths
                through the SPARK system,reaching mothers before risk begins, sustaining care through
                pregnancy, and protecting life after delivery.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 justify-center pt-6">
                <a href="/donate" class="inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-black text-[12px] uppercase tracking-[0.2em] px-12 py-5 rounded-full transition duration-300 shadow-2xl shadow-orange-500/40">
                    Support Our Mission
                    <svg class="ml-3 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/projects" class="inline-flex items-center justify-center border border-white/40 bg-white/5 hover:border-white hover:bg-white/10 text-white font-bold text-[12px] uppercase tracking-[0.2em] px-12 py-5 rounded-full transition duration-300 backdrop-blur-sm">
                    See Our Impact
                </a>
            </div>
        </div>

    </div>
</section>


{{-- ============================================================ --}}
{{-- THE PROBLEM STRIP --}}
{{-- ============================================================ --}}
<section class="relative py-8 shadow-xl overflow-hidden bg-gradient-to-r from-orange-600 via-orange-500 to-orange-600 z-30 border-y border-orange-400/30">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 10px 10px;"></div>
    
    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-12 text-white text-center">
            <div class="text-[11px] font-black uppercase tracking-[0.25em] text-orange-100">The Silent Crisis</div>
            <div class="hidden sm:block w-px h-8 bg-white/20"></div>
            <p class="text-sm md:text-base font-medium max-w-2xl leading-relaxed drop-shadow-sm">
                In Monduli District, pregnancy is often a test of survival not a moment of anticipation.
            </p>
            <div class="hidden sm:block w-px h-8 bg-white/20"></div>
            <a href="/projects" class="shrink-0 bg-white/10 backdrop-blur-sm border border-white/30 text-white font-black text-[10px] uppercase tracking-widest px-6 py-3 rounded-full hover:bg-white hover:text-orange-600 transition duration-300 shadow-sm hover:shadow-lg">
                Learn More
            </a>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- WHAT WE DO --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-20">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Our Approach</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                The SPARK System
            </h2>
            <p class="text-slate-500 mt-6 max-w-2xl mx-auto text-lg leading-relaxed font-light">
                Support for Prenatal and Postnatal Anaemia Resilience Kit three connected interventions
                that form a closed loop, ensuring no mother is lost between stages.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Intervention 1 --}}
            <div class="group relative bg-gradient-to-br from-sky-50 to-white border border-sky-100 rounded-3xl p-10 hover:shadow-2xl hover:shadow-sky-100 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute top-8 right-8 text-[80px] font-black text-sky-200 opacity-50 leading-none select-none">1</div>
                <div class="relative">
                    <div class="w-14 h-14 bg-sky-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-sky-200">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 uppercase tracking-normal mb-4">Early Engagement</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">Reach her before risk begins. Connect women to care in the first trimester before anaemia becomes invisible and dangerous.</p>
                    <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-sky-600">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Early Antenatal Linkage</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Baseline Screening</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Nutrition Awareness</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Immediate Supplementation</li>
                    </ul>
                </div>
            </div>

            {{-- Intervention 2 --}}
            <div class="group relative bg-gradient-to-br from-orange-50 to-white border border-orange-100 rounded-3xl p-10 hover:shadow-2xl hover:shadow-orange-100 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute top-8 right-8 text-[80px] font-black text-orange-200 opacity-50 leading-none select-none">2</div>
                <div class="relative">
                    <div class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-orange-200">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 uppercase tracking-normal mb-4">Continuous Care</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">Build resilience through pregnancy. Anaemia evolves so care must be consistent, structured, and guided across all trimesters.</p>
                    <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-orange-600">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full mr-3"></span>Ongoing Anaemia Monitoring</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full mr-3"></span>Sustained Supplementation</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full mr-3"></span>Nutrition Counseling</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-orange-500 rounded-full mr-3"></span>Safe Delivery Preparation</li>
                    </ul>
                </div>
            </div>

            {{-- Intervention 3 --}}
            <div class="group relative bg-gradient-to-br from-sky-50 to-white border border-sky-100 rounded-3xl p-10 hover:shadow-2xl hover:shadow-sky-100 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute top-8 right-8 text-[80px] font-black text-sky-200 opacity-50 leading-none select-none">3</div>
                <div class="relative">
                    <div class="w-14 h-14 bg-sky-700 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-sky-200">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 uppercase tracking-normal mb-4">Postnatal Recovery</h3>
                    <p class="text-slate-500 leading-relaxed mb-6">Protect the mother after survival. Delivery is not the endpoint recovery is where the cycle is either broken or reinforced.</p>
                    <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-sky-600">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Postnatal Anaemia Screening</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Recovery Supplementation</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Breastfeeding Support</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-sky-500 rounded-full mr-3"></span>Community Follow-Up</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Connecting Arrow --}}
        <div class="mt-14 text-center">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-slate-400 bg-slate-50 border border-slate-100 rounded-full py-4 px-8 inline-block shadow-sm">
                Early Engagement <span class="mx-2 text-slate-300">→</span> Continuous Care <span class="mx-2 text-slate-300">→</span> Postnatal Recovery <span class="mx-2 text-slate-300">=</span> <span class="text-sky-600">A Closed Loop System</span>
            </p>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- ABOUT US SNAPSHOT --}}
{{-- ============================================================ --}}
<section class="py-28 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="space-y-8">
                <div>
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">About The Foundation</p>
                    <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                        Hope Memorial<br><span class="text-sky-600">Spark Foundation</span>
                    </h2>
                </div>
                <p class="text-slate-600 text-lg leading-relaxed">
                    Hope Memorial Spark Foundation (HMSF) is a non-profit organization dedicated to improving
                    maternal, newborn, and child health, with a strong focus on the prevention and management
                    of anaemia during pregnancy and the postnatal period.
                </p>
                <p class="text-slate-600 text-lg leading-relaxed">
                    The foundation exists to reduce preventable maternal and infant complications through early
                    detection, community education, nutritional support, and integrated primary healthcare
                    interventions.
                </p>
                <p class="text-slate-600 text-lg leading-relaxed">
                    HMSF was officially registered on <strong>26 February 2026</strong> under the Tanzania
                    Non-Governmental Organizations Act, 2002, with Registration Number:
                    <strong>01NGO/R/3988</strong>.
                </p>
                <a href="/foundation" class="inline-flex items-center text-sky-600 font-black text-[12px] uppercase tracking-widest hover:text-sky-800 transition group mt-4">
                    Full Story & Our Team
                    <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-sky-600 rounded-3xl p-8 text-white space-y-3 col-span-2 shadow-sm">
                    <div class="w-10 h-10 text-sky-200 mb-2">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <p class="text-[11px] font-black uppercase tracking-[0.25em] text-sky-200">Our Location</p>
                    <p class="text-xl font-black leading-snug tracking-normal">Mto wa Mbu, near Lake Manyara National Park </p> A strategic gateway to the Ngorongoro wildlife corridor.</p>
                </div>
                <div class="bg-white border border-slate-100 rounded-3xl p-8 space-y-4 shadow-sm hover:shadow-md transition">
                    <div class="text-sky-500 w-10 h-10">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800 text-sm uppercase tracking-normal">Hope Memorial Dispensary</p>
                    <p class="text-slate-500 text-sm leading-relaxed">Frontline facility. First point of contact for pregnant women and mothers.</p>
                </div>
                <div class="bg-white border border-slate-100 rounded-3xl p-8 space-y-4 shadow-sm hover:shadow-md transition">
                    <div class="text-orange-500 w-10 h-10">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.801 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.801 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375c0 .621-.504 1.125-1.125 1.125h-6.375a1.125 1.125 0 01-1.125-1.125V9.375c0-.621.504-1.125 1.125-1.125z" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800 text-sm uppercase tracking-normal">Reg. No. 01NGO/R/3988</p>
                    <p class="text-slate-500 text-sm leading-relaxed">Registered under Tanzania NGO Act, 2002 on 26 Feb 2026.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CORE FOCUS AREAS --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">What We Focus On</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">Core Focus Areas</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $focusAreas = [
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c-1.892 2.768-4.5 5.564-4.5 8.625 0 2.485 2.015 4.5 4.5 4.5s4.5-2.015 4.5-4.5c0-3.061-2.608-5.857-4.5-8.625z" />',
                        'title' => 'Maternal Anaemia Prevention & Screening', 
                        'color' => 'sky'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />',
                        'title' => 'Prenatal and Postnatal Health Education', 
                        'color' => 'orange'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.415-2.415L14.25 6l1.076-.259a3.375 3.375 0 002.415-2.415L18 2.25l.259 1.076a3.375 3.375 0 002.415 2.415L21.75 6l-1.076.259a3.375 3.375 0 00-2.415 2.415z" />',
                        'title' => 'Nutrition and Supplementation Support Programs', 
                        'color' => 'sky'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />',
                        'title' => 'Community Outreach and Awareness Campaigns', 
                        'color' => 'orange'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />',
                        'title' => 'Strengthening Rural Maternal Health Systems through Frontline Care', 
                        'color' => 'sky'
                    ],
                ];
            @endphp

            @foreach($focusAreas as $area)
            <div class="flex items-start space-x-5 bg-white shadow-sm hover:shadow-md border border-slate-100 hover:border-{{ $area['color'] }}-200 rounded-3xl p-7 transition-all duration-300 group">
                <div class="text-{{ $area['color'] }}-500 mt-1 shrink-0 w-8 h-8">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        {!! $area['icon'] !!}
                    </svg>
                </div>
                <p class="font-bold text-slate-700 text-sm leading-relaxed group-hover:text-slate-900 transition mt-1">{{ $area['title'] }}</p>
            </div>
            @endforeach

            <div class="flex items-center justify-center bg-gradient-to-br from-sky-600 to-sky-800 rounded-3xl p-7 text-white text-center shadow-md">
                <div class="space-y-3">
                    <p class="text-[11px] font-black uppercase tracking-widest text-sky-200">Our Mission</p>
                    <p class="font-black text-lg leading-snug tracking-normal">Turning Survival Into a System</p>
                    <a href="/foundation" class="inline-block text-[10px] font-black uppercase tracking-widest text-orange-300 hover:text-orange-200 transition mt-2">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- LEADERSHIP TEASER --}}
{{-- ============================================================ --}}
<section class="py-28 bg-sky-950 text-white shadow-inner relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>

    <div class="container mx-auto px-4 max-w-7xl text-center relative z-10">
        <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4">Our Leadership</p>
        <h2 class="text-4xl sm:text-5xl font-black tracking-normal leading-snug mb-6">
            Driven by Compassion,<br>
            <span class="text-sky-400">Strengthened by Evidence</span>
        </h2>
        <p class="text-sky-300 max-w-2xl mx-auto mb-16 text-lg leading-relaxed font-light">
            Led by frontline clinicians and community leaders who believe that no woman should
            risk her life to give life.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-4xl mx-auto mb-16">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors rounded-3xl p-8 text-left space-y-4 shadow-xl">
                <div class="w-14 h-14 bg-sky-500/20 text-sky-300 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl tracking-normal">Dr. Theresia Dawas</h3>
                    <p class="text-[11px] font-black uppercase tracking-widest text-orange-400 mt-1">Founder & Executive Director</p>
                </div>
                <p class="text-sky-200 text-sm leading-relaxed border-t border-white/10 pt-4">Tanzanian clinician, visionary leader, and social impact champion dedicated to transforming maternal and community health.</p>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors rounded-3xl p-8 text-left space-y-4 shadow-xl">
                <div class="w-14 h-14 bg-sky-500/20 text-sky-300 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl tracking-normal">Dr. Michael Mahole</h3>
                    <p class="text-[11px] font-black uppercase tracking-widest text-orange-400 mt-1">Founder & Co-Director</p>
                </div>
                <p class="text-sky-200 text-sm leading-relaxed border-t border-white/10 pt-4">Tanzanian clinician and results-driven leader redefining frontline healthcare delivery in underserved communities.</p>
            </div>
        </div>

        <a href="/foundation" class="inline-flex items-center bg-orange-500 hover:bg-orange-600 text-white font-black text-[12px] uppercase tracking-widest px-10 py-5 rounded-full transition duration-300 shadow-xl shadow-orange-500/30">
            Meet The Full Team
            <svg class="ml-3 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CALL TO ACTION BANNER --}}
{{-- ============================================================ --}}
<section class="relative py-32 bg-slate-900 text-white overflow-hidden shadow-2xl">
    
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-full bg-orange-600/20 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="absolute inset-0 bg-gradient-to-b from-sky-950/50 via-transparent to-slate-900/80 pointer-events-none"></div>

    <div class="container mx-auto px-4 max-w-5xl text-center relative z-10">
        
        <div class="inline-flex items-center space-x-2 bg-orange-500/10 border border-orange-500/20 backdrop-blur-sm px-5 py-2.5 rounded-full mb-8 shadow-sm">
            <span class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></span>
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400">ACT NOW</p>
        </div>
        
        <h2 class="text-4xl sm:text-6xl font-black tracking-normal leading-tight mb-6 drop-shadow-lg">
            Before Another<br>Life Is Lost.
        </h2>
        
        <p class="text-slate-300 text-xl mb-12 font-light leading-relaxed max-w-2xl mx-auto drop-shadow-sm">
            Every day, a mother enters pregnancy in Monduli without care. Every day, anaemia goes
            undetected. Every day, a preventable risk becomes a life threatening emergency.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-5 justify-center">
            <a href="/donate" class="bg-orange-500 text-white font-black text-[12px] uppercase tracking-widest px-12 py-5 rounded-full hover:bg-orange-400 transition shadow-lg shadow-orange-500/30">
                Donate Now
            </a>
            <a href="/contact" class="border border-white/30 hover:border-white/60 bg-white/5 backdrop-blur-sm text-white font-black text-[12px] uppercase tracking-widest px-12 py-5 rounded-full transition">
                Partner With Us
            </a>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- STRATEGIC PARTNERSHIPS SECTION (RESPECTFUL & CLEAR) --}}
{{-- ============================================================ --}}
<section class="py-20 bg-slate-50 border-t border-b border-slate-100 relative overflow-hidden">
    {{-- Decorative Background Pattern --}}
    <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 16px 16px;"></div>

    <div class="container mx-auto px-4 max-w-7xl text-center relative z-10">
        
        {{-- Elegant Header --}}
        <div class="inline-flex items-center justify-center space-x-3 mb-12">
            <div class="h-[1px] w-12 bg-sky-200"></div>
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-slate-500">In Strategic Partnership With</p>
            <div class="h-[1px] w-12 bg-sky-200"></div>
        </div>
        
        {{-- Card Container: Nimeweka ziwe na grid nzuri, rasmi na inayofanana --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-10 max-w-4xl mx-auto">
            
            {{-- 1. Ministry of Health (Wizara ya Afya) --}}
            <a href="https://www.moh.go.tz/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center bg-white px-6 py-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 transition-all duration-300">
                <img src="{{ asset('images/logo-afya.png') }}" alt="Ministry of Health Tanzania" class="h-20 w-auto object-contain mb-4">
                <span class="text-slate-800 text-[10px] font-black uppercase tracking-widest text-center">Ministry of Health</span>
            </a>

            {{-- 2. PO-RALG (TAMISEMI) --}}
            <a href="https://www.tamisemi.go.tz/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center bg-white px-6 py-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 transition-all duration-300">
                <img src="{{ asset('images/logo-tamisemi.png') }}" alt="PO-RALG (TAMISEMI)" class="h-20 w-auto object-contain mb-4">
                <span class="text-slate-800 text-[10px] font-black uppercase tracking-widest text-center">PRESIDENT OFFICE-REGIONAL ADMINISTRATION AND LOCAL GOVERNMENT (PO-RALG)</span>
            </a>

            {{-- 3. Ministry of Community Development --}}
            <a href="https://www.jamii.go.tz/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center bg-white px-6 py-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 transition-all duration-300">
                <img src="{{ asset('images/logo-jamii.png') }}" alt="Ministry of Community Development" class="h-20 w-auto object-contain mb-4">
                <span class="text-slate-800 text-[10px] font-black uppercase tracking-widest text-center">Community Development</span>
            </a>

        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- PWA NON-INTRUSIVE INSTALL PROMPT --}}
{{-- ============================================================ --}}
<div x-data="{ 
        show: false, 
        deferredPrompt: null 
    }" 
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
    class="fixed bottom-6 left-4 right-4 md:left-auto md:right-6 md:w-[360px] z-[9999] bg-white p-6 rounded-2xl shadow-2xl border border-slate-100"
    style="display: none;">

    <div class="flex flex-col">
        <div class="flex items-center space-x-3 mb-3">
            <div class="w-10 h-10 bg-sky-50 rounded-xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            </div>
            <h3 class="text-slate-800 font-black tracking-normal">Install Hope App</h3>
        </div>
        
        <p class="text-slate-500 text-[13px] mb-5 leading-relaxed">
            Stay connected. Get instant updates, track our impact, and support our mission directly from your home screen.
        </p>
        
        <div class="flex gap-3">
            <button @click="show = false; sessionStorage.setItem('hope_pwa_dismissed', 'true')" 
                    class="flex-1 px-4 py-2.5 text-[11px] font-black uppercase tracking-widest text-slate-500 hover:text-sky-700 bg-slate-50 hover:bg-slate-100 rounded-lg transition">
                Not Now
            </button>
            
            <button @click="deferredPrompt.prompt(); show = false;" 
                    class="flex-1 px-4 py-2.5 bg-orange-500 text-white rounded-lg text-[11px] font-black uppercase tracking-widest shadow-lg shadow-orange-500/30 hover:bg-orange-600 transition">
                Install Now
            </button>
        </div>
    </div>
</div>

@endsection