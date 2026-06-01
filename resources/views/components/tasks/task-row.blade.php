<div class="glass-card rounded-2xl p-4 flex items-center justify-between group hover:shadow-md transition-all h-[72px]" 
     id="task-row-{{ $task->id }}">
    <div class="flex items-center gap-6 flex-1 min-w-0">
        <div class="relative flex items-center justify-center shrink-0">
            <input class="task-checkbox w-6 h-6 rounded-full border-2 border-outline checked:bg-secondary checked:border-secondary transition-all cursor-pointer appearance-none"
                   type="checkbox" />
            <span class="material-symbols-outlined absolute pointer-events-none text-white text-[16px] hidden">check</span>
        </div>
        <div class="flex flex-col min-w-0">
            <span class="task-label font-bold text-on-surface truncate">
                {{ $task->title }}
            </span>
            <span class="text-xs text-on-surface-variant md:hidden">
                {{ $task->priority }} Priority • {{ \Carbon\Carbon::parse($task->due_date)->format('M d') }}
            </span>
        </div>
    </div>
    <div class="hidden md:flex items-center gap-16">
        <div class="w-32 flex justify-center text-on-surface-variant font-medium text-sm">
            {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}
        </div>
        <div class="w-24 flex justify-center">
            <span class="px-3 py-1 {{ $task->priority_color }} rounded-full text-[11px] font-bold uppercase tracking-tighter">
                {{ $task->priority }}
            </span>
        </div>
        <div class="w-24 flex justify-center">
            <span class="px-3 py-1 {{ $task->status_color }} rounded-full text-[10px] font-bold uppercase tracking-tighter">
                {{ str_replace('_', ' ', $task->status) }}
            </span>
        </div>
        <div class="w-20 flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <a href="{{ route('tasks.edit', $task) }}" 
               class="p-2 hover:bg-surface-container rounded-lg text-secondary transition-colors"
               title="Edit Task">
                <span class="material-symbols-outlined text-[20px]">edit</span>
            </a>
            <a href="{{ route('tasks.show', $task) }}" 
               class="p-2 hover:bg-surface-container rounded-lg text-secondary transition-colors"
               title="Show Task">
                <span class="material-symbols-outlined text-[20px]">info</span>
            </a>
            <button onclick="deleteTask({{ $task->id }})" 
                    class="p-2 hover:bg-error-container/20 rounded-lg text-error transition-colors"
                    title="Delete Task">
                <span class="material-symbols-outlined text-[20px]">delete</span>
            </button>
        </div>
    </div>
</div>