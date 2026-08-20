@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- URGENT HERO (UPDATED NA DESIGN YA NEWS/UPDATES) --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[60vh] py-32">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/donate-bg.jpg'); ?>');">
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
            <div class="inline-flex items-center space-x-3 bg-red-500/20 backdrop-blur-sm border border-red-500/30 rounded-full px-5 py-2.5 mb-8 shadow-xl">
                <span class="w-2 h-2 bg-red-400 rounded-full animate-pulse"></span>
                <span class="text-[11px] font-black uppercase tracking-[0.25em] text-red-300">Urgent — Act Now</span>
            </div>
            
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                Before Another<br>
                <span class="text-sky-400">Life Is Lost.</span>
            </h1>
            
            <p class="text-sky-100 text-xl font-light leading-relaxed mb-10 drop-shadow-md">
                Every day, a mother enters pregnancy in Monduli without care. Every day, anaemia goes undetected. 
                Every day, a preventable risk becomes a life threatening emergency. How many more should we wait for?
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#how-to-donate" class="bg-orange-500 hover:bg-orange-600 text-white font-black text-[13px] uppercase tracking-widest px-10 py-5 rounded-full transition duration-300 shadow-2xl shadow-orange-500/40 text-center">
                    Ways to Give
                </a>
                <a href="#partner" class="backdrop-blur-sm border-2 border-white/30 hover:border-white text-white font-black text-[13px] uppercase tracking-widest px-10 py-5 rounded-full transition duration-300 text-center">
                    Partner With Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- WHY THIS MATTERS --}}
{{-- ============================================================ --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center mb-14">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Why This Matters — To You</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                Three Questions That<br>
                <span class="text-sky-600">Demand an Answer</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="bg-gradient-to-br from-sky-600 to-sky-800 rounded-3xl p-10 text-white text-center space-y-6 shadow-sm">
                <div class="w-14 h-14 mx-auto text-sky-200">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black leading-snug tracking-normal">If early care can prevent death…</h3>
                <p class="text-sky-200 leading-relaxed">Why delay it? Every day without early antenatal care is a day of preventable risk for a mother and her child.</p>
                <div class="border-t border-sky-500 pt-5">
                    <p class="text-orange-300 font-black uppercase tracking-widest text-[11px]">Why delay it?</p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-3xl p-10 text-white text-center space-y-6 shadow-sm">
                <div class="w-14 h-14 mx-auto text-orange-200">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black leading-snug tracking-normal">If a simple supplement saves lives…</h3>
                <p class="text-orange-100 leading-relaxed">Iron and folic acid. A prenatal visit. A trained community health worker. The solutions are simple. Delivery is the missing key.</p>
                <div class="border-t border-orange-400 pt-5">
                    <p class="text-white font-black uppercase tracking-widest text-[11px]">Why not deliver it?</p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-sky-700 to-sky-950 rounded-3xl p-10 text-white text-center space-y-6 shadow-sm">
                <div class="w-14 h-14 mx-auto text-sky-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143-.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71-.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black leading-snug tracking-normal">If a system exists that works…</h3>
                <p class="text-sky-200 leading-relaxed">The SPARK model is structured, proven in design, and ready to scale. What is needed is support.</p>
                <div class="border-t border-sky-600 pt-5">
                    <p class="text-orange-300 font-black uppercase tracking-widest text-[11px]">Why not scale it?</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- HOW TO DONATE (Bank Transfer Details) --}}
{{-- ============================================================ --}}
<section id="how-to-donate" class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-16">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Make Your Impact</p>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-800 tracking-normal leading-snug">
                How to Donate
            </h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto leading-relaxed text-lg">
                Your contribution directly funds life saving care. You can send your donation securely through direct bank transfer to our official foundation account below.
            </p>
        </div>

        {{-- BANK TRANSFER CARD (Full Width & Centered) --}}
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-xl relative overflow-hidden group hover:border-sky-300 transition-all duration-300">
            {{-- Background Decoration --}}
            <div class="absolute top-0 right-0 w-64 h-64 bg-sky-50 rounded-bl-full -z-10 group-hover:bg-sky-100 transition-colors duration-500"></div>
            
            <div class="flex items-center space-x-5 mb-10">
                <div class="w-16 h-16 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center shrink-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-3xl font-black text-slate-800 tracking-normal">Bank Transfer</h3>
                    <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mt-1">Local & International Deposits</p>
                </div>
            </div>

            <div class="space-y-6">
                {{-- Account Number Row --}}
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-5 sm:p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-sky-300 transition-colors">
                    <div>
                        <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-1">Account Number</p>
                        <p class="text-2xl sm:text-3xl font-black text-slate-800 tracking-widest font-mono" id="bank-acc">43810029215</p>
                        <p class="text-sm font-bold text-sky-600 mt-1 uppercase tracking-wider">National Microfinance Bank Ltd (NMB)</p>
                    </div>
                    <button onclick="copyText('bank-acc')" class="w-12 h-12 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-500 hover:text-sky-600 hover:border-sky-600 hover:shadow-md transition-all focus:outline-none shrink-0" title="Copy Account Number">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </button>
                </div>

                {{-- SWIFT Code Row --}}
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-5 sm:p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:border-sky-300 transition-colors">
                    <div>
                        <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-1">SWIFT / BIC Code</p>
                        <p class="text-xl sm:text-2xl font-black text-slate-800 tracking-widest font-mono" id="swift-code">NMIBTZTZ</p>
                        <p class="text-xs font-bold text-slate-500 mt-1 uppercase tracking-wider">For International Transfers</p>
                    </div>
                    <button onclick="copyText('swift-code')" class="w-12 h-12 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-500 hover:text-sky-600 hover:border-sky-600 hover:shadow-md transition-all focus:outline-none shrink-0" title="Copy SWIFT Code">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </button>
                </div>

                {{-- Additional Details Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-2">
                    <div class="bg-white border border-slate-100 rounded-2xl p-5 sm:p-6 shadow-sm">
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Account Name</p>
                        <p class="text-sm font-black text-slate-800 uppercase leading-snug">Hope Memorial Spark Foundation</p>
                    </div>
                    <div class="bg-white border border-slate-100 rounded-2xl p-5 sm:p-6 shadow-sm">
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Branch Name</p>
                        <p class="text-sm font-black text-slate-800 uppercase leading-snug">Mto wa Mbu - Arusha</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Toast Notification kwa ajili ya 'Copy' action --}}
        <div id="copy-toast" class="fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-slate-800 text-white px-6 py-3 rounded-full text-sm font-bold shadow-2xl opacity-0 transition-opacity duration-300 pointer-events-none z-50">
            Text copied to clipboard!
        </div>

    </div>
</section>

{{-- ============================================================ --}}
{{-- PLEDGE / PARTNERSHIP FORM --}}
{{-- ============================================================ --}}
<section id="partner" class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-black text-slate-800 tracking-normal leading-snug">Notify Us of Your Donation or Discuss Partnership</h2>
            <p class="text-slate-500 mt-4 leading-relaxed">If you have made a transfer, wish to pledge support, or want to discuss a partnership, please leave your details below.</p>
        </div>

        <div class="bg-slate-50 border border-slate-100 rounded-3xl p-8 sm:p-10 space-y-6 shadow-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="space-y-2">
                    <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">First Name</label>
                    <input type="text" placeholder="Your first name" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Last Name</label>
                    <input type="text" placeholder="Your last name" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all">
                </div>
            </div>
            <div class="space-y-2">
                <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Email Address / Phone Number</label>
                <input type="text" placeholder="your@email.com or +255..." class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all">
            </div>
            <div class="space-y-2">
                <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Topic</label>
                <select class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all appearance-none cursor-pointer">
                    <option value="">Select an option...</option>
                    {{-- Nimebadilisha option hii ili isitaje Mobile Money tena --}}
                    <option>I have made a Bank Transfer</option>
                    <option>I want to Partner with the Foundation</option>
                    <option>I want to provide in-kind donations (supplies, etc.)</option>
                    <option>Other inquiries</option>
                </select>
            </div>
            <div class="space-y-2">
                <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Message</label>
                <textarea rows="4" placeholder="Briefly describe how you'd like to help or confirm your donation details..." class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all resize-none"></textarea>
            </div>
            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-900 text-white font-black text-[12px] uppercase tracking-widest py-5 rounded-2xl transition duration-300 shadow-lg shadow-slate-900/20 mt-4">
                Send Message
            </button>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- FINAL CTA --}}
{{-- ============================================================ --}}
<section class="py-20 bg-gradient-to-br from-sky-950 to-slate-900 text-white relative overflow-hidden">
    {{-- Decorative pattern --}}
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    
    <div class="container mx-auto px-4 max-w-5xl text-center relative z-10">
        <h2 class="text-4xl sm:text-5xl font-black tracking-normal leading-snug mb-6">
            When We Protect a Mother's Health,<br>
            <span class="text-sky-400">We Do More Than Save a Life.</span>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-16">
            <div class="space-y-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-colors">
                <div class="w-12 h-12 mx-auto text-sky-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h3 class="font-black text-white text-lg tracking-normal">We protect a family.</h3>
                <p class="text-sky-200 text-sm leading-relaxed">A mother's survival means a family stays whole, bonded, and supported.</p>
            </div>
            <div class="space-y-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-colors">
                <div class="w-12 h-12 mx-auto text-sky-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>
                <h3 class="font-black text-white text-lg tracking-normal">We strengthen a community.</h3>
                <p class="text-sky-200 text-sm leading-relaxed">Healthy mothers raise healthy children who build stronger communities.</p>
            </div>
            <div class="space-y-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-colors">
                <div class="w-12 h-12 mx-auto text-sky-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.415-2.415L14.25 6l1.076-.259a3.375 3.375 0 002.415-2.415L18 2.25l.259 1.076a3.375 3.375 0 002.415 2.415L21.75 6l-1.076.259a3.375 3.375 0 00-2.415 2.415z" />
                    </svg>
                </div>
                <h3 class="font-black text-white text-lg tracking-normal">We shape generations.</h3>
                <p class="text-sky-200 text-sm leading-relaxed">Breaking the cycle today protects generations yet to come.</p>
            </div>
        </div>
        <div class="mt-16 bg-sky-900/50 border border-sky-800 rounded-full py-5 px-10 inline-block">
            <p class="text-orange-400 font-black text-xl sm:text-2xl leading-snug tracking-normal">Hope Memorial Spark Foundation is not just responding to a crisis.<br>We are building the system that will end it.</p>
        </div>
    </div>
</section>

{{-- JavaScript ya ku-copy namba --}}
<script>
    function copyText(elementId) {
        // Pata neno/namba toka kwenye element
        var textToCopy = document.getElementById(elementId).innerText;
        
        // Tumia navigator clipboard API
        navigator.clipboard.writeText(textToCopy).then(function() {
            // Onyesha Toast
            var toast = document.getElementById('copy-toast');
            toast.classList.remove('opacity-0');
            toast.classList.add('opacity-100');
            
            // Ficha Toast baada ya sekunde 3
            setTimeout(function() {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0');
            }, 3000);
        }).catch(function(err) {
            console.error('Failed to copy text: ', err);
        });
    }
</script>

@endsection