@extends('layouts.main')

@section('title', $task->title)

@section('content')
<div class="max-w-container-max mx-auto p-8 py-stack-lg px-margin-mobile ">
    <!-- Page Header Breadcrumbs -->
    <div class="flex items-center gap-2 mb-stack-lg text-on-surface-variant font-label-md text-label-md px-4 md:px-0">
        <a href="{{ route('tasks.index') }}" class="hover:text-secondary hover:underline cursor-pointer">Tasks</a>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-secondary font-bold">{{ Str::limit($task->title, 40) }}</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg">
        <!-- Task Content Column -->
        <div class="lg:col-span-8 space-y-stack-lg">
            <!-- Task Header Card -->
            <div class="bg-surface-container-lowest rounded-xl p-stack-lg shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-outline-variant/30">
                <div class="flex flex-wrap items-start justify-between gap-4 mb-stack-md">
                    <h1 class="font-headline-lg text-headline-lg font-bold text-on-surface flex-1">{{ $task->title }}</h1>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 rounded-full {{ $task->status_color }} font-label-md text-label-md flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full {{ $task->status === 'completed' ? 'bg-white' : 'bg-secondary' }}"></span>
                            {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                        </span>
                        <span class="px-3 py-1 rounded-full {{ $task->priority_color }} font-label-md text-label-md flex items-center gap-1">
                            @if($task->priority === 'High')
                                <span class="material-symbols-outlined text-[16px]">priority_high</span>
                            @elseif($task->priority === 'Medium')
                                <span class="material-symbols-outlined text-[16px]">drag_handle</span>
                            @else
                                <span class="material-symbols-outlined text-[16px]">arrow_downward</span>
                            @endif
                            {{ $task->priority }} Priority
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-stack-lg py-4 border-y border-outline-variant/20 mb-stack-md">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface-variant">calendar_today</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface-variant">Due Date</p>
                            <p class="font-body-sm text-body-sm font-semibold">{{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>

                @if($task->details)
                <div class="space-y-stack-md">
                    <h3 class="font-title-md text-title-md text-on-surface">Description</h3>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        {{ $task->details }}
                    </p>
                </div>
                @endif
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
                        <input checked class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
                        <span class="flex-1 font-body-sm text-body-sm text-on-surface-variant line-through opacity-60">Initial accessibility scan using Lighthouse</span>
                        <span class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">drag_indicator</span>
                    </label>
                    <label class="flex items-center gap-4 p-4 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent">
                        <input checked class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary" type="checkbox"/>
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
                        <img alt="Avatar" class="w-10 h-10 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDk-l_cTF5QpGJJ3RbNuOP2UgkJAGzs979M81tTHBT9vdBEFVPnPBNbqpGohKJksw61ZsirbQN8t3oz6hurFzjjS0ejIDEUJP_SWtXII2_s5c0UHveHwCHnvzOkfAb9fBmJft5byPt_TLM7pByF5LznZ5daahJZcj8BBIt6f3vkP7pfbz7nBL0GU7TW6yU2IVNoi8Wg91ub-e5SZ-7hrEmDsvRSc6-ZYuCqjKCV31gG89_DqTpAnZ9269FBrJPKs0yWC6HEL8Lq4g"/>
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
                    <a href="{{ route('tasks.edit', $task) }}" class="w-full border border-outline-variant h-12 rounded-xl font-bold text-on-surface flex items-center justify-center gap-2 hover:bg-surface-container-low transition-all">
                        <span class="material-symbols-outlined">edit</span>
                        Edit Task
                    </a>
                    
                    <!-- Placeholder: Share feature not implemented
                    <button class="w-full border border-outline-variant h-12 rounded-xl font-bold text-on-surface flex items-center justify-center gap-2 hover:bg-surface-container-low transition-all">
                        <span class="material-symbols-outlined">share</span>
                        Share Task
                    </button>
                    -->
                    
                    <div class="pt-4 mt-4 border-t border-outline-variant/20">
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full text-error h-12 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-error-container/20 transition-all">
                                <span class="material-symbols-outlined">delete</span>
                                Delete Task
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Attachments Preview (Commented out: Not supported in DB yet) -->
                <!--
                <div class="mt-stack-lg">
                    <h4 class="font-label-md text-label-md font-bold text-on-surface-variant uppercase tracking-wider mb-stack-md">Attachments</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="group relative aspect-square rounded-lg overflow-hidden bg-surface-container cursor-pointer">
                            <img alt="Wireframe" class="w-full h-full object-cover transition-transform group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxM4dWrQpOvwDnMW676juvV7zCSFM-nIhyv7aQ2XFD30SiWEpy8M7D7MEwMiKypTgnOCW2S8UWIE9EC6AjMHQGSzcSpaaCWyJOlOa8nBI-IVmSSTkKnP6YfkMufNfJyrPsTwvke-HkzUhQTT4P8LQe_EjLSX7Sxw1XkArzQXd7Ty5ovji7ujJo9wg-jg2DxdxNZakE3vopEVdnVAhMTBmTap_RwgMmgpsiiiRQkkHhscZ0cnH61UfE9h0BuqIlfrbk6fbISew0Rg"/>
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
                -->

                <!-- Meta Info -->
                <div class="mt-stack-lg pt-stack-lg border-t border-outline-variant/20 space-y-2">
                    <div class="flex justify-between font-label-md text-label-md">
                        <span class="text-on-surface-variant">Created</span>
                        <span class="text-on-surface font-semibold">{{ $task->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="flex justify-between font-label-md text-label-md">
                        <span class="text-on-surface-variant">Last Activity</span>
                        <span class="text-on-surface font-semibold">{{ $task->updated_at->diffForHumans() }}</span>
                    </div>
                    <div class="flex justify-between font-label-md text-label-md">
                        <span class="text-on-surface-variant">ID</span>
                        <span class="text-on-surface font-semibold">TSK-{{ str_pad($task->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection