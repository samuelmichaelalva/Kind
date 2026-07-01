@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background font-body-lg antialiased selection:bg-primary-container selection:text-on-primary-container"'])

@section('title', 'Kind - Helping People Help People')

@section('head')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@@400;600;700&amp;family=Geist:wght@@600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                            "on-background": "#181c23",
                            "secondary-container": "#6ffb85",
                            "on-primary-fixed-variant": "#004493",
                            "on-tertiary-fixed-variant": "#332dbc",
                            "on-error": "#ffffff",
                            "primary": "#0058bc",
                            "on-primary": "#ffffff",
                            "on-secondary-container": "#00732a",
                            "tertiary": "#4a47d2",
                            "surface": "#f9f9ff",
                            "on-primary-container": "#fefcff",
                            "on-tertiary-fixed": "#0c006b",
                            "primary-fixed-dim": "#adc6ff",
                            "secondary-fixed": "#72fe88",
                            "inverse-on-surface": "#eef0fc",
                            "on-surface-variant": "#414755",
                            "tertiary-fixed-dim": "#c2c1ff",
                            "outline": "#717786",
                            "error": "#ba1a1a",
                            "on-tertiary-container": "#fffbff",
                            "on-secondary": "#ffffff",
                            "secondary-fixed-dim": "#53e16f",
                            "tertiary-fixed": "#e2dfff",
                            "inverse-primary": "#adc6ff",
                            "surface-bright": "#f9f9ff",
                            "background": "#f9f9ff",
                            "surface-variant": "#e0e2ed",
                            "secondary": "#006e28",
                            "surface-container-highest": "#e0e2ed",
                            "on-secondary-fixed": "#002107",
                            "on-primary-fixed": "#001a41",
                            "surface-dim": "#d8d9e5",
                            "surface-container-lowest": "#ffffff",
                            "primary-container": "#0070eb",
                            "on-tertiary": "#ffffff",
                            "inverse-surface": "#2d3039",
                            "surface-container-high": "#e6e8f3",
                            "on-error-container": "#93000a",
                            "on-secondary-fixed-variant": "#00531c",
                            "on-surface": "#181c23",
                            "surface-container": "#ecedf9",
                            "surface-tint": "#005bc1",
                            "error-container": "#ffdad6",
                            "surface-container-low": "#f1f3fe",
                            "tertiary-container": "#6462ec",
                            "primary-fixed": "#d8e2ff",
                            "outline-variant": "#c1c6d7"
                    },
                    "borderRadius": {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                    },
                    "spacing": {
                            "stack-sm": "12px",
                            "base": "8px",
                            "stack-md": "24px",
                            "container-padding": "24px",
                            "gutter": "16px",
                            "stack-lg": "48px"
                    },
                    "fontFamily": {
                            "body-lg": [
                                    "Inter"
                            ],
                            "title-md": [
                                    "Inter"
                            ],
                            "display-lg": [
                                    "Inter"
                            ],
                            "label-caps": [
                                    "Geist"
                            ],
                            "headline-lg": [
                                    "Inter"
                            ],
                            "body-sm": [
                                    "Inter"
                            ],
                            "headline-lg-mobile": [
                                    "Inter"
                            ]
                    },
                    "fontSize": {
                            "body-lg": [
                                    "16px",
                                    {
                                            "lineHeight": "1.6",
                                            "fontWeight": "400"
                                    }
                            ],
                            "title-md": [
                                    "20px",
                                    {
                                            "lineHeight": "1.4",
                                            "fontWeight": "600"
                                    }
                            ],
                            "display-lg": [
                                    "48px",
                                    {
                                            "lineHeight": "1.1",
                                            "letterSpacing": "-0.02em",
                                            "fontWeight": "700"
                                    }
                            ],
                            "label-caps": [
                                    "12px",
                                    {
                                            "lineHeight": "1",
                                            "letterSpacing": "0.05em",
                                            "fontWeight": "600"
                                    }
                            ],
                            "headline-lg": [
                                    "32px",
                                    {
                                            "lineHeight": "1.2",
                                            "letterSpacing": "-0.01em",
                                            "fontWeight": "600"
                                    }
                            ],
                            "body-sm": [
                                    "14px",
                                    {
                                            "lineHeight": "1.5",
                                            "fontWeight": "400"
                                    }
                            ],
                            "headline-lg-mobile": [
                                    "24px",
                                    {
                                            "lineHeight": "1.2",
                                            "fontWeight": "600"
                                    }
                            ]
                    }
                }
            }
        }
    </script>
<style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(135deg, theme('colors.primary'), theme('colors.tertiary'));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }
        .hero-bg {
            background: radial-gradient(circle at top right, theme('colors.primary-fixed') 0%, transparent 40%),
                        radial-gradient(circle at bottom left, theme('colors.secondary-fixed') 0%, transparent 40%);
        }
    </style>
@endsection

@section('content')
<!-- Top Navigation -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm transition-all duration-300" id="main-nav">
<div class="flex items-center gap-8">
<a class="font-display-lg text-[24px] font-bold text-primary tracking-tight" href="{{ route('landing-page') }}">Kind</a>
<div class="hidden md:flex items-center gap-6">
<a class="text-primary font-semibold border-b-2 border-primary pb-1 font-body-lg text-body-lg Active: opacity-80 transition-all" href="{{ route('landing-page') }}">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors pb-1 font-body-lg text-body-lg" href="{{ route('create-post') }}">Requests</a>
<a class="text-on-surface-variant hover:text-primary transition-colors pb-1 font-body-lg text-body-lg" href="{{ route('browse-donations') }}">Donations</a>
<a class="text-on-surface-variant hover:text-primary transition-colors pb-1 font-body-lg text-body-lg" href="{{ route('volunteer-hub') }}">Volunteer</a>
<a class="text-on-surface-variant hover:text-primary transition-colors pb-1 font-body-lg text-body-lg" href="{{ route('ngo-directory') }}">NGOs</a>
</div>
</div>
<div class="flex items-center gap-4">
<a aria-label="Mail" class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full" href="{{ route('messages') }}">
<span class="material-symbols-outlined">mail</span>
</a>
<a aria-label="Notifications" class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full" href="{{ route('notifications') }}">
<span class="material-symbols-outlined">notifications</span>
</a>
<img alt="User profile with active status" class="w-8 h-8 rounded-full border border-outline-variant object-cover ml-2" data-alt="A clean, professional portrait of an adult volunteer smiling gently in bright, natural daylight. The photo is composed tightly on the face with a shallow depth of field, blurring out a modern, minimalist background with a subtle primary blue tint to match the site's styling." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAitXdPFCiVTWq0fTxDsER84O15zOhbn8JyBJD1Uwp4i1wIBzjARGqd7PxoAtG5t1vw9J5xNOiqre_JRbFOshHadebfcpPkt5SwQUAf_iZA1wrc99SdfmyMQhZ96XmZ0ujOBefXVN995DFlf0Vy-CER1flDoZ0CoTgtLr5HnOo5U9JIcUx9nwOcKJQ2or07SML4ZjuPtzLHmyTy2Cde82xp5D0AAcDvB-vMn5q8_DZ4BhLtxuoFOAB_y9Iui7U5WaBanYqqxnIcA"/>
</div>
</nav>
<!-- Main Content -->
<main class="pt-16">
<!-- Hero Section -->
<section class="relative min-h-[921px] flex items-center justify-center overflow-hidden hero-bg px-gutter py-stack-lg">
<div class="absolute inset-0 z-0 opacity-30">
<!-- Abstract mesh gradient or pattern could go here via CSS -->
</div>
<div class="relative z-10 max-w-4xl mx-auto text-center flex flex-col items-center gap-stack-md">
<span class="font-label-caps text-label-caps text-primary uppercase tracking-widest px-4 py-1 rounded-full bg-primary/10 border border-primary/20">Introducing Kind Platform</span>
<h1 class="font-display-lg text-display-lg md:text-[72px] leading-tight text-on-surface">
                    Helping People <br/>
<span class="text-gradient">Help People.</span>
</h1>
<p class="font-body-lg text-body-lg md:text-[20px] text-on-surface-variant max-w-2xl mx-auto">
                    A beautifully engineered mutual aid network. Connect with your local community to offer support, request help, and organize resources with unprecedented clarity and ease.
                </p>
<div class="flex flex-col sm:flex-row gap-4 mt-stack-md">
<a class="bg-gradient-to-r from-primary to-tertiary text-on-primary font-title-md text-title-md px-8 py-4 rounded-xl shadow-[0_8px_30px_rgb(0,88,188,0.2)] hover:shadow-[0_8px_30px_rgb(0,88,188,0.4)] hover:-translate-y-0.5 transition-all duration-300" href="{{ route('register') }}">
                        Get Started
                    </a>
<a class="glass-panel text-on-surface font-title-md text-title-md px-8 py-4 rounded-xl hover:bg-surface-variant/50 transition-all duration-300 flex items-center justify-center gap-2" href="{{ route('browse-donations') }}">
                        Explore Network
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</a>
</div>
</div>
</section>
<!-- Stats Section -->
<section class="py-stack-lg px-gutter bg-surface-container-low border-y border-outline-variant/20">
<div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
<div class="flex flex-col gap-2">
<span class="font-display-lg text-[40px] text-primary">12k+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant">Active Volunteers</span>
</div>
<div class="flex flex-col gap-2">
<span class="font-display-lg text-[40px] text-secondary">50k+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant">Requests Fulfilled</span>
</div>
<div class="flex flex-col gap-2">
<span class="font-display-lg text-[40px] text-tertiary">$2M+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant">Resources Shared</span>
</div>
<div class="flex flex-col gap-2">
<span class="font-display-lg text-[40px] text-primary-container">400+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant">Partner NGOs</span>
</div>
</div>
</section>
<!-- Features Bento Grid -->
<section class="py-stack-lg px-container-padding max-w-7xl mx-auto">
<div class="mb-stack-md text-center max-w-2xl mx-auto">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Everything you need to make an impact.</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Designed for simplicity, built for scale. Kind provides powerful tools to organize community efforts seamlessly.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Main Feature -->
<div class="glass-panel p-8 rounded-[24px] md:col-span-2 flex flex-col justify-between group hover:border-primary/30 transition-colors">
<div class="w-12 h-12 rounded-2xl bg-primary-container/20 text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">handshake</span>
</div>
<div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Direct Requests</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Post a need, and watch the community respond. From grocery runs to complex organizing, our structured request system ensures clarity and swift action.</p>
</div>
<div class="mt-8 h-48 rounded-xl bg-surface-container overflow-hidden relative">
<img class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-700" data-alt="A clean, minimalist 3D rendering of a mobile app interface showing a list of community requests. The UI is bright white with soft shadows and primary blue accents. A soft, ambient blue glow emanates from behind the phone screen on a very light gray background, highlighting the sleek, modern design." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7dua0pA_mMn5kd9TyEsUbk-ZMVIm8srbrC2QwZcNHgXOJi6H1m_l5b3LHroxnDkiO2HEa2cByUGImeBZxqtiSb924B3YxhEfUEl-D4lS9XSC0TMQvM4kuY8I92eJQQrx-3I3P-R97sHDPqTK-UFLr_NdUF409zkqkrTdI7ZHkSS2ciEhpKwc1B1dIvSHjGCEdaUU4DsrcbRTU_8tIu52GvBS-G2ZCo2MAtC6lVmF3Jlh4GBA_FCWLD6clSQx3U9mFXPUPxS6Wew"/>
</div>
</div>
<!-- Secondary Feature -->
<div class="glass-panel p-8 rounded-[24px] flex flex-col justify-between group hover:border-secondary/30 transition-colors">
<div class="w-12 h-12 rounded-2xl bg-secondary-container/30 text-secondary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
</div>
<div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Smart Donations</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Track inventory, manage funds, and ensure resources go exactly where they are needed most with our transparent ledger.</p>
</div>
</div>
<!-- Tertiary Features -->
<div class="glass-panel p-8 rounded-[24px] flex flex-col justify-between group hover:border-tertiary/30 transition-colors">
<div class="w-12 h-12 rounded-2xl bg-tertiary-container/20 text-tertiary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">groups</span>
</div>
<div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Volunteer Hub</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Coordinate schedules, verify skills, and mobilize teams instantly during urgent situations.</p>
</div>
</div>
<div class="glass-panel p-8 rounded-[24px] md:col-span-2 flex flex-col md:flex-row gap-8 items-center group hover:border-primary/30 transition-colors">
<div class="flex-1">
<div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">corporate_fare</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">NGO Integration</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Seamlessly partner with established non-profits. Share verified resources, amplify reach, and coordinate large-scale aid efforts through unified dashboards.</p>
</div>
<div class="w-full md:w-1/2 h-40 rounded-xl bg-surface-container border border-outline-variant/30 flex items-center justify-center">
<span class="text-on-surface-variant/50 font-body-sm text-body-sm">[ Dashboard UI Illustration ]</span>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-stack-lg px-gutter my-stack-lg max-w-5xl mx-auto">
<div class="glass-panel rounded-[32px] p-12 text-center relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-tertiary/5 z-0"></div>
<div class="relative z-10 flex flex-col items-center">
<h2 class="font-display-lg text-display-lg text-on-surface mb-4">Ready to step up?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8 max-w-lg">Join thousands of others building stronger, more resilient communities through localized mutual aid.</p>
<a class="bg-primary text-on-primary font-title-md text-title-md px-10 py-4 rounded-xl shadow-lg hover:shadow-xl hover:bg-primary/90 transition-all" href="{{ route('register') }}">
                        Create an Account
                    </a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low border-t border-outline-variant/20 pt-16 pb-8 px-container-padding mt-24">
<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
<div class="col-span-1 md:col-span-1">
<a class="font-display-lg text-[24px] font-bold text-primary tracking-tight mb-4 block" href="{{ route('landing-page') }}">Kind</a>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">
                    Building resilient communities through technology and mutual aid.
                </p>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-on-surface mb-4">Platform</h4>
<ul class="space-y-3">
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('create-post') }}">How it Works</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('browse-donations') }}">Pricing</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('ngo-directory') }}">For NGOs</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('register') }}">Security</a></li>
</ul>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-on-surface mb-4">Resources</h4>
<ul class="space-y-3">
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('dashboard') }}">Community Guide</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('messages') }}">Help Center</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('notifications') }}">Blog</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('landing-page') }}">API Docs</a></li>
</ul>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-on-surface mb-4">Legal</h4>
<ul class="space-y-3">
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('landing-page') }}">Privacy Policy</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('landing-page') }}">Terms of Service</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('landing-page') }}">Cookie Policy</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto pt-8 border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Kind Community Platform. All rights reserved.</p>
<div class="flex items-center gap-4">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('landing-page') }}"><span class="material-symbols-outlined text-[20px]">public</span></a>
</div>
</div>
</footer>
<script>
        // Simple nav styling on scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-md');
                nav.classList.remove('shadow-sm');
            } else {
                nav.classList.remove('shadow-md');
                nav.classList.add('shadow-sm');
            }
        });
    </script>
@endsection
