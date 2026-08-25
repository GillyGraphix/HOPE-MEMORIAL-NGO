@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- READ MORE / SEE LESS — STYLES --}}
{{-- ============================================================ --}}
<style>
    .bio-content {
        overflow: hidden;
        position: relative;
        transition: max-height 0.4s ease;
    }
    .bio-content.collapsed {
        max-height: 12.5rem; /* ~8 lines */
    }
    .bio-content.expanded {
        max-height: 2000px;
    }
    .bio-fade {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3.5rem;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }
    .bio-content.expanded .bio-fade {
        opacity: 0;
    }
    .btn-icon {
        transition: transform 0.3s ease;
    }
</style>

{{-- ============================================================ --}}
{{-- PAGE HERO --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[60vh] py-28">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/foundation-bg.jpg'); ?>?v=1');">
        {{-- Gradient Overlay: Giza kushoto ili maneno yasomeke, uwazi kulia picha ionekane --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    {{-- Glowing Orb --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl pointer-events-none z-10"></div>
    
    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Who We Are</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                The <span class="text-sky-400">Foundation</span>
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                A non-profit organization dedicated to improving maternal, newborn, and child health with a strong focus on the prevention and management of anaemia during pregnancy and the postnatal period.
            </p>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- ABOUT US --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

            <div class="space-y-6">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">About Us</p>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                    Hope Memorial<br><span class="text-sky-600">Spark Foundation</span>
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    Hope Memorial Spark Foundation (HMSF) is a non-profit organization dedicated to 
                    improving maternal, newborn, and child health, with a strong focus on the prevention and 
                    management of anaemia during pregnancy and the postnatal period.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    The foundation exists to reduce preventable maternal and infant complications through early 
                    detection, community education, nutritional support, and integrated primary healthcare interventions.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    HMSF was officially registered on <strong class="text-slate-800">26 February 2026</strong> under the 
                    Tanzania Non-Governmental Organizations Act, 2002, with Registration Number: 
                    <strong class="text-slate-800">01NGO/R/3988</strong>.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    The organization is situated in the heart of <strong class="text-slate-800">Mto wa Mbu, near Lake Manyara National Park</strong>, 
                    serving as a strategic gateway to the Ngorongoro wildlife corridor. This location allows us 
                    to directly serve rural and semi urban communities where access to maternal healthcare services 
                    remains limited.
                </p>
            </div>

            <div class="space-y-6">
                {{-- Dispensary Card --}}
                <div class="bg-sky-600 rounded-3xl p-10 text-white space-y-4 shadow-lg shadow-sky-600/20">
                    <div class="text-white bg-white/20 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black">Hope Memorial Dispensary</h3>
                    <p class="text-sky-100 leading-relaxed">
                        At the center of our work is the Hope Memorial Dispensary, which serves as the frontline of all 
                        HMSF programs. The dispensary provides essential primary healthcare services and acts as the first 
                        point of contact for pregnant women and mothers.
                    </p>
                    <p class="text-sky-100 leading-relaxed">
                        It is through this facility that our maternal health interventions are delivered, including anaemia 
                        screening, antenatal and postnatal care support, nutrition counseling, and referral services. 
                        The dispensary strengthens our ability to translate community based programs into real, life saving clinical impact.
                    </p>
                </div>

                {{-- SPARK Card --}}
                <div class="bg-orange-50 border border-orange-100 rounded-3xl p-8 space-y-3 shadow-sm hover:shadow-md transition-shadow">
                    <p class="text-[11px] font-black uppercase tracking-[0.2em] text-orange-500">Our Flagship Initiative</p>
                    <h3 class="text-xl font-black text-slate-800">SPARK — Support for Prenatal and Postnatal Anaemia Resilience Kit</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Implemented through our integrated system, SPARK combines health education, nutritional support, 
                        anaemia prevention tools, and follow-up care to improve maternal outcomes and strengthen community resilience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CORE FOCUS AREAS --}}
{{-- ============================================================ --}}
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-14">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-3">What We Do</p>
            <h2 class="text-4xl font-black text-slate-800 tracking-normal">Core Focus Areas</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $areas = [
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'title' => 'Maternal Anaemia Prevention and Screening', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />', 'title' => 'Prenatal and Postnatal Health Education', 'color' => 'orange'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.415-2.415L14.25 6l1.076-.259a3.375 3.375 0 002.415-2.415L18 2.25l.259 1.076a3.375 3.375 0 002.415 2.415L21.75 6l-1.076.259a3.375 3.375 0 00-2.415 2.415zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />', 'title' => 'Nutrition and Supplementation Support Programs', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />', 'title' => 'Community Outreach and Awareness Campaigns', 'color' => 'orange'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />', 'title' => 'Strengthening Rural Maternal Health Systems through Frontline Care', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />', 'title' => 'Strategic Partnerships with Healthcare Workers and Community Volunteers', 'color' => 'orange'],
                ];
            @endphp
            @foreach($areas as $area)
            <div class="bg-white border border-slate-100 rounded-2xl p-7 flex items-start space-x-5 hover:border-{{ $area['color'] }}-200 hover:shadow-lg transition-all duration-300">
                <div class="text-{{ $area['color'] }}-500 shrink-0 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        {!! $area['icon'] !!}
                    </svg>
                </div>
                <p class="font-bold text-slate-700 text-sm leading-relaxed">{{ $area['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- INTEGRATED HEALTHCARE --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Clinical Services</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                Integrated Healthcare<br><span class="text-sky-600">for Real Impact</span>
            </h2>
            <p class="text-slate-500 mt-6 max-w-2xl mx-auto text-lg leading-relaxed font-light">
                Through Hope Memorial Dispensary, the Foundation delivers essential primary healthcare 
                services. Every service is designed with dignity, accessibility, and quality in mind.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @php
                $services = [
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />', 'title' => 'Outpatient Clinical Care', 'desc' => 'For acute and chronic conditions in underserved communities.', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />', 'title' => 'Maternal & Child Health', 'desc' => 'Safe pregnancy, safe delivery, and healthy growth services.', 'color' => 'orange'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />', 'title' => 'Diagnostic Services', 'desc' => 'Early detection and accurate treatment through diagnostics.', 'color' => 'sky'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />', 'title' => 'Preventive Care', 'desc' => 'Reduces avoidable illness and complications before they arise.', 'color' => 'orange'],
                ];
            @endphp
            @foreach($services as $service)
            <div class="bg-slate-50 rounded-2xl p-8 text-center space-y-4 hover:bg-white hover:border hover:border-slate-200 border border-transparent shadow-sm hover:shadow-md transition-all duration-300">
                <div class="text-{{ $service['color'] }}-500 flex justify-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        {!! $service['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-black text-slate-800 text-sm uppercase tracking-tight">{{ $service['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-sky-600 to-sky-800 rounded-3xl p-10 text-white space-y-5 shadow-lg">
                <div class="text-white/80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black">Reaching Beyond the Facility</h3>
                <p class="text-sky-100 leading-relaxed">
                    Healthcare does not stop at the clinic doors. Through community outreach programs, the 
                    Foundation extends its services directly to underserved and remote communities. Mobile clinics, 
                    health education campaigns, and screening initiatives bring lifesaving care closer to the people 
                    who need it most.
                </p>
                <p class="text-sky-100 leading-relaxed">
                    These efforts are especially focused on maternal health, child survival, and disease prevention 
                    at the community level.
                </p>
            </div>
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-3xl p-10 text-white space-y-5 shadow-lg">
                <div class="text-white/80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black">Building Sustainable Health Systems</h3>
                <p class="text-orange-100 leading-relaxed">
                    Hope Memorial Spark Foundation is also committed to strengthening the future of healthcare 
                    through education and capacity building. We train community health workers, support 
                    continuous professional development, and equip frontline workers with the skills needed to 
                    improve health outcomes across generations.
                </p>
                <p class="text-orange-100 leading-relaxed">
                    By investing in people, we ensure that impact is not only immediate but sustainable.
                </p>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- 10 YEAR VISION --}}
{{-- ============================================================ --}}
<section class="py-28 bg-sky-950 text-white relative overflow-hidden">
    {{-- Decorative pattern --}}
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>

    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4">Strategic Roadmap</p>
            <h2 class="text-4xl sm:text-5xl font-black tracking-normal leading-snug">
                Our 10 Year Vision<br>
                <span class="text-sky-400">From Survival to Strength</span>
            </h2>
            <p class="text-sky-300 mt-6 max-w-3xl mx-auto text-lg leading-relaxed font-light">
                Over the next decade, Hope Memorial Spark Foundation (HMSF) envisions a future where maternal 
                survival in Monduli is no longer uncertain it is expected, protected, and sustained by a system that works.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            @php
                $visions = [
                    ['title' => 'Pregnancy Will No Longer Begin in Silence', 'desc' => 'Every woman regardless of distance, culture, or circumstance will be reached early, connected to care, and supported from the very beginning of her journey.'],
                    ['title' => 'Anaemia Will No Longer Progress Unnoticed', 'desc' => 'Through early screening, continuous monitoring, and accessible interventions, mothers will be identified, supported, and protected before risk becomes crisis.'],
                    ['title' => 'Care Will No Longer Be Fragmented', 'desc' => 'What is now a series of missed opportunities will become a continuous, coordinated system from first contact, through pregnancy, to full recovery after childbirth.'],
                    ['title' => 'Delivery Will No Longer Be a Moment of Uncertainty', 'desc' => 'Mothers will arrive at childbirth stronger, prepared, and supported by a system that has followed them every step of the way.'],
                    ['title' => 'Survival Will No Longer Be the Endpoint', 'desc' => 'Mothers will not just survive they will recover, regain strength, and thrive, with the ability to care for their children and shape their families\' futures.'],
                    ['title' => 'The Cycle of Intergenerational Vulnerability Will Be Disrupted', 'desc' => 'Communities will be informed, engaged, and actively supporting maternal health across generations, creating permanent change.'],
                ];
            @endphp
            @foreach($visions as $vision)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-8 space-y-4 hover:bg-white/10 transition-all duration-300">
                <div class="w-8 h-1 bg-orange-400 rounded-full"></div>
                <h3 class="font-black text-white leading-snug">{{ $vision['title'] }}</h3>
                <p class="text-sky-200 text-sm leading-relaxed">{{ $vision['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="bg-white/5 border border-white/10 rounded-3xl p-12 backdrop-blur-sm">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-black text-white mb-3 tracking-normal">The Scale of Our Ambition (2026 to 2036)</h3>
                <p class="text-sky-300">Within 10 years, HMSF aims to:</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @php
                    $ambitions = [
                        'Establish a replicable maternal health model centered on the SPARK system',
                        'Expand from Mto wa Mbu and Monduli to multiple high need districts across Tanzania',
                        'Reach thousands of mothers annually with continuous anaemia prevention and care',
                        'Demonstrate measurable reductions in maternal anaemia, complications, and preventable deaths',
                        'Build a system where no mother falls through the gaps of care',
                        'Strengthen maternal and newborn survival systems across the region',
                    ];
                @endphp
                @foreach($ambitions as $ambition)
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-sky-100 text-sm leading-relaxed">{{ $ambition }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- COMMITMENT --}}
{{-- ============================================================ --}}
<section class="py-20 bg-gradient-to-r from-orange-500 to-orange-600 text-white shadow-inner">
    <div class="container mx-auto px-4 max-w-5xl text-center">
        <h2 class="text-4xl sm:text-5xl font-black tracking-normal mb-6">Our Commitment</h2>
        <p class="text-orange-50 text-xl leading-relaxed font-light mb-8 drop-shadow-sm">
            We are driven by compassion, strengthened by evidence, and sustained by community trust. 
            Every consultation, every outreach visit, every training session, and every life touched 
            reflects our mission to restore hope and improve health outcomes.
        </p>
        <p class="text-orange-50 text-lg leading-relaxed font-medium drop-shadow-sm">
            Together with our partners, supporters, and communities, we are building a healthier, 
            stronger future one life at a time.
        </p>
    </div>
</section>


{{-- ============================================================ --}}
{{-- LEADERSHIP TEAM (HAPA NDIO ID NA SCROLL-MARGIN ZIMEONGEZWA) --}}
{{-- ============================================================ --}}
<section id="leadership-team" class="py-28 bg-white scroll-mt-24">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Our Team</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal">Our Leadership</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-24">

            {{-- ======================== --}}
            {{-- Dr. Theresia Dawas --}}
            {{-- ======================== --}}
            <div class="bg-gradient-to-br from-sky-50 to-white border border-sky-100 rounded-3xl p-8 sm:p-10 space-y-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start space-x-5">
                    <img src="{{ asset('images/team/theresia.jpg') }}?v=1" alt="Dr. Theresia Dawas" class="w-24 h-24 sm:w-32 sm:h-32 rounded-xl object-cover shrink-0 border border-sky-200 bg-sky-100 shadow-sm">
                    <div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-normal">Dr. Theresia Dawas</h3>
                        <p class="text-[11px] font-black uppercase tracking-widest text-orange-500 mt-1">Founder & Executive Director</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-theresia">
                        <div class="bio-fade bg-gradient-to-t from-white to-transparent"></div>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Dr. Theresia Dawas is a dynamic Tanzanian clinician, visionary leader, and social impact 
                            champion dedicated to transforming maternal and community health. She is the Founder and 
                            Executive Director of Hope Memorial Spark Foundation, and the driving force behind Hope 
                            Memorial Dispensary, a frontline healthcare facility serving vulnerable communities with 
                            compassion and quality care in Arusha region.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            With a deep commitment to saving lives and restoring dignity, Dr. Theresia has positioned her 
                            work at the intersection of clinical excellence and community empowerment. Through both the 
                            foundation and the dispensary, she leads innovative, community-centered interventions tackling 
                            critical issues such as maternal anaemia, preventable pregnancy complications, and limited 
                            access to essential healthcare services.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Her leadership goes beyond treatment it is about transformation. At Hope Memorial 
                            Dispensary, she ensures that underserved populations receive timely, affordable, and life-saving 
                            care. Through Hope Memorial Spark Foundation, she scales this impact by designing sustainable 
                            programs, mobilizing communities, and building partnerships that create lasting change.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Known for her bold vision and compassionate approach, Dr. Dawas bridges the gap between 
                            healthcare systems and the people who need them most. She believes that no woman should risk 
                            her life to give life, and her work continues to turn that belief into reality.
                        </p>
                        <div class="bg-sky-600 rounded-2xl p-6 shadow-sm mt-6">
                            <p class="text-white text-base font-bold italic">"No woman should risk her life to give life."</p>
                            <p class="text-sky-200 text-[10px] mt-2 font-black uppercase tracking-widest">Dr. Theresia is not just a healthcare provider — she is a changemaker, a community builder, and a powerful voice for equity in health.</p>
                        </div>
                    </div>
                    <button
                        onclick="toggleBio('bio-theresia', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-sky-600 hover:text-sky-800 font-black text-[12px] uppercase tracking-widest transition-colors duration-200 bg-sky-50 px-4 py-2 rounded-full border border-sky-100"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Dr. Michael Mahole --}}
            {{-- ======================== --}}
            <div class="bg-gradient-to-br from-orange-50 to-white border border-orange-100 rounded-3xl p-8 sm:p-10 space-y-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start space-x-5">
                    <img src="{{ asset('images/team/michael-mahole.jpg') }}?v=1" alt="Dr. Michael Mahole" class="w-24 h-24 sm:w-32 sm:h-32 rounded-xl object-cover shrink-0 border border-orange-200 bg-orange-50 shadow-sm">
                    <div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-normal">Dr. Michael Mahole</h3>
                        <p class="text-[11px] font-black uppercase tracking-widest text-orange-500 mt-1">Founder & Co-Director</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-michael">
                        <div class="bio-fade bg-gradient-to-t from-white to-transparent"></div>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Dr. Michael Mahole is a Tanzanian clinician, bold changemaker, and results-driven leader 
                            redefining frontline healthcare delivery in underserved communities. As the Founder and Co-Director 
                            of Hope Memorial Spark Foundation, he combines sharp clinical expertise with strategic vision 
                            to build solutions that are not only impactful but sustainable.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            At the heart of his work lies action. Dr. Michael is not confined to boardrooms or policy 
                            discussions; he is deeply embedded in the realities of patient care. As a medical officer in-charge 
                            at Hope Memorial Dispensary in the Arusha Region, alongside Dr. Theresia Dawas, he plays a 
                            p pivotal role in delivering accessible, high-quality healthcare to communities that need it most — 
                            often turning limited resources into life-saving outcomes.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Known for his precision, discipline, and forward thinking mindset, Dr. Michael has a unique 
                            ability to translate complex health challenges into practical, scalable interventions. His work 
                            spans clinical care, program design, and operational leadership ensuring that every initiative 
                            under the foundation is grounded in real impact, not just intention.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            He is particularly driven by the urgent need to close healthcare gaps in maternal and community 
                            health, believing that innovation, efficiency, and community trust are the pillars of lasting 
                            change. His leadership style is defined by quiet determination, resilience under pressure, and an 
                            unshakable commitment to excellence.
                        </p>
                        <div class="bg-orange-500 rounded-2xl p-6 shadow-sm mt-6">
                            <p class="text-white text-[11px] font-black uppercase tracking-[0.2em] leading-relaxed">Dr. Michael represents a new generation of African health leaders those who do not wait for change, but build it.</p>
                        </div>
                    </div>
                    <button
                        onclick="toggleBio('bio-michael', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-orange-500 hover:text-orange-600 font-black text-[12px] uppercase tracking-widest transition-colors duration-200 bg-orange-50 px-4 py-2 rounded-full border border-orange-100"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>

        </div>


        {{-- ============================================================ --}}
        {{-- BOARD MEMBERS --}}
        {{-- ============================================================ --}}
        <div class="text-center mb-14 border-t border-slate-200 pt-20">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Governance</p>
            <h2 class="text-4xl font-black text-slate-800 tracking-normal">Our Board</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- ======================== --}}
            {{-- Dr. Nehemiah Mbimbi --}}
            {{-- ======================== --}}
            <div class="bg-slate-50 hover:bg-sky-50 border border-slate-100 hover:border-sky-200 rounded-3xl p-8 space-y-5 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/nehemiah.jpg') }}?v=1" alt="Dr. Nehemiah Mbimbi" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-slate-200 bg-slate-100 shadow-sm">
                    <div>
                        <h3 class="font-black text-slate-800 text-lg leading-tight">Dr. Nehemiah Mbimbi, MD</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-500 mt-1">Board Member</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 bg-sky-100/50 inline-block px-3 py-1 rounded border border-sky-100">Spec: Obstetrics & Gynaecology</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-nehemiah">
                        <div class="bio-fade bg-gradient-to-t from-slate-50 to-transparent group-hover:from-sky-50"></div>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            A seasoned Tanzanian medical doctor with extensive expertise in Obstetrics and Gynaecology. 
                            With years of hands on practice at Mto wa Mbu Health Center in Arusha region, Dr. Mbimbi has 
                            built a strong reputation for managing complex obstetric cases, supporting safe deliveries, and 
                            improving maternal outcomes in resource limited settings. His work reflects a rare combination of 
                            technical mastery and compassionate care, earning the trust of both patients and colleagues 
                            in one of Tanzania's most diverse and dynamic communities.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Beyond the clinical setting, he plays a critical advisory role within the foundation, where his 
                            experience directly informs program design, maternal health protocols, and quality of care standards. 
                            He brings a grounded, real world perspective that strengthens decision making and ensures 
                            interventions remain practical, effective, and patient centered. Known for his steady leadership, 
                            humility, and depth of experience, Dr. Mbimbi represents the voice of clinical wisdom within 
                            the foundation's governance. His contributions help bridge the gap between frontline healthcare 
                            realities and long term strategic vision.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-nehemiah', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-sky-600 hover:text-sky-800 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Dr. Clement Marmo --}}
            {{-- ======================== --}}
            <div class="bg-slate-50 hover:bg-sky-50 border border-slate-100 hover:border-sky-200 rounded-3xl p-8 space-y-5 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/clement.jpg') }}?v=1" alt="Dr. Clement Marmo" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-slate-200 bg-slate-100 shadow-sm">
                    <div>
                        <h3 class="font-black text-slate-800 text-lg leading-tight">Dr. Clement Marmo, MD</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-500 mt-1">Board Member</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 bg-sky-100/50 inline-block px-3 py-1 rounded border border-sky-100">Spec: Obstetrics & Gynaecology</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-clement">
                        <div class="bio-fade bg-gradient-to-t from-slate-50 to-transparent group-hover:from-sky-50"></div>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            A distinguished Tanzanian medical doctor with a strong background in Obstetrics and Gynaecology. 
                            With extensive experience in managing both routine and high risk obstetric cases, Dr. Marmo has 
                            earned a reputation for precision, sound clinical judgment, and calm decision making in critical 
                            momments. His work reflects a deep understanding of women's health across all stages of life, 
                            particularly in settings where timely intervention can mean the difference between life and loss.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Beyond the hospital setting, he plays a vital governance role within the foundation, contributing 
                            to policy direction, quality assurance, and the continuous improvement of maternal health services. 
                            His input is rooted in years of frontline experience, ensuring that strategies remain clinically 
                            relevant and responsive to real community needs. He is known for his analytical thinking, 
                            professional integrity, and commitment to raising standards of care in resource limited environments. 
                            Dr. Marmo stands as a respected voice in women's health bringing depth, discipline, and clarity 
                            to every space he serves.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-clement', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-sky-600 hover:text-sky-800 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Mr. Gasper Michael --}}
            {{-- ======================== --}}
            <div class="bg-slate-50 hover:bg-sky-50 border border-slate-100 hover:border-sky-200 rounded-3xl p-8 space-y-5 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/gasper.jpg') }}?v=1" alt="Mr. Gasper Michael" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-slate-200 bg-slate-100 shadow-sm">
                    <div>
                        <h3 class="font-black text-slate-800 text-lg leading-tight">Mr. Gasper Michael</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-500 mt-1">Board Member</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 bg-sky-100/50 inline-block px-3 py-1 rounded border border-sky-100">Role: Financial Gov. & Strategy</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-gasper">
                        <div class="bio-fade bg-gradient-to-t from-slate-50 to-transparent group-hover:from-sky-50"></div>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            A highly accomplished Tanzanian accounting professional who plays a pivotal role in strengthening 
                            financial governance, transparency, and strategic resource management within the foundation.
                            With a strong academic and professional foundation in accountancy, Mr. Gasper has built a 
                            reputation for precision, integrity, and analytical excellence developing advanced expertise in 
                            financial reporting, auditing, budgeting, and compliance systems.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            His leadership style blends technical mastery with ethical responsibility, making him a cornerstone 
                            in safeguarding the foundation's financial health. Within the foundation, Mr. Gasper brings a 
                            disciplined and visionary approach to financial stewardship ensuring that every resource is 
                            accounted for with accountability and purpose, enabling programs to run efficiently and sustainably.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Beyond numbers, Mr. Gasper is driven by a deep commitment to community impact believing that 
                            sound financial management is about unlocking opportunities for life changing initiatives in 
                            maternal health, community empowerment, and sustainable development. Respected for his 
                            professionalism and calm leadership, he stands as a key pillar in advancing the mission of 
                            the Hope Memorial Spark Foundation.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-gasper', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-orange-500 hover:text-orange-700 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Ms. Anna Rahhi --}}
            {{-- ======================== --}}
            <div class="bg-slate-50 hover:bg-sky-50 border border-slate-100 hover:border-sky-200 rounded-3xl p-8 space-y-5 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/anna.jpg') }}?v=1" alt="Ms. Anna Rahhi" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-slate-200 bg-slate-100 shadow-sm">
                    <div>
                        <h3 class="font-black text-slate-800 text-lg leading-tight">Ms. Anna Rahhi</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-500 mt-1">Board Member & Logistics</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 bg-sky-100/50 inline-block px-3 py-1 rounded border border-sky-100">Also Serves: Karatu District Council</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-anna">
                        <div class="bio-fade bg-gradient-to-t from-slate-50 to-transparent group-hover:from-sky-50"></div>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            A dedicated Tanzanian professional who plays a vital role in ensuring smooth operational flow, 
                            efficient coordination, and timely delivery of essential health and community programs. 
                            With her strong background in public service and logistics management, Ms. Anna also serves at 
                            the Karatu District Council, where she has gained extensive hands-on experience in planning, 
                            coordination, and management of public resources within local government systems.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            In her role within the foundation, Ms. Anna is the backbone of operational execution
                            overseeing supply chains, coordinating field activities, and ensuring that every program reaches 
                            intended communities without delay. Her sharp attention to detail and ability to anticipate 
                            logistical challenges make her an invaluable force behind successful outreach initiatives.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            What distinguishes Ms. Anna is her calm leadership under pressure and her deep commitment to 
                            community impact believing that effective logistics is about ensuring dignity, access, and equity 
                            for underserved populations, especially women and children in rural communities. Respected for her 
                            discipline, teamwork, and commitment to service, she continues to strengthen the operational 
                            heartbeat of the foundation.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-anna', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-sky-600 hover:text-sky-800 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Ms. Josephine Laizer --}}
            {{-- ======================== --}}
            <div class="bg-slate-50 hover:bg-sky-50 border border-slate-100 hover:border-sky-200 rounded-3xl p-8 space-y-5 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/josephine.jpg') }}?v=1" alt="Ms. Josephine Laizer" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-slate-200 bg-slate-100 shadow-sm">
                    <div>
                        <h3 class="font-black text-slate-800 text-lg leading-tight">Ms. Josephine Laizer</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-500 mt-1">Board Member</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-600 bg-sky-100/50 inline-block px-3 py-1 rounded border border-sky-100">Also Serves: Monduli District Council</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-josephine">
                        <div class="bio-fade bg-gradient-to-t from-slate-50 to-transparent group-hover:from-sky-50"></div>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            A committed Tanzanian public servant who contributes her expertise in community development, 
                            governance, and social impact strategy. Serving at the Monduli District Council, Ms. Josephine 
                            has built a strong professional reputation rooted in dedication to local development and responsive 
                            service delivery. Her work within the district has exposed her to the real challenges faced by 
                            rural communities, particularly in maternal health, access to essential services, and grassroots 
                            development systems.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-3">
                            Within the foundation, she brings a grounded and practical perspective that bridges policy 
                            understanding with community realities. She plays a key role in guiding programs that are 
                            culturally sensitive, community driven, and aligned with sustainable development goals. Her 
                            ability to listen, analyze, and translate community needs into actionable strategies makes her 
                            an essential voice in shaping impactful interventions.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Ms. Josephine strongly believes that meaningful change begins at the local level, where every 
                            decision can directly transform lives. Through her dual role in local government and the 
                            foundation, she ensures that community voices are not only heard but actively reflected in 
                            every initiative undertaken.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-josephine', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-orange-500 hover:text-orange-700 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>


            {{-- ======================== --}}
            {{-- Mr. Kisiaya Kuju Kipallel --}}
            {{-- ======================== --}}
            <div class="bg-gradient-to-br from-sky-950 to-slate-900 text-white rounded-3xl p-8 space-y-5 shadow-xl">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/team/kisiaya.jpg') }}?v=1" alt="Mr. Kisiaya Kuju Kipallel" class="w-24 h-24 rounded-xl object-cover shrink-0 border border-white/20 bg-sky-900 shadow-sm">
                    <div>
                        <h3 class="font-black text-white text-lg leading-tight">Mr. Kisiaya Kuju Kipallel</h3>
                        <p class="text-[10px] font-black uppercase tracking-widest text-orange-400 mt-1">Board Member</p>
                    </div>
                </div>
                <p class="text-[11px] font-black uppercase tracking-widest text-sky-200 bg-white/10 inline-block px-3 py-1 rounded border border-white/10">Role: Maasai Trad. Leader (Laigwanani)</p>

                <div class="relative">
                    <div class="bio-content collapsed" id="bio-kisiaya">
                        <div class="bio-fade bg-gradient-to-t from-sky-950 to-transparent"></div>
                        <p class="text-sky-200 text-sm leading-relaxed mb-3">
                            A respected Tanzanian Maasai traditional leader and an influential Board Member who brings 
                            the timeless wisdom of indigenous leadership into modern community development and humanitarian work.
                            Deeply rooted in Maasai heritage, Mr. Kisiaya is widely recognized as a custodian of peace, 
                            unity, and cultural identity. As a Laigwanani, he has long served his community as a trusted 
                            mediator and decision-maker, guiding resolutions on land use, grazing disputes, family 
                            disagreements, and community conflicts. His authority is grounded not in force, but in respect, 
                            wisdom, and the enduring strength of traditional Maasai laws and the elders' council system.
                        </p>
                        <p class="text-sky-200 text-sm leading-relaxed mb-3">
                            Beyond conflict resolution, Mr. Kisiaya plays a vital role in preserving Maasai culture and 
                            values. He actively guides younger generations in understanding their identity, moral conduct, 
                            and responsibilities within the community. Through ceremonies such as Eunoto, Enkipaata, and 
                            Olamal, he ensures that cultural heritage is not only preserved but lived with pride and authenticity.
                        </p>
                        <p class="text-sky-200 text-sm leading-relaxed">
                            Within the Hope Memorial Spark Foundation, Mr. Kisiaya provides a rare and powerful bridge 
                            between tradition and development advising on community engagement strategies that respect 
                            cultural context and ensuring that interventions are both culturally acceptable and socially 
                            sustainable. Known for his calm authority, deep insight, and unwavering commitment to harmony, 
                            he stands as a guardian of social order and community cohesion, inspiring unity and protecting 
                            vulnerable livelihoods.
                        </p>
                    </div>
                    <button
                        onclick="toggleBio('bio-kisiaya', this)"
                        class="mt-4 inline-flex items-center gap-1.5 text-sky-400 hover:text-sky-200 font-black text-[11px] uppercase tracking-widest transition-colors duration-200"
                    >
                        <span class="btn-label">Read more...</span>
                        <svg class="btn-icon w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- READ MORE / SEE LESS — JAVASCRIPT --}}
{{-- ============================================================ --}}
<script>
    function toggleBio(id, btn) {
        var bio   = document.getElementById(id);
        var label = btn.querySelector('.btn-label');
        var icon  = btn.querySelector('.btn-icon');

        var isCollapsed = bio.classList.contains('collapsed');

        if (isCollapsed) {
            // — EXPAND —
            bio.classList.remove('collapsed');
            bio.classList.add('expanded');
            label.textContent    = 'See less...';
            icon.style.transform = 'rotate(180deg)';
        } else {
            // — COLLAPSE — scroll up to card top first, then collapse
            var card    = btn.closest('[class*="rounded"]');
            var scrollY = card
                ? card.getBoundingClientRect().top + window.pageYOffset - 100
                : 0;

            window.scrollTo({ top: scrollY, behavior: 'smooth' });

            setTimeout(function () {
                bio.classList.remove('expanded');
                bio.classList.add('collapsed');
                label.textContent    = 'Read more...';
                icon.style.transform = 'rotate(0deg)';
            }, 280);
        }
    }
</script>

@endsection