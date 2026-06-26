@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-surface text-on-surface antialiased min-h-screen relative overflow-hidden flex items-center justify-center"'])

@section('title', 'Create Account - Kind')

@section('head')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@@600&amp;family=Inter:wght@@400;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
<!-- Tailwind CSS & Config -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
@endsection

@section('content')
<!-- Premium Background -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-multiply" data-alt="A highly detailed, soft-focus 3D architectural render of a minimalist, modern interior space. The scene is bathed in bright, diffused natural light typical of a premium light-mode aesthetic. Gentle, sweeping curves of white plaster interact with subtle, translucent frosted glass partitions. Soft, abstract hints of primary blue and periwinkle (the brand colors) bounce off the pristine surfaces, creating a calm, capable, and highly polished atmosphere. The composition is expansive, leaving plenty of negative space for UI elements to overlay seamlessly without visual clutter." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAyQ1oIJ8ofAmoizWQgo1iEQgElpspDb01tIy6Z1HWbkL7DqQDe09LJRxOI8nbiqgIEhgdEiGfNHsUBKQFsHzsu9TJLC-JXjFimQAYyvy2HiJVNqoXS8jT_sj_iM7hm43MyBszx8jAiafzA1f2oF-dN_Sqf5x9qc_LlFLu1jLgoTg-KBmeJze4cmPqJGCUdctwIFSlsroXYHv7sEoMZriGRNGGAbZMB9yGhkPjgr4jueqld5BtJP7vws-i3voQbHZz4ZteJOrz5Yg')"></div>
<!-- Abstract gradient orbs to enhance glassmorphism -->
<div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-primary-fixed-dim/20 blur-[120px]"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[60vw] h-[60vw] rounded-full bg-tertiary-fixed-dim/20 blur-[150px]"></div>
</div>
<!-- Registration Card Container -->
<div class="relative z-10 w-full max-w-md px-gutter md:px-0 mx-auto">
<!-- Glassmorphic Card -->
<div class="bg-surface-container-lowest/70 backdrop-blur-2xl border border-white/60 shadow-[0_8px_32px_0_rgba(0,26,65,0.05)] rounded-[24px] p-container-padding flex flex-col gap-stack-md">
<!-- Header -->
<div class="text-center space-y-2">
<div class="font-display-lg text-headline-lg font-bold text-primary mb-4 tracking-tight">Kind</div>
<h1 class="font-title-md text-title-md text-on-surface">Join the Community</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant">Create an account to start giving or receiving aid.</p>
</div>
<!-- Form -->
<form method="POST" action="{{ route('register') }}" class="flex flex-col gap-stack-sm w-full">
    @csrf
    @if (session('status'))
        <div class="rounded-2xl border border-secondary-container/30 bg-secondary-container/10 px-4 py-3 text-secondary text-body-sm">
            {{ session('status') }}
        </div>
    @endif
    <!-- Join As Toggle (Segmented Control) -->
    <div class="bg-surface-container/50 p-1 rounded-xl flex items-center justify-between mb-2 border border-white/20 shadow-inner">
        <button class="flex-1 py-2 px-4 rounded-lg bg-surface-container-lowest shadow-sm text-primary font-body-sm text-body-sm font-semibold transition-all" type="button">
                        Individual
                    </button>
<button class="flex-1 py-2 px-4 rounded-lg text-on-surface-variant hover:text-on-surface font-body-sm text-body-sm transition-all" type="button">
                        NGO / Org
                    </button>
</div>
<!-- Full Name -->
<div class="space-y-1">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase ml-1">Full Name</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="person">person</span>
<input name="name" value="{{ old('name') }}" class="w-full bg-surface-container-lowest/50 border border-outline-variant rounded-lg pl-10 pr-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="Jane Doe" type="text" autocomplete="name" autofocus />
</div>
@error('name')
    <p class="text-error text-body-sm mt-1">{{ $message }}</p>
@enderror
</div>
<!-- Email -->
<div class="space-y-1">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase ml-1">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="mail">mail</span>
<input name="email" value="{{ old('email') }}" class="w-full bg-surface-container-lowest/50 border border-outline-variant rounded-lg pl-10 pr-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="jane@@example.com" type="email" autocomplete="email" />
</div>
@error('email')
    <p class="text-error text-body-sm mt-1">{{ $message }}</p>
@enderror
</div>
<!-- Password -->
<div class="space-y-1">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase ml-1">Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="lock">lock</span>
<input name="password" class="w-full bg-surface-container-lowest/50 border border-outline-variant rounded-lg pl-10 pr-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="••••••••" type="password" autocomplete="new-password" />
</div>
@error('password')
    <p class="text-error text-body-sm mt-1">{{ $message }}</p>
@enderror
</div>
<!-- Location -->
<div class="space-y-1">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase ml-1">Primary Location</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="location_on">location_on</span>
<input name="location" value="{{ old('location') }}" class="w-full bg-surface-container-lowest/50 border border-outline-variant rounded-lg pl-10 pr-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="City, Neighborhood" type="text" autocomplete="street-address"/>
</div>
</div>
<!-- Action Button -->
<button class="mt-4 w-full py-4 rounded-xl bg-gradient-to-r from-primary to-tertiary text-on-primary font-body-lg text-body-lg font-semibold shadow-md shadow-primary/20 hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2" type="submit">
                    Create Account
                    <span class="material-symbols-outlined icon-fill text-[20px]" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<!-- Footer links -->
<div class="text-center mt-2 border-t border-outline-variant/30 pt-4">
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Already have an account? 
                    <a class="text-primary font-semibold hover:text-tertiary transition-colors" href="{{ route('login') }}">Sign in</a>
</p>
</div>
</div>
</div>
@endsection
