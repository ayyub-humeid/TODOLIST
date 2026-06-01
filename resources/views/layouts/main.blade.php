<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FocusFlow | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .task-checkbox:checked+.task-label {
            text-decoration: line-through;
            opacity: 0.6;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #E2E8F0;
            border-radius: 10px;
        }
    </style>
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
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "title-md": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
</head>

<body
    class="bg-background text-on-surface font-body-lg text-body-lg min-h-screen flex flex-col md:flex-row overflow-hidden">
    <!-- SideNavBar (Mobile Bottom, Desktop Side) -->
    @include('layouts.includes.sidebar')
    <!-- Top Navigation for Mobile Only -->
    <header
        class="md:hidden fixed top-0 left-0 w-full h-16 bg-surface-container-lowest dark:bg-inverse-surface flex items-center justify-between px-gutter border-b border-outline-variant z-50">
        <span class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-on-surface">FocusFlow</span>
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-secondary">notifications</span>
            <div class="w-8 h-8 rounded-full bg-slate-200 overflow-hidden">
                <img alt="User"
                    data-alt="A professional headshot of a person with a warm, friendly smile, set against a soft-focus office background with natural lighting. The color palette is clean and modern, emphasizing high-key tones and professional attire. The overall mood is approachable and trustworthy."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDFzzQbwJknEAsA2kih2qZSrLoVGp-oNb1FoLfYkeywSkuTN92Ng9Boxy7nhibNfTKOHtZPmi4BumiPl82XZMHhGjhtd5_93Xj3D_uXf_m5pq3hYzRigvhyYim3OZYPEVH9xRrOQHIhQpp6NYm3uRUaokAR3HTQRHezd9T_xaprq2MaRjjargGARKYZTTkATba88CeN5Yyz_sQ2DTYBfO0Mo7c891W6uNEKehSBGIx4DnW2SLwys68OoguPPtAMRJ6P_L_1RR1cA" />
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    {{-- flex-1 md:ml-64 pt-16 md:pt-0 overflow-y-auto h-screen custom-scrollbar pb-20 md:pb-0 --}}
    <main class="@yield('main-class', 'flex-1 md:ml-64 pt-16 md:pt-0 overflow-y-auto h-screen custom-scrollbar pb-20 md:pb-0') ">
        @yield('content')

    </main>
    <!-- BottomNavBar for Mobile -->
    @include('layouts.includes.bottomNavbar')
    <script>
        // Micro-interactions for the task checkboxes
        document.querySelectorAll('.task-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkIcon = this.nextElementSibling;
                const label = this.closest('div').nextElementSibling.querySelector('.task-label') || this
                    .parentElement.nextElementSibling.querySelector('.task-label');

                if (this.checked) {
                    checkIcon.classList.remove('hidden');
                    if (label) {
                        label.style.textDecoration = 'line-through';
                        label.style.opacity = '0.6';
                    }
                } else {
                    checkIcon.classList.add('hidden');
                    if (label) {
                        label.style.textDecoration = 'none';
                        label.style.opacity = '1';
                    }
                }
            });
        });

        // Search bar interaction
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('scale-[1.02]');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('scale-[1.02]');
        });
    </script>
    <x-flash-message />
</body>

</html>
