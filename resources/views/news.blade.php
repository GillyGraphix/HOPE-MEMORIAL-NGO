@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PAGE HERO (Ipo Dark by default, inabaki hivi) --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[50vh] py-28">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/news-bg.jpg'); ?>');">
        {{-- Gradient Overlay: Giza kushoto ili maneno yasomeke, uwazi kulia picha ionekane --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none z-10"></div>
    
    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Stay Informed</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                Latest News &<br>
                <span class="text-sky-400">Updates</span>
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                Stay updated with our community outreach programs, health campaigns, and medical camps across the region.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- NEWS & EVENTS CONTENT (Imeongezwa Dark Mode) --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-12">
            
            {{-- LATEST NEWS (Left Side) --}}
            <div class="lg:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    {{-- News Item 1 --}}
                    <div class="group bg-white dark:bg-slate-800 rounded-[2.5rem] overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all duration-500">
                        <div class="relative h-60 overflow-hidden">
                            {{-- Picha ya Habari 1: src="{{ asset('images/news-1.jpg') }}" --}}
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <span class="absolute top-6 left-6 bg-sky-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg">Outreach</span>
                        </div>
                        <div class="p-8">
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold mb-3 uppercase tracking-widest">April 10, 2026</p>
                            <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition">Launching Anaemia Awareness in Rural Arusha</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-6">The Spark Foundation officially kicked off its community health education session focused on reducing anaemia among expectant mothers...</p>
                            <a href="#" class="text-sky-600 dark:text-sky-400 font-bold text-sm inline-flex items-center group-hover:translate-x-2 transition">Read Full Story <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                        </div>
                    </div>

                    {{-- News Item 2 --}}
                    <div class="group bg-white dark:bg-slate-800 rounded-[2.5rem] overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all duration-500">
                        <div class="relative h-60 overflow-hidden">
                            {{-- Picha ya Habari 2: src="{{ asset('images/news-2.jpg') }}" --}}
                            <img src="https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <span class="absolute top-6 left-6 bg-orange-500 text-white text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg">Medical Camp</span>
                        </div>
                        <div class="p-8">
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold mb-3 uppercase tracking-widest">March 22, 2026</p>
                            <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4 group-hover:text-orange-500 dark:group-hover:text-orange-400 transition">Free Antenatal Screening Week Results</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-6">Over 200 mothers were screened at Hope Memorial Dispensary during our successful free medical camp week last month...</p>
                            <a href="#" class="text-orange-500 dark:text-orange-400 font-bold text-sm inline-flex items-center group-hover:translate-x-2 transition">Read Full Story <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- UPCOMING EVENTS (Right Side Sidebar) --}}
            <div class="lg:w-1/3">
                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-[2.5rem] p-8 lg:p-10 sticky top-28 border border-slate-100 dark:border-slate-700/50 transition-colors duration-300">
                    <h4 class="text-xl font-black text-slate-800 dark:text-white mb-8 uppercase tracking-tight">Upcoming <span class="text-sky-600 dark:text-sky-400">Events</span></h4>
                    
                    <div class="space-y-6">
                        
                        {{-- Event Item 1 with Image --}}
                        <div class="group cursor-pointer bg-white dark:bg-slate-800 rounded-2xl p-3 border border-slate-100 dark:border-slate-700/50 shadow-sm hover:shadow-md transition-all flex gap-4 items-center">
                            <div class="w-20 h-20 rounded-xl overflow-hidden relative shrink-0">
                                {{-- Picha ya Tukio 1: src="{{ asset('images/event-1.jpg') }}" --}}
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=200" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-sky-900/40 flex flex-col items-center justify-center text-white">
                                    <span class="text-lg font-black leading-snug">25</span>
                                    <span class="text-[9px] font-bold uppercase tracking-widest">Apr</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-sm font-bold text-slate-800 dark:text-white leading-tight mb-2 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition">World Health Day Seminar</h5>
                                <p class="text-[11px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest">📍 Spark Foundation Hall</p>
                            </div>
                        </div>

                        {{-- Event Item 2 with Image --}}
                        <div class="group cursor-pointer bg-white dark:bg-slate-800 rounded-2xl p-3 border border-slate-100 dark:border-slate-700/50 shadow-sm hover:shadow-md transition-all flex gap-4 items-center">
                            <div class="w-20 h-20 rounded-xl overflow-hidden relative shrink-0">
                                {{-- Picha ya Tukio 2: src="{{ asset('images/event-2.jpg') }}" --}}
                                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=200" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-orange-600/40 flex flex-col items-center justify-center text-white">
                                    <span class="text-lg font-black leading-snug">05</span>
                                    <span class="text-[9px] font-bold uppercase tracking-widest">May</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-sm font-bold text-slate-800 dark:text-white leading-tight mb-2 group-hover:text-orange-500 dark:group-hover:text-orange-400 transition">Maternal Health Outreach</h5>
                                <p class="text-[11px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest">📍 Moshono Community</p>
                            </div>
                        </div>

                    </div>

                    {{-- ============================================================ --}}
                    {{-- VOLUNTEER CTA (GOOGLE FORMS IN SIDEBAR - Ipo Dark by default) --}}
                    {{-- ============================================================ --}}
                    <div class="mt-10 bg-gradient-to-br from-sky-800 to-sky-950 dark:from-sky-900 dark:to-slate-900 rounded-3xl p-8 text-white relative overflow-hidden group shadow-lg border border-transparent dark:border-sky-800/30">
                        
                        {{-- Background Decoration --}}
                        <div class="absolute top-0 right-0 w-32 h-32 bg-sky-500/20 rounded-bl-full -z-10 group-hover:bg-sky-500/30 transition-colors duration-500"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-500/10 rounded-tr-full -z-10"></div>
                        
                        <div class="relative z-10 text-center">
                            <div class="w-14 h-14 mx-auto bg-sky-700/50 rounded-xl flex items-center justify-center mb-5 backdrop-blur-sm border border-sky-600/50 shadow-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-sky-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                            </div>
                            
                            <h5 class="font-black text-xl mb-3">Be a Volunteer</h5>
                            <p class="text-xs text-sky-200/90 mb-7 font-light leading-relaxed">Join our team on our next outreach campaign and make a real difference in the community.</p>
                            
                            {{-- BUTTON YA GOOGLE FORM --}}
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdEKp_UuyLFG-Ph6otPrip364J7oUPGXHUg78PgJRYv0pG5Mg/viewform?usp=publish-editor" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="flex items-center justify-center w-full bg-orange-500 hover:bg-orange-600 text-white text-xs font-black py-4 px-4 rounded-xl transition duration-300 shadow-lg shadow-orange-500/30 uppercase tracking-widest group-hover:-translate-y-1">
                                Register Now
                                {{-- Kijikishale (External Link Icon) --}}
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection