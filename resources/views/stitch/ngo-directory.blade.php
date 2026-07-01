@extends('layouts.stitch', ['bodyAttributes' => 'class="min-h-screen flex flex-col font-body-lg text-body-lg overflow-x-hidden"'])

@section('title', 'Kind - NGO Directory')

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
      },
          },
        }
      </script>
<style>
        body {
            background-color: theme('colors.background');
            color: theme('colors.on-background');
        }
        
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 4px 30px rgba(0, 88, 188, 0.05);
        }

        .dark .glass-panel {
            background: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .input-quiet {
            background: transparent;
            border: 1px solid theme('colors.outline-variant');
            transition: all 0.2s ease;
        }

        .input-quiet:focus {
            outline: none;
            border-color: theme('colors.primary');
            box-shadow: 0 0 0 3px rgba(0, 88, 188, 0.15);
        }

        .btn-primary {
            background: linear-gradient(135deg, theme('colors.primary') 0%, theme('colors.tertiary') 100%);
            color: theme('colors.on-primary');
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 88, 188, 0.2);
        }

        .chip {
            background: rgba(0, 115, 42, 0.1);
            color: theme('colors.on-secondary-container');
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm hidden md:flex">
<div class="flex items-center gap-stack-md">
<span class="font-display-lg text-headline-lg font-bold text-primary">Kind</span>
<div class="hidden md:flex gap-gutter items-center">
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="{{ route('dashboard') }}">Home</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="{{ route('create-post') }}">Requests</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="{{ route('browse-donations') }}">Donations</a>
<a class="font-body-lg text-body-lg text-on-surface-variant hover:text-primary transition-colors" href="{{ route('volunteer-hub') }}">Volunteer</a>
<a class="font-body-lg text-body-lg text-primary font-semibold border-b-2 border-primary" href="{{ route('ngo-directory') }}">NGOs</a>
</div>
</div>
<div class="flex items-center gap-base">
<button class="p-2 text-on-surface hover:text-primary transition-colors rounded-full hover:bg-surface-variant/50">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">mail</span>
</button>
<button class="p-2 text-on-surface hover:text-primary transition-colors rounded-full hover:bg-surface-variant/50 relative">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="w-8 h-8 rounded-full overflow-hidden ml-2 border border-outline-variant">
<img alt="User profile with active status" class="w-full h-full object-cover" data-alt="A close-up portrait of a diverse community volunteer smiling warmly in a bright, modern setting. The lighting is soft and natural, reflecting a clean, light-mode aesthetic. The background is a subtle, out-of-focus hint of a clean workspace." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8QtrZ6gClmd0-aWLYfP9-ihxDRelL2yy-8SvS22obVaQa17BL0k7hd07Gyzm8lV0cs5vA4ZBGNZJ-TBK9h0wyEBnwab5f5PtsXWjO6AvrGgN4kmj5BNXZvScd1eV1hzj7D73N8Hp5zJzoL_gVz-4QEucgdJ5H-5UR_krsObo8w7x__1T47FL0sFcm0e_0wY4GJ1SLN8fO04V0wSih5HngiZ6lgUQ5GDORgvHHakbjHXzQt5Twg8-qI0HrzOgUxULNrX_ENsVMwQ"/>
</div>
</div>
</nav>
<!-- SideNavBar (Mobile / Tablet Layout adaptation) -->
<div class="md:hidden fixed bottom-0 w-full z-50 bg-surface/90 backdrop-blur-xl border-t border-white/10 flex justify-around p-base shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-safe">
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">home</span>
<span class="font-body-sm text-[10px] mt-1">Home</span>
</a>
<a class="flex flex-col items-center p-2 text-primary" href="{{ route('ngo-directory') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
<span class="font-body-sm text-[10px] mt-1 font-semibold">NGOs</span>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="font-body-sm text-[10px] mt-1">Donate</span>
</a>
<a class="flex flex-col items-center p-2 text-on-surface-variant" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined">person</span>
<span class="font-body-sm text-[10px] mt-1">Profile</span>
</a>
</div>
<!-- Main Content Canvas -->
<main class="flex-grow pt-20 md:pt-24 pb-24 md:pb-12 px-gutter md:px-container-padding max-w-7xl mx-auto w-full flex flex-col gap-stack-lg">
<!-- Header & Search/Filter Section -->
<section class="flex flex-col gap-stack-md">
<div class="flex flex-col md:flex-row md:justify-between md:items-end gap-stack-sm">
<div>
<h1 class="font-display-lg text-headline-lg-mobile md:text-display-lg text-on-background">Explore NGOs</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2 max-w-2xl">Connect with verified organizations driving meaningful change in your community and beyond.</p>
</div>
</div>
<!-- Filter Bar -->
<div class="glass-panel rounded-xl p-4 flex flex-col md:flex-row gap-gutter items-center w-full">
<div class="relative flex-grow w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="input-quiet w-full pl-10 pr-4 py-3 rounded-lg font-body-lg text-body-sm text-on-background placeholder:text-outline w-full" placeholder="Search organizations..." type="text"/>
</div>
<div class="flex gap-gutter w-full md:w-auto overflow-x-auto pb-2 md:pb-0 scrollbar-hide">
<div class="relative min-w-[140px]">
<select class="input-quiet w-full appearance-none pl-4 pr-10 py-3 rounded-lg font-body-sm text-body-sm text-on-surface bg-transparent">
<option value="">All Categories</option>
<option value="education">Education</option>
<option value="health">Healthcare</option>
<option value="environment">Environment</option>
<option value="poverty">Poverty Alleviation</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
<div class="relative min-w-[140px]">
<select class="input-quiet w-full appearance-none pl-4 pr-10 py-3 rounded-lg font-body-sm text-body-sm text-on-surface bg-transparent">
<option value="">All Locations</option>
<option value="local">Local Community</option>
<option value="national">National</option>
<option value="international">International</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
<button class="btn-primary px-6 py-3 font-body-sm text-body-sm font-semibold flex items-center gap-2 whitespace-nowrap">
<span class="material-symbols-outlined text-[18px]">filter_list</span>
                        Apply
                    </button>
</div>
</div>
</section>
<!-- NGO Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-stack-md">
<!-- Card 1 -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col group hover:-translate-y-1 transition-transform duration-300">
<div class="h-32 relative bg-surface-container-high overflow-hidden">
<div class="absolute inset-0 opacity-40 bg-gradient-to-br from-primary-fixed to-tertiary-fixed"></div>
<div class="absolute -bottom-6 left-6 w-16 h-16 rounded-lg bg-white shadow-sm p-2 flex items-center justify-center border border-surface-variant z-10">
<span class="material-symbols-outlined text-primary text-3xl">local_library</span>
</div>
</div>
<div class="p-6 pt-10 flex flex-col flex-grow gap-stack-sm relative">
<div class="flex justify-between items-start">
<div>
<h3 class="font-title-md text-title-md text-on-background flex items-center gap-1">
                                EduCare Foundation
                                <span class="material-symbols-outlined text-secondary text-[16px]" style="font-variation-settings: 'FILL' 1;" title="Verified NGO">verified</span>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Global
                            </p>
</div>
</div>
<div class="flex flex-wrap gap-2 mt-2">
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps">Education</span>
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-primary-fixed/30 text-on-primary-fixed">Children</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface mt-2 flex-grow">Providing access to quality education and learning resources for underprivileged children across developing nations.</p>
<div class="pt-4 border-t border-outline-variant/30 flex justify-between items-center mt-auto">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary">
<span class="font-title-md text-[14px] font-bold">4</span>
</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Active Campaigns</span>
</div>
<button class="text-primary hover:text-on-primary-fixed-variant font-body-sm text-body-sm font-semibold transition-colors flex items-center">
                            View Profile <span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
</button>
</div>
</div>
</article>
<!-- Card 2 -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col group hover:-translate-y-1 transition-transform duration-300">
<div class="h-32 relative bg-surface-container-high overflow-hidden">
<div class="absolute inset-0 opacity-40 bg-gradient-to-tr from-secondary-fixed to-primary-fixed"></div>
<div class="absolute -bottom-6 left-6 w-16 h-16 rounded-lg bg-white shadow-sm p-2 flex items-center justify-center border border-surface-variant z-10">
<span class="material-symbols-outlined text-secondary text-3xl">nature_people</span>
</div>
</div>
<div class="p-6 pt-10 flex flex-col flex-grow gap-stack-sm relative">
<div class="flex justify-between items-start">
<div>
<h3 class="font-title-md text-title-md text-on-background flex items-center gap-1">
                                Green Earth Initiative
                                <span class="material-symbols-outlined text-secondary text-[16px]" style="font-variation-settings: 'FILL' 1;" title="Verified NGO">verified</span>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> North America
                            </p>
</div>
</div>
<div class="flex flex-wrap gap-2 mt-2">
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps">Environment</span>
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-primary-fixed/30 text-on-primary-fixed">Conservation</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface mt-2 flex-grow">Dedicated to urban reforestation and protecting local water sources through community-driven volunteer programs.</p>
<div class="pt-4 border-t border-outline-variant/30 flex justify-between items-center mt-auto">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary">
<span class="font-title-md text-[14px] font-bold">2</span>
</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Active Campaigns</span>
</div>
<button class="text-primary hover:text-on-primary-fixed-variant font-body-sm text-body-sm font-semibold transition-colors flex items-center">
                            View Profile <span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
</button>
</div>
</div>
</article>
<!-- Card 3 -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col group hover:-translate-y-1 transition-transform duration-300">
<div class="h-32 relative bg-surface-container-high overflow-hidden">
<div class="absolute inset-0 opacity-40 bg-gradient-to-r from-error-container to-surface-variant"></div>
<div class="absolute -bottom-6 left-6 w-16 h-16 rounded-lg bg-white shadow-sm p-2 flex items-center justify-center border border-surface-variant z-10">
<span class="material-symbols-outlined text-error text-3xl">medical_services</span>
</div>
</div>
<div class="p-6 pt-10 flex flex-col flex-grow gap-stack-sm relative">
<div class="flex justify-between items-start">
<div>
<h3 class="font-title-md text-title-md text-on-background flex items-center gap-1">
                                HealthFirst Aid
                                <span class="material-symbols-outlined text-secondary text-[16px]" style="font-variation-settings: 'FILL' 1;" title="Verified NGO">verified</span>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Sub-Saharan Africa
                            </p>
</div>
</div>
<div class="flex flex-wrap gap-2 mt-2">
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-error-container/50 text-on-error-container">Healthcare</span>
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-primary-fixed/30 text-on-primary-fixed">Emergency</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface mt-2 flex-grow">Delivering emergency medical supplies and establishing primary care clinics in remote and underserved regions.</p>
<div class="pt-4 border-t border-outline-variant/30 flex justify-between items-center mt-auto">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary">
<span class="font-title-md text-[14px] font-bold">7</span>
</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Active Campaigns</span>
</div>
<button class="text-primary hover:text-on-primary-fixed-variant font-body-sm text-body-sm font-semibold transition-colors flex items-center">
                            View Profile <span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
</button>
</div>
</div>
</article>
<!-- Card 4 -->
<article class="glass-panel rounded-xl overflow-hidden flex flex-col group hover:-translate-y-1 transition-transform duration-300">
<div class="h-32 relative bg-surface-container-high overflow-hidden">
<div class="absolute inset-0 opacity-40 bg-gradient-to-bl from-tertiary-fixed to-surface-variant"></div>
<div class="absolute -bottom-6 left-6 w-16 h-16 rounded-lg bg-white shadow-sm p-2 flex items-center justify-center border border-surface-variant z-10">
<span class="material-symbols-outlined text-tertiary text-3xl">soup_kitchen</span>
</div>
</div>
<div class="p-6 pt-10 flex flex-col flex-grow gap-stack-sm relative">
<div class="flex justify-between items-start">
<div>
<h3 class="font-title-md text-title-md text-on-background flex items-center gap-1">
                                Community Meals
                                <!-- No verified badge for this one to show variety -->
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Local Metro
                            </p>
</div>
</div>
<div class="flex flex-wrap gap-2 mt-2">
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-tertiary-fixed/50 text-on-tertiary-fixed-variant">Food Security</span>
<span class="chip px-3 py-1 rounded-full font-label-caps text-label-caps bg-primary-fixed/30 text-on-primary-fixed">Local</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface mt-2 flex-grow">Operating daily soup kitchens and food pantries to support families facing food insecurity in the metro area.</p>
<div class="pt-4 border-t border-outline-variant/30 flex justify-between items-center mt-auto">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary">
<span class="font-title-md text-[14px] font-bold">1</span>
</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Active Campaign</span>
</div>
<button class="text-primary hover:text-on-primary-fixed-variant font-body-sm text-body-sm font-semibold transition-colors flex items-center">
                            View Profile <span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
</button>
</div>
</div>
</article>
</section>
<!-- Pagination (Simple) -->
<div class="flex justify-center items-center gap-2 mt-stack-md">
<button class="p-2 rounded-lg border border-outline-variant text-outline hover:bg-surface-variant transition-colors disabled:opacity-50">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<span class="font-body-sm text-body-sm text-on-surface px-4 py-2 glass-panel rounded-lg font-semibold">1</span>
<button class="px-4 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors font-body-sm text-body-sm">2</button>
<button class="px-4 py-2 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors font-body-sm text-body-sm">3</button>
<span class="px-2 text-outline">...</span>
<button class="p-2 rounded-lg border border-outline-variant text-on-surface hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</main>
@endsection
