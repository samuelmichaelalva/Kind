@extends('layouts.stitch', ['bodyAttributes' => 'class="text-on-surface font-body-lg text-body-lg min-h-screen flex flex-col md:flex-row antialiased"'])

@section('title', 'Create Post - Kind Community')

@section('head')
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter & Geist -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@@400;600;700&amp;family=Geist:wght@@600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config injected from Design System -->
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
        /* Custom base styles for glassmorphism */
        body {
            background-color: #f9f9ff; /* background */
            background-image: 
                radial-gradient(at 0% 0%, hsla(212,100%,77%,0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, hsla(245,100%,73%,0.15) 0px, transparent 50%);
            background-attachment: fixed;
            background-size: cover;
        }
        
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .dark .glass-panel {
            background: rgba(24, 28, 35, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Form elements quiet styling */
        .quiet-input {
            background: transparent;
            border: 1px solid theme('colors.outline-variant');
            transition: all 0.2s ease;
        }
        
        .quiet-input:focus {
            border-color: theme('colors.primary');
            box-shadow: 0 0 0 3px theme('colors.primary-fixed-dim');
            outline: none;
        }

        /* Custom file upload zone */
        .upload-zone {
            border: 1px dashed theme('colors.outline-variant');
            background: rgba(255, 255, 255, 0.3);
            transition: all 0.2s ease;
        }
        .upload-zone:hover, .upload-zone.drag-active {
            border-color: theme('colors.primary');
            background: rgba(216, 226, 255, 0.3); /* primary-fixed */
        }
        
        /* Hide scrollbar for nav */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection

@section('content')
<!-- Mobile Top Navigation Bar (Shown on md:hidden, hidden on md:flex) -->
<!-- Applying style_shell_layout: fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 -->
<nav class="md:hidden fixed top-0 w-full z-50 flex justify-between items-center px-container-padding h-16 bg-surface/70 backdrop-blur-xl border-b border-white/10 shadow-sm glass-panel">
<div class="font-display-lg text-headline-lg-mobile font-bold text-primary">
            Kind
        </div>
<div class="flex items-center gap-gutter">
<button class="text-primary hover:opacity-80 transition-all p-2">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">mail</span>
</button>
<button class="text-primary hover:opacity-80 transition-all p-2">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">notifications</span>
</button>
<div class="w-8 h-8 rounded-full overflow-hidden border-2 border-primary">
<img alt="User profile with active status" class="w-full h-full object-cover" data-alt="A close up, high quality photo of a young smiling volunteer working in a bright, modern community center. The lighting is soft and natural, creating a warm, approachable mood. High resolution, light and airy aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpLYtn2Ru5bq9yXsHFqGCMK4qxEUvkrInI-XUVLBFHzpH3DrOlDO0iSm5ISPedLA9f6Q_cVU9MpBHhF2lunLFoO9hhkdZZqmOkrTAqv7soFV_sKI2wywT9PFBkSG7mJTRey69VF8hzrCECY0uxtOLGkr_vB-0Ekn1JhmcKOs2-e_DbqS0T5K4C-Wo10mSUZ2AzcU4YkN-RLZ8eUKl6m7F8_pnprORvAtNsQi5jtE1t4TvTyWHCRJIqQdC-KE7Qn4EoS6bhTrTBuA"/>
</div>
</div>
</nav>
<!-- Mobile Bottom Navigation (Destination Rule: Suppressing because Create Post is a transactional/task screen) -->
<!-- However, since the prompt says "within the dashboard shell", we'll keep the side nav for desktop, but for mobile, typical create screens are full screen or pushed on top. We will omit bottom nav to focus on the canvas. -->
<!-- Desktop Side Navigation Bar (Hidden on mobile, shown on md:flex) -->
<!-- Applying style_shell_layout: fixed left-0 top-16 h-[calc(100vh-64px)] w-[240px] flex flex-col p-base gap-stack-sm -->
<aside class="hidden md:flex fixed left-0 top-0 h-full w-[240px] flex-col p-base gap-stack-sm bg-surface/70 backdrop-blur-xl border-r border-white/10 shadow-lg glass-panel z-40">
<!-- Sidebar Header / Logo (TopAppBar equivalent for desktop) -->
<div class="px-container-padding py-stack-md flex flex-col gap-base border-b border-white/10 mb-4">
<div class="font-display-lg text-headline-lg font-bold text-primary mb-2">
                Kind
            </div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden border-2 border-secondary-fixed-dim">
<img alt="Kind Community User" class="w-full h-full object-cover" data-alt="A portrait of an organized community leader in a clean, minimalist office setting. The person looks reliable and calm. The color palette features neutral tones with subtle green accents. Soft studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8qnHYCRtr1m9isXd-gYtuekwseNq3uE-ux3yGwAf_5PsniXXnivFZhpXufsILG8MI3pMl13Vjp1gvmLqAV91rYu7sMS76DT9IvpIvAeM3NqDczC7tO0Qa0EkxxycGf6IzVf0BsLPXqJvYbbVf4rMmu6g_sECl8b1qS3va7l3X_95nKPcxh3w39Sd3D_QSTepc_MiBEg9TfsoPNIWL2FYt6ZU_5WQCHk6VqfSrcomK32B5X5hj1ypdpeV7_GzKXBvjEYayw8zU5Q"/>
</div>
<div class="flex flex-col">
<span class="font-title-md text-body-sm font-semibold text-on-surface">Community Dashboard</span>
<span class="font-label-caps text-label-caps text-on-surface-variant opacity-80">Kindness in Action</span>
</div>
</div>
</div>
<!-- Navigation Links -->
<!-- Logic: Create Post intent maps closest to "New Request" CTA, active state might not apply perfectly to generic tabs. We will highlight "My Requests" as a fallback intent for generating a new one, or leave them inactive to focus on the task. Let's make "My Requests" active as the closest intent. -->
<nav class="flex-1 flex flex-col gap-2 px-2 overflow-y-auto no-scrollbar">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">analytics</span>
<span>Activity</span>
</a>
<!-- Active State -->
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary font-semibold rounded-lg font-body-sm text-body-sm scale-95 transition-transform" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">handshake</span>
<span>My Requests</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">volunteer_activism</span>
<span>My Donations</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">groups</span>
<span>Volunteering</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined">bookmark</span>
<span>Saved</span>
</a>
</nav>
<div class="mt-auto px-2 pb-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-variant/50 transition-all font-body-sm text-body-sm mb-4" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</a>
<!-- CTA Button -->
<button class="w-full bg-gradient-to-r from-primary to-tertiary text-white rounded-xl py-3 px-4 font-body-sm text-body-sm font-semibold shadow-sm hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
<span class="material-symbols-outlined">add</span>
                New Request
            </button>
</div>
</aside>
<!-- Main Content Area -->
<!-- 12-column fluid grid on desktop, full width on mobile -->
<main class="flex-1 mt-16 md:mt-0 md:ml-[240px] p-container-padding w-full max-w-7xl mx-auto flex flex-col">
<!-- Header -->
<header class="mb-stack-md flex justify-between items-center">
<div>
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">Create a Post</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-1">What kind of support are you looking to facilitate today?</p>
</div>
<!-- Close action for task focus -->
<button class="p-2 rounded-full hover:bg-surface-variant/50 text-on-surface-variant transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</header>
<!-- Main Form Canvas - Bento Grid / Glassmorphic Card Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-stack-md flex-1">
<!-- Left Column: Primary Form Structure (8 cols) -->
<div class="lg:col-span-8 flex flex-col gap-stack-md">
<!-- Tab Navigation Card -->
<div class="glass-panel rounded-xl p-2 shadow-sm w-full flex overflow-x-auto no-scrollbar">
<button class="flex-1 min-w-[120px] py-3 px-4 rounded-lg bg-surface text-primary font-semibold font-body-sm text-body-sm shadow-sm transition-all flex items-center justify-center gap-2" id="tab-request">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">handshake</span>
                        Help Request
                    </button>
<button class="flex-1 min-w-[120px] py-3 px-4 rounded-lg text-on-surface-variant hover:bg-surface-variant/30 font-body-sm text-body-sm transition-all flex items-center justify-center gap-2" id="tab-donation">
<span class="material-symbols-outlined">volunteer_activism</span>
                        Donation
                    </button>
<button class="flex-1 min-w-[120px] py-3 px-4 rounded-lg text-on-surface-variant hover:bg-surface-variant/30 font-body-sm text-body-sm transition-all flex items-center justify-center gap-2" id="tab-event">
<span class="material-symbols-outlined">event</span>
                        Volunteer Event
                    </button>
</div>
<!-- Main Details Card -->
<div class="glass-panel rounded-xl p-container-padding shadow-sm flex flex-col gap-stack-md relative overflow-hidden">
<!-- Subtle decorative background element for depth -->
<div class="absolute -top-24 -right-24 w-64 h-64 bg-primary-fixed-dim opacity-20 rounded-full blur-3xl pointer-events-none"></div>
<h2 class="font-title-md text-title-md text-on-surface">General Details</h2>
<div class="flex flex-col gap-2">
<label class="font-label-caps text-label-caps text-on-surface-variant">Post Title</label>
<input class="quiet-input w-full rounded-lg px-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline" placeholder="e.g., Need help with grocery delivery" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-caps text-label-caps text-on-surface-variant">Description</label>
<textarea class="quiet-input w-full rounded-lg px-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline resize-none" placeholder="Describe the situation or what you are offering..." rows="4"></textarea>
</div>
<!-- Dynamic Fields Container (Simulated for Help Request) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter p-4 rounded-lg bg-surface-container-low/50 border border-outline-variant/30">
<div class="flex flex-col gap-2">
<label class="font-label-caps text-label-caps text-on-surface-variant">Urgency Level</label>
<select class="quiet-input w-full rounded-lg px-4 py-3 font-body-lg text-body-lg text-on-surface bg-transparent appearance-none">
<option>Low - Whenever possible</option>
<option>Medium - Within a few days</option>
<option>High - Urgent (24 hrs)</option>
</select>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-caps text-label-caps text-on-surface-variant">Category</label>
<select class="quiet-input w-full rounded-lg px-4 py-3 font-body-lg text-body-lg text-on-surface bg-transparent appearance-none">
<option>Groceries &amp; Food</option>
<option>Transportation</option>
<option>Home Maintenance</option>
<option>Childcare</option>
</select>
</div>
</div>
</div>
</div>
<!-- Right Column: Media & Location (4 cols) -->
<div class="lg:col-span-4 flex flex-col gap-stack-md">
<!-- Media Upload Card -->
<div class="glass-panel rounded-xl p-container-padding shadow-sm flex flex-col gap-stack-sm">
<div class="flex justify-between items-center">
<h2 class="font-title-md text-title-md text-on-surface">Media</h2>
<span class="font-label-caps text-label-caps text-outline px-2 py-1 bg-surface-variant rounded-full">Optional</span>
</div>
<div class="upload-zone rounded-lg p-6 flex flex-col items-center justify-center gap-3 cursor-pointer mt-2 text-center h-48">
<div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-2xl">add_photo_alternate</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface font-semibold">Click to upload or drag and drop</p>
<p class="font-label-caps text-label-caps text-outline">SVG, PNG, JPG or GIF (max. 5MB)</p>
</div>
</div>
<!-- Location Card -->
<div class="glass-panel rounded-xl p-container-padding shadow-sm flex flex-col gap-stack-sm">
<h2 class="font-title-md text-title-md text-on-surface mb-2">Location</h2>
<div class="flex flex-col gap-2 relative">
<span class="material-symbols-outlined absolute left-3 top-3 text-outline-variant">location_on</span>
<input class="quiet-input w-full rounded-lg pl-10 pr-4 py-3 font-body-lg text-body-lg text-on-surface placeholder:text-outline" placeholder="Enter neighborhood or city" type="text"/>
</div>
<!-- Mini map representation -->
<div class="w-full h-32 rounded-lg bg-surface-container overflow-hidden relative mt-2 border border-outline-variant/30">
<!-- Abstract location visualization using simple shapes/gradients as placeholder for map -->
<div class="absolute inset-0 bg-gradient-to-br from-surface-variant to-surface-dim opacity-50"></div>
<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
<div class="w-4 h-4 bg-primary rounded-full border-2 border-white shadow-md z-10 animate-pulse"></div>
<div class="w-12 h-12 bg-primary/20 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
</div>
<span class="absolute bottom-2 right-2 font-label-caps text-label-caps text-outline-variant bg-white/80 px-2 py-1 rounded">Map Preview</span>
</div>
</div>
<!-- Actions -->
<div class="mt-auto pt-stack-sm flex gap-gutter justify-end">
<button class="px-6 py-3 rounded-xl border border-outline-variant text-on-surface font-body-sm text-body-sm font-semibold hover:bg-surface-variant/30 transition-colors">
                        Save Draft
                    </button>
<button class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-tertiary text-white font-body-sm text-body-sm font-semibold shadow-sm hover:opacity-90 transition-opacity">
                        Publish Post
                    </button>
</div>
</div>
</div>
</main>
<script>
        // Simple script for tab switching visual logic
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = [
                document.getElementById('tab-request'),
                document.getElementById('tab-donation'),
                document.getElementById('tab-event')
            ];

            const activeClasses = ['bg-surface', 'text-primary', 'font-semibold', 'shadow-sm'];
            const inactiveClasses = ['text-on-surface-variant', 'hover:bg-surface-variant/30'];

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Reset all
                    tabs.forEach(t => {
                        t.classList.remove(...activeClasses);
                        t.classList.add(...inactiveClasses);
                        // reset icon fill
                        const icon = t.querySelector('.material-symbols-outlined');
                        if(icon) icon.style.fontVariationSettings = "'FILL' 0";
                    });

                    // Set active
                    tab.classList.remove(...inactiveClasses);
                    tab.classList.add(...activeClasses);
                    const activeIcon = tab.querySelector('.material-symbols-outlined');
                    if(activeIcon) activeIcon.style.fontVariationSettings = "'FILL' 1";
                });
            });
        });
    </script>
@endsection
