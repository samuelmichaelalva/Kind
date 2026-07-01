@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background min-h-screen font-body-lg text-body-lg"'])

@section('title', 'Donations - Kind')

@section('head')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@@400;600;700&amp;family=Geist:wght@@600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-container": "#fffbff",
                        "on-secondary-fixed": "#002107",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#00531c",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed": "#0c006b",
                        "surface-container": "#ecedf9",
                        "on-secondary-container": "#00732a",
                        "on-primary-fixed": "#001a41",
                        "on-background": "#181c23",
                        "tertiary": "#4a47d2",
                        "primary": "#0058bc",
                        "inverse-primary": "#adc6ff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e6e8f3",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#181c23",
                        "outline-variant": "#c1c6d7",
                        "surface": "#f9f9ff",
                        "on-surface-variant": "#414755",
                        "primary-container": "#0070eb",
                        "error": "#ba1a1a",
                        "on-primary-container": "#fefcff",
                        "surface-bright": "#f9f9ff",
                        "tertiary-fixed-dim": "#c2c1ff",
                        "on-tertiary-fixed-variant": "#332dbc",
                        "secondary": "#006e28",
                        "surface-dim": "#d8d9e5",
                        "surface-tint": "#005bc1",
                        "surface-container-low": "#f1f3fe",
                        "background": "#f9f9ff",
                        "surface-container-highest": "#e0e2ed",
                        "inverse-surface": "#2d3039",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-fixed": "#d8e2ff",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e0e2ed",
                        "inverse-on-surface": "#eef0fc",
                        "secondary-container": "#6ffb85",
                        "on-primary-fixed-variant": "#004493",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#e2dfff",
                        "secondary-fixed-dim": "#53e16f",
                        "secondary-fixed": "#72fe88",
                        "outline": "#717786",
                        "tertiary-container": "#6462ec"
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
                        "container-padding": "24px",
                        "stack-md": "24px",
                        "stack-lg": "48px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "title-md": ["Inter"],
                        "label-caps": ["Geist"],
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-sm": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "title-md": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        .glass-card {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark .glass-card {
            background-color: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm">
<div class="flex items-center gap-stack-md">
<span class="font-display-lg text-headline-lg font-bold text-primary">Kind</span>
</div>
<div class="hidden md:flex flex-1 max-w-md mx-stack-md">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full bg-surface-container text-on-surface rounded-full py-2 pl-10 pr-4 border border-outline-variant/30 focus:border-primary focus:ring-1 focus:ring-primary outline-none font-body-sm text-body-sm transition-all" placeholder="Search donations..." type="text"/>
</div>
</div>
<ul class="hidden md:flex items-center gap-stack-md font-body-lg text-body-lg">
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('dashboard') }}">Home</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('create-post') }}">Requests</a></li>
<li><a class="text-primary font-semibold border-b-2 border-primary pb-5 pt-5 opacity-80 transition-all" href="{{ route('browse-donations') }}">Donations</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('volunteer-hub') }}">Volunteer</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('ngo-directory') }}">NGOs</a></li>
</ul>
<div class="flex items-center gap-stack-sm">
<a class="p-2 text-on-surface-variant hover:text-primary transition-colors" href="{{ route('messages') }}">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
</a>
<a class="p-2 text-on-surface-variant hover:text-primary transition-colors" href="{{ route('notifications') }}">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</a>
<img alt="User profile with active status" class="w-8 h-8 rounded-full border border-outline-variant/30 object-cover" data-alt="A small, circular avatar image showing a young, friendly woman with short brown hair smiling warmly. She is in a well-lit, minimal studio environment with a soft, out-of-focus background. High quality photography, modern style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKlhuBEdTkTKDLSSJdarKrCBXl2BDE2kdJONYn43bQ_4cD2E5juDwBvvrIANXwuRhAdPAIUGNgwU_26sYEks2eDlhAP6iY7IbAeuijKY9esE2zoRDM93Egw4Y4Vb0fsC9hB7p0-ZUcxtGwUmnjKYwS8lu8I3hauXkdlwv2eGw6frzxG-Md5ZTcm0xH42l2CYLwyEBB44H4xzSjLJnglY7ixwRZYCOnuYdDv-A1A6_SJ4x83jqIGTPk6exQ0EUTWMTarghqfh6qWw"/>
</div>
</nav>
<div class="flex pt-16 h-screen">
<!-- SideNavBar -->
<aside class="hidden md:flex fixed left-0 top-16 h-[calc(100vh-64px)] w-[240px] flex-col p-base gap-stack-sm bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg z-40">
<div class="px-3 py-4 mb-2">
<h2 class="font-title-md text-title-md text-on-surface">Community Dashboard</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kindness in Action</p>
</div>
<nav class="flex-1 flex flex-col gap-1 font-body-sm text-body-sm text-primary">
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span> Overview
                </a>
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg" href="{{ route('notifications') }}">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span> Activity
                </a>
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg" href="{{ route('create-post') }}">
<span class="material-symbols-outlined" data-icon="handshake">handshake</span> My Requests
                </a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary font-semibold rounded-lg scale-95 transition-transform" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined fill" data-icon="volunteer_activism">volunteer_activism</span> My Donations
                </a>
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg" href="{{ route('volunteer-hub') }}">
<span class="material-symbols-outlined" data-icon="groups">groups</span> Volunteering
                </a>
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg" href="{{ route('messages') }}">
<span class="material-symbols-outlined" data-icon="bookmark">bookmark</span> Saved
                </a>
<a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mt-auto" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined" data-icon="settings">settings</span> Settings
                </a>
</nav>
<div class="mt-4 p-3">
<a class="w-full py-2 bg-gradient-to-r from-primary to-tertiary text-on-primary rounded-lg font-body-sm text-body-sm font-semibold hover:shadow-md transition-shadow block text-center" href="{{ route('create-post') }}">
                    New Request
                </a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 md:ml-[240px] p-container-padding overflow-y-auto">
<div class="max-w-7xl mx-auto">
<!-- Header & Filters -->
<header class="mb-stack-lg flex flex-col md:flex-row md:items-end justify-between gap-stack-md">
<div>
<h1 class="font-headline-lg text-headline-lg mb-2">Available Donations</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Browse items generously offered by the community. Claim what you need or share with someone who does.</p>
</div>
<div class="flex flex-wrap gap-base">
<button class="px-4 py-1.5 rounded-full bg-primary-container text-on-primary-container font-label-caps text-label-caps border border-primary/20">All Items</button>
<button class="px-4 py-1.5 rounded-full bg-surface-container text-on-surface font-label-caps text-label-caps border border-outline-variant/30 hover:border-primary/50 transition-colors">Clothes</button>
<button class="px-4 py-1.5 rounded-full bg-surface-container text-on-surface font-label-caps text-label-caps border border-outline-variant/30 hover:border-primary/50 transition-colors">Books</button>
<button class="px-4 py-1.5 rounded-full bg-surface-container text-on-surface font-label-caps text-label-caps border border-outline-variant/30 hover:border-primary/50 transition-colors">Electronics</button>
<button class="px-4 py-1.5 rounded-full bg-surface-container text-on-surface font-label-caps text-label-caps border border-outline-variant/30 hover:border-primary/50 transition-colors">Furniture</button>
</div>
</header>
<!-- Bento Grid for Donations -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
@forelse($donations as $donation)
<article class="glass-card rounded-xl overflow-hidden flex flex-col">
<div class="relative h-48 w-full bg-surface-container">
<img class="w-full h-full object-cover" src="{{ $donation->image_path ? asset('storage/'. $donation->image_path) : 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=900&q=80' }}"/>
<div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-2 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<span class="font-label-caps text-[10px] font-semibold text-on-surface">{{ $donation->status?->value ?? 'Available' }}</span>
</div>
</div>
<div class="p-4 flex flex-col flex-1 gap-2">
<div class="flex justify-between items-start">
<h3 class="font-title-md text-title-md line-clamp-1">{{ $donation->title }}</h3>
<button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined">favorite_border</span></button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-2">{{ $donation->description }}</p>
<div class="flex items-center gap-2 mt-auto pt-2 border-t border-outline-variant/20">
<span class="material-symbols-outlined text-outline text-[16px]">location_on</span>
<span class="font-body-sm text-[12px] text-on-surface-variant">{{ $donation->location ?? 'Community pickup' }}</span>
</div>
<a class="mt-3 w-full py-2 border border-primary text-primary rounded-lg font-body-sm text-body-sm font-semibold hover:bg-primary/5 transition-colors text-center" href="{{ route('donations.edit', $donation) }}">Claim Item</a>
</div>
</article>
@empty
<article class="glass-card rounded-xl overflow-hidden flex flex-col col-span-full p-6">
<p class="font-body-lg text-body-lg text-on-surface-variant">No donations yet. Share something useful with the community.</p>
</article>
@endforelse
</div>
</div>
</main>
</div>
@endsection
