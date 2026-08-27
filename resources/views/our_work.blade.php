@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PAGE HERO --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[60vh] py-28">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/impact-bg.jpg'); ?>');">
        {{-- Gradient Overlay: Giza kushoto ili maneno yasomeke, uwazi kulia picha ionekane --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    {{-- Glowing Orb --}}
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl pointer-events-none z-10"></div>
    
    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Impact Projects</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                The Problem.<br>
                <span class="text-sky-400">The Mission.</span><br>
                The System.
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                Understanding the silent crisis of maternal anaemia in Monduli District — and the structured 
                SPARK system designed to end it.
            </p>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- PART 1: THE PROBLEM --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="flex items-center space-x-5 mb-12">
            <div class="w-12 h-12 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center shadow-sm border border-red-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div>
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-red-500">Section 1</p>
                <h2 class="text-3xl font-black text-slate-800 tracking-normal">The Problem</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-20">
            <div class="lg:col-span-2 space-y-6">
                <h3 class="text-2xl sm:text-3xl font-black text-slate-800 tracking-normal leading-snug">
                    The Silent Crisis: When Pregnancy Becomes a Risk to Survival
                </h3>
                <p class="text-slate-600 text-lg leading-relaxed">
                    In Monduli District, nestled within the vast Rift Valley of northern Tanzania, pregnancy is not 
                    always a moment of anticipation it is often a test of survival.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    For many women, especially within Maasai pastoralist communities, the journey to motherhood 
                    unfolds far from the safety of skilled medical care. Distances are long. Roads are rough or 
                    nonexistent. Health facilities are few. But the barriers are not only physical. Deeply rooted 
                    cultural norms, limited awareness, and fragile health systems combine to create a reality where 
                    seeking care is delayed or never happens at all.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    A woman may carry her pregnancy quietly, without a single antenatal visit. She may rely on 
                    traditional practices, guided by beliefs passed down through generations. When labor begins, it 
                    often happens at home, without skilled support, without emergency backup, and without the tools 
                    to respond when something goes wrong.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    And too often, something does.
                </p>
            </div>

            <div class="space-y-4">
                <div class="bg-red-50 border border-red-100 rounded-2xl p-7 space-y-4">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-red-500 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800">Barriers to Care</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-start"><span class="text-red-400 mr-2 mt-0.5">•</span>Long distances to facilities</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2 mt-0.5">•</span>Rough or nonexistent roads</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2 mt-0.5">•</span>Deeply rooted cultural norms</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2 mt-0.5">•</span>Limited health awareness</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2 mt-0.5">•</span>Fragile health systems</li>
                    </ul>
                </div>
                <div class="bg-orange-500 rounded-2xl p-7 text-white space-y-3 shadow-lg shadow-orange-500/20">
                    <p class="text-[11px] font-black uppercase tracking-widest text-orange-200">The Result</p>
                    <p class="font-black text-xl leading-snug">Seeking care is delayed or never happens at all.</p>
                </div>
            </div>
        </div>

        {{-- Anaemia Focus --}}
        <div class="bg-gradient-to-br from-slate-800 to-sky-950 rounded-3xl p-12 text-white mb-16 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400">At The Center of This Crisis</p>
                    <h3 class="text-3xl font-black tracking-normal leading-snug">
                        Maternal Anaemia <br>
                        <span class="text-sky-400">The Silent Killer</span>
                    </h3>
                    <p class="text-sky-200 leading-relaxed">
                        At the center of this crisis is a condition that rarely announces itself loudly maternal anaemia. 
                        It does not demand attention in its early stages. It creeps in silently, draining strength, reducing 
                        resilience, and weakening the body's ability to cope with the intense demands of pregnancy and childbirth. 
                        But its consequences are anything but silent.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @php
                        $consequences = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />', 'text' => 'Significantly higher risk of dying during childbirth', 'color' => 'red-400'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />', 'text' => 'Baby more likely to be born too small, too early, or too weak', 'color' => 'sky-300'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />', 'text' => 'Risk of infection rises and recovery slows', 'color' => 'orange-400'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'text' => 'Limits ability to breastfeed, heal, and care for newborn', 'color' => 'sky-300'],
                        ];
                    @endphp
                    @foreach($consequences as $c)
                    <div class="bg-white/10 border border-white/10 rounded-2xl p-6 space-y-3 hover:bg-white/15 transition-colors">
                        <div class="text-{{ $c['color'] }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                {!! $c['icon'] !!}
                            </svg>
                        </div>
                        <p class="text-sky-100 text-sm leading-relaxed">{{ $c['text'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- The Cycle --}}
        <div class="space-y-8">
            <h3 class="text-2xl font-black text-slate-800 tracking-normal">How the Cycle Sustains Itself</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 relative">
                {{-- Decorative connecting line for desktop --}}
                <div class="hidden lg:block absolute top-1/2 left-0 w-full h-px bg-slate-200 -z-10"></div>
                
                @php
                    $cycle = [
                        ['step' => '01', 'title' => 'Limited Nutrition', 'desc' => 'A girl grows up in a community where nutrition is limited and certain foods are restricted during pregnancy.'],
                        ['step' => '02', 'title' => 'Vulnerable Motherhood', 'desc' => 'She enters motherhood already vulnerable, lacking access to early care.'],
                        ['step' => '03', 'title' => 'Anaemia Develops', 'desc' => 'She delivers without support and becomes anaemic. Her child is born underweight or premature.'],
                        ['step' => '04', 'title' => 'Cycle Repeats', 'desc' => 'The pattern repeats quietly, persistently, across generations.'],
                    ];
                @endphp
                @foreach($cycle as $item)
                <div class="bg-white border border-slate-200 rounded-2xl p-7 space-y-4 shadow-sm hover:shadow-md transition-shadow relative z-10">
                    <div class="text-4xl font-black text-sky-100 leading-snug">{{ $item['step'] }}</div>
                    <h4 class="font-black text-slate-800">{{ $item['title'] }}</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div class="bg-orange-50 border border-orange-100 rounded-2xl p-8">
                <p class="text-slate-700 text-lg leading-relaxed">
                    <strong class="text-orange-600 font-black">This is not simply a medical issue.</strong> It is a system failure reinforced by distance, by silence, and by 
                    norms that discourage timely care. It is a reality where preventable conditions become life threatening 
                    because the right support does not arrive at the right time. Where knowledge is limited, and options are few. 
                    Where survival often depends on chance.
                </p>
            </div>

            <div class="bg-sky-950 rounded-3xl p-10 text-white shadow-xl">
                <h4 class="font-black text-2xl mb-4 text-sky-300">Why This Demands Attention</h4>
                <p class="text-sky-100 text-lg leading-relaxed mb-6">
                    Because maternal anaemia is not inevitable. Because preventable deaths are still happening. 
                    Because the cost of inaction is measured not just in statistics, but in lives cut short and futures diminished.
                </p>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <p class="text-white font-bold text-lg leading-relaxed mb-2">
                        And because when a mother survives truly survives everything changes.
                    </p>
                    <p class="text-sky-200 leading-relaxed">
                        Her child is more likely to grow, to thrive, to reach their full potential.
                        Her family becomes more stable. Her community becomes stronger.
                    </p>
                </div>
                <div class="mt-8 pt-8 border-t border-white/10 text-center">
                    <p class="text-orange-400 font-black text-xl leading-snug">When a mother's health is protected, generations are protected.<br>When her strength is restored, futures are rebuilt.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- PART 2: OUR MISSION --}}
{{-- ============================================================ --}}
<section class="py-28 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="flex items-center space-x-5 mb-12">
            <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center border border-sky-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                </svg>
            </div>
            <div>
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-sky-600">Section 2</p>
                <h2 class="text-3xl font-black text-slate-800 tracking-normal">Our Mission</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mb-20">
            <div class="space-y-6">
                <h3 class="text-3xl sm:text-4xl font-black text-slate-800 tracking-normal leading-snug">
                    Turning Survival Into a System
                </h3>
                <p class="text-slate-600 text-lg leading-relaxed">In Monduli, the problem is not mystery it is predictability.</p>
                
                <div class="space-y-3">
                    @php
                        $pattern = [
                            'Women become pregnant without early care.',
                            'Anaemia develops silently.',
                            'Labor begins far from skilled support.',
                            'Complications escalate.',
                            'And outcomes depend on luck instead of systems.',
                        ];
                    @endphp
                    @foreach($pattern as $item)
                    <div class="flex items-center space-x-4 bg-white border border-slate-200 rounded-xl p-4 shadow-sm">
                        <div class="text-slate-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <p class="text-slate-700 font-medium text-sm">{{ $item }}</p>
                    </div>
                    @endforeach
                </div>
                
                <div class="bg-sky-600 rounded-2xl p-8 text-white space-y-3 shadow-lg shadow-sky-600/20">
                    <p class="text-[11px] font-black uppercase tracking-[0.25em] text-sky-200">The Mission Objective</p>
                    <p class="font-black text-xl leading-snug">
                        To interrupt a deadly pattern and replace it with a system that protects a mother 
                        from the moment pregnancy begins until long after delivery.
                    </p>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl p-10 space-y-6 shadow-md">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Our Solution</p>
                <h3 class="text-4xl font-black text-slate-800 tracking-normal">SPARK</h3>
                <p class="text-sky-600 font-black text-sm uppercase tracking-wider">Support for Prenatal and Postnatal Anaemia Resilience Kit</p>
                <p class="text-slate-600 text-lg leading-relaxed">
                    SPARK becomes more than a tool it becomes a strategy for survival. But a kit alone cannot 
                    solve a systemic problem. What is required is a structured, repeatable model one that works 
                    within the realities of Monduli. One that respects culture while challenging what harms. 
                    One that combines clinical care, community trust, and continuous follow up.
                </p>
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 space-y-3">
                    <p class="text-[11px] font-black uppercase tracking-[0.25em] text-slate-500">The Solution is Built on</p>
                    <p class="text-3xl font-black text-sky-700">A Rule of 3</p>
                    <p class="text-slate-600 text-sm">Three connected interventions that close the gaps where mothers are currently being lost.</p>
                </div>
            </div>
        </div>


        {{-- ============================================================ --}}
        {{-- INTERVENTION 1 --}}
        {{-- ============================================================ --}}
        <div class="bg-white border border-slate-200 rounded-3xl p-8 sm:p-12 mb-10 shadow-sm hover:shadow-md transition-shadow">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-sky-600 rounded-2xl flex items-center justify-center text-3xl font-black text-white shadow-lg shadow-sky-200">1</div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-sky-600">Intervention One</p>
                            <h3 class="text-3xl font-black text-slate-800 tracking-normal">Early Engagement</h3>
                        </div>
                    </div>
                    <p class="text-xl font-bold text-slate-700 border-l-4 border-sky-400 pl-4 py-1">Reach Her Before Risk Begins</p>
                    <p class="text-slate-600 leading-relaxed">
                        The most dangerous moment in maternal anaemia is not when it becomes severe. It is when it is invisible.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        In Monduli, many women enter the second or third trimester without ever attending antenatal care. 
                        By the time they are seen, anaemia is already advanced, and the window for prevention has narrowed.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The first intervention focuses on timing because timing determines survival. This phase ensures 
                        that a woman is reached early in pregnancy, or ideally, the moment pregnancy is suspected.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Through targeted community engagement working with women, men, elders, and local influencers
                        the silence around early antenatal care is broken. Pregnancy is no longer hidden until it becomes 
                        obvious; it becomes a moment to act.
                    </p>
                </div>
                <div class="space-y-5">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-sky-600">At This Stage, SPARK Introduces:</p>
                    @php
                        $int1 = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />', 'title' => 'Early Antenatal Linkage', 'desc' => 'Connecting women to care in the first trimester.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />', 'title' => 'Baseline Screening', 'desc' => 'Identifying anaemia before it becomes dangerous.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />', 'title' => 'Nutrition Awareness', 'desc' => 'Addressing harmful food restrictions and myths.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />', 'title' => 'Immediate Supplementation', 'desc' => 'Initiating iron and folic acid before depletion worsens.'],
                        ];
                    @endphp
                    @foreach($int1 as $item)
                    <div class="flex items-start space-x-4 bg-sky-50 border border-sky-100 rounded-2xl p-5 hover:bg-sky-100 transition-colors">
                        <div class="text-sky-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-800 text-sm">{{ $item['title'] }}</h4>
                            <p class="text-slate-600 text-sm mt-1">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="bg-sky-600 rounded-2xl p-6 text-white space-y-3 shadow-lg">
                        <p class="font-black text-sm uppercase tracking-widest text-sky-200">When a Mother Enters the System Early:</p>
                        <ul class="space-y-2 text-white text-sm">
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Anaemia can be prevented, not just treated</li>
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Risks can be anticipated, not reacted to</li>
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Trust begins before crisis</li>
                        </ul>
                        <p class="text-white font-bold border-t border-sky-500 pt-3 mt-3">Early engagement shifts pregnancy from a reactive journey to a managed one.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- ============================================================ --}}
        {{-- INTERVENTION 2 --}}
        {{-- ============================================================ --}}
        <div class="bg-white border border-slate-200 rounded-3xl p-8 sm:p-12 mb-10 shadow-sm hover:shadow-md transition-shadow">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center text-3xl font-black text-white shadow-lg shadow-orange-200">2</div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Intervention Two</p>
                            <h3 class="text-3xl font-black text-slate-800 tracking-normal">Continuous Care</h3>
                        </div>
                    </div>
                    <p class="text-xl font-bold text-slate-700 border-l-4 border-orange-400 pl-4 py-1">Build Resilience Through Pregnancy</p>
                    <p class="text-slate-600 leading-relaxed">
                        Starting care is not enough. In many cases, women attend one visit and disappear. Distance, 
                        competing responsibilities, cultural pressures, and lack of follow-up pull them away from the system.
                    </p>
                    <p class="text-orange-600 font-bold bg-orange-50 inline-block px-3 py-1 rounded">This is where most interventions fail.</p>
                    <p class="text-slate-600 leading-relaxed">
                        The second phase focuses on continuity because anaemia is not a one time condition. 
                        It is a process that evolves throughout pregnancy.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The SPARK model transforms care from a single encounter into a guided journey. At the center 
                        of this phase is consistent, structured support.
                    </p>
                </div>
                <div class="space-y-5">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500">Continuous Care Includes:</p>
                    @php
                        $int2 = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />', 'title' => 'Ongoing Anaemia Monitoring', 'desc' => 'Tracking haemoglobin levels across pregnancy.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />', 'title' => 'Sustained Supplementation', 'desc' => 'Ensuring iron-folic acid is taken correctly and consistently.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />', 'title' => 'Personalized Nutrition Counseling', 'desc' => 'Adapted to local diets and realities.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />', 'title' => 'Follow-Up Touchpoints', 'desc' => 'Reducing loss to care through community-linked tracking.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />', 'title' => 'Preparation for Safe Delivery', 'desc' => 'Identifying risk early and planning accordingly.'],
                        ];
                    @endphp
                    @foreach($int2 as $item)
                    <div class="flex items-start space-x-4 bg-orange-50 border border-orange-100 rounded-2xl p-5 hover:bg-orange-100 transition-colors">
                        <div class="text-orange-500 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-800 text-sm">{{ $item['title'] }}</h4>
                            <p class="text-slate-600 text-sm mt-1">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="bg-orange-500 rounded-2xl p-6 text-white space-y-2 shadow-lg">
                        <p class="font-black text-sm uppercase tracking-widest text-orange-200">A Monitored Mother Is More Likely To:</p>
                        <ul class="space-y-1 text-white text-sm">
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Arrive at delivery stronger</li>
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Withstand blood loss</li>
                            <li class="flex items-center"><span class="mr-2 opacity-70">→</span> Recover faster</li>
                        </ul>
                        <p class="text-white font-bold border-t border-orange-400 pt-3 mt-3">Continuity transforms care from intermittent contact into protective coverage.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- ============================================================ --}}
        {{-- INTERVENTION 3 --}}
        {{-- ============================================================ --}}
        <div class="bg-gradient-to-br from-sky-950 to-slate-900 text-white rounded-3xl p-8 sm:p-12 mb-16 shadow-2xl relative overflow-hidden">
            {{-- Decorative pattern --}}
            <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start relative z-10">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-white text-sky-900 rounded-2xl flex items-center justify-center text-3xl font-black shadow-lg">3</div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-sky-400">Intervention Three</p>
                            <h3 class="text-3xl font-black text-white tracking-normal">Postnatal Recovery</h3>
                        </div>
                    </div>
                    <p class="text-xl font-bold text-white border-l-4 border-sky-400 pl-4 py-1">Protect the Mother After Survival</p>
                    <p class="text-sky-200 leading-relaxed text-lg">
                        The system's greatest blind spot is what happens after delivery. If a mother survives childbirth, 
                        the assumption is that the danger has passed. But for anaemia, this is often when the burden deepens.
                    </p>
                    <p class="text-sky-200 leading-relaxed">
                        Blood loss during delivery, combined with pre existing anaemia, leaves many women severely depleted. 
                        Yet postnatal follow up is rare. Recovery is expected to happen naturally even when the body no 
                        longer has the capacity to restore itself.
                    </p>
                    <p class="text-sky-200 leading-relaxed">
                        The third intervention focuses on what has been ignored: postnatal survival and recovery. 
                        This phase ensures that a mother is not abandoned after childbirth, but actively supported 
                        through the most vulnerable period.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 space-y-3">
                            <p class="text-green-400 font-black text-xs uppercase tracking-widest flex items-center"><span class="mr-2 text-lg">✓</span> Recovers Fully</p>
                            <ul class="space-y-2 text-sky-100 text-sm pl-6">
                                <li class="list-disc">Can breastfeed effectively</li>
                                <li class="list-disc">Can care for her newborn</li>
                                <li class="list-disc">Can regain productivity</li>
                            </ul>
                        </div>
                        <div class="bg-red-500/10 border border-red-500/20 rounded-2xl p-5 space-y-3">
                            <p class="text-red-400 font-black text-xs uppercase tracking-widest flex items-center"><span class="mr-2 text-lg">✗</span> Does Not Recover</p>
                            <ul class="space-y-2 text-sky-100 text-sm pl-6">
                                <li class="list-disc">Transfers vulnerability to child</li>
                                <li class="list-disc">Trapped in chronic weakness</li>
                                <li class="list-disc">Continues cycle to next gen.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="space-y-5">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-sky-400">Key Postnatal Components:</p>
                    @php
                        $int3 = [
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />', 'title' => 'Postnatal Anaemia Screening', 'desc' => 'Identifying mothers at risk within weeks of delivery.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />', 'title' => 'Recovery Supplementation', 'desc' => 'Restoring iron levels and rebuilding strength.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />', 'title' => 'Breastfeeding Support', 'desc' => 'Ensuring the mother has the capacity to nourish her child.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />', 'title' => 'Functional Recovery Monitoring', 'desc' => 'Assessing energy, healing, and caregiving ability.'],
                            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />', 'title' => 'Continued Community Follow-Up', 'desc' => 'Preventing silent deterioration after childbirth.'],
                        ];
                    @endphp
                    @foreach($int3 as $item)
                    <div class="flex items-start space-x-4 bg-white/5 border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition-colors">
                        <div class="text-sky-400 shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm">{{ $item['title'] }}</h4>
                            <p class="text-sky-300 text-xs mt-1">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="bg-sky-600 rounded-2xl p-5 border border-sky-500 mt-4">
                        <p class="text-white font-black uppercase tracking-widest text-xs mb-1">The Bottom Line</p>
                        <p class="text-sky-100 text-sm font-medium">Postnatal care is not an extension of the system it is the completion of it.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- ============================================================ --}}
        {{-- THE CLOSED LOOP --}}
        {{-- ============================================================ --}}
        <div class="bg-white border border-slate-200 rounded-3xl p-12 shadow-sm">
            <div class="text-center mb-12">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">The Core Idea</p>
                <h3 class="text-3xl sm:text-4xl font-black text-slate-800 tracking-normal">
                    From Fragmented Care to<br>
                    <span class="text-sky-600">A Continuous System</span>
                </h3>
                <p class="text-slate-600 text-lg mt-6 max-w-2xl mx-auto leading-relaxed">
                    What makes this mission powerful is not any single intervention. It is the connection between them.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center gap-4 mb-16">
                <div class="bg-sky-50 border border-sky-100 rounded-2xl p-7 text-center space-y-3 flex-1 w-full shadow-sm">
                    <div class="w-12 h-12 bg-sky-200 text-sky-700 rounded-full mx-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800 text-lg">Early Engagement</p>
                    <p class="text-slate-600 text-sm">Brings women into care</p>
                </div>
                
                <div class="text-slate-300 hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </div>
                <div class="text-slate-300 lg:hidden py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                </div>
                
                <div class="bg-orange-50 border border-orange-100 rounded-2xl p-7 text-center space-y-3 flex-1 w-full shadow-sm">
                    <div class="w-12 h-12 bg-orange-200 text-orange-700 rounded-full mx-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800 text-lg">Continuous Support</p>
                    <p class="text-slate-600 text-sm">Keeps them protected</p>
                </div>
                
                <div class="text-slate-300 hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </div>
                <div class="text-slate-300 lg:hidden py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                </div>
                
                <div class="bg-sky-50 border border-sky-100 rounded-2xl p-7 text-center space-y-3 flex-1 w-full shadow-sm">
                    <div class="w-12 h-12 bg-sky-200 text-sky-700 rounded-full mx-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <p class="font-black text-slate-800 text-lg">Postnatal Recovery</p>
                    <p class="text-slate-600 text-sm">Ensures they truly survive</p>
                </div>
                
                <div class="text-sky-600 hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </div>
                <div class="text-sky-600 lg:hidden py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                </div>
                
                <div class="bg-gradient-to-br from-sky-600 to-sky-800 rounded-2xl p-7 text-center space-y-3 flex-1 w-full text-white shadow-xl">
                    <div class="w-12 h-12 bg-white/20 rounded-full mx-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <p class="font-black text-lg">A Closed Loop</p>
                    <p class="text-sky-200 text-sm">No mother is lost between stages</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mb-14 bg-slate-50 p-8 rounded-3xl">
                <p class="text-[11px] font-black uppercase tracking-widest text-slate-500 col-span-full mb-2">This Model Directly Delivers:</p>
                @php
                    $objectives = [
                        'Increasing early antenatal attendance',
                        'Improving iron and nutrition uptake',
                        'Strengthening screening and management of anaemia',
                        'Addressing cultural barriers through community involvement',
                        'Building a structure for monitoring and long-term impact',
                        'Replacing chance with certainty',
                    ];
                @endphp
                @foreach($objectives as $obj)
                <div class="flex items-center space-x-3">
                    <div class="w-6 h-6 bg-white border border-sky-200 rounded-full flex items-center justify-center shrink-0 shadow-sm">
                        <svg class="w-3.5 h-3.5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-slate-700 text-sm font-medium">{{ $obj }}</p>
                </div>
                @endforeach
            </div>

            <div class="bg-slate-900 rounded-3xl p-10 text-white text-center relative overflow-hidden shadow-lg">
                <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="relative z-10">
                    <h4 class="text-3xl font-black mb-4">Why This Works</h4>
                    <p class="text-sky-300 mb-10 max-w-2xl mx-auto text-lg">Because it is designed for reality not theory.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 text-sm text-sky-100 leading-relaxed text-left">
                            <p class="mb-3 opacity-80">It acknowledges that women will not always come to facilities</p>
                            <p class="text-white font-bold text-base flex items-center"><span class="text-sky-400 mr-2">→</span> so engagement goes to them</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 text-sm text-sky-100 leading-relaxed text-left">
                            <p class="mb-3 opacity-80">It accepts that one visit is not enough</p>
                            <p class="text-white font-bold text-base flex items-center"><span class="text-orange-400 mr-2">→</span> so care is continuous</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 text-sm text-sky-100 leading-relaxed text-left">
                            <p class="mb-3 opacity-80">It recognizes that survival does not end at delivery</p>
                            <p class="text-white font-bold text-base flex items-center"><span class="text-green-400 mr-2">→</span> so recovery is prioritized</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- End State --}}
        <div class="mt-16 bg-gradient-to-br from-orange-500 to-orange-700 rounded-3xl p-12 lg:p-16 text-white text-center shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/20 rounded-full blur-3xl"></div>
            
            <div class="relative z-10">
                <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-200 mb-4">The End State</p>
                <h3 class="text-3xl sm:text-5xl font-black tracking-normal leading-snug mb-8">When Survival Is No Longer a Question</h3>
                <p class="text-orange-50 text-lg leading-relaxed max-w-3xl mx-auto mb-8">
                    The goal is not incremental improvement. The goal is a shift in expectation. Where pregnancy 
                    is monitored from the beginning. Where anaemia is detected early and treated effectively. 
                    Where mothers reach delivery with strength not depletion. Where recovery is supported not assumed.
                </p>
                <div class="bg-black/20 backdrop-blur border border-white/10 rounded-2xl p-8 max-w-2xl mx-auto mb-8">
                    <p class="text-white font-black text-2xl leading-relaxed">
                        In such a system, survival is no longer uncertain. It becomes standard.
                    </p>
                </div>
                <p class="text-orange-200 text-lg leading-relaxed max-w-3xl mx-auto">
                    And when that happens in Monduli, the impact goes beyond individual mothers. It reshapes families. 
                    It stabilizes communities. It alters the trajectory of generations.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection