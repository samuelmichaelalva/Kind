@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background font-body-lg antialiased min-h-screen flex"'])

@section('title', 'Profile - Kind')

@section('head')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "body-sm": [
                            "Inter"
                    ],
                    "headline-lg-mobile": [
                            "Inter"
                    ],
                    "headline-lg": [
                            "Inter"
                    ],
                    "title-md": [
                            "Inter"
                    ],
                    "label-caps": [
                            "Geist"
                    ],
                    "display-lg": [
                            "Inter"
                    ],
                    "body-lg": [
                            "Inter"
                    ]
            },
            "fontSize": {
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
                    ],
                    "headline-lg": [
                            "32px",
                            {
                                    "lineHeight": "1.2",
                                    "letterSpacing": "-0.01em",
                                    "fontWeight": "600"
                            }
                    ],
                    "title-md": [
                            "20px",
                            {
                                    "lineHeight": "1.4",
                                    "fontWeight": "600"
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
                    "display-lg": [
                            "48px",
                            {
                                    "lineHeight": "1.1",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                            }
                    ],
                    "body-lg": [
                            "16px",
                            {
                                    "lineHeight": "1.6",
                                    "fontWeight": "400"
                            }
                    ]
            }
    },
        },
      }
    </script>
<style>
        .glass-card {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }
        .dark .glass-card {
            background-color: rgba(24, 28, 35, 0.7);
        }
        
        .progress-bar-track {
            background-color: rgba(0, 110, 40, 0.15); /* secondary green with opacity */
        }
        .progress-bar-fill {
            background-color: #006e28; /* secondary green */
        }
    </style>
@endsection

@section('content')
<!-- SideNavBar (Desktop Only) -->
<nav class="hidden md:flex bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg fixed left-0 h-full w-[240px] fixed left-0 top-16 h-[calc(100vh-64px)] w-[240px] flex flex-col p-base gap-stack-sm z-40">
<div class="px-container-padding py-stack-md mb-stack-sm">
<h1 class="font-title-md text-title-md text-on-surface">Community Dashboard</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kindness in Action</p>
</div>
<div class="flex flex-col gap-2 px-base flex-1 overflow-y-auto">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">dashboard</span>
<span class="font-body-sm text-body-sm">Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">analytics</span>
<span class="font-body-sm text-body-sm">Activity</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">handshake</span>
<span class="font-body-sm text-body-sm">My Requests</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">volunteer_activism</span>
<span class="font-body-sm text-body-sm">My Donations</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">groups</span>
<span class="font-body-sm text-body-sm">Volunteering</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">bookmark</span>
<span class="font-body-sm text-body-sm">Saved</span>
</a>
<!-- Active Tab: Profile/Settings -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary font-semibold rounded-lg scale-95 transition-transform" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
<span class="font-body-sm text-body-sm">Settings</span>
</a>
</div>
<div class="px-base mt-auto mb-stack-md">
<button class="w-full bg-gradient-to-r from-primary to-tertiary text-on-primary font-body-sm text-body-sm py-3 rounded-[12px] shadow-sm hover:opacity-90 transition-opacity">
                New Request
            </button>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 md:ml-[240px] pt-16 flex flex-col relative w-full">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm transition-all md:w-[calc(100%-240px)] md:left-[240px]">
<!-- Mobile Menu Toggle (Hidden on Desktop) -->
<button class="md:hidden text-primary hover:opacity-80 transition-all mr-4">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
<!-- Brand -->
<div class="flex items-center">
<span class="font-display-lg text-headline-lg font-bold text-primary">Kind</span>
</div>
<!-- Navigation Links (Hidden on Mobile) -->
<div class="hidden md:flex flex-1 justify-center items-center gap-8 h-full">
<a class="h-full flex items-center text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Home</a>
<a class="h-full flex items-center text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Requests</a>
<a class="h-full flex items-center text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Donations</a>
<a class="h-full flex items-center text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">Volunteer</a>
<a class="h-full flex items-center text-on-surface-variant hover:text-primary transition-colors font-body-lg text-body-lg" href="#">NGOs</a>
</div>
<!-- Trailing Icons -->
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">mail</span>
</button>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-8 h-8 rounded-full bg-surface-variant overflow-hidden border-2 border-transparent hover:border-primary transition-colors cursor-pointer ml-2 relative">
<img alt="User profile with active status" class="w-full h-full object-cover" data-alt="A close up, high quality headshot of a diverse individual smiling warmly. The lighting is soft and natural, suggesting a bright sunny day. The background is softly blurred out, emphasizing the approachable and friendly expression of the subject. Premium light-mode aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkhgSiBNd39KrhAAjZrckR9REpLdWt5DgUPbuzJnLEhApwRkDY_fP9CVDM1i8OEmXkF0yPT0saczWi0hhzAuT5F4J1dzk16irlFAj3SOXSQSNDXLfd0vNSuHMkO5LUhdJuUu9X-CB9TsgD4T5GSEcB0tykZKCjLkbEfeJRKCciJvvdrcg4le-IdnrlWeKj2LCAy_D2X3hNGZxuVHIPl8D0L6Y8nyESX0zgvefx5nHgjvaLz63619kUsSBpEY4QOUYtryDd4W2Xw"/>
<div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-secondary-fixed rounded-full border-2 border-surface"></div>
</div>
</div>
</nav>
<!-- Cover Photo & Profile Info -->
<section class="relative w-full h-[409px] min-h-[300px] flex-shrink-0">
<div class="absolute inset-0 w-full h-full" data-alt="A sweeping, cinematic landscape photo taken at golden hour. The image features rolling green hills in the foreground and majestic mountains in the distance under a vast, colorful sky with soft pink and orange clouds. The scene conveys a sense of expansive possibility and calm capability. High-end, pristine photography style." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDwQFlXzTognzCba_88pI_WaOXsb2iRRgQ_ARiceZE48Et96o6zKddXF9RO96TKqH63GdeleLUX1Z6IryhFBGtvZh6yJu7cf7oylmJDQ4IbbXxQvcZXnUfzBP3E3Kfawjh9XR3u0jHdhm0cLHZWG90pmeuT80wsdF4Eoh1jvbC3MowXlKRCtvECp0xLtqA-qHMV7XNQ-VEAGS4rPb2lC2y2Jo1iIYgbTb397KlTSEcgIP2wnvV9zQg1YvNheZ4r2sL6Mala5Wnprw')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-80"></div>
<div class="absolute -bottom-24 left-0 w-full px-container-padding md:px-10 max-w-[1200px] mx-auto z-10 flex flex-col md:flex-row items-end gap-stack-md">
<div class="relative w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-background overflow-hidden shadow-sm flex-shrink-0">
<img alt="Profile Image" class="w-full h-full object-cover" data-alt="A close up, high quality headshot of a diverse individual smiling warmly. The lighting is soft and natural, suggesting a bright sunny day. The background is softly blurred out, emphasizing the approachable and friendly expression of the subject. Premium light-mode aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZyfn6bweYQ0Y3X8K4vBQM8KLs37ASnZafTgagHApAqPYnyg2iWLrKDLQQ-I-q3siVBpxF3_j5RSKQZLbe5ANkl0CRWHO09It4MjkYJDKw1d_Yvk8V0BQEQJl5IFMJdpXr5ndrRCJG9BzGDk3S4BwixhfgtO3lIw6EQ876Gvow3lzcLDQgQe9t08oGzzzucL7lJ7dSUXdAb4CfNZq7sYZ8vTRaYT5tn8Qc-1b4KXKtRUbP7j14HnUZ-xav11SJUIUO9ssElJ2KAA"/>
<div class="absolute inset-0 rounded-full border-[2px] border-secondary" style="border-style: solid; box-sizing: border-box; pointer-events: none;"></div>
</div>
<div class="flex-1 glass-card rounded-xl p-stack-sm md:p-stack-md w-full md:w-auto md:mb-4 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
<div>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">Alex Rivera</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant flex items-center gap-2 mt-1">
<span class="material-symbols-outlined text-sm">location_on</span>
                            Portland, OR
                        </p>
<div class="flex gap-2 mt-3">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-primary font-label-caps text-label-caps">Community Leader</span>
<span class="inline-flex items-center px-3 py-1 rounded-full bg-secondary/10 text-secondary font-label-caps text-label-caps">Verified</span>
</div>
</div>
<div class="flex gap-3 w-full md:w-auto mt-4 md:mt-0">
<button class="flex-1 md:flex-none bg-gradient-to-r from-primary to-tertiary text-on-primary font-body-sm text-body-sm px-6 py-2.5 rounded-[12px] shadow-sm hover:opacity-90 transition-opacity">
                            Connect
                        </button>
<button class="flex-1 md:flex-none bg-transparent border border-outline text-on-surface font-body-sm text-body-sm px-4 py-2.5 rounded-[12px] hover:bg-surface-variant/50 transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">more_horiz</span>
</button>
</div>
</div>
</div>
</section>
<!-- Content Spacer for Overlap -->
<div class="h-32 w-full"></div>
<!-- Main Grid Content -->
<div class="max-w-[1200px] mx-auto w-full px-container-padding pb-stack-lg grid grid-cols-1 md:grid-cols-12 gap-gutter md:gap-stack-md">
<!-- Left Column: Impact & Badges -->
<div class="md:col-span-4 flex flex-col gap-stack-md">
<!-- Impact Stats Glass Card -->
<div class="glass-card rounded-xl p-stack-md">
<h3 class="font-title-md text-title-md text-on-surface mb-stack-sm flex items-center gap-2">
<span class="material-symbols-outlined text-primary">monitoring</span>
                        Impact Statistics
                    </h3>
<div class="flex flex-col gap-stack-sm mt-stack-md">
<div class="flex justify-between items-center border-b border-outline-variant/30 pb-3">
<span class="font-body-sm text-body-sm text-on-surface-variant">Lives Touched</span>
<span class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">1,204</span>
</div>
<div class="flex justify-between items-center border-b border-outline-variant/30 pb-3">
<span class="font-body-sm text-body-sm text-on-surface-variant">Hours Volunteered</span>
<span class="font-headline-lg-mobile text-headline-lg-mobile text-secondary font-bold">342</span>
</div>
<div class="flex justify-between items-center">
<span class="font-body-sm text-body-sm text-on-surface-variant">Karma Points</span>
<span class="font-headline-lg-mobile text-headline-lg-mobile text-tertiary font-bold">8,950</span>
</div>
</div>
</div>
</div>
<!-- Right Column: Tabs & Activity Feed -->
<div class="md:col-span-8 flex flex-col gap-stack-md">
<!-- Tab Navigation (Simple UI treatment) -->
<div class="flex border-b border-outline-variant/50 gap-8 overflow-x-auto no-scrollbar">
<button class="pb-3 text-primary font-semibold border-b-2 border-primary font-title-md text-title-md whitespace-nowrap">
                        Recent Activity
                    </button>
<button class="pb-3 text-on-surface-variant hover:text-primary transition-colors font-title-md text-title-md whitespace-nowrap">
                        Donations
                    </button>
<button class="pb-3 text-on-surface-variant hover:text-primary transition-colors font-title-md text-title-md whitespace-nowrap">
                        About
                    </button>
</div>
<!-- Bento Grid Content Area for Activity -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-gutter mt-stack-sm">
<!-- Activity Item 1 -->
<div class="glass-card rounded-xl p-stack-sm flex flex-col sm:col-span-2">
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined">volunteer_activism</span>
</div>
<div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Donated to <span class="font-semibold text-on-surface">Local Food Drive</span></p>
<p class="font-label-caps text-label-caps text-outline">2 hours ago</p>
</div>
</div>
<div class="bg-surface-variant/30 rounded-lg p-3 border border-outline-variant/20">
<p class="font-body-sm text-body-sm text-on-surface">"Happy to help out this weekend. Keep up the great work organizing this!"</p>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection
