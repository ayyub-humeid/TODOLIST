   <nav
       class="hidden md:flex flex-col h-full w-64 fixed left-0 top-0 bg-surface dark:bg-surface-dim border-r border-outline-variant dark:border-outline py-stack-lg px-base space-y-stack-md z-40">
       <div class="px-4 mb-8">
           <h1 class="font-title-md text-title-md font-black text-on-surface dark:text-inverse-on-surface">FocusFlow
           </h1>
           <p class="text-xs text-on-surface-variant opacity-70">Professional Workspace</p>
       </div>
       <div class="space-y-1">
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg"
               href="#">
               <span class="material-symbols-outlined">dashboard</span>
               <span class="font-label-md text-label-md">Dashboard</span>
           </a>
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg"
               href="#">
               <span class="material-symbols-outlined">task_alt</span>
               <span class="font-label-md text-label-md">Projects</span>
           </a>
           <a class="{{ Route::is('tasks.index') ? 'text-secondary dark:text-secondary-fixed font-bold bg-secondary-container/10 rounded-lg transition-all' : '' }} flex items-center space-x-3 px-4 py-3 text-secondary dark:text-secondary-fixed font-bold bg-secondary-container/10 rounded-lg transition-all"
               href="{{ route('tasks.index') }}">
               <span class="material-symbols-outlined">task_alt</span>
               <span class="font-label-md text-label-md">Tasks</span>
           </a>
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg"
               href="#">
               <span class="material-symbols-outlined">calendar_today</span>
               <span class="font-label-md text-label-md">Calendar</span>
           </a>
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg"
               href="#">
               <span class="material-symbols-outlined">group</span>
               <span class="font-label-md text-label-md">Team</span>
           </a>
       </div>
       <div class="mt-auto space-y-1">
           <button
               class="w-full bg-secondary text-white py-3 rounded-xl font-bold mb-4 hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
               <span class="material-symbols-outlined">add</span>
               Create Task
           </button>
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg"
               href="#">
               <span class="material-symbols-outlined">help_outline</span>
               <span class="font-label-md text-label-md">Help</span>
           </a>
           <form action="{{ route('logout') }}" method="POST" id="logout-form" class="hidden">
               @csrf
           </form>
           <a class="flex items-center space-x-3 px-4 py-3 text-on-surface-variant font-medium hover:bg-surface-container-high dark:hover:bg-inverse-surface transition-all rounded-lg cursor-pointer"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <span class="material-symbols-outlined">logout</span>
               <span class="font-label-md text-label-md">Sign Out</span>
           </a>
       </div>
   </nav>
