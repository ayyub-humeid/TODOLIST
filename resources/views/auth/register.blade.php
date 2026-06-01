<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>FocusFlow - Register</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#000000",
                        "secondary": "#0058be",
                        "background": "#f8f9ff",
                        "surface": "#f8f9ff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#45464d",
                        "outline": "#76777d",
                        "outline-variant": "#c6c6cd",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#eff4ff",
                        "surface-container": "#e5eeff",
                        "on-secondary": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a"
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
                        "gutter": "24px",
                        "margin-mobile": "16px"
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .register-card-shadow {
            box-shadow: 0px 4px 20px rgba(15, 23, 42, 0.05);
        }
    </style>
</head>
<body class="bg-background min-h-screen flex items-center justify-center p-margin-mobile md:p-gutter">
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-[10%] -left-[5%] w-[40%] h-[40%] bg-surface-container rounded-full opacity-40 blur-[100px]"></div>
        <div class="absolute top-[60%] -right-[10%] w-[50%] h-[50%] bg-secondary/10 rounded-full opacity-30 blur-[120px]"></div>
    </div>
    <main class="w-full max-w-[480px] z-10 flex flex-col items-center">
        <div class="mb-stack-lg flex flex-col items-center gap-base">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">dataset</span>
            </div>
            <h1 class="text-3xl font-bold text-on-surface tracking-tight">FocusFlow</h1>
        </div>
        <section class="w-full bg-surface-container-lowest register-card-shadow border border-outline-variant/30 rounded-xl p-8 md:p-10">
            <header class="mb-8">
                <h2 class="text-xl font-semibold text-on-surface">Create an Account</h2>
                <p class="text-sm text-on-surface-variant mt-1">Start managing your tasks effectively.</p>
            </header>
            <form action="{{ route('register') }}" class="space-y-4" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="bg-error-container text-on-error-container p-4 rounded-lg mb-4">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant uppercase tracking-wider px-1" for="name">Full Name</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                        <input class="w-full h-12 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-lg text-sm focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="name" name="name" placeholder="John Doe" required type="text" value="{{ old('name') }}"/>
                    </div>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant uppercase tracking-wider px-1" for="email">Email Address</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                        <input class="w-full h-12 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-lg text-sm focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="email" name="email" placeholder="name@example.com" required type="email" value="{{ old('email') }}"/>
                    </div>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant uppercase tracking-wider px-1" for="password">Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                        <input class="w-full h-12 pl-12 pr-12 bg-surface-container-low border border-outline-variant rounded-lg text-sm focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="password" name="password" placeholder="••••••••" required type="password"/>
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors toggle-password" type="button">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant uppercase tracking-wider px-1" for="password_confirmation">Confirm Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock_reset</span>
                        <input class="w-full h-12 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-lg text-sm focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required type="password"/>
                    </div>
                </div>
                <button class="w-full h-12 bg-secondary text-white rounded-lg font-semibold mt-4 hover:bg-secondary/90 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-md shadow-secondary/10" type="submit">
                    Create Account
                    <span class="material-symbols-outlined text-[20px]">person_add</span>
                </button>
            </form>
        </section>
        <p class="mt-8 text-sm text-on-surface-variant">
            Already have an account? 
            <a class="text-secondary font-semibold hover:underline decoration-2 underline-offset-4" href="{{ route('login') }}">Log in</a>
        </p>
    </main>
    <script>
        document.querySelectorAll('.toggle-password').forEach(btn => {
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
    </script>
</body>
</html>