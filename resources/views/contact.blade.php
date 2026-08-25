@extends('layouts.app')

@section('content')

{{-- ============================================================ --}}
{{-- PAGE HERO --}}
{{-- ============================================================ --}}
<section class="relative bg-sky-950 text-white overflow-hidden flex items-center min-h-[50vh] py-28">
    
    {{-- ------------------------------------------------------------ --}}
    {{-- BACKGROUND IMAGE LAYER (IMPROVED FOR PARALLAX & VS CODE) --}}
    {{-- ------------------------------------------------------------ --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('<?php echo asset('images/contact-bg.jpg'); ?>');">
        {{-- Gradient Overlay: Giza kushoto ili maneno yasomeke, uwazi kulia picha ionekane --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-sky-950/80 to-transparent"></div>
    </div>
    {{-- ------------------------------------------------------------ --}}

    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10 z-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl pointer-events-none z-10"></div>
    
    {{-- Content Container --}}
    <div class="container mx-auto px-4 max-w-7xl relative z-20">
        <div class="max-w-3xl">
            <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-400 mb-4 drop-shadow-md">Reach Out</p>
            <h1 class="text-5xl sm:text-7xl font-black tracking-normal leading-snug mb-6 drop-shadow-lg">
                Contact<br>
                <span class="text-sky-400">Us</span>
            </h1>
            <p class="text-sky-100 text-xl font-light leading-relaxed drop-shadow-md">
                Whether you want to partner, donate, volunteer, or simply learn more
                we would love to hear from you. One conversation can change a life.
            </p>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CONTACT SECTION --}}
{{-- ============================================================ --}}
<section class="py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">

            {{-- Left: Contact Info --}}
            <div class="space-y-10">
                <div>
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-4">Get In Touch</p>
                    <h2 class="text-4xl font-black text-slate-800 tracking-normal leading-snug mb-6">
                        We Are Here.<br>
                        <span class="text-sky-600">Let's Talk.</span>
                    </h2>
                    <p class="text-slate-600 leading-relaxed">
                        Our team is ready to discuss partnerships, donations, volunteering, media inquiries, 
                        and any other questions you may have about our work in Monduli District.
                    </p>
                </div>

                {{-- Contact Details --}}
                <div class="space-y-5">
                    {{-- Location --}}
                    <div class="flex items-start space-x-5 bg-slate-50 border border-slate-100 rounded-3xl p-7 hover:border-sky-200 hover:bg-sky-50 transition-all duration-300 shadow-sm">
                        <div class="w-12 h-12 bg-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-md shadow-sky-600/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-1">Our Location</p>
                            <p class="font-black text-slate-800 text-lg">Mto wa Mbu, Arusha, Tanzania</p>
                            <p class="text-slate-500 text-sm mt-1">Operational Area: Mto wa Mbu, Monduli District, Arusha Region</p>
                        </div>
                    </div>

                    {{-- Emails --}}
                    <div class="flex items-start space-x-5 bg-slate-50 border border-slate-100 rounded-3xl p-7 hover:border-sky-200 hover:bg-sky-50 transition-all duration-300 shadow-sm">
                        <div class="w-12 h-12 bg-orange-500 rounded-2xl flex items-center justify-center shrink-0 shadow-md shadow-orange-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-2">Email Addresses</p>
                            <div class="flex flex-col space-y-1">
                                <a href="mailto:info@hopememorial.org" class="font-black text-slate-800 hover:text-sky-600 transition text-[15px]">info@hopememorial.org</a>
                                <a href="mailto:director@hopememorial.org" class="font-black text-slate-800 hover:text-sky-600 transition text-[15px]">director@hopememorial.org</a>
                                <a href="mailto:donations@hopememorial.org" class="font-black text-slate-800 hover:text-sky-600 transition text-[15px]">donations@hopememorial.org</a>
                                <a href="mailto:appointments@hopememorial.org" class="font-black text-slate-800 hover:text-sky-600 transition text-[15px]">appointments@hopememorial.org</a>
                            </div>
                            <p class="text-slate-500 text-sm mt-3">We respond within 24 hours on business days.</p>
                        </div>
                    </div>

                    {{-- Phones --}}
                    <div class="flex items-start space-x-5 bg-slate-50 border border-slate-100 rounded-3xl p-7 hover:border-sky-200 hover:bg-sky-50 transition-all duration-300 shadow-sm">
                        <div class="w-12 h-12 bg-sky-700 rounded-2xl flex items-center justify-center shrink-0 shadow-md shadow-sky-700/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.076-7.076l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-2">Phone Numbers</p>
                            <div class="flex flex-col space-y-1">
                                <a href="tel:+255763117674" class="font-black text-slate-800 hover:text-sky-600 transition text-[17px]">+255 763 117 674</a>
                                <a href="tel:+255622041699" class="font-black text-slate-800 hover:text-sky-600 transition text-[17px]">+255 622 041 699</a>
                            </div>
                            <p class="text-slate-500 text-sm mt-3">Available Monday – Friday, 8:00 AM – 5:00 PM EAT.</p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Right: Contact Form --}}
            <div>
                <div class="bg-slate-50 border border-slate-100 rounded-3xl p-10 space-y-6 sticky top-28 shadow-sm">
                    <div>
                        <p class="text-[11px] font-black uppercase tracking-[0.3em] text-orange-500 mb-2">Send a Message</p>
                        <h3 class="text-3xl font-black text-slate-800 tracking-normal leading-snug">How Can We Help You?</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">First Name *</label>
                            <input type="text" placeholder="First name" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Last Name *</label>
                            <input type="text" placeholder="Last name" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Email Address *</label>
                        <input type="email" placeholder="your@email.com" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Phone Number (Optional)</label>
                        <input type="tel" placeholder="+255 700 000 000" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Organization (Optional)</label>
                        <input type="text" placeholder="Your organization or company" class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Subject *</label>
                        <select class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all shadow-sm">
                            <option value="">Select a topic...</option>
                            <option>Partnership Inquiry</option>
                            <option>Donation & Funding</option>
                            <option>Volunteering</option>
                            <option>Clinical Services (Dispensary)</option>
                            <option>Media & Press</option>
                            <option>Program Information</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-500">Your Message *</label>
                        <textarea rows="5" placeholder="Tell us what you have in mind..." class="w-full bg-white border border-slate-200 rounded-xl px-5 py-4 text-sm text-slate-700 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all resize-none shadow-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-black text-[12px] uppercase tracking-widest py-5 rounded-2xl transition duration-300 shadow-lg shadow-sky-600/30">
                        Send Message →
                    </button>

                    <p class="text-center text-xs text-slate-400 font-bold uppercase tracking-widest">
                        We respond within 24 business hours.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- MAP SECTION --}}
{{-- ============================================================ --}}
<section class="py-0">
    <div class="w-full h-96 bg-slate-100 relative overflow-hidden">
        {{-- Embedded Google Map — replace with actual embed code --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63418.73!2d35.990!3d-3.365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18396f2f89f7a1a1%3A0x1234567890abcdef!2sMto+wa+Mbu%2C+Tanzania!5e0!3m2!1sen!2stz!4v1234567890"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="absolute inset-0 w-full h-full"
        ></iframe>
        {{-- Location Badge --}}
        <div class="absolute top-6 left-6 bg-white rounded-2xl shadow-xl p-5 space-y-2 z-10">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-sky-600 rounded-lg flex items-center justify-center shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
                <div>
                    <p class="font-black text-slate-800 text-sm">Hope Memorial Dispensary</p>
                    <p class="text-slate-500 text-xs">Mto wa Mbu, Arusha Region, Tanzania</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- FOOTER CTA --}}
{{-- ============================================================ --}}
<section class="py-24 bg-gradient-to-r from-orange-500 to-orange-600 text-white">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-4xl sm:text-5xl font-black tracking-normal leading-snug mb-6">
            Ready to Make a Difference?
        </h2>
        <p class="text-orange-100 mb-10 text-lg leading-relaxed max-w-2xl mx-auto font-light">
            One action. One decision. One life saved. Will you be part of that change?
        </p>
        <div class="flex flex-col sm:flex-row gap-5 justify-center">
            <a href="/donate" class="bg-white text-orange-600 font-black text-[12px] uppercase tracking-widest px-12 py-5 rounded-full hover:bg-orange-50 transition shadow-xl shadow-orange-700/20">
                Donate Now
            </a>
            <a href="/projects" class="border border-white/50 bg-white/10 backdrop-blur-sm hover:border-white text-white font-black text-[12px] uppercase tracking-widest px-12 py-5 rounded-full transition shadow-xl shadow-orange-700/20">
                Our Impact Projects
            </a>
        </div>
    </div>
</section>

@endsection