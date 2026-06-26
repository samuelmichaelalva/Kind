@extends('layouts.stitch', ['bodyAttributes' => 'class="antialiased min-h-screen bg-background overflow-x-hidden"'])

@section('title', 'Volunteering - Kind Community Portal')

@section('head')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@@100..900&amp;family=Inter:ital,opsz,wght@@0,14..32,100..900;1,14..32,100..900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        body {
            background-color: #f9f9ff;
            color: #181c23;
        }
        
        /* Glassmorphism utilities */
        .glass-card {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .dark .glass-card {
            background-color: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-panel {
            background: linear-gradient(135deg, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0.4) 100%);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.05);
        }

        /* Ambient Shadows */
        .shadow-ambient {
            box-shadow: 0 20px 40px -10px rgba(0, 88, 188, 0.05);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #e0e2ed;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #c1c6d7;
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar (Mobile Only) -->
<nav class="md:hidden fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm transition-all" id="mobile-nav">
<div class="font-display-lg text-headline-lg font-bold text-primary">Kind</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">mail</span>
</button>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">notifications</span>
</button>
<img alt="User profile with active status" class="w-8 h-8 rounded-full object-cover border-2 border-white shadow-sm" data-alt="A small circular avatar showing a young diverse person smiling softly in soft natural lighting. Minimalist bright UI aesthetic. Professional headshot for a community app." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNyGTsDVZGh_DWRZCilrzhWW-oi2UH01Q5ZC9BCyy30FeWpFnurW-7iCD8A3pVfoCYQaYAj7-QckuYEAq7UvteHYVEuHxi8zzn-TjHV3o2t-qn-K6hxhC6vw6LuG-w4aDQs07tM-aSi7-AMIuVsyTDxN2o6n-ZW0Mp9hVLrNuIbhgYENHbakFPNLFAhzcNZMuECxF65m0kU1GXyJ5pH81fZPBBuoXLC-Km3_2ZHxqNDlCM_OU28A6b0Rl-d0xfj0rgwTchmyoDuQ"/>
</div>
</nav>
<div class="flex h-screen pt-16 md:pt-0">
<!-- SideNavBar (Desktop Only) -->
<aside class="hidden md:flex flex-col fixed left-0 top-0 h-full w-[240px] bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg p-base gap-stack-sm z-40">
<div class="p-4 mb-4">
<div class="font-display-lg text-headline-lg font-bold text-primary mb-6">Kind</div>
<div class="flex items-center gap-3 mb-6">
<img alt="Kind Community User" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm" data-alt="A small circular avatar showing a young diverse person smiling softly in soft natural lighting. Minimalist bright UI aesthetic. Professional headshot for a community app." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_cS2cdoXu0FCcbz5akzqgwZtIJBWXxzbF5TCG0mvL1R9NPN0p7GornGG5LEieLj6hF43yLOSRdq6FPPJTIexZWuzQ1xLL0T2mflKZUegXi6GBPEmLcW0VTy8uenjYx5CB7V75Lm1pPUnVZVuAms6vEUtwXNZAFWB-OUHwxOmu2Il0N0kwo9vtN-kjkJd2RPK9x9lNo8D2JanNhBLGQBmYFMGlhcVqgCyNQ28K_BiwLXZXIV3xgUg9lLm7JG-18cBgzQaazuwGNA"/>
<div>
<div class="font-title-md text-title-md text-on-surface">Community Dashboard</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Kindness in Action</div>
</div>
</div>
<button class="w-full bg-gradient-to-r from-primary to-tertiary text-white font-body-sm text-body-sm py-2 px-4 rounded-xl shadow-md hover:shadow-lg transition-all active:scale-95 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span>
                    New Request
                </button>
</div>
<nav class="flex-1 flex flex-col gap-1 overflow-y-auto px-2">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">dashboard</span>
                    Overview
                </a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">analytics</span>
                    Activity
                </a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">handshake</span>
                    My Requests
                </a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">volunteer_activism</span>
                    My Donations
                </a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-semibold transition-all font-body-sm text-body-sm scale-95 shadow-inner" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
                    Volunteering
                </a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">bookmark</span>
                    Saved
                </a>
</nav>
<div class="mt-auto p-2">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">settings</span>
                    Settings
                </a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 md:ml-[240px] p-4 md:p-10 overflow-y-auto max-w-[1440px] mx-auto w-full">
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-stack-lg">
<div>
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-2">Volunteer Opportunities</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Find local events where your time can make a real difference in the community. Join hands, make an impact.</p>
</div>
<div class="flex items-center gap-3 bg-surface-container-low rounded-xl p-1 border border-outline-variant/30 w-fit">
<button class="px-4 py-2 rounded-lg bg-white shadow-sm font-label-caps text-label-caps text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">view_list</span> List
                    </button>
<button class="px-4 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-colors font-label-caps text-label-caps flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">calendar_month</span> Calendar
                    </button>
</div>
</header>
<!-- Filters & Search (Quiet Inputs) -->
<div class="glass-panel p-4 rounded-2xl mb-stack-md flex flex-col md:flex-row gap-4 items-center">
<div class="relative w-full md:w-96">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-transparent border border-outline-variant rounded-xl font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline" placeholder="Search opportunities..." type="text"/>
</div>
<div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 w-full md:w-auto scrollbar-hide">
<button class="whitespace-nowrap px-4 py-1.5 rounded-full bg-primary/10 text-primary font-body-sm text-body-sm border border-primary/20 hover:bg-primary/20 transition-colors">All Types</button>
<button class="whitespace-nowrap px-4 py-1.5 rounded-full bg-surface-variant/30 text-on-surface-variant font-body-sm text-body-sm border border-transparent hover:bg-surface-variant/50 transition-colors">Environmental</button>
<button class="whitespace-nowrap px-4 py-1.5 rounded-full bg-surface-variant/30 text-on-surface-variant font-body-sm text-body-sm border border-transparent hover:bg-surface-variant/50 transition-colors">Food &amp; Shelter</button>
<button class="whitespace-nowrap px-4 py-1.5 rounded-full bg-surface-variant/30 text-on-surface-variant font-body-sm text-body-sm border border-transparent hover:bg-surface-variant/50 transition-colors">Education</button>
</div>
</div>
<!-- Bento Grid Layout for Opportunities -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter md:gap-stack-md">
<!-- Featured Opportunity (Large Card span 8) -->
<article class="glass-card rounded-2xl overflow-hidden col-span-1 md:col-span-8 shadow-ambient group flex flex-col md:flex-row h-full">
<div class="md:w-2/5 relative h-48 md:h-auto overflow-hidden">
<img alt="Food Bank Sorting" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A bright, airy photograph of diverse volunteers organizing fresh produce at a community food bank. Natural sunlight streaming through large windows. Clean, modern, optimistic UI aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDu9ljDhpu0csxApcxXx6tulmISM48lMN4VtXkvITkgP2AK_S88Y5orHOCD8Gpm1f75hXV5t0Ly8_TzZ8FaFjGAijF9OM2CqxA9BbBASlS55cIVekr53KcuKNgbPN91xwyiXiPip9jNT8rF1jr_15_LP0lLsmJG-dqv7VmHHMx4oxnyZOi6Xt973Da7NWKVVZwpZaz1zV3EdNwKZPDIAdaJAiSaTp_AzLVoBIn7U4ZXtIUOCnPra3umP_9a_DSXcCYsVAtsgFVKzw"/>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-primary uppercase tracking-wider shadow-sm">Urgent</span>
</div>
</div>
<div class="p-6 md:w-3/5 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-2">
<h2 class="font-title-md text-title-md text-on-surface">Weekend Food Bank Sorting &amp; Prep</h2>
<button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined">bookmark_border</span></button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6 line-clamp-2">Help us sort incoming donations and prepare weekend meal kits for local families facing food insecurity. Physical activity required.</p>
<div class="grid grid-cols-2 gap-4 mb-6">
<div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[20px] text-primary">calendar_today</span>
<span>Sat, Oct 24 • 9:00 AM</span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[20px] text-primary">location_on</span>
<span>Downtown Community Ctr</span>
</div>
</div>
</div>
<div>
<div class="flex justify-between text-xs font-semibold text-on-surface-variant mb-2">
<span>18 Volunteers Joined</span>
<span class="text-secondary">25 Needed</span>
</div>
<div class="w-full h-2 bg-surface-variant rounded-full overflow-hidden mb-4">
<div class="h-full bg-secondary rounded-full" style="width: 72%;"></div>
</div>
<div class="flex justify-between items-center">
<div class="flex -space-x-2">
<img alt="Volunteer" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="Small circular avatar, professional headshot, soft lighting, bright background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsGMbvTp8WWlhqi-cDOb5JQYBYt1H5ecyvUprdBbqGRLZEoyn1JhxrUpALjStcT742WZmkJPTPb5f7AJFIC1YCGo3HcyZOdpSiWEXBrCJNnG4ONGcD_xBifiQ6XnGvrj5NvgRIUAa8wLPZWtEZJi9XHwjhWN1ALMfwbewPQwzmI4X4sUXTsBt2gXDZ5hOjljCFwsSfZp0XnMkjMsCJH3FTTMY5jGL-H0Z-MbMGi0KpLduNJucP_c3P66OmctXVyu_ANuTyzhS1vg"/>
<img alt="Volunteer" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="Small circular avatar, professional headshot, soft lighting, bright background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvxiJhENDZc1rzi1YCx7tJ20tVQHJ4eOcnVC1WU-eKaN1QHB7iw728vf8sy3gBJQ6uGs9CwzHBDII9iuuz5XNUGduEZ3uCKI1U8F1dT8RGs7wnkoVFaos9AAHHXUZHrsMVRcXCpGZHrN_0vwXRq8EMhftjrITVkCQ3LgujihoDU6iIgucG5G9Xni8wiCt-TRlkNUgV6ULLkhF4w8oFf7OdYGuWwMxyctBnA2oyfqLuAFR82bajqrgAgM21CtO6Bjnos2DHn_yTCg"/>
<img alt="Volunteer" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="Small circular avatar, professional headshot, soft lighting, bright background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUgcGMEgmVvconq-_9ziczZMMd17HUoS5i0b3epcCqcUrTqaLwqaAqKhB7KBTIBsPOVYzGAANML7KK_Io8lZzrB6MxBnN0F8Ze-K0hk5SfhSEsxz2Zd2kVU5_4u-lUpl0KkaaN-fiZu9rKQDaatvn27kJzEVSTnMvlxW4Qt1LjVXR0XdAvmvU68WTekVN9x7GHY9hgSGPER9mDPAkcFMbOZTan4ECDxeRq0LF_N9h7RmJY4_HCRMHpvByBYqmYNCS1gdcmg0N-wg"/>
<div class="w-8 h-8 rounded-full border-2 border-white bg-surface-container flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+15</div>
</div>
<button class="bg-gradient-to-r from-primary to-tertiary text-white font-body-sm text-body-sm py-2 px-6 rounded-xl shadow-md hover:shadow-lg transition-all active:scale-95">
                                    Join Event
                                </button>
</div>
</div>
</div>
</article>
<!-- Map Widget (Span 4) -->
<div class="glass-card rounded-2xl overflow-hidden col-span-1 md:col-span-4 shadow-ambient p-1 flex flex-col">
<div class="relative flex-1 rounded-xl overflow-hidden min-h-[250px] bg-surface-container-highest">
<img alt="Map view of opportunities" class="w-full h-full object-cover opacity-80" data-alt="A clean, minimalist map UI showing a city layout with subtle blue and green tones, fitting a premium digital interface." data-location="Seattle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdEMv8Z46V-90Wd6rRmO_0A4XGjHcK-WaJxgZIHDaQrvqe0Hjc_08ts4rDubIU4GYM9ESnT1tlXzK2XS3-sc65_KWcAXBoJ8s2YiZg4vM4xqixfiHB1UU8K8ItpXY2u_4LOeG5BNlGIFSH_9vavU50nv4LmXgK4IYWOKZUlJMCNdyImKtrI7B1wHNIinh0pfpBAjEG0ioG2zFn1uLXldL52smI-unihlecJVDaezYO7vyqHd85JFOXCVHbgx3sEt0yTr8FV_LY1w"/>
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<span class="material-symbols-outlined text-primary text-4xl drop-shadow-md">location_on</span>
</div>
</div>
<div class="p-4 bg-white/50 backdrop-blur-md rounded-b-xl">
<h3 class="font-title-md text-title-md text-on-surface mb-1">Opportunities Near You</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">5 events within 10 miles</p>
</div>
</div>
<!-- Standard Opportunity Card (Span 4) -->
<article class="glass-card rounded-2xl p-5 col-span-1 md:col-span-4 shadow-sm hover:shadow-ambient transition-all flex flex-col justify-between group">
<div>
<div class="flex justify-between items-start mb-3">
<span class="bg-secondary-container/50 text-on-secondary-container px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wide">Environment</span>
<button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined">bookmark_border</span></button>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">City Park Autumn Cleanup</h3>
<div class="flex flex-col gap-2 mb-4 text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">event</span> Sun, Oct 25 • 10:00 AM</div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">pin_drop</span> Riverside Park North</div>
</div>
</div>
<div>
<div class="flex justify-between text-[11px] font-medium text-on-surface-variant mb-1">
<span>8 Joined</span>
<span>15 Needed</span>
</div>
<div class="w-full h-1.5 bg-surface-variant rounded-full overflow-hidden mb-4">
<div class="h-full bg-secondary rounded-full" style="width: 53%;"></div>
</div>
<button class="w-full bg-transparent border border-outline-variant text-on-surface font-body-sm text-body-sm py-2 rounded-xl hover:bg-surface-variant/20 hover:border-primary transition-colors">
                            View Details
                        </button>
</div>
</article>
<!-- Standard Opportunity Card (Span 4) -->
<article class="glass-card rounded-2xl p-5 col-span-1 md:col-span-4 shadow-sm hover:shadow-ambient transition-all flex flex-col justify-between group">
<div>
<div class="flex justify-between items-start mb-3">
<span class="bg-tertiary-container/30 text-on-tertiary-container px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wide">Education</span>
<button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined">bookmark_border</span></button>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">After-School Math Tutoring</h3>
<div class="flex flex-col gap-2 mb-4 text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">event</span> Tue, Oct 27 • 3:30 PM</div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">pin_drop</span> Lincoln High Library</div>
</div>
</div>
<div>
<div class="flex justify-between text-[11px] font-medium text-on-surface-variant mb-1">
<span>4 Joined</span>
<span>5 Needed</span>
</div>
<div class="w-full h-1.5 bg-surface-variant rounded-full overflow-hidden mb-4">
<div class="h-full bg-secondary rounded-full" style="width: 80%;"></div>
</div>
<button class="w-full bg-transparent border border-outline-variant text-on-surface font-body-sm text-body-sm py-2 rounded-xl hover:bg-surface-variant/20 hover:border-primary transition-colors">
                            View Details
                        </button>
</div>
</article>
<!-- Standard Opportunity Card (Span 4) -->
<article class="glass-card rounded-2xl p-5 col-span-1 md:col-span-4 shadow-sm hover:shadow-ambient transition-all flex flex-col justify-between group">
<div>
<div class="flex justify-between items-start mb-3">
<span class="bg-error-container/50 text-on-error-container px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wide">Community</span>
<button class="text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined">bookmark_border</span></button>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Senior Center Tech Support</h3>
<div class="flex flex-col gap-2 mb-4 text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">event</span> Wed, Oct 28 • 1:00 PM</div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">pin_drop</span> Oakridge Senior Living</div>
</div>
</div>
<div>
<div class="flex justify-between text-[11px] font-medium text-on-surface-variant mb-1">
<span>2 Joined</span>
<span>8 Needed</span>
</div>
<div class="w-full h-1.5 bg-surface-variant rounded-full overflow-hidden mb-4">
<div class="h-full bg-secondary rounded-full" style="width: 25%;"></div>
</div>
<button class="w-full bg-transparent border border-outline-variant text-on-surface font-body-sm text-body-sm py-2 rounded-xl hover:bg-surface-variant/20 hover:border-primary transition-colors">
                            View Details
                        </button>
</div>
</article>
</div>
<div class="mt-stack-lg flex justify-center pb-20 md:pb-0">
<button class="px-6 py-3 rounded-full border border-outline-variant text-on-surface font-body-sm text-body-sm hover:bg-surface-variant/30 transition-colors flex items-center gap-2">
                    Load More Opportunities <span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
</div>
</main>
</div>
@endsection
