<div class="flex flex-col gap-stack-md">
    <!-- Task Header -->
    <div
        class="flex items-center justify-between px-4 py-2 border-b border-outline-variant/30 text-on-surface-variant font-label-md text-label-md uppercase tracking-widest">
        <div class="flex items-center gap-12">
            <div class="w-6"></div>
            <span>Task Title</span>
        </div>
        <div class="hidden md:flex items-center gap-16 pr-12">
            <span class="w-32 text-center">Due Date</span>
            <span class="w-24 text-center">Priority</span>
            <span class="w-24 text-center">Status</span>
            <span class="w-20 text-right">Actions</span>
        </div>
    </div>

    @forelse($tasks as $task)
        <x-tasks.task-row :task="$task" />
    @empty
        <div class="p-12 text-center text-on-surface-variant opacity-60">
            <span class="material-symbols-outlined text-[64px] mb-4">task_alt</span>
            <p>No tasks found. Start by creating a new one!</p>
        </div>
    @endforelse
</div>