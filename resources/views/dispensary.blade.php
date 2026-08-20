@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PAGE HERO --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[60vh] py-28">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/dispensary-bg.jpg'); ?>');">
        {{-- Gradient Overlay: Giza kushoto ili maneno yasomeke, uwazi kulia picha ionekane --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    {{-- Glowing Orb --}}
    <div class="absolute top-10 right-10 w-80 h-80 bg-sky-400/20 rounded-full blur-3xl pointer-events-none z-10"></div>
    
    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Clinical Work</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                Hope Memorial<br>
                <span class="text-sky-400">Dispensary</span>
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                The frontline of all HMSF programs where every consultation, every screening, 
                and every outreach visit translates into real, life saving clinical impact.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-5 py-2.5 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-orange-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-[11px] font-black uppercase tracking-widest text-sky-200">Mto wa Mbu, Arusha Region</span>
                </div>
                <div class="flex items-center space-x-3 bg-green-500/20 backdrop-blur-sm border border-green-500/30 rounded-full px-5 py-2.5 shadow-lg">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-[11px] font-black uppercase tracking-widest text-green-300">Facility Active</span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- ABOUT THE DISPENSARY --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

            <div class="space-y-6">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Our Frontline Facility</p>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                    Integrated Healthcare<br>
                    <span class="text-sky-600">for Real Impact</span>
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    Through Hope Memorial Dispensary, the Foundation delivers essential primary healthcare 
                    services including outpatient clinical care for acute and chronic conditions, maternal and 
                    child health services focused on safe pregnancy, safe delivery, and healthy growth.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    The dispensary also provides diagnostic services that support early detection and accurate 
                    treatment, and preventive care that reduces avoidable illness and complications.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    Every service is designed with <strong class="text-slate-800">dignity, accessibility, and quality</strong> in 
                    mind ensuring that even the most vulnerable populations receive timely and effective care.
                </p>
                <div class="bg-sky-50 border border-sky-100 rounded-3xl p-8 space-y-4 shadow-sm mt-8">
                    <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 mb-2">Medical Officers In-Charge</p>
                    <div class="flex items-center space-x-4">
                        <div class="bg-sky-200 text-sky-700 w-10 h-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <p class="font-black text-slate-800 text-sm sm:text-base">Dr. Theresia Dawas (Founder & Exec. Director)</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-sky-200 text-sky-700 w-10 h-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <p class="font-black text-slate-800 text-sm sm:text-base">Dr. Michael Mahole (Founder & Co-Director)</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                @php
                    $services = [
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />', 'title' => 'Outpatient Clinical Care', 'desc' => 'For acute and chronic conditions serving patients from rural and semi-urban communities who otherwise have no access to professional medical care.', 'color' => 'sky'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'title' => 'Maternal & Child Health Services', 'desc' => 'Focused on safe pregnancy, safe delivery, and healthy growth from the earliest stages of life.', 'color' => 'orange'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />', 'title' => 'Diagnostic Services', 'desc' => 'Supporting early detection and accurate treatment through on site diagnostics including anaemia screening.', 'color' => 'sky'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />', 'title' => 'Preventive Care', 'desc' => 'Designed to reduce avoidable illness and complications before they arise especially for pregnant and postpartum women.', 'color' => 'orange'],
                    ];
                @endphp
                @foreach($services as $service)
                <div class="flex items-start space-x-5 bg-white hover:bg-{{ $service['color'] }}-50 border border-slate-200 hover:border-{{ $service['color'] }}-200 rounded-3xl p-7 transition-all duration-300 shadow-sm">
                    <div class="text-{{ $service['color'] }}-500 shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            {!! $service['icon'] !!}
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-800 mb-2">{{ $service['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- SPARK AT THE DISPENSARY --}}
{{-- ============================================================ --}}
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-6">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Flagship Program</p>
                <h2 class="text-3xl font-black text-slate-800 tracking-normal leading-snug">
                    SPARK Delivered<br>Through the Dispensary
                </h2>
                <p class="text-slate-600 leading-relaxed">
                    Our flagship initiative, the SPARK Support for Prenatal and Postnatal Anaemia 
                    Resilience Kit, is implemented through this integrated system.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    SPARK combines health education, nutritional support, anaemia prevention tools, and 
                    follow up care to improve maternal outcomes and strengthen community resilience.
                </p>
                <a href="/projects" class="inline-flex items-center text-sky-600 font-black text-[12px] uppercase tracking-widest hover:text-sky-800 transition group mt-4">
                    Learn About SPARK
                    <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-sky-600 rounded-3xl p-8 text-white space-y-4 shadow-lg">
                    <div class="text-4xl font-black text-sky-200 opacity-50">01</div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-300">Delivered Here</p>
                    <h3 class="font-black text-xl leading-snug">Early Anaemia Screening</h3>
                    <p class="text-sky-100 text-sm leading-relaxed">Identifying anaemia before it becomes dangerous connecting women to care in the first trimester.</p>
                </div>
                <div class="bg-orange-500 rounded-3xl p-8 text-white space-y-4 shadow-lg">
                    <div class="text-4xl font-black text-orange-200 opacity-50">02</div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-orange-200">Delivered Here</p>
                    <h3 class="font-black text-xl leading-snug">Antenatal & Postnatal Care</h3>
                    <p class="text-orange-100 text-sm leading-relaxed">Continuous support through pregnancy and into recovery after delivery.</p>
                </div>
                <div class="bg-sky-800 rounded-3xl p-8 text-white space-y-4 shadow-lg">
                    <div class="text-4xl font-black text-sky-400 opacity-50">03</div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-400">Delivered Here</p>
                    <h3 class="font-black text-xl leading-snug">Nutrition Counseling & Referrals</h3>
                    <p class="text-sky-100 text-sm leading-relaxed">Personalized counseling, supplementation, and referral services for complex cases.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- OUTPATIENT CLINIC --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Outpatient Services</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                The Outpatient Clinic
            </h2>
            <p class="text-slate-500 mt-6 max-w-2xl mx-auto text-lg leading-relaxed font-light">
                The outpatient clinic is the heartbeat of Hope Memorial Dispensary a place where 
                quality care meets community trust, and where no patient is turned away due to distance or circumstance.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
            @php
                $clinicServices = [
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375c0 .621-.504 1.125-1.125 1.125h-6.375a1.125 1.125 0 01-1.125-1.125V9.375c0-.621.504-1.125 1.125-1.125z" />', 'title' => 'General Outpatient Consultations', 'desc' => 'Diagnosis and management of acute and chronic medical conditions for all ages.', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'title' => 'Antenatal Care (ANC)', 'desc' => 'Comprehensive prenatal visits including examinations, screenings, and supplementation.', 'color' => 'orange'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />', 'title' => 'Postnatal Care (PNC)', 'desc' => 'Follow up care for mothers and newborns after delivery, including anaemia recovery monitoring.', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />', 'title' => 'Child Health Services', 'desc' => 'Growth monitoring, immunization support, and malnutrition management for infants and children.', 'color' => 'orange'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c-1.892 2.768-4.5 5.564-4.5 8.625 0 2.485 2.015 4.5 4.5 4.5s4.5-2.015 4.5-4.5c0-3.061-2.608-5.857-4.5-8.625z" />', 'title' => 'Anaemia Screening & Management', 'desc' => 'On-site haemoglobin testing, iron supplementation, and personalized treatment plans.', 'color' => 'red'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />', 'title' => 'Medication & Supplementation', 'desc' => 'Iron folic acid, deworming, and essential medicines provided as part of comprehensive care.', 'color' => 'sky'],
                ];
            @endphp
            @foreach($clinicServices as $srv)
            <div class="bg-slate-50 hover:bg-white border border-slate-200 hover:border-{{ $srv['color'] }}-200 rounded-3xl p-8 space-y-4 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="text-{{ $srv['color'] }}-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        {!! $srv['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-black text-slate-800 text-lg leading-tight">{{ $srv['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $srv['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="bg-gradient-to-br from-sky-950 to-slate-900 rounded-3xl p-8 sm:p-14 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                <div class="space-y-6">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400">Our Promise</p>
                    <h3 class="text-3xl sm:text-4xl font-black tracking-normal leading-snug">
                        Dignity. Accessibility. Quality.
                    </h3>
                    <p class="text-sky-200 leading-relaxed text-lg">
                        Every service at Hope Memorial Dispensary is designed with three non-negotiable 
                        principles in mind. We believe that quality healthcare is not a privilege for the few 
                        it is a right for all, regardless of geography, income, or circumstance.
                    </p>
                    <p class="text-sky-200 leading-relaxed text-lg">
                        We work closely with healthcare workers, community health volunteers, and strategic 
                        partners to ensure sustainable and measurable impact in maternal health.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center space-y-3 hover:bg-white/15 transition-colors">
                        <div class="text-orange-400 mx-auto w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </div>
                        <p class="font-black text-white">Dignity</p>
                        <p class="text-sky-300 text-xs leading-relaxed">Every patient treated with respect and compassion.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center space-y-3 hover:bg-white/15 transition-colors">
                        <div class="text-sky-400 mx-auto w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <p class="font-black text-white">Accessibility</p>
                        <p class="text-sky-300 text-xs leading-relaxed">Services designed to reach those who need them most.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center space-y-3 hover:bg-white/15 transition-colors">
                        <div class="text-green-400 mx-auto w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <p class="font-black text-white">Quality</p>
                        <p class="text-sky-300 text-xs leading-relaxed">Evidence-based care that meets the highest standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- COMMUNITY OUTREACH --}}
{{-- ============================================================ --}}
<section class="py-28 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

            <div class="space-y-6">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Community Programs</p>
                <h2 class="text-4xl font-black text-slate-800 tracking-normal leading-snug">
                    Reaching Beyond<br>
                    <span class="text-sky-600">the Facility</span>
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    Healthcare does not stop at the clinic doors. Through community outreach programs, the 
                    Foundation extends its services directly to underserved and remote communities.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    Mobile clinics, health education campaigns, and screening initiatives bring lifesaving care 
                    closer to the people who need it most. These efforts are especially focused on maternal health, 
                    child survival, and disease prevention at the community level.
                </p>
                <div class="space-y-4 mt-8">
                    @php
                        $outreach = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />', 'title' => 'Mobile Clinics', 'desc' => 'Bringing clinical services directly into remote villages and Maasai pastoralist communities.', 'color' => 'sky'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />', 'title' => 'Health Education Campaigns', 'desc' => 'Community level awareness on maternal anaemia, nutrition, and antenatal care.', 'color' => 'orange'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />', 'title' => 'Community Screening Initiatives', 'desc' => 'Haemoglobin testing and anaemia detection beyond the dispensary walls.', 'color' => 'sky'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />', 'title' => 'Community Health Volunteers', 'desc' => 'Trained local volunteers who identify at risk mothers and connect them to care.', 'color' => 'orange'],
                        ];
                    @endphp
                    @foreach($outreach as $item)
                    <div class="flex items-start space-x-5 bg-white border border-slate-200 rounded-3xl p-6 hover:border-{{ $item['color'] }}-200 hover:shadow-md transition-all duration-300">
                        <div class="text-{{ $item['color'] }}-500 shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black text-slate-800 text-sm">{{ $item['title'] }}</h3>
                            <p class="text-slate-500 text-sm mt-1 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-6">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Capacity Building</p>
                <h2 class="text-4xl font-black text-slate-800 tracking-normal leading-snug">
                    Building Sustainable<br>
                    <span class="text-sky-600">Health Systems</span>
                </h2>
                <p class="text-slate-600 leading-relaxed">
                    Hope Memorial Spark Foundation is also committed to strengthening the future of healthcare 
                    through education and capacity building. We train community health workers, support 
                    continuous professional development, and equip frontline workers with the skills needed to 
                    improve health outcomes across generations.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    By investing in people, we ensure that impact is not only immediate but sustainable.
                </p>

                <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-3xl p-10 text-white space-y-8 shadow-lg mt-8">
                    <h3 class="text-2xl font-black tracking-normal">Capacity Building Programs</h3>
                    <div class="space-y-6">
                        @php
                            $capacity = [
                                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />', 'title' => 'Community Health Worker Training', 'desc' => 'Structured training programs that equip local health workers with maternal health knowledge and skills.'],
                                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />', 'title' => 'Continuous Professional Development', 'desc' => 'Supporting healthcare workers in staying current with evidence-based maternal health practices.'],
                                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />', 'title' => 'Frontline Worker Capacity', 'desc' => 'Providing frontline workers with the tools, knowledge, and support needed to deliver quality care.'],
                            ];
                        @endphp
                        @foreach($capacity as $item)
                        <div class="flex items-start space-x-5 bg-white/10 rounded-2xl p-4 border border-white/10 hover:bg-white/20 transition-colors">
                            <div class="text-orange-200 shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    {!! $item['icon'] !!}
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-black text-white text-sm">{{ $item['title'] }}</h4>
                                <p class="text-orange-100 text-sm mt-1 leading-relaxed">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- 10-YEAR STRATEGIC PLAN (Clinical Focus) --}}
{{-- ============================================================ --}}
<section class="py-28 bg-sky-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    
    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="text-center mb-14">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4">2026 – 2036</p>
            <h2 class="text-4xl sm:text-5xl font-black tracking-normal leading-snug">
                Guided by a Long Term Vision
            </h2>
            <p class="text-sky-300 mt-6 max-w-2xl mx-auto leading-relaxed text-lg font-light">
                Our 10-year strategic plan sets a bold direction for the future of clinical and community healthcare.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
                $plans = [
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'title' => 'Strengthening Maternal and Newborn Survival Systems'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />', 'title' => 'Expanding Access to Primary Healthcare Services'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />', 'title' => 'Enhancing Diagnostic and Clinical Capacity'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />', 'title' => 'Scaling Community Outreach Programs'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />', 'title' => 'Advancing Health Education & Workforce Development'],
                ];
            @endphp
            @foreach($plans as $plan)
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 text-center space-y-5 hover:bg-white/10 transition-all duration-300">
                <div class="text-sky-400 mx-auto w-12 h-12 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        {!! $plan['icon'] !!}
                    </svg>
                </div>
                <p class="text-sky-100 text-sm font-black leading-snug">{{ $plan['title'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-14 text-center bg-sky-900/50 border border-sky-800 rounded-full py-4 px-8 inline-block mx-auto">
            <p class="text-sky-300 text-sm font-bold tracking-wide">This roadmap positions Hope Memorial Spark Foundation as a growing center of excellence in community health transformation.</p>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CTA --}}
{{-- ============================================================ --}}
<section class="py-24 bg-gradient-to-r from-orange-500 to-orange-600 text-white shadow-inner">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-4xl font-black tracking-normal mb-6">Partner With Our Clinical Team</h2>
        <p class="text-orange-50 mb-10 leading-relaxed text-lg font-light drop-shadow-sm">Whether you're a healthcare professional, an organization, or a donor there is a role for you in strengthening frontline maternal healthcare in Tanzania.</p>
        <div class="flex flex-col sm:flex-row gap-5 justify-center">
            <a href="/contact" class="bg-white text-orange-600 font-black text-[12px] uppercase tracking-widest px-10 py-4 rounded-full hover:bg-orange-50 transition shadow-lg shadow-orange-700/30">Get In Touch</a>
            <a href="/donate" class="border border-white/50 bg-white/10 backdrop-blur-sm hover:border-white text-white font-black text-[12px] uppercase tracking-widest px-10 py-4 rounded-full transition shadow-lg shadow-orange-700/30">Support The Dispensary</a>
        </div>
    </div>
</section>

@endsection