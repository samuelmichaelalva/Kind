@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-surface font-sans antialiased min-h-screen"'])

@section('title', 'Kind - Admin Dashboard')

@section('head')
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@@100..900&family=Inter:wght@@100..900&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
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
                    "display-lg": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-caps": ["Geist"],
                    "title-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "title-md": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}]
            }
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
        
        /* Glassmorphism utility */
        .glass-panel {
            background-color: rgba(249, 249, 255, 0.7); /* surface color */
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        .dark .glass-panel {
             background-color: rgba(24, 28, 35, 0.7); /* on-background color */
             border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm docked full-width top-0">
<!-- Brand & Search -->
<div class="flex items-center gap-stack-md">
<span class="font-display-lg text-headline-lg font-bold text-primary tracking-tight cursor-pointer">Kind</span>
<div class="hidden md:flex items-center bg-surface-container-low border border-outline-variant/50 rounded-full px-4 py-2 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all">
<span class="material-symbols-outlined text-on-surface-variant mr-2 text-[20px]">search</span>
<input class="bg-transparent border-none outline-none text-body-sm w-64 placeholder-on-surface-variant/50" placeholder="Search users, NGOs..." type="text"/>
</div>
</div>
<!-- Navigation Links (Hidden on pure admin dash, but kept for structural fidelity to JSON) -->
<div class="hidden lg:flex items-center gap-stack-md">
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="#">Home</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="#">Requests</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="#">Donations</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="#">Volunteer</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="#">NGOs</a>
</div>
<!-- Trailing Actions -->
<div class="flex items-center gap-stack-sm">
<button class="p-2 text-on-surface-variant hover:bg-surface-variant/50 rounded-full transition-colors relative">
<span class="material-symbols-outlined">mail</span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-surface-variant/50 rounded-full transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="ml-2 w-8 h-8 rounded-full border border-outline-variant overflow-hidden cursor-pointer">
<img alt="User profile with active status" class="w-full h-full object-cover" data-alt="A professional headshot of a female software administrator in her 30s. She has a warm, confident expression. The lighting is soft and studio-quality against a clean, light gray background, matching a premium modern UI aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7D_xIKpgHNVv7uIekt7n_6IEaBnH-sEsYOi4cR8D1KQJPSben32T6c3lohO4MKyk1eeZypso1-gUOHpLXBYlY22oKZdmMlvwt5EKV8iSKd4qFaexrLSFIwqM8l-NEL0G1J813yJSbSZHZb7N30EfQt7hOwjzzLk6MfcUOK0nFueaxO6skqE-Y0ERKSlG06zXD6r6XE60p8N5iPbSWegXBIaatbcENkqGIZ4ercLxHunDu9bmWgEaUIy0xjePw9NZODdg8OAbKfA"/>
</div>
</div>
</nav>
<!-- SideNavBar & Main Content Wrapper -->
<div class="flex pt-16 h-screen overflow-hidden">
<!-- SideNavBar -->
<aside class="hidden md:flex fixed left-0 top-16 h-[calc(100vh-64px)] w-[240px] flex-col p-base gap-stack-sm bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg z-40">
<div class="p-4 mb-2">
<h2 class="font-title-md text-title-md text-on-surface">Community Dashboard</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kindness in Action</p>
</div>
<nav class="flex-1 flex flex-col gap-1">
<!-- Active Tab: Overview -->
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary font-semibold rounded-lg Active: scale-95 transition-transform font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined icon-fill">dashboard</span>
                    Overview
                </a>
<!-- Inactive Tabs -->
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
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
</nav>
<div class="mt-auto p-2">
<button class="w-full bg-gradient-to-r from-primary to-tertiary text-on-primary py-3 rounded-xl font-body-sm font-medium hover:opacity-90 transition-opacity flex justify-center items-center gap-2 shadow-sm">
<span class="material-symbols-outlined text-[18px]">add</span>
                    New Request
                </button>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 md:ml-[240px] overflow-y-auto p-container-padding bg-surface-container-lowest min-h-full">
<header class="mb-stack-lg flex justify-between items-end">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Platform Overview</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Real-time metrics and administration controls.</p>
</div>
<div class="flex gap-2">
<button class="px-4 py-2 bg-surface-variant text-on-surface rounded-lg font-body-sm hover:bg-surface-container-high transition-colors flex items-center gap-2 border border-outline-variant/30">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        Last 30 Days
                    </button>
<button class="px-4 py-2 bg-surface-variant text-on-surface rounded-lg font-body-sm hover:bg-surface-container-high transition-colors flex items-center gap-2 border border-outline-variant/30">
<span class="material-symbols-outlined text-[18px]">download</span>
                        Export
                    </button>
</div>
</header>
<!-- Analytics Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-stack-lg">
<!-- Card 1 -->
<div class="glass-panel rounded-xl p-stack-md flex flex-col justify-between h-32 relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
<div class="flex justify-between items-start">
<p class="font-label-caps text-label-caps text-on-surface-variant uppercase">Total Users</p>
<span class="material-symbols-outlined text-primary bg-primary-container/20 p-2 rounded-lg">group</span>
</div>
<div class="flex items-baseline gap-2">
<h3 class="font-display-lg text-headline-lg text-on-surface">12,450</h3>
<span class="text-secondary font-body-sm flex items-center"><span class="material-symbols-outlined text-[14px]">arrow_upward</span> 12%</span>
</div>
</div>
<!-- Card 2 -->
<div class="glass-panel rounded-xl p-stack-md flex flex-col justify-between h-32 relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-tertiary/5 rounded-full blur-xl group-hover:bg-tertiary/10 transition-colors"></div>
<div class="flex justify-between items-start">
<p class="font-label-caps text-label-caps text-on-surface-variant uppercase">Active NGOs</p>
<span class="material-symbols-outlined text-tertiary bg-tertiary-container/20 p-2 rounded-lg">domain</span>
</div>
<div class="flex items-baseline gap-2">
<h3 class="font-display-lg text-headline-lg text-on-surface">342</h3>
<span class="text-secondary font-body-sm flex items-center"><span class="material-symbols-outlined text-[14px]">arrow_upward</span> 4%</span>
</div>
</div>
<!-- Card 3 -->
<div class="glass-panel rounded-xl p-stack-md flex flex-col justify-between h-32 relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-secondary/5 rounded-full blur-xl group-hover:bg-secondary/10 transition-colors"></div>
<div class="flex justify-between items-start">
<p class="font-label-caps text-label-caps text-on-surface-variant uppercase">Impact Shared</p>
<span class="material-symbols-outlined text-secondary bg-secondary-container/20 p-2 rounded-lg">favorite</span>
</div>
<div class="flex items-baseline gap-2">
<h3 class="font-display-lg text-headline-lg text-on-surface">$1.2M</h3>
<span class="text-secondary font-body-sm flex items-center"><span class="material-symbols-outlined text-[14px]">arrow_upward</span> 8%</span>
</div>
</div>
</div>
<!-- Chart & Tasks Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-stack-lg">
<!-- Main Chart Area -->
<div class="lg:col-span-2 glass-panel rounded-xl p-stack-md flex flex-col min-h-[300px]">
<div class="flex justify-between items-center mb-6">
<h2 class="font-title-md text-title-md text-on-surface">Community Growth</h2>
<button class="text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined">more_horiz</span></button>
</div>
<!-- Abstract Visualization Area (CSS Generated Pattern to avoid empty space) -->
<div class="flex-1 w-full bg-gradient-to-b from-surface-container to-surface rounded-lg border border-outline-variant/20 relative overflow-hidden flex items-end">
<!-- Simulated Line Chart -->
<svg class="absolute inset-0 w-full h-full" preserveaspectratio="none" viewbox="0 0 100 100">
<defs>
<lineargradient id="chart-grad" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" stop-color="#0070eb" stop-opacity="0.2"></stop>
<stop offset="100%" stop-color="#0070eb" stop-opacity="0"></stop>
</lineargradient>
</defs>
<path d="M0,100 L0,70 Q10,60 20,75 T40,50 T60,65 T80,30 T100,20 L100,100 Z" fill="url(#chart-grad)"></path>
<path d="M0,70 Q10,60 20,75 T40,50 T60,65 T80,30 T100,20" fill="none" stroke="#0070eb" stroke-width="2" vector-effect="non-scaling-stroke"></path>
</svg>
<!-- Axis Labels (Simulated) -->
<div class="absolute bottom-2 left-0 w-full flex justify-between px-4 text-xs text-on-surface-variant/50 font-label-caps">
<span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span>
</div>
</div>
</div>
<!-- Recent Moderation Tasks -->
<div class="glass-panel rounded-xl p-stack-md flex flex-col">
<div class="flex justify-between items-center mb-4">
<h2 class="font-title-md text-title-md text-on-surface">Pending Moderation</h2>
<span class="bg-error/10 text-error font-label-caps px-2 py-1 rounded-full text-[10px]">4 NEW</span>
</div>
<div class="flex flex-col gap-3 flex-1 overflow-y-auto pr-2">
<!-- Task Item -->
<div class="p-3 bg-surface border border-outline-variant/30 rounded-lg hover:border-primary/50 transition-colors cursor-pointer group">
<div class="flex justify-between items-start mb-2">
<span class="font-body-sm font-semibold text-on-surface">Suspicious Donation Request</span>
<span class="text-[10px] text-on-surface-variant">2m ago</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-2">User flagged for requesting duplicate funds across multiple local hubs...</p>
<div class="flex gap-2">
<button class="text-xs text-primary font-medium hover:underline">Review</button>
<button class="text-xs text-error font-medium hover:underline">Block</button>
</div>
</div>
<!-- Task Item -->
<div class="p-3 bg-surface border border-outline-variant/30 rounded-lg hover:border-primary/50 transition-colors cursor-pointer group">
<div class="flex justify-between items-start mb-2">
<span class="font-body-sm font-semibold text-on-surface">NGO Verification</span>
<span class="text-[10px] text-on-surface-variant">1h ago</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-2">"Green Valley Aid" uploaded tax exemption documents for review.</p>
<div class="flex gap-2">
<button class="text-xs text-secondary font-medium hover:underline">Verify</button>
<button class="text-xs text-on-surface-variant font-medium hover:underline">View Docs</button>
</div>
</div>
</div>
</div>
</div>
<!-- Management Table (Users) -->
<div class="glass-panel rounded-xl p-stack-md">
<div class="flex justify-between items-center mb-6">
<h2 class="font-title-md text-title-md text-on-surface">Recent Users</h2>
<button class="text-primary font-body-sm hover:underline flex items-center gap-1">View All <span class="material-symbols-outlined text-[16px]">arrow_forward</span></button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-outline-variant/20">
<th class="py-3 px-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">User</th>
<th class="py-3 px-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Role</th>
<th class="py-3 px-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="py-3 px-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Joined</th>
<th class="py-3 px-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
<!-- Row 1 -->
<tr class="hover:bg-surface-variant/20 transition-colors group">
<td class="py-3 px-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary font-bold text-sm">
                                            JD
                                        </div>
<div>
<p class="font-body-sm font-medium text-on-surface">Jane Doe</p>
<p class="text-xs text-on-surface-variant">jane.doe@@example.com</p>
</div>
</div>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">Volunteer</td>
<td class="py-3 px-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-secondary/10 text-secondary border border-secondary/20">Active</span>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">Oct 24, 2023</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-md transition-colors" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-md transition-colors" title="Suspend">
<span class="material-symbols-outlined text-[18px]">block</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-variant/20 transition-colors group">
<td class="py-3 px-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-tertiary font-bold text-sm">
                                            CH
                                        </div>
<div>
<p class="font-body-sm font-medium text-on-surface">City Hope Org</p>
<p class="text-xs text-on-surface-variant">contact@@cityhope.org</p>
</div>
</div>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">NGO</td>
<td class="py-3 px-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-tertiary/10 text-tertiary border border-tertiary/20">Pending</span>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">Oct 23, 2023</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-1.5 text-on-surface-variant hover:text-secondary hover:bg-secondary/10 rounded-md transition-colors" title="Verify">
<span class="material-symbols-outlined text-[18px]">verified</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-md transition-colors" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-variant/20 transition-colors group">
<td class="py-3 px-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-bold text-sm">
                                            MS
                                        </div>
<div>
<p class="font-body-sm font-medium text-on-surface">Mark Smith</p>
<p class="text-xs text-on-surface-variant">m.smith@@example.com</p>
</div>
</div>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">Recipient</td>
<td class="py-3 px-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-error/10 text-error border border-error/20">Suspended</span>
</td>
<td class="py-3 px-4 font-body-sm text-on-surface-variant">Oct 20, 2023</td>
<td class="py-3 px-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-md transition-colors" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</main>
</div>
@endsection
