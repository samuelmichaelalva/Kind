@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background antialiased min-h-screen font-body-lg"'])

@section('title', 'Kind - Home Feed')

@section('head')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@@100..900&family=Inter:wght@@100..900&display=swap" rel="stylesheet"/>
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
        .glass-panel {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark .glass-panel {
            background-color: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .chip {
            border-radius: 100px;
            padding: 4px 12px;
            display: inline-flex;
            align-items: center;
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar (Web) -->
<nav aria-label="Top Navigation" class="hidden md:flex fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm transition-all">
<div class="flex items-center gap-stack-md">
<span class="font-display-lg text-headline-lg font-bold text-primary">Kind</span>
<div class="flex items-center gap-base">
<a class="text-primary font-semibold border-b-2 border-primary pb-1 opacity-80 transition-all font-body-lg text-body-lg" href="#">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Requests</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Donations</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Volunteer</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">NGOs</a>
</div>
</div>
<div class="flex items-center gap-base">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="pl-10 pr-4 py-2 bg-transparent border border-outline-variant rounded-full text-body-sm font-body-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none w-64 transition-all" placeholder="Search community..." type="text"/>
</div>
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">mail</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<img alt="User profile with active status" class="w-8 h-8 rounded-full ml-2 border border-outline-variant object-cover" data-alt="A small circular avatar of a user profile with an active status indicator, clean and minimal aesthetic, bright light mode vibe, realistic photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgtKmoPlTzx5yqGH-t_1JCjU9esg95gLdxWkIoIOVXuWvIuK5kYFBYXyt5j2lHQYcFxMWDEP0o43eSqFW_eouPHOLvDjTzTSxcYaInNpDuT3_Gy7iQTbLYullbDFwXzN0aPXkeH5syn7JBbpmEe8mpvg-iJ6vNFUjVMmX58_563Nv1Rp6A7XfXY8ZdIXWh4xbaMOn9yyJjdEZlBrUvNk3oA87Jh1KPQnqduahuFP2ewR0XQBH2ioz5dxT70x-w1snVZ9KvOOpBeQ"/>
</div>
</nav>
<!-- SideNavBar (Mobile / Tablet might use bottom, but we'll show desktop structure mainly with fluid grid) -->
<div class="flex pt-16 h-screen overflow-hidden">
<!-- Sidebar (Hidden on mobile) -->
<aside class="hidden lg:flex flex-col w-[240px] bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg p-base gap-stack-sm flex-shrink-0 h-full overflow-y-auto">
<div class="p-4 mb-4">
<h2 class="font-title-md text-title-md text-on-surface">Community Dashboard</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Kindness in Action</p>
</div>
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary font-semibold rounded-lg scale-95 transition-transform font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">dashboard</span>
                Overview
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">analytics</span>
                Activity
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">handshake</span>
                My Requests
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">volunteer_activism</span>
                My Donations
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">groups</span>
                Volunteering
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">bookmark</span>
                Saved
            </a>
<div class="mt-auto pt-4 border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
<button class="w-full mt-4 bg-gradient-to-r from-primary to-tertiary text-on-primary font-title-md text-title-md py-3 rounded-lg shadow-sm hover:opacity-90 transition-opacity">
                    New Request
                </button>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 overflow-y-auto px-4 md:px-container-padding py-stack-md bg-surface-container-lowest">
<div class="max-w-4xl mx-auto">
<!-- Filters / Search header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-stack-md gap-4">
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">Community Feed</h1>
<div class="flex gap-2 flex-wrap">
<button class="chip bg-primary/10 text-primary border border-primary/20 font-label-caps text-label-caps">All</button>
<button class="chip bg-surface text-on-surface-variant border border-outline-variant font-label-caps text-label-caps hover:bg-surface-variant transition-colors">Requests</button>
<button class="chip bg-surface text-on-surface-variant border border-outline-variant font-label-caps text-label-caps hover:bg-surface-variant transition-colors">Donations</button>
<button class="chip bg-surface text-on-surface-variant border border-outline-variant font-label-caps text-label-caps hover:bg-surface-variant transition-colors">Events</button>
<button class="p-2 border border-outline-variant rounded-full text-on-surface-variant hover:bg-surface-variant transition-colors flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">tune</span>
</button>
</div>
</div>
<!-- Feed Grid (Bento-ish/Staggered) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
<!-- Card 1: Help Request (Blue) -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col p-6 shadow-sm hover:shadow-md transition-shadow relative">
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="relative">
<img alt="User avatar" class="w-10 h-10 rounded-full object-cover" data-alt="A portrait of a tired but hopeful young mother, bright soft lighting, clean minimalist setting, neutral tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAC8d1TTCt5GKaMmCYtgo7SZkqCZMJQpfsKs6tGAw6j9nzJxUxSChDVH9XgfZSE5tv3N2sGLexfeZ39MqdmDv6HYZZKh3mH42b9XmdG29CUPQ4jqQbjRnD8Ga4x8PdsyR5IFtpdYVv0idyDzyNQ5G90q9zgjaFQ4HkjoNKyYU1OAhn8oq5K24lEm3Itoipt_s5ubUTZhdH4BtXUlSCspqT9fdShKlEERd_1LI5J3w9mn5juH85vRsFN-ZBin3IsGxblMUWEvTkY_A"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-secondary-fixed rounded-full border-2 border-surface"></span>
</div>
<div>
<p class="font-title-md text-title-md text-on-surface text-[14px]">Sarah Jenkins</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">2 hours ago</p>
</div>
</div>
<span class="chip bg-primary/10 text-primary font-label-caps text-label-caps text-[10px]">Help Request</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">I need a stroller for a toddler</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-4 flex-1">My old stroller broke and I need something reliable for my 2-year-old. Can pick up anywhere in the north side.</p>
<div class="flex items-center gap-4 text-on-surface-variant font-body-sm text-body-sm text-[12px] mb-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
<span>Northwood, 2 mi away</span>
</div>
</div>
<div class="mt-auto flex gap-2">
<button class="flex-1 bg-primary text-on-primary py-2 rounded-lg font-body-sm text-body-sm font-semibold hover:opacity-90 transition-opacity">Offer Help</button>
<button class="p-2 border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined">bookmark_border</span>
</button>
<button class="p-2 border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined">share</span>
</button>
</div>
</article>
<!-- Card 2: Donation (Green) -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col p-6 shadow-sm hover:shadow-md transition-shadow relative">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary"></div>
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<img alt="User avatar" class="w-10 h-10 rounded-full object-cover" data-alt="A portrait of an older gentleman with glasses, smiling warmly, bright minimalist office background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA0QAorMthY_f5uDHt7evLLe4H2D_hZI6WzsfgJzN7aqf6Lv7UULR9-2TpJkZghZV0d1QWxMzot_Vum0qHGiG6G1YXgqDvcZCEyN7umX2oSdQxSJy7ZLcHBxpEf1WLC8tgnYwYs2D_F6qc7wMXbuAiN8EdPuTbzQMEPPSck0HEkb6aKzJz2UkMthX5TxaMH7sN6c1iLvNPbVvbKHN270z6GD-krgaH0JbsZY_sIVdFe_0t3jCayhPy74y9GzhIf0oR260yr-NudA"/>
<div>
<p class="font-title-md text-title-md text-on-surface text-[14px]">Marcus Thorne</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">5 hours ago</p>
</div>
</div>
<span class="chip bg-secondary/10 text-secondary font-label-caps text-label-caps text-[10px]">Donation</span>
</div>
<div class="mb-4 h-32 rounded-lg overflow-hidden">
<img alt="Textbooks" class="w-full h-full object-cover" data-alt="A stack of clean, well-maintained college textbooks on a light wooden desk, bright sunny lighting, minimalist aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeumHk9Bz1etPO7YgiSjwfWc-ZCRSN3FEzPMiYA7SHtAI5gAEvyQLn0zvS3cVHpA4w9kzP7_PbVEwJD7H4VCWcqjgo-nqHIm3hnKCDnA1ej0P28zLKxuMa5V7y-kI-hEG0T39Bobv228Qel_fbtTngyRK6VazmzG_kic1px9YNaKZdVz7KDh5dpf2MXxXmgVMGASMzUNvu5Ca78kRnka6QFcPkZFL0b8agVd7HFQLSAvvS3QEfg9wkj0JhDVQcdpW2KvHSIfCabg"/>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Giving away Biology Textbooks</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-4 flex-1">Intro level biology textbooks from last semester. Perfect condition. Hoping they go to a student in need.</p>
<div class="mt-auto flex gap-2">
<button class="flex-1 bg-surface border border-outline-variant text-on-surface py-2 rounded-lg font-body-sm text-body-sm font-semibold hover:bg-surface-variant transition-colors">Claim</button>
<button class="p-2 border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined">bookmark_border</span>
</button>
</div>
</article>
<!-- Card 3: Volunteer Event (Indigo) -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col p-6 shadow-sm hover:shadow-md transition-shadow relative md:col-span-2 lg:col-span-1">
<div class="absolute top-0 left-0 w-full h-1 bg-tertiary"></div>
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container font-title-md text-title-md">
                                    EC
                                </div>
<div>
<p class="font-title-md text-title-md text-on-surface text-[14px]">EcoCoast</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">Community Group</p>
</div>
</div>
<span class="chip bg-tertiary/10 text-tertiary font-label-caps text-label-caps text-[10px]">Volunteer Event</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Monthly Beach Clean-up</h3>
<div class="bg-surface-container-low rounded-lg p-3 mb-4 flex flex-col gap-2">
<div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[18px] text-tertiary">calendar_today</span>
<span>Saturday, 9:00 AM - 12:00 PM</span>
</div>
<div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[18px] text-tertiary">location_on</span>
<span>Sunny Cove Beach</span>
</div>
<div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[18px] text-tertiary">group</span>
<span>12/30 Volunteers Registered</span>
</div>
</div>
<div class="mt-auto flex gap-2">
<button class="flex-1 bg-tertiary text-on-primary py-2 rounded-lg font-body-sm text-body-sm font-semibold hover:opacity-90 transition-opacity">Sign Up</button>
</div>
</article>
<!-- Card 4: NGO Campaign (Teal/Secondary-Fixed) -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col p-6 shadow-sm hover:shadow-md transition-shadow relative">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary-fixed-dim"></div>
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface border border-outline-variant flex items-center justify-center">
<span class="material-symbols-outlined text-secondary-fixed-dim">menu_book</span>
</div>
<div>
<p class="font-title-md text-title-md text-on-surface text-[14px]">Friends of the Library</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">Verified NGO</p>
</div>
</div>
<span class="chip bg-secondary-fixed/20 text-on-secondary-fixed-variant font-label-caps text-label-caps text-[10px]">Campaign</span>
</div>
<h3 class="font-title-md text-title-md text-on-surface mb-2">Save the Local Library Fund</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-4 flex-1">We need to raise funds to repair the roof before winter. Every little bit helps keep our community hub open.</p>
<div class="mb-4">
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-on-surface font-semibold">$4,500 raised</span>
<span class="text-on-surface-variant">of $10,000 goal</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-2">
<div class="bg-secondary-fixed-dim h-2 rounded-full" style="width: 45%"></div>
</div>
</div>
<div class="mt-auto flex gap-2">
<button class="flex-1 bg-surface border border-outline-variant text-on-surface py-2 rounded-lg font-body-sm text-body-sm font-semibold hover:bg-surface-variant transition-colors">Donate</button>
<button class="p-2 border border-outline-variant rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined">share</span>
</button>
</div>
</article>
</div>
</div>
</main>
</div>
@endsection
