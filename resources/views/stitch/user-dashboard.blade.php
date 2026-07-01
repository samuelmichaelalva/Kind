@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background h-full font-body-lg antialiased bg-pattern"'])

@section('title', 'Kind - Community Dashboard')

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
                        "body-lg": ["Inter"],
                        "title-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-caps": ["Geist"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "title-md": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .glass-card {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 24px -8px rgba(0, 0, 0, 0.05);
        }
        .dark .glass-card {
            background-color: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .bg-pattern {
            background-image: radial-gradient(rgba(0, 88, 188, 0.05) 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar (Web Only) -->
<nav class="hidden md:flex fixed top-0 w-full z-50 justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm">
<div class="flex items-center gap-6">
<a class="font-display-lg text-headline-lg font-bold text-primary" href="{{ route('dashboard') }}">Kind</a>
<!-- Search on left -->
<div class="relative ml-8 w-64 hidden lg:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-highest/50 border border-outline-variant/30 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 text-body-sm font-body-sm placeholder:text-outline transition-all" placeholder="Search..." type="text"/>
</div>
</div>
<div class="flex items-center gap-8">
<ul class="flex items-center gap-6">
<li><a class="text-primary font-semibold border-b-2 border-primary font-body-lg text-body-lg py-5 opacity-80 transition-all" href="{{ route('dashboard') }}">Home</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="{{ route('create-post') }}">Requests</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="{{ route('browse-donations') }}">Donations</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="{{ route('volunteer-hub') }}">Volunteer</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="{{ route('ngo-directory') }}">NGOs</a></li>
</ul>
<div class="flex items-center gap-4 border-l border-outline-variant/30 pl-4">
<button class="text-on-surface-variant hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">mail</span>
</button>
<button class="text-on-surface-variant hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute 1 top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
</button>
<img alt="User profile with active status" class="w-8 h-8 rounded-full border border-surface-container ring-2 ring-transparent hover:ring-primary/30 transition-all cursor-pointer" data-alt="A small circular avatar showing a smiling person against a bright, solid blue background. Light mode aesthetic, sharp focus, professional yet approachable." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-iW4eXuQER8SWfXW8dvIVibgqlWg6zvXoAM0gL2ZDe0ZRjIImdoSqzdiL5QIM-wRgNS83IM__hv3QxWgtcLjGF3OJY22rlF07nEvVgpIpguTqN8BaAfEigHYyG9KjYhRm5uGHqqKNn4zQPqbmVqUUCp_3b76hJX6HLwpRuAgkZg0HMcT4id2bUQMWeAKeDpJTLFyRbyCYHiQdsrqekBtZWAhsEfZZUM9HQ4ME2BITh1icsMBbKVYO0xshRW9kN-ctrL9-BiR03g"/>
</div>
</div>
</nav>
<!-- Layout Container -->
<div class="flex h-full pt-16">
<!-- SideNavBar -->
<aside class="fixed left-0 top-16 h-[calc(100vh-64px)] w-[240px] flex flex-col p-base gap-stack-sm bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg z-40 hidden md:flex">
<div class="px-4 py-6 border-b border-outline-variant/20 mb-2">
<h2 class="font-title-md text-title-md text-on-surface">Community Dashboard</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Kindness in Action</p>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary font-semibold rounded-lg font-body-sm text-body-sm scale-95 transition-transform" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    Overview
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="{{ route('notifications') }}">
<span class="material-symbols-outlined">analytics</span>
                    Activity
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="{{ route('create-post') }}">
<span class="material-symbols-outlined">handshake</span>
                    My Requests
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined">volunteer_activism</span>
                    My Donations
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="{{ route('volunteer-hub') }}">
<span class="material-symbols-outlined">groups</span>
                    Volunteering
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="{{ route('messages') }}">
<span class="material-symbols-outlined">bookmark</span>
                    Saved
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm mt-auto" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
</nav>
<div class="p-4 mt-auto">
<a class="w-full py-3 bg-gradient-to-r from-primary to-tertiary text-white rounded-lg font-title-md text-body-sm shadow-md hover:shadow-lg transition-shadow flex items-center justify-center gap-2" href="{{ route('create-post') }}">
<span class="material-symbols-outlined text-sm">add</span>
                    New Request
                </a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 md:ml-[240px] p-4 md:p-container-padding overflow-y-auto">
<div class="max-w-7xl mx-auto space-y-stack-md">
<!-- Welcome Banner -->
<div class="glass-card rounded-xl p-8 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
<div class="absolute right-0 top-0 w-64 h-64 bg-primary-fixed-dim/30 rounded-full blur-3xl -mr-20 -mt-20"></div>
<div class="relative z-10">
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background mb-2">Good morning, Alex! 👋</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">Your community missed you. You have 3 new matching requests near you and your recent donation was successfully delivered.</p>
</div>
<div class="relative z-10 flex gap-4 w-full md:w-auto">
<button class="flex-1 md:flex-none px-6 py-3 bg-white border border-outline-variant/30 text-primary rounded-lg font-title-md text-body-sm hover:bg-surface transition-colors">
                            Donate
                        </button>
<button class="flex-1 md:flex-none px-6 py-3 bg-primary text-white rounded-lg font-title-md text-body-sm shadow-md hover:bg-primary/90 transition-colors">
                            New Request
                        </button>
</div>
</div>
<!-- Stats Bento -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="glass-card rounded-xl p-6 flex flex-col justify-between group">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">favorite</span>
</div>
<span class="font-label-caps text-label-caps text-secondary bg-secondary/10 px-2 py-1 rounded-full">+12% this week</span>
</div>
<div>
<h3 class="font-body-sm text-body-sm text-on-surface-variant">Total Impact</h3>
<p class="font-headline-lg text-headline-lg text-on-background mt-1">24 Lives</p>
</div>
</div>
<div class="glass-card rounded-xl p-6 flex flex-col justify-between group">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-tertiary/10 rounded-lg text-tertiary">
<span class="material-symbols-outlined">stars</span>
</div>
</div>
<div>
<h3 class="font-body-sm text-body-sm text-on-surface-variant">Karma Points</h3>
<p class="font-headline-lg text-headline-lg text-on-background mt-1">1,450</p>
</div>
</div>
<div class="glass-card rounded-xl p-6 flex flex-col justify-between group">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-secondary/10 rounded-lg text-secondary">
<span class="material-symbols-outlined">schedule</span>
</div>
</div>
<div>
<h3 class="font-body-sm text-body-sm text-on-surface-variant">Hours Volunteered</h3>
<p class="font-headline-lg text-headline-lg text-on-background mt-1">38 hrs</p>
<div class="w-full bg-surface-variant h-2 rounded-full mt-3 overflow-hidden">
<div class="bg-secondary h-full rounded-full w-[70%]"></div>
</div>
<p class="font-label-caps text-[10px] text-outline mt-1 text-right">Goal: 50 hrs</p>
</div>
</div>
</div>
<!-- Main Layout Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Col: Activity -->
<div class="lg:col-span-2 space-y-6">
<div class="flex justify-between items-center">
<h2 class="font-title-md text-title-md text-on-background">Recent Activity</h2>
<a class="font-body-sm text-body-sm text-primary hover:underline" href="{{ route('browse-donations') }}">View All</a>
</div>
<div class="glass-card rounded-xl p-2">
<!-- Item 1 -->
<div class="flex items-start gap-4 p-4 hover:bg-surface-variant/30 rounded-lg transition-colors cursor-pointer border-b border-outline-variant/10 last:border-0">
<div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">local_shipping</span>
</div>
<div class="flex-1 min-w-0">
<p class="font-body-sm text-body-sm text-on-background"><span class="font-semibold">Grocery Delivery</span> completed for Sarah M.</p>
<p class="font-body-sm text-[12px] text-outline mt-1">2 hours ago • Downtown Area</p>
<div class="mt-2 flex gap-2">
<span class="font-label-caps text-[10px] px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-full">Delivery</span>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="flex items-start gap-4 p-4 hover:bg-surface-variant/30 rounded-lg transition-colors cursor-pointer border-b border-outline-variant/10 last:border-0">
<div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">volunteer_activism</span>
</div>
<div class="flex-1 min-w-0">
<p class="font-body-sm text-body-sm text-on-background">Your donation of <span class="font-semibold">Winter Coats</span> was accepted by City Shelter.</p>
<p class="font-body-sm text-[12px] text-outline mt-1">Yesterday</p>
</div>
</div>
<!-- Item 3 -->
<div class="flex items-start gap-4 p-4 hover:bg-surface-variant/30 rounded-lg transition-colors cursor-pointer border-b border-outline-variant/10 last:border-0">
<div class="w-10 h-10 rounded-full bg-tertiary-container text-on-tertiary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">forum</span>
</div>
<div class="flex-1 min-w-0">
<p class="font-body-sm text-body-sm text-on-background"><span class="font-semibold">David K.</span> replied to your offer: Math Tutoring.</p>
<p class="font-body-sm text-[12px] text-outline mt-1">2 days ago</p>
</div>
</div>
</div>
</div>
<!-- Right Col: Upcoming & Notifications -->
<div class="space-y-6">
<div class="glass-card rounded-xl p-6 border-t-4 border-t-tertiary">
<h2 class="font-title-md text-title-md text-on-background mb-4">Upcoming Events</h2>
<div class="space-y-4">
<div class="flex gap-4">
<div class="flex flex-col items-center justify-center w-12 h-12 bg-surface-variant rounded-lg shrink-0">
<span class="font-label-caps text-label-caps text-outline">OCT</span>
<span class="font-title-md text-body-lg font-bold text-on-background">14</span>
</div>
<div>
<h4 class="font-title-md text-body-sm text-on-background">Community Garden Cleanup</h4>
<p class="font-body-sm text-[12px] text-outline mt-0.5">10:00 AM • Central Park</p>
</div>
</div>
<div class="flex gap-4">
<div class="flex flex-col items-center justify-center w-12 h-12 bg-surface-variant rounded-lg shrink-0">
<span class="font-label-caps text-label-caps text-outline">OCT</span>
<span class="font-title-md text-body-lg font-bold text-on-background">18</span>
</div>
<div>
<h4 class="font-title-md text-body-sm text-on-background">Food Bank Sorting</h4>
<p class="font-body-sm text-[12px] text-outline mt-0.5">2:00 PM • Hope Center</p>
</div>
</div>
</div>
<button class="w-full mt-6 py-2 border border-outline-variant/50 text-on-surface-variant rounded-lg font-body-sm text-body-sm hover:bg-surface transition-colors">Find More Events</button>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- Bottom Nav (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 w-full bg-surface/90 backdrop-blur-xl border-t border-white/10 z-50 px-4 py-2 flex justify-between items-center shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
<a class="flex flex-col items-center p-2 text-primary" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="font-label-caps text-[10px] mt-1">Home</span>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('ngo-directory') }}">
<span class="material-symbols-outlined">search</span>
<span class="font-label-caps text-[10px] mt-1">Explore</span>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant -mt-6" href="{{ route('create-post') }}">
<div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white shadow-lg">
<span class="material-symbols-outlined">add</span>
</div>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined">favorite</span>
<span class="font-label-caps text-[10px] mt-1">Impact</span>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined">person</span>
<span class="font-label-caps text-[10px] mt-1">Profile</span>
</a>
</nav>
@endsection
