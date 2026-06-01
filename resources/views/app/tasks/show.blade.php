<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-dim": "#cbdbf5",
                      "on-error": "#ffffff",
                      "on-secondary-container": "#fefcff",
                      "inverse-on-surface": "#eaf1ff",
                      "on-secondary": "#ffffff",
                      "tertiary-container": "#191c1e",
                      "inverse-surface": "#213145",
                      "background": "#f8f9ff",
                      "surface-container-high": "#dce9ff",
                      "primary": "#000000",
                      "on-primary-fixed": "#131b2e",
                      "surface-container-highest": "#d3e4fe",
                      "primary-container": "#131b2e",
                      "inverse-primary": "#bec6e0",
                      "surface-tint": "#565e74",
                      "on-background": "#0b1c30",
                      "outline": "#76777d",
                      "on-tertiary-fixed": "#191c1e",
                      "on-primary-container": "#7c839b",
                      "on-error-container": "#93000a",
                      "surface-container": "#e5eeff",
                      "surface-variant": "#d3e4fe",
                      "secondary": "#0058be",
                      "on-tertiary-container": "#818486",
                      "surface-bright": "#f8f9ff",
                      "primary-fixed": "#dae2fd",
                      "on-surface": "#0b1c30",
                      "surface": "#f8f9ff",
                      "secondary-fixed": "#d8e2ff",
                      "tertiary-fixed-dim": "#c4c7c9",
                      "outline-variant": "#c6c6cd",
                      "on-tertiary": "#ffffff",
                      "tertiary": "#000000",
                      "on-secondary-fixed-variant": "#004395",
                      "secondary-container": "#2170e4",
                      "on-primary": "#ffffff",
                      "primary-fixed-dim": "#bec6e0",
                      "on-surface-variant": "#45464d",
                      "tertiary-fixed": "#e0e3e5",
                      "on-tertiary-fixed-variant": "#444749",
                      "surface-container-low": "#eff4ff",
                      "secondary-fixed-dim": "#adc6ff",
                      "surface-container-lowest": "#ffffff",
                      "on-primary-fixed-variant": "#3f465c",
                      "on-secondary-fixed": "#001a42",
                      "error-container": "#ffdad6",
                      "error": "#ba1a1a"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "stack-md": "12px",
                      "container-max": "1200px",
                      "gutter": "24px",
                      "base": "8px",
                      "stack-lg": "24px",
                      "stack-sm": "4px",
                      "margin-mobile": "16px"
              },
              "fontFamily": {
                      "headline-lg-mobile": ["Inter"],
                      "label-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "display-lg": ["Inter"],
                      "body-sm": ["Inter"],
                      "title-md": ["Inter"],
                      "headline-lg": ["Inter"]
              },
              "fontSize": {
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                      "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                      "title-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #E2E8F0; border-radius: 10px; }
    </style>
</head>
<body class="bg-background text-on-surface">
<!-- TopNavBar -->
<nav class="fixed top-0 left-0 w-full z-50 flex items-center justify-between px-gutter h-16 bg-surface-container-lowest dark:bg-inverse-surface border-b border-outline-variant dark:border-outline shadow-sm">
<div class="flex items-center gap-4">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface dark:text-inverse-on-surface">FocusFlow</span>
</div>
<div class="flex items-center gap-stack-lg">
<div class="hidden md:flex gap-6">
<a class="text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary font-title-md text-title-md py-1" href="#">Dashboard</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-medium hover:bg-surface-container-low transition-colors font-title-md text-title-md py-1" href="#">Projects</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-medium hover:bg-surface-container-low transition-colors font-title-md text-title-md py-1" href="#">Team</a>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined text-secondary">notifications</span></button>
<button class="p-2 rounded-full hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined text-secondary">settings</span></button>
<img alt="User profile" class="w-8 h-8 rounded-full border border-outline-variant" data-alt="A professional headshot of a focused male executive in a high-tech office setting. The lighting is soft and natural, emphasizing a calm and organized professional atmosphere. The image uses a clean, bright color palette with subtle blue and grey tones to reflect an architectural focus and reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAk_Ic5scyHfd0nLgeq5OevYwz8tJE2JaAy47AvWDRK1Z9QWb9WlZ8lTfEG1Fa8Ywx4H1C5Q_WQiFIpO85QIVpdc5omQcorPMWOFEyuPbzkUcTZRXWsSYTwqCFOsdecXvYoFIAs3LqcdoyGjgVHb02-lv9Iy81Y8o1TbppYbVzR-gCfhSGma4XmIFxwGkjmdvoP4yHxNIyzuh1LFUrB7V3QySBKFbOy8P6wiU2-qCPmqo85gpVw5hJ4jfNmnp-jcwy4x55SCbO8gQ"/>
</div>
</div>
</nav>
<div class="flex pt-16 min-h-screen">
<!-- SideNavBar -->
<aside class="hidden md:flex flex-col h-full w-64 fixed left-0 top-16 bg-surface dark:bg-surface-dim border-r border-outline-variant dark:border-outline py-stack-lg px-base space-y-stack-md">
<div class="px-4 mb-6">
<h2 class="font-title-md text-title-md font-black text-on-surface">Task Management</h2>
<p class="font-label-md text-label-md text-on-surface-variant">Professional Workspace</p>
</div>
<div class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant font-medium rounded-lg hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-secondary font-bold bg-secondary-container/10 rounded-lg" href="#">
<span class="material-symbols-outlined">folder_open</span>
<span class="font-label-md text-label-md">Projects</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant font-medium rounded-lg hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">calendar_today</span>
<span class="font-label-md text-label-md">Calendar</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant font-medium rounded-lg hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="font-label-md text-label-md">Team</span>
</a>
</div>
<div class="px-4 py-6 border-t border-outline-variant">
<button class="w-full bg-secondary text-white py-3 rounded-xl font-bold hover:opacity-90 transition-all flex items-center justify-center gap-2 shadow-sm">
<span class="material-symbols-outlined">add</span>
                    Create Task
                </button>
</div>
<div class="space-y-1 mt-auto">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant font-medium rounded-lg hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">help_outline</span>
<span class="font-label-md text-label-md">Help</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant font-medium rounded-lg hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-md text-label-md">Sign Out</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-0 md:ml-64 p-4 md:p-gutter">
<div class="max-w-container-max mx-auto">
<!-- Page Header Breadcrumbs -->
<div class="flex items-center gap-2 mb-stack-lg text-on-surface-variant">
<span class="font-label-md text-label-md">Projects</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="font-label-md text-label-md">Product Launch 2024</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="font-label-md text-label-md text-secondary font-bold">UX Audit &amp; Refinement</span>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg">
<!-- Task Content Column -->
<div class="lg:col-span-8 space-y-stack-lg">
<!-- Task Header Card -->
<div class="bg-surface-container-lowest rounded-xl p-stack-lg shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-outline-variant/30">
<div class="flex flex-wrap items-start justify-between gap-4 mb-stack-md">
<h1 class="font-headline-lg text-headline-lg font-bold text-on-surface flex-1">Website UX Audit and Accessibility Compliance Check</h1>
<div class="flex gap-2">
<span class="px-3 py-1 rounded-full bg-secondary-fixed/30 text-secondary font-label-md text-label-md flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                                        In Progress
                                    </span>
<span class="px-3 py-1 rounded-full bg-error-container text-on-error-container font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">priority_high</span>
                                        High Priority
                                    </span>
</div>
</div>
<div class="flex flex-wrap gap-stack-lg py-4 border-y border-outline-variant/20 mb-stack-md">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-on-surface-variant">calendar_today</span>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Due Date</p>
<p class="font-body-sm text-body-sm font-semibold">Oct 24, 2024</p>
</div>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-on-surface-variant">person</span>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Assignee</p>
<p class="font-body-sm text-body-sm font-semibold">Sarah Jenkins</p>
</div>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-on-surface-variant">label</span>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Category</p>
<p class="font-body-sm text-body-sm font-semibold">Design Quality</p>
</div>
</div>
</div>
<div class="space-y-stack-md">
<h3 class="font-title-md text-title-md text-on-surface">Description</h3>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                    Conduct a comprehensive audit of the current e-commerce platform focusing on accessibility (WCAG 2.1 Level AA) and core user journey efficiency. Identify friction points in the checkout process and provide actionable design refinements for the mobile experience.
                                </p>
</div>
</div>
<!-- Sub-tasks Section -->
<div class="bg-surface-container-lowest rounded-xl p-stack-lg shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-outline-variant/30">
<div class="flex items-center justify-between mb-stack-md">
<h3 class="font-title-md text-title-md text-on-surface">Sub-tasks</h3>
<div class="w-32 h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="bg-secondary h-full w-[40%]"></div>
</div>
</div>
<div class="space-y-2">
<label class="flex items-center gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer">
<input checked="" class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
<span class="flex-1 font-body-sm text-body-sm text-on-surface-variant line-through opacity-60">Initial accessibility scan using Lighthouse</span>
<span class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">drag_indicator</span>
</label>
<label class="flex items-center gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent">
<input checked="" class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
<span class="flex-1 font-body-sm text-body-sm text-on-surface-variant line-through opacity-60">Stakeholder interview on pain points</span>
<span class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">drag_indicator</span>
</label>
<label class="flex items-center gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer">
<input class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
<span class="flex-1 font-body-sm text-body-sm text-on-surface">Drafting WCAG compliance report</span>
<span class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">drag_indicator</span>
</label>
<label class="flex items-center gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer">
<input class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
<span class="flex-1 font-body-sm text-body-sm text-on-surface">Prototyping checkout flow refinements</span>
<span class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">drag_indicator</span>
</label>
<button class="mt-2 flex items-center gap-2 px-4 py-2 font-label-md text-label-md text-secondary hover:underline">
<span class="material-symbols-outlined text-[18px]">add_circle</span>
                                    Add sub-task
                                </button>
</div>
</div>
<!-- Activity Feed -->
<div class="bg-surface-container-lowest rounded-xl p-stack-lg shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-outline-variant/30">
<h3 class="font-title-md text-title-md text-on-surface mb-stack-lg">Activity &amp; Comments</h3>
<div class="space-y-6">
<div class="flex gap-4">
<img alt="Avatar" class="w-10 h-10 rounded-full" data-alt="A portrait of a cheerful female creative professional with glasses, working in a sun-drenched minimalist studio. The overall aesthetic is clean and modern, with soft warm lighting and a sophisticated palette of whites and soft blue accents, reinforcing a calm and focused work environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDk-l_cTF5QpGJJ3RbNuOP2UgkJAGzs979M81tTHBT9vdBEFVPnPBNbqpGohKJksw61ZsirbQN8t3oz6hurFzjjS0ejIDEUJP_SWtXII2_s5c0UHveHwCHnvzOkfAb9fBmJft5byPt_TLM7pByF5LznZ5daahJZcj8BBIt6f3vkP7pfbz7nBL0GU7TW6yU2IVNoi8Wg91ub-e5SZ-7hrEmDsvRSc6-ZYuCqjKCV31gG89_DqTpAnZ9269FBrJPKs0yWC6HEL8Lq4g"/>
<div class="flex-1">
<div class="flex items-center gap-2 mb-1">
<span class="font-body-sm text-body-sm font-bold">Emma Wilson</span>
<span class="font-label-md text-label-md text-on-surface-variant">2 hours ago</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant bg-surface-container-low p-4 rounded-xl rounded-tl-none">
                                            I've uploaded the initial Figma files for the checkout flow. Let me know if we need to adjust the contrast on the primary CTA buttons for better visibility.
                                        </p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-bold">SJ</div>
<div class="flex-1 border-l-2 border-outline-variant/20 pl-4">
<p class="font-label-md text-label-md text-on-surface-variant">Sarah Jenkins changed status to <span class="font-bold text-secondary">In Progress</span> • 5 hours ago</p>
</div>
</div>
<!-- Input Field -->
<div class="flex gap-4 items-start pt-4">
<div class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined">person</span>
</div>
<div class="flex-1 relative">
<textarea class="w-full min-h-[100px] bg-surface-container-low border border-outline-variant focus:border-secondary focus:ring-0 rounded-xl p-4 font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50" placeholder="Type your comment..."></textarea>
<div class="absolute bottom-3 right-3 flex items-center gap-2">
<button class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant"><span class="material-symbols-outlined">attach_file</span></button>
<button class="bg-secondary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:opacity-90">Send</button>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Actions Sidebar Column -->
<div class="lg:col-span-4 space-y-stack-lg">
<!-- Actions Panel -->
<div class="bg-surface-container-lowest rounded-xl p-stack-lg shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-outline-variant/30 sticky top-[80px]">
<h3 class="font-title-md text-title-md text-on-surface mb-stack-md">Actions</h3>
<div class="space-y-3">
<button class="w-full bg-secondary text-white h-12 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-all">
<span class="material-symbols-outlined" data-weight="fill">check_circle</span>
                                    Mark as Complete
                                </button>
<button class="w-full border border-outline-variant h-12 rounded-xl font-bold text-on-surface flex items-center justify-center gap-2 hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined">edit</span>
                                    Edit Task
                                </button>
<button class="w-full border border-outline-variant h-12 rounded-xl font-bold text-on-surface flex items-center justify-center gap-2 hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined">share</span>
                                    Share Task
                                </button>
<div class="pt-4 mt-4 border-t border-outline-variant/20">
<button class="w-full text-error h-12 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-error-container/20 transition-all">
<span class="material-symbols-outlined">delete</span>
                                        Delete Task
                                    </button>
</div>
</div>
<!-- Attachments Preview -->
<div class="mt-stack-lg">
<h4 class="font-label-md text-label-md font-bold text-on-surface-variant uppercase tracking-wider mb-stack-md">Attachments</h4>
<div class="grid grid-cols-2 gap-2">
<div class="group relative aspect-square rounded-lg overflow-hidden bg-surface-container cursor-pointer">
<img alt="Wireframe" class="w-full h-full object-cover transition-transform group-hover:scale-110" data-alt="A clean, minimalist UI/UX wireframe displayed on a tablet screen. The design features a sophisticated layout with ample whitespace, precise alignment, and a neutral color palette of greys and soft blues, embodying a professional and focused architectural aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxM4dWrQpOvwDnMW676juvV7zCSFM-nIhyv7aQ2XFD30SiWEpy8M7D7MEwMiKypTgnOCW2S8UWIE9EC6AjMHQGSzcSpaaCWyJOlOa8nBI-IVmSSTkKnP6YfkMufNfJyrPsTwvke-HkzUhQTT4P8LQe_EjLSX7Sxw1XkArzQXd7Ty5ovji7ujJo9wg-jg2DxdxNZakE3vopEVdnVAhMTBmTap_RwgMmgpsiiiRQkkHhscZ0cnH61UfE9h0BuqIlfrbk6fbISew0Rg"/>
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
<span class="material-symbols-outlined text-white">visibility</span>
</div>
</div>
<div class="group relative aspect-square rounded-lg border-2 border-dashed border-outline-variant flex flex-col items-center justify-center hover:border-secondary transition-colors cursor-pointer">
<span class="material-symbols-outlined text-on-surface-variant">upload</span>
<span class="font-label-md text-label-md text-on-surface-variant mt-1">Upload</span>
</div>
</div>
</div>
<!-- Meta Info -->
<div class="mt-stack-lg pt-stack-lg border-t border-outline-variant/20 space-y-2">
<div class="flex justify-between font-label-md text-label-md">
<span class="text-on-surface-variant">Created</span>
<span class="text-on-surface font-semibold">Oct 12, 2024</span>
</div>
<div class="flex justify-between font-label-md text-label-md">
<span class="text-on-surface-variant">Last Activity</span>
<span class="text-on-surface font-semibold">2 hours ago</span>
</div>
<div class="flex justify-between font-label-md text-label-md">
<span class="text-on-surface-variant">ID</span>
<span class="text-on-surface font-semibold">FF-8492</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- Mobile BottomNavBar -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 px-4 bg-surface-container-lowest dark:bg-inverse-surface border-t border-outline-variant dark:border-outline shadow-lg rounded-t-xl">
<a class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed bg-secondary-fixed/20 rounded-full px-4 py-1" href="#">
<span class="material-symbols-outlined" data-weight="fill">task_alt</span>
<span class="font-label-md text-label-md">Tasks</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-on-surface-variant" href="#">
<span class="material-symbols-outlined">search</span>
<span class="font-label-md text-label-md">Search</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-on-surface-variant" href="#">
<span class="material-symbols-outlined">analytics</span>
<span class="font-label-md text-label-md">Activity</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-on-surface-variant" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-label-md text-label-md">Profile</span>
</a>
</nav>
<script>
        // Micro-interaction for sub-tasks
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const label = this.closest('label');
                const text = label.querySelector('span:not(.material-symbols-outlined)');
                if (this.checked) {
                    text.classList.add('line-through', 'opacity-60');
                    text.classList.remove('text-on-surface');
                    text.classList.add('text-on-surface-variant');
                } else {
                    text.classList.remove('line-through', 'opacity-60');
                    text.classList.remove('text-on-surface-variant');
                    text.classList.add('text-on-surface');
                }
            });
        });

        // Simple button active state simulation
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', () => button.classList.add('scale-95'));
            button.addEventListener('mouseup', () => button.classList.remove('scale-95'));
            button.addEventListener('mouseleave', () => button.classList.remove('scale-95'));
        });
    </script>
</body></html>