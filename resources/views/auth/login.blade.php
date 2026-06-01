<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>FocusFlow - Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-container": "#7c839b",
                    "tertiary-fixed": "#e0e3e5",
                    "outline-variant": "#c6c6cd",
                    "on-secondary-container": "#fefcff",
                    "background": "#f8f9ff",
                    "surface": "#f8f9ff",
                    "on-primary-fixed-variant": "#3f465c",
                    "on-primary": "#ffffff",
                    "surface-container": "#e5eeff",
                    "on-primary-fixed": "#131b2e",
                    "error": "#ba1a1a",
                    "secondary-fixed": "#d8e2ff",
                    "tertiary": "#000000",
                    "surface-variant": "#d3e4fe",
                    "surface-bright": "#f8f9ff",
                    "surface-container-highest": "#d3e4fe",
                    "on-tertiary-container": "#818486",
                    "on-secondary": "#ffffff",
                    "inverse-primary": "#bec6e0",
                    "outline": "#76777d",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed": "#191c1e",
                    "primary-fixed-dim": "#bec6e0",
                    "on-surface": "#0b1c30",
                    "on-tertiary-fixed-variant": "#444749",
                    "surface-container-high": "#dce9ff",
                    "secondary-container": "#2170e4",
                    "surface-dim": "#cbdbf5",
                    "inverse-on-surface": "#eaf1ff",
                    "tertiary-fixed-dim": "#c4c7c9",
                    "primary-container": "#131b2e",
                    "on-background": "#0b1c30",
                    "tertiary-container": "#191c1e",
                    "error-container": "#ffdad6",
                    "primary": "#000000",
                    "surface-tint": "#565e74",
                    "on-secondary-fixed": "#001a42",
                    "secondary": "#0058be",
                    "inverse-surface": "#213145",
                    "on-tertiary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "on-surface-variant": "#45464d",
                    "primary-fixed": "#dae2fd",
                    "surface-container-low": "#eff4ff",
                    "secondary-fixed-dim": "#adc6ff",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed-variant": "#004395"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-md": "12px",
                    "stack-lg": "24px",
                    "base": "8px",
                    "stack-sm": "4px",
                    "container-max": "1200px",
                    "margin-mobile": "16px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "display-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "title-md": ["Inter"],
                    "body-sm": ["Inter"],
                    "headline-lg-mobile": ["Inter"]
            },
            "fontSize": {
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "title-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .login-card-shadow {
            box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="bg-background min-h-screen flex items-center justify-center p-margin-mobile md:p-gutter">
<!-- Background Decoration -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
<div class="absolute -top-[10%] -left-[5%] w-[40%] h-[40%] bg-surface-container rounded-full opacity-40 blur-[100px]"></div>
<div class="absolute top-[60%] -right-[10%] w-[50%] h-[50%] bg-secondary-fixed/20 rounded-full opacity-30 blur-[120px]"></div>
</div>
<!-- Login Container -->
<main class="w-full max-w-[440px] z-10 flex flex-col items-center">
<!-- Brand Identity -->
<div class="mb-stack-lg flex flex-col items-center gap-base">
<div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">dataset</span>
</div>
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface tracking-tight">FocusFlow</h1>
</div>
<!-- Login Card -->
<section class="w-full bg-surface-container-lowest login-card-shadow border border-outline-variant/30 rounded-xl p-8 md:p-10">
<header class="mb-8">
<h2 class="font-title-md text-title-md text-on-surface">Welcome Back</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Please enter your details to continue.</p>
</header>
<form action="{{ route('login') }}" class="space-y-stack-lg" method="POST">
    @csrf

    @if ($errors->any())
        <div class="bg-error-container text-on-error-container p-4 rounded-lg mb-4">
            <ul class="list-disc list-inside font-body-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Email Field -->
<div class="flex flex-col gap-base">
<label class="font-label-md text-label-md text-on-surface-variant px-1 uppercase tracking-wider" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
<input  class="w-full h-12 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-lg font-body-sm text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="email" name="{{ config('fortify.username') }}" placeholder="name@company.com" required="" type="email" value="{{ old(config('fortify.username')) }}"/>
</div>
</div>
<!-- Password Field -->
<div class="flex flex-col gap-base">
<div class="flex justify-between items-center px-1">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider" for="password">Password</label>
<a class="font-label-md text-label-md text-secondary hover:underline transition-all" href="#">Forgot password?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
<input value="{{ old('password') }}" class="w-full h-12 pl-12 pr-12 bg-surface-container-low border border-outline-variant rounded-lg font-body-sm text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
</div>
<!-- Remember Me & Login Button -->
<div class="flex flex-col gap-stack-lg pt-2">
<label class="flex items-center gap-3 cursor-pointer group">
<div class="relative flex items-center">
<input class="peer appearance-none w-5 h-5 border-2 border-outline-variant rounded-md checked:bg-secondary checked:border-secondary transition-all cursor-pointer" type="checkbox" name="remember"/>
<span class="material-symbols-outlined absolute inset-0 text-white text-[16px] flex items-center justify-center opacity-0 peer-checked:opacity-100 pointer-events-none" style="font-variation-settings: 'wght' 700;">check</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors select-none">Remember me for 30 days</span>
</label>
<button class="w-full h-12 bg-secondary text-on-secondary rounded-lg font-title-md text-[16px] hover:bg-secondary/90 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-md shadow-secondary/10" type="submit">
                        Log In
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</form>
<!-- Social Login Divider -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<span class="w-full border-t border-outline-variant/40"></span>
</div>
<div class="relative flex justify-center text-xs uppercase">
<span class="bg-surface-container-lowest px-4 font-label-md text-outline">Or continue with</span>
</div>
</div>
<!-- Social Buttons -->
<div class="grid grid-cols-2 gap-4">
<button class="h-12 border border-outline-variant rounded-lg flex items-center justify-center gap-2 font-body-sm text-on-surface hover:bg-surface-container-low transition-colors">
<img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxL6fr6jTA4jBBFcqNmM5YWqg1tG6VebnBRbjacJC_z6mbf9cav1vUs0JMSWaoJmCm6gD2hV3MgH-d3op_-qmzh39XuB8GwdNIp5EYJvjR7VQppPwQapHIkvIDvwsX1V0DAB0rr3DFem2usmP8HBXRzNimqUXyqSH5ciZfk2g5kISpii9hQZSo8yuTv6vr_QMHqqdKaRVAp5D7uiG5YBj6t0Kl0Afj6VN4rmz9V98jXkMK7KN-_Gdg-DG2rYbtRZ2ebK9_fzOaQQ"/>
                    Google
                </button>
<button class="h-12 border border-outline-variant rounded-lg flex items-center justify-center gap-2 font-body-sm text-on-surface hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">ios</span>
                    Apple
                </button>
</div>
</section>
<!-- Footer Link -->
<p class="mt-8 font-body-sm text-body-sm text-on-surface-variant">
            Don't have an account? 
            <a class="text-secondary font-semibold hover:underline decoration-2 underline-offset-4" href="#">Create an account</a>
</p>
<!-- System Status/Metadata -->
<footer class="mt-12 flex items-center gap-stack-md opacity-40 grayscale">
<span class="font-label-md text-label-md text-on-surface-variant">Version 2.4.0</span>
<span class="w-1 h-1 bg-outline rounded-full"></span>
<span class="font-label-md text-label-md text-on-surface-variant">Secure Session</span>
</footer>
</main>
<!-- Contextual Aesthetic Element -->
<div class="fixed bottom-gutter right-gutter hidden lg:block opacity-20 pointer-events-none">
<img class="w-64 h-64 object-cover rounded-3xl" data-alt="A macro close-up of a high-quality, minimalist paper planner and a sleek designer pen resting on a clean, white marble desk. The scene is bathed in soft, natural morning light filtering through a window, creating long, delicate shadows. The color palette is composed of soft whites, cool greys, and a single deep blue accent from the pen's ink. The mood is calm, professional, and focused, epitomizing the Azure Ethos design system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDDGQeNkR7xMvve1kBIYUft1DOTcylLkOGJYgouLTLAZqCzsJWrrrcgh8UHKD_8BNcRgob2ScttxNNltaIC3d7UeJ43WI56UavP8ScqtlViA3f2XBMCI5An80nE6WByqodRHn4214ePNdwWXb2FS1R530pLIlWjukglUEqPrWoBtNl9DM2U5ZpVltYp4WHeJRLg3h1AFsC6Ns7qqHk8w3BfSIt0c-FK-HtyRcmAqZtGmIxFIqVNcB66owCY7Vc28T5pF8j_8lCvA"/>
</div>
<script>
        // Simple Interaction Logic
        document.querySelectorAll('button[type="button"]').forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('span');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility_off';
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility';
                }
            });
        });

        // Add subtle hover effect for the main container
        const card = document.querySelector('section');
        document.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 100;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 100;
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
    </script>
</body></html>