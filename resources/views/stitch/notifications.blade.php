@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-surface font-body-lg text-body-lg min-h-screen flex relative overflow-x-hidden"'])

@section('title', 'Notifications Center')

@section('head')
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Design System Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#414755",
                        "tertiary": "#4a47d2",
                        "on-tertiary-fixed-variant": "#332dbc",
                        "inverse-primary": "#adc6ff",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#001a41",
                        "secondary-fixed-dim": "#53e16f",
                        "on-tertiary-fixed": "#0c006b",
                        "on-tertiary-container": "#fffbff",
                        "tertiary-fixed": "#e2dfff",
                        "surface-container-highest": "#e0e2ed",
                        "on-error-container": "#93000a",
                        "surface-tint": "#005bc1",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d8d9e5",
                        "surface-container-low": "#f1f3fe",
                        "primary-container": "#0070eb",
                        "on-secondary-fixed-variant": "#00531c",
                        "on-background": "#181c23",
                        "tertiary-container": "#6462ec",
                        "on-secondary-container": "#00732a",
                        "surface": "#f9f9ff",
                        "surface-container": "#ecedf9",
                        "on-primary-fixed-variant": "#004493",
                        "outline-variant": "#c1c6d7",
                        "on-secondary-fixed": "#002107",
                        "on-error": "#ffffff",
                        "on-primary-container": "#fefcff",
                        "surface-variant": "#e0e2ed",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#c2c1ff",
                        "secondary-container": "#6ffb85",
                        "primary-fixed-dim": "#adc6ff",
                        "on-secondary": "#ffffff",
                        "surface-container-high": "#e6e8f3",
                        "secondary-fixed": "#72fe88",
                        "inverse-on-surface": "#eef0fc",
                        "surface-bright": "#f9f9ff",
                        "outline": "#717786",
                        "on-surface": "#181c23",
                        "secondary": "#006e28",
                        "primary-fixed": "#d8e2ff",
                        "inverse-surface": "#2d3039",
                        "background": "#f9f9ff",
                        "on-primary": "#ffffff",
                        "primary": "#0058bc"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-lg": "48px",
                        "stack-sm": "12px",
                        "gutter": "16px",
                        "container-padding": "24px",
                        "stack-md": "24px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter", "sans-serif"],
                        "headline-lg-mobile": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "label-caps": ["Geist", "sans-serif"],
                        "title-md": ["Inter", "sans-serif"],
                        "headline-lg": ["Inter", "sans-serif"],
                        "body-sm": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "title-md": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .glass-panel {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 24px -4px rgba(0, 0, 0, 0.05);
        }
        .glass-panel:hover {
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: 0 8px 32px -4px rgba(0, 88, 188, 0.08); /* primary tint shadow */
        }
    </style>
@endsection

@section('content')
<!-- Abstract Background Shading -->
<div class="fixed inset-0 pointer-events-none z-[-1] opacity-40">
<div class="absolute top-[-10%] right-[-5%] w-[50vw] h-[50vw] bg-primary-container rounded-full blur-[120px] opacity-20"></div>
<div class="absolute bottom-[-10%] left-[-10%] w-[60vw] h-[60vw] bg-secondary-container rounded-full blur-[120px] opacity-20"></div>
</div>
<!-- SideNavBar (Shared Component Blueprint) -->
<nav class="hidden md:flex flex-col bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg fixed left-0 top-0 h-full w-[240px] z-40 p-base gap-stack-sm pt-container-padding">
<!-- Header -->
<div class="px-base pb-stack-md flex items-center gap-gutter">
<div class="w-10 h-10 rounded-full overflow-hidden shrink-0 border border-outline-variant/30">
<img class="w-full h-full object-cover" data-alt="A macro shot of a softly glowing, minimalist user avatar placeholder image in light mode. The background is a clean, bright white with subtle pearlescent refractions. The geometric shapes forming the silhouette are smooth and rounded, rendered in a calming palette of soft sky blues and gentle slate grays, exuding a premium, modern, and empathetic digital community aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_RQUjh-TkURTa-Jp-F2Tv38d-xSipplof_QF3vZ8-reFWr9gI-iRpOMIr3mPV_2tpUdTuoPf68HQnbVOiFuZ9XTqr4eeWHrNHGBT4Eelq67v98YdlA8gF2vZYy-_Lq1dVAm-cCZ8mP1IBEfurPcDmVCXZpqStpkprLhVNMu76mnzLwLT66ofCP29XWiL638LqSuhOzHMaoTgEs0gr7WjRsIm63fbBCidnQmdUQRTv7NwBhPwczXFaSeYYO5QnFBUyHzB0seE4Fw"/>
</div>
<div>
<h1 class="font-title-md text-title-md text-on-surface truncate">Community Dashboard</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Kindness in Action</p>
</div>
</div>
<!-- Navigation Links -->
<div class="flex flex-col gap-1 w-full flex-grow">
<!-- Inactive -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
                Overview
            </a>
<!-- Active (Mapped conceptually to Notifications) -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-semibold transition-transform scale-95 origin-left font-body-sm text-body-sm relative" href="{{ route('notifications') }}">
<span class="material-symbols-outlined text-[20px] font-variation-settings: 'FILL' 1;">analytics</span>
                Activity
                <span class="absolute right-3 top-1/2 -translate-y-1/2 w-2 h-2 bg-error rounded-full"></span>
</a>
<!-- Inactive -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="{{ route('create-post') }}">
<span class="material-symbols-outlined text-[20px]">handshake</span>
                My Requests
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined text-[20px]">volunteer_activism</span>
                My Donations
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="{{ route('volunteer-hub') }}">
<span class="material-symbols-outlined text-[20px]">groups</span>
                Volunteering
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="{{ route('messages') }}">
<span class="material-symbols-outlined text-[20px]">bookmark</span>
                Saved
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm mt-auto" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined text-[20px]">settings</span>
                Settings
            </a>
</div>
<!-- CTA -->
<a class="w-full mt-stack-md bg-gradient-to-r from-primary to-tertiary text-on-primary py-3 rounded-[12px] font-title-md text-title-md hover:opacity-90 transition-opacity shadow-sm flex items-center justify-center gap-2" href="{{ route('create-post') }}">
<span class="material-symbols-outlined text-[18px]">add</span>
            New Request
        </a>
</nav>
<!-- Main Canvas -->
<main class="flex-1 md:ml-[240px] p-container-padding max-w-[1200px] w-full mx-auto pb-stack-lg">
<!-- Top Action Bar -->
<header class="flex items-end justify-between w-full mb-stack-lg border-b border-surface-variant/50 pb-gutter mt-4">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Notifications</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-1">Stay updated on your community impact.</p>
</div>
<button class="font-label-caps text-label-caps text-primary hover:bg-primary/5 px-4 py-2 rounded-full border border-transparent hover:border-primary/20 transition-all flex items-center gap-2 uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">done_all</span>
                Mark all as read
            </button>
</header>
<div class="flex flex-col gap-stack-lg w-full max-w-[800px]">
<!-- Group: Today -->
<section class="flex flex-col gap-gutter">
<h3 class="font-title-md text-title-md text-on-surface-variant border-b border-surface-variant/50 pb-2 mb-2 sticky top-0 bg-background/80 backdrop-blur-sm z-10">Today</h3>
<!-- Notification Item: New Message (Unread) -->
<article class="glass-panel rounded-xl p-5 flex items-start gap-4 cursor-pointer group relative overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div> <!-- Unread indicator -->
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center shrink-0 text-primary border border-surface-variant relative overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A brightly lit, minimalist profile photo placeholder in a light mode UI. The circular frame contains a soft, out-of-focus background in warm, inviting tones of peach and light beige, suggesting a friendly human presence. The overall vibe is highly professional, clean, and empathetic, typical of premium modern productivity software." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYhV_ooqoa7GUlKF_bQGsaZBQIKCckH9Z-ONVGvtOGB2EQD8RZsGjbQX7UOx1sq4jO-a4AdmqZhhPLaU1d-JuwoVOIkqW-zHkAzmwGkCVyZHNENg93A6Ysawd7YseO17aOSEerLGciq1egPcBzYSjhY0sBGnt08KtcchfByi4Yr1lHpQux63lDUt-r9aBmrJM8JKR30DEbNGG9NlDnEDgj9Rbzl3BkrS6lkHhenS74PO-Q3NqGmYS1qAyN1omnKdWBJaV4M0KP4w"/>
<div class="absolute -bottom-1 -right-1 bg-primary text-on-primary rounded-full p-[2px] border-2 border-surface-container-lowest">
<span class="material-symbols-outlined text-[12px] block" style="font-variation-settings: 'FILL' 1;">chat</span>
</div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between gap-2 mb-1">
<p class="font-body-lg text-body-lg text-on-surface truncate"><span class="font-bold">Elena Rodriguez</span> sent you a message</p>
<span class="font-label-caps text-label-caps text-primary shrink-0 uppercase tracking-wider">10:42 AM</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">"I can definitely drop off those groceries tomorrow morning around 9..."</p>
<div class="mt-3 flex gap-2">
<button class="bg-primary/10 text-primary font-body-sm text-body-sm px-4 py-1.5 rounded-full hover:bg-primary/20 transition-colors">Reply</button>
</div>
</div>
</article>
<!-- Notification Item: Offer Received (Unread) -->
<article class="glass-panel rounded-xl p-5 flex items-start gap-4 cursor-pointer group relative overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div> <!-- Unread indicator -->
<div class="w-12 h-12 rounded-full bg-secondary-container/30 flex items-center justify-center shrink-0 text-secondary border border-secondary/20">
<span class="material-symbols-outlined text-[24px]">redeem</span>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between gap-2 mb-1">
<p class="font-body-lg text-body-lg text-on-surface truncate"><span class="font-bold">City Food Bank</span> accepted your donation</p>
<span class="font-label-caps text-label-caps text-primary shrink-0 uppercase tracking-wider">8:15 AM</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">Your pledge of 20lbs of non-perishables has been confirmed.</p>
<!-- Mini Preview Card -->
<div class="mt-3 p-3 rounded-lg bg-surface-container-low border border-surface-variant/50 flex items-center gap-3 w-max max-w-full">
<div class="w-8 h-8 rounded bg-surface flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[16px] text-outline">inventory_2</span>
</div>
<div class="truncate">
<p class="font-body-sm text-body-sm font-semibold text-on-surface truncate">Winter Food Drive</p>
<p class="font-label-caps text-label-caps text-outline-variant truncate">Donation #4928</p>
</div>
</div>
</div>
</article>
</section>
<!-- Group: Earlier -->
<section class="flex flex-col gap-gutter mt-stack-md">
<h3 class="font-title-md text-title-md text-on-surface-variant border-b border-surface-variant/50 pb-2 mb-2 sticky top-0 bg-background/80 backdrop-blur-sm z-10">Earlier</h3>
<!-- Notification Item: Volunteer Approval (Read) -->
<article class="glass-panel rounded-xl p-5 flex items-start gap-4 cursor-pointer group opacity-90 hover:opacity-100">
<div class="w-12 h-12 rounded-full bg-tertiary-container/20 flex items-center justify-center shrink-0 text-tertiary border border-tertiary/20">
<span class="material-symbols-outlined text-[24px]">verified</span>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between gap-2 mb-1">
<p class="font-body-lg text-body-lg text-on-surface truncate"><span class="font-bold">Downtown Community Gardens</span> approved your application</p>
<span class="font-label-caps text-label-caps text-outline shrink-0 uppercase tracking-wider">Yesterday</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">You are now clear to join the weekend planting sessions.</p>
</div>
</article>
<!-- Notification Item: Impact Milestone (Read) -->
<article class="glass-panel rounded-xl p-5 flex items-start gap-4 cursor-pointer group opacity-90 hover:opacity-100">
<div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-tertiary flex items-center justify-center shrink-0 text-white shadow-sm">
<span class="material-symbols-outlined text-[24px]">celebration</span>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between gap-2 mb-1">
<p class="font-body-lg text-body-lg text-on-surface truncate"><span class="font-bold">Milestone Reached!</span></p>
<span class="font-label-caps text-label-caps text-outline shrink-0 uppercase tracking-wider">Oct 24</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">You've reached 50 hours of volunteering this year. Thank you for your dedication!</p>
</div>
</article>
<!-- Notification Item: System (Read) -->
<article class="glass-panel rounded-xl p-5 flex items-start gap-4 cursor-pointer group opacity-90 hover:opacity-100">
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center shrink-0 text-outline border border-surface-variant">
<span class="material-symbols-outlined text-[24px]">info</span>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between gap-2 mb-1">
<p class="font-body-lg text-body-lg text-on-surface truncate"><span class="font-bold">System Update</span></p>
<span class="font-label-caps text-label-caps text-outline shrink-0 uppercase tracking-wider">Oct 20</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">We've updated our privacy policy and community guidelines.</p>
</div>
</article>
</section>
</div>
</main>
@endsection
