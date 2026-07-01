@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-background text-on-background font-body-sm h-screen overflow-hidden flex flex-col md:flex-row"'])

@section('title', 'Kind - Messages')

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
          }
        }
    </script>
<style>
        /* Custom scrollbar for chat area */
        .chat-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .chat-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .chat-scroll::-webkit-scrollbar-thumb {
            background-color: theme('colors.outline-variant');
            border-radius: 20px;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection

@section('content')
<!-- TopNavBar (Mobile) -->
<nav class="md:hidden fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm text-primary">
<div class="font-display-lg text-headline-lg-mobile font-bold">Kind</div>
<div class="flex gap-4 items-center">
<span class="material-symbols-outlined text-primary hover:text-primary transition-colors cursor-pointer" style="font-variation-settings: 'FILL' 0;">mail</span>
<span class="material-symbols-outlined text-primary hover:text-primary transition-colors cursor-pointer" style="font-variation-settings: 'FILL' 0;">notifications</span>
</div>
</nav>
<!-- SideNavBar (Desktop) -->
<nav class="hidden md:flex fixed left-0 top-0 h-full w-[240px] flex-col p-base gap-stack-sm bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg z-40 pt-8">
<div class="px-4 pb-6 flex flex-col items-start gap-2">
<div class="font-title-md text-title-md text-on-surface font-bold">Kind</div>
<div class="text-body-sm font-body-sm text-on-surface-variant opacity-80">Community Dashboard</div>
</div>
<div class="flex-1 overflow-y-auto w-full px-2">
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-1 group" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">dashboard</span>
<span class="font-body-sm text-body-sm">Overview</span>
</a>
<a class="flex items-center gap-3 p-3 bg-primary/10 text-primary font-semibold rounded-lg mb-1 scale-95 transition-transform" href="{{ route('messages') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-body-sm text-body-sm">Activity</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-1 group" href="{{ route('create-post') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">handshake</span>
<span class="font-body-sm text-body-sm">My Requests</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-1 group" href="{{ route('browse-donations') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">volunteer_activism</span>
<span class="font-body-sm text-body-sm">My Donations</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-1 group" href="{{ route('volunteer-hub') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">groups</span>
<span class="font-body-sm text-body-sm">Volunteering</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-1 group" href="{{ route('messages') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">bookmark</span>
<span class="font-body-sm text-body-sm">Saved</span>
</a>
</div>
<div class="p-4 mt-auto w-full">
<a class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-variant/50 transition-all rounded-lg mb-4 group" href="{{ route('user-profile') }}">
<span class="material-symbols-outlined group-hover:text-primary transition-colors">settings</span>
<span class="font-body-sm text-body-sm">Settings</span>
</a>
<a class="w-full bg-gradient-to-r from-primary to-tertiary text-on-primary py-3 rounded-xl font-title-md text-body-sm shadow-md hover:opacity-90 transition-opacity block text-center" href="{{ route('create-post') }}">
                New Request
            </a>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col md:ml-[240px] pt-16 md:pt-0 h-full overflow-hidden bg-surface-container-low">
<div class="flex-1 flex overflow-hidden p-4 md:p-8 gap-6 h-full">
<!-- Left Panel: Chat List -->
<div class="w-full md:w-1/3 lg:w-[320px] glass-card rounded-2xl flex flex-col overflow-hidden h-full hidden md:flex">
<div class="p-5 border-b border-white/10">
<h2 class="font-title-md text-title-md text-on-surface mb-4">Messages</h2>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container/50 border border-outline-variant/30 rounded-full font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-outline-variant" placeholder="Search conversations..." type="text"/>
</div>
</div>
<div class="flex-1 overflow-y-auto chat-scroll p-2">
<!-- Active Chat Item -->
<div class="flex items-center p-3 gap-3 rounded-xl bg-primary/5 border border-primary/10 cursor-pointer mb-2">
<div class="relative">
<img class="w-12 h-12 rounded-full object-cover shadow-sm" data-alt="Close up portrait of a young woman with warm lighting in a minimalist setting. Soft blue background. Modern avatar style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz9PCkOvOi2LgAvL3ZRGusBAkZVjWVr8MkvhUH4jBMWQRi-T50Dm7NhJZ_A4B87HSgmlYKG_DMovWUsBHXgOrO5GUiKquVXBASFpSfMGNFNmbnBJM_de1ej9MPXr2_3mZS6NNOC18OW2C7A39wOLfx5gl20PIcdB-v97beFzpJQnJ2TQ61mrFE-vcTIMC59yH-Vw-LVucscx7Np-_hfVVygJppdmAjLc4IFuJi-YFq5zz66JVW68UNLk56U3rcUH-2DvzWeOACLA"/>
<div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary-container border-2 border-surface rounded-full"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h3 class="font-title-md text-body-sm text-on-surface truncate">Sarah Jenkins</h3>
<span class="font-label-caps text-[10px] text-primary">10:42 AM</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant truncate">I can bring the groceries by this afternoon!</p>
</div>
</div>
<!-- Inactive Chat Items -->
<div class="flex items-center p-3 gap-3 rounded-xl hover:bg-surface-variant/30 cursor-pointer mb-2 transition-colors">
<div class="relative">
<img class="w-12 h-12 rounded-full object-cover shadow-sm grayscale-[20%]" data-alt="Portrait of an older gentleman with glasses, smiling softly. Natural daylight. Minimalist grey background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4UdUwf_APKOBi7NkB3sPcX3Vx0TPyPFZP_yDKcQ1caWo9D-VAYk2-P9OI6lkCQu0yCAv9-Kk_6NpvsBrcI2pGtkeOGMpa_4wxfUcRTlbZ3ZoU9AlekN9J9unX6Jf9PIXXrkf0pBuUzfQrc8tIQpwq-D0fcgZkOULJfGE-AtvvThJj6ABwflDlbXRcq9B4CvvPNHUyCcNhkrSRU0xfQknqnGkERHCYAwjCoN5QG0hRWhFnfrrDR7qQUO0nvvMwsy0rQk2bdcTK-w"/>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h3 class="font-title-md text-body-sm text-on-surface truncate">Marcus Chen</h3>
<span class="font-label-caps text-[10px] text-outline">Yesterday</span>
</div>
<p class="font-body-sm text-body-sm text-outline truncate">Thanks for organizing the community garden cleanup.</p>
</div>
</div>
<div class="flex items-center p-3 gap-3 rounded-xl hover:bg-surface-variant/30 cursor-pointer mb-2 transition-colors">
<div class="relative flex items-center justify-center w-12 h-12 rounded-full bg-tertiary-container text-on-tertiary-container font-title-md shadow-sm">
                            CG
                        </div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h3 class="font-title-md text-body-sm text-on-surface truncate">Community Group A</h3>
<span class="font-label-caps text-[10px] text-outline">Mon</span>
</div>
<p class="font-body-sm text-body-sm text-outline truncate">Elena: Has anyone seen the signup sheet?</p>
</div>
</div>
</div>
</div>
<!-- Right Panel: Active Chat -->
<div class="flex-1 glass-card rounded-2xl flex flex-col h-full overflow-hidden relative shadow-lg border border-white/20">
<!-- Chat Header -->
<div class="px-6 py-4 border-b border-white/20 bg-surface/50 backdrop-blur-md flex justify-between items-center z-10">
<div class="flex items-center gap-4">
<button class="md:hidden text-on-surface-variant hover:text-primary">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<div class="relative">
<img class="w-10 h-10 rounded-full object-cover shadow-sm" data-alt="Close up portrait of a young woman with warm lighting in a minimalist setting. Soft blue background. Modern avatar style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWS7M41o2QuV0N5pyVfHColui4lSgAPH_WDBKXD2SFhk-GEs_3Rt2YX6XFXNRtwpXaNg3t2IBY7iw5Ha81nRu2PmIQTS6h7GjsMa5i8ybbbzOq9jd1OSnCIxBSt-bpuJLxVtd3wmTPI6ZnwoE9Y7WhH6cF3MjF0Fpo5m-DNQ82kIKi5_xnarOsr-EyYDFQQsUPiblE_JXDJbIWGNtywgXHDoD4kNzX_3Y9vYlnwVH7mtNfOVxiYhM3aKtYyhgwxoO3Da1DZZFuog"/>
<div class="absolute bottom-0 right-0 w-3 h-3 bg-secondary-container border-2 border-surface rounded-full"></div>
</div>
<div>
<h2 class="font-title-md text-body-sm text-on-surface">Sarah Jenkins</h2>
<p class="font-body-sm text-[12px] text-secondary">Online now</p>
</div>
</div>
<div class="flex gap-3 text-on-surface-variant">
<button class="w-10 h-10 rounded-full hover:bg-surface-variant/50 flex items-center justify-center transition-colors">
<span class="material-symbols-outlined">call</span>
</button>
<button class="w-10 h-10 rounded-full hover:bg-surface-variant/50 flex items-center justify-center transition-colors">
<span class="material-symbols-outlined">videocam</span>
</button>
<button class="w-10 h-10 rounded-full hover:bg-surface-variant/50 flex items-center justify-center transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</div>
<!-- Chat Messages Area -->
<div class="flex-1 overflow-y-auto chat-scroll p-6 flex flex-col gap-6 bg-gradient-to-b from-surface-container-low/30 to-surface-container-low/10">
<div class="text-center">
<span class="inline-block px-3 py-1 bg-surface-variant/40 rounded-full font-label-caps text-[10px] text-outline">Today</span>
</div>
<!-- Received Message -->
<div class="flex gap-3 max-w-[80%]">
<img class="w-8 h-8 rounded-full object-cover self-end hidden md:block opacity-70" data-alt="Close up portrait of a young woman with warm lighting in a minimalist setting. Soft blue background. Modern avatar style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsHe1UuYT39MmUXlyqn5JlpKaddTARGWpnDZoB2LO_Zwb9XwLG0k-bEXkFtVzHXK3yDLSSMW5CBEzxsGkSpAy1RQ5IDEzsAVN030M2udKhCY4kExQwyhfK_QffJ443-5BJPysjM-aqQ9sm-KPyMxqjLNYyS7vwbHS9F5gqnP9EBA4UhX5UUTI7XnJs1kHk3ztvY3Wkj_f1VMHUOzFHPM08ODtlIva5hqNuTVq3SXR6i1TovcN5MMzjYVi1SBXE9BiQtwXnS3VibA"/>
<div class="flex flex-col gap-1 items-start">
<div class="bg-surface rounded-2xl rounded-bl-sm px-5 py-3 shadow-sm border border-white/40">
<p class="font-body-sm text-body-sm text-on-surface">Hi there! I saw your request for the community pantry run.</p>
</div>
<span class="font-label-caps text-[10px] text-outline ml-1">10:30 AM</span>
</div>
</div>
<!-- Received Message -->
<div class="flex gap-3 max-w-[80%]">
<img class="w-8 h-8 rounded-full object-cover self-end hidden md:block opacity-70" data-alt="Close up portrait of a young woman with warm lighting in a minimalist setting. Soft blue background. Modern avatar style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQhKKxreqrcnkCE34oBTALXIxzD7MBa-ALeMYbTNKaIMcUhH4UUFrGMwIueBJOSw5WAR8hzSawcaOAFK0QeMls6biUf__QpxNAGATglLE3Np_r6p13zTzzhz-vEqm56Cyi9mRtgN8EuPIrupRzpR6R-3Rn6_T4jcebvNTPIJYoWPV5dCjn4i_dXgHjXzsJT_bOSXr7EQXmztJmIt5pKnUKJ4-qbWF6WL7yXMM4j62l0YpsYCsjfK_5zM_GvRTAR3T9fP3NafOcUg"/>
<div class="flex flex-col gap-1 items-start">
<div class="bg-surface rounded-2xl rounded-bl-sm px-5 py-3 shadow-sm border border-white/40">
<p class="font-body-sm text-body-sm text-on-surface">I'm heading to the wholesale market around noon. Need anything specific?</p>
</div>
<span class="font-label-caps text-[10px] text-outline ml-1">10:32 AM</span>
</div>
</div>
<!-- Sent Message -->
<div class="flex gap-3 max-w-[80%] self-end">
<div class="flex flex-col gap-1 items-end">
<div class="bg-primary text-on-primary rounded-2xl rounded-br-sm px-5 py-3 shadow-md bg-gradient-to-br from-primary to-primary-container">
<p class="font-body-sm text-body-sm">Oh that's amazing, thank you Sarah!</p>
</div>
</div>
</div>
<!-- Sent Message with Attachment -->
<div class="flex gap-3 max-w-[80%] self-end mt-1">
<div class="flex flex-col gap-1 items-end">
<div class="bg-primary text-on-primary rounded-2xl rounded-tr-sm rounded-br-sm px-5 py-3 shadow-md bg-gradient-to-br from-primary to-primary-container">
<p class="font-body-sm text-body-sm mb-2">Here is the current list. Mostly staples needed.</p>
<div class="flex items-center gap-3 bg-white/20 p-2 rounded-lg backdrop-blur-sm">
<span class="material-symbols-outlined text-on-primary">description</span>
<div class="flex flex-col pr-4">
<span class="font-title-md text-[12px] font-semibold">Pantry_List_Oct.pdf</span>
<span class="text-[10px] opacity-80">1.2 MB</span>
</div>
<span class="material-symbols-outlined ml-auto hover:text-white cursor-pointer transition-colors text-[18px]">download</span>
</div>
</div>
<div class="flex items-center gap-1 mr-1">
<span class="font-label-caps text-[10px] text-outline">10:35 AM</span>
<span class="material-symbols-outlined text-[14px] text-primary">done_all</span>
</div>
</div>
</div>
<!-- Received Message -->
<div class="flex gap-3 max-w-[80%] mt-4">
<img class="w-8 h-8 rounded-full object-cover self-end hidden md:block opacity-70" data-alt="Close up portrait of a young woman with warm lighting in a minimalist setting. Soft blue background. Modern avatar style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn3ICUkM4mq0iOCIKuRQ-b23t7z2bUXeAZ-T3MLwqYPS_MIsva1hSyg9TlJ3BQZW4XiCy_1Fl89VGEBtCRaQ2_KjKh_0NUKYgMpWjuAZSSPAUduhzR6nstsVpZmzLd-bn6BQIPaX_weNFi-xAnnn1VUhCBQGQ7K_dE9R6Zj74oNzAXGy6XtxtM6LaKkDnT62ocQxGRtBo_0IP5Hg4K8-mUA_lCl_hSPCFMqZPgAapeBY-11mPPtY-78h3DyL2T1dtcmn9LMDpQJw"/>
<div class="flex flex-col gap-1 items-start">
<div class="bg-surface rounded-2xl rounded-bl-sm px-5 py-3 shadow-sm border border-white/40">
<p class="font-body-sm text-body-sm text-on-surface">Got it. I can bring the groceries by this afternoon!</p>
</div>
<span class="font-label-caps text-[10px] text-outline ml-1">10:42 AM</span>
</div>
</div>
</div>
<!-- Input Area -->
<div class="p-4 bg-surface/80 backdrop-blur-xl border-t border-white/20 z-10">
<div class="flex items-end gap-3 bg-surface-container-low border border-outline-variant/30 rounded-3xl p-2 pl-4 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all shadow-sm">
<button class="p-2 text-outline hover:text-primary transition-colors rounded-full mb-0.5">
<span class="material-symbols-outlined">add_circle</span>
</button>
<textarea class="flex-1 bg-transparent border-none focus:ring-0 resize-none font-body-sm text-body-sm py-3 px-2 max-h-[120px] outline-none text-on-surface placeholder:text-outline-variant" placeholder="Type a message..." rows="1"></textarea>
<button class="p-2 text-outline hover:text-primary transition-colors rounded-full mb-0.5">
<span class="material-symbols-outlined">mood</span>
</button>
<button class="p-3 bg-primary text-on-primary rounded-full hover:bg-primary-container shadow-sm transition-colors flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">send</span>
</button>
</div>
</div>
</div>
</div>
</main>
@endsection
