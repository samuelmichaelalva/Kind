@extends('layouts.stitch', ['bodyAttributes' => 'class="bg-surface text-on-surface antialiased overflow-hidden min-h-screen relative flex items-center justify-center p-gutter"'])

@section('title', 'Kind - Login')

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
<style>
        .glass-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0.4) 100%);
            box-shadow: 0 32px 64px -12px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }
    </style>
@endsection

@section('content')
<!-- Premium Background Gradient Orbs -->
<div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
<div class="absolute top-[-20%] left-[-10%] w-[60%] h-[60%] bg-primary/20 rounded-full mix-blend-multiply filter blur-[120px] opacity-70 animate-pulse" style="animation-duration: 8s;"></div>
<div class="absolute bottom-[-10%] right-[-20%] w-[50%] h-[50%] bg-tertiary/20 rounded-full mix-blend-multiply filter blur-[100px] opacity-60 animate-pulse" style="animation-duration: 12s;"></div>
<div class="absolute top-[20%] right-[10%] w-[30%] h-[30%] bg-secondary-container/30 rounded-full mix-blend-multiply filter blur-[80px] opacity-50 animate-pulse" style="animation-duration: 10s;"></div>
</div>
<!-- Login Container -->
<main class="w-full max-w-[420px] z-10 relative">
<div class="glass-card rounded-[24px] border border-white/50 p-container-padding md:p-stack-lg flex flex-col gap-stack-md relative overflow-hidden">
<!-- Subtle Top Highlight -->
<div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/80 to-transparent"></div>
<!-- Header -->
<div class="flex flex-col items-center text-center gap-base">
<div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center mb-2 shadow-sm border border-white/60">
<span class="material-symbols-outlined text-primary text-[32px] drop-shadow-sm">volunteer_activism</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Welcome back</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-[280px]">Sign in to continue your journey of mutual aid and community support.</p>
</div>
<!-- Form -->
<form method="POST" action="{{ route('login') }}" class="flex flex-col gap-stack-sm w-full mt-2">
    @csrf
    @if (session('status'))
        <div class="rounded-2xl border border-secondary-container/30 bg-secondary-container/10 px-4 py-3 text-secondary text-body-sm">
            {{ session('status') }}
        </div>
    @endif
    <!-- Email Input -->
    <div class="flex flex-col gap-[6px]">
        <label class="font-label-caps text-label-caps text-on-surface-variant ml-1" for="email">Email Address</label>
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">mail</span>
            <input name="email" value="{{ old('email') }}" class="w-full h-12 pl-10 pr-4 rounded-xl border border-outline-variant/60 bg-white/40 font-body-sm text-body-sm text-on-surface placeholder:text-outline-variant focus:outline-none focus:border-primary focus:ring-[3px] focus:ring-primary/20 transition-all duration-200" id="email" placeholder="hello@@kindcommunity.org" type="email" autocomplete="email" autofocus />
        </div>
        @error('email')
            <p class="text-error text-body-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
<!-- Password Input -->
<div class="flex flex-col gap-[6px]">
    <div class="flex justify-between items-center ml-1 pr-1">
        <label class="font-label-caps text-label-caps text-on-surface-variant" for="password">Password</label>
        <a class="font-body-sm text-body-sm text-primary hover:text-tertiary hover:underline transition-colors" href="{{ route('password.request') }}">Forgot password?</a>
    </div>
    <div class="relative group">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
        <input name="password" class="w-full h-12 pl-10 pr-10 rounded-xl border border-outline-variant/60 bg-white/40 font-body-sm text-body-sm text-on-surface placeholder:text-outline-variant focus:outline-none focus:border-primary focus:ring-[3px] focus:ring-primary/20 transition-all duration-200" id="password" placeholder="••••••••" type="password" autocomplete="current-password" />
        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors focus:outline-none" type="button">
            <span class="material-symbols-outlined text-[20px]">visibility_off</span>
        </button>
    </div>
    @error('password')
        <p class="text-error text-body-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<!-- Submit Button -->
<button class="mt-4 w-full h-12 rounded-xl bg-gradient-to-r from-primary to-tertiary text-on-primary font-title-md text-title-md shadow-[0_8px_16px_-4px_rgba(0,88,188,0.3)] hover:shadow-[0_12px_20px_-4px_rgba(0,88,188,0.4)] hover:-translate-y-[1px] transition-all duration-200 active:translate-y-0 active:shadow-md flex items-center justify-center gap-2" type="submit">
                    Sign In
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</form>
<!-- Divider -->
<div class="relative flex items-center w-full my-1">
<div class="flex-grow border-t border-outline-variant/40"></div>
<span class="flex-shrink-0 mx-4 font-body-sm text-body-sm text-outline-variant">or continue with</span>
<div class="flex-grow border-t border-outline-variant/40"></div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-2 gap-gutter w-full">
<button class="flex items-center justify-center gap-2 h-11 rounded-xl border border-outline-variant/50 bg-white/30 hover:bg-white/60 transition-all duration-200 font-body-sm text-body-sm text-on-surface shadow-sm" type="button">
<svg class="w-5 h-5" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                    Google
                </button>
<button class="flex items-center justify-center gap-2 h-11 rounded-xl border border-outline-variant/50 bg-white/30 hover:bg-white/60 transition-all duration-200 font-body-sm text-body-sm text-on-surface shadow-sm" type="button">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">apps</span>
                    Apple
                </button>
</div>
<!-- Sign Up Prompt -->
<p class="text-center font-body-sm text-body-sm text-on-surface-variant mt-2">
                New to Kind? <a class="text-primary font-semibold hover:text-tertiary hover:underline transition-colors" href="{{ route('register') }}">Create an account</a>
</p>
</div>
<!-- Trust Badge / Footer Note -->
<div class="mt-stack-sm text-center">
<p class="font-body-sm text-[12px] text-on-surface-variant/70">Secure, encrypted, and community-driven.</p>
</div>
</main>
@endsection
