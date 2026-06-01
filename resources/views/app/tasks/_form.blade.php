@extends('layouts.main')
@section('content')
    <div class="max-w-[1200px] mx-auto p-gutter lg:p-12">
        <form action="{{ $task->exists ? route('tasks.update', $task) : route('tasks.store') }}" method="POST"
            class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg items-start" id="taskForm">
            @csrf
            @if($task->exists)
                @method('PUT')
            @endif

            <!-- Main Form Body -->
            <div class="lg:col-span-8 space-y-stack-lg">
                <div class="glass-card rounded-xl p-8 shadow-sm">
                    <div class="space-y-8">
                        <!-- Task Title -->
                        <div class="space-y-2">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest"
                                for="title">Task Title</label>
                            <input
                                class="w-full bg-transparent border-b-2 border-outline-variant font-display-lg text-display-lg py-4 focus:border-secondary transition-all placeholder:text-outline-variant outline-none"
                                name="title" value="{{ old('title', $task->title) }}" id="title"
                                placeholder="What needs to be done?" type="text" required>
                            @error('title') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <!-- Description -->
                        <div class="space-y-2">
                            <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest"
                                for="desc">Detailed Description</label>
                            <div
                                class="border border-outline-variant rounded-lg bg-surface-container-lowest overflow-hidden focus-within:border-secondary transition-colors">
                                <div
                                    class="flex items-center gap-2 p-2 border-b border-outline-variant bg-surface-container-low">
                                    <button class="p-1 hover:bg-surface-container-high rounded transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_bold</span></button>
                                    <button class="p-1 hover:bg-surface-container-high rounded transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_italic</span></button>
                                    <button class="p-1 hover:bg-surface-container-high rounded transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_list_bulleted</span></button>
                                </div>
                                <textarea class="w-full p-4 border-none resize-none font-body-lg text-body-lg focus:ring-0 outline-none" name="details"
                                    id="desc" placeholder="Break down the steps or provide context..." rows="6">{{ old('details', $task->details) }}</textarea>
                            </div>
                            @error('details') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <!-- Action Buttons Mobile Only -->
                        <div class="flex items-center gap-4 pt-4 md:hidden">
                            <button
                                class="flex-1 bg-secondary text-on-secondary h-[48px] rounded-lg font-bold flex items-center justify-center gap-2 active:scale-95 transition-all"
                                type="submit">
                                <span class="material-symbols-outlined">check_circle</span>
                                {{ $task->exists ? 'Update Task' : 'Create Task' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Metadata & Insights -->
            <aside class="lg:col-span-4 space-y-stack-lg">
                <!-- Settings Card -->
                <div class="glass-card rounded-xl p-6 shadow-sm space-y-6">
                    <h3 class="font-title-md text-title-md font-bold text-on-surface">Settings</h3>
                    
                    <!-- Due Date -->
                    <div class="space-y-2">
                        <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">Due
                            Date</label>
                        <div class="relative">
                            <input
                                class="w-full h-11 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest font-body-sm text-body-sm focus:border-secondary outline-none"
                                name="due_date" value="{{ old('due_date', $task->due_date ? ($task->due_date instanceof \Carbon\Carbon ? $task->due_date->format('Y-m-d') : $task->due_date) : date('Y-m-d')) }}" type="date" required>
                            <span
                                class="absolute right-3 top-2.5 material-symbols-outlined text-outline text-[20px] pointer-events-none">calendar_month</span>
                        </div>
                        @error('due_date') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Priority Segmented Control -->
                    <div class="space-y-2">
                        <label
                            class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">Priority</label>
                        <input type="hidden" name="priority" id="priority-input" value="{{ old('priority', $task->priority ?? 'Medium') }}">
                        <div class="flex p-1 bg-surface-container-low rounded-lg border border-outline-variant" id="priority-segments">
                            <button
                                onclick="setPriority('Low')"
                                class="priority-btn flex-1 py-2 text-center rounded-md font-label-md text-label-md transition-all {{ old('priority', $task->priority ?? 'Medium') === 'Low' ? 'bg-white shadow-sm text-secondary font-bold' : 'text-on-surface-variant hover:bg-surface-container-high' }}"
                                type="button">Low</button>
                            <button
                                onclick="setPriority('Medium')"
                                class="priority-btn flex-1 py-2 text-center rounded-md font-label-md text-label-md transition-all {{ old('priority', $task->priority ?? 'Medium') === 'Medium' ? 'bg-white shadow-sm text-secondary font-bold' : 'text-on-surface-variant hover:bg-surface-container-high' }}"
                                type="button">Medium</button>
                            <button
                                onclick="setPriority('High')"
                                class="priority-btn flex-1 py-2 text-center rounded-md font-label-md text-label-md transition-all {{ old('priority', $task->priority ?? 'Medium') === 'High' ? 'bg-white shadow-sm text-secondary font-bold' : 'text-on-surface-variant hover:bg-surface-container-high' }}"
                                type="button">High</button>
                        </div>
                        @error('priority') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button
                        class="w-full bg-secondary text-on-secondary h-[48px] rounded-lg font-bold flex items-center justify-center gap-2 active:scale-95 transition-all mt-4 hidden md:flex"
                        type="submit">
                        <span class="material-symbols-outlined">check_circle</span>
                        {{ $task->exists ? 'Update Task' : 'Create Task' }}
                    </button>
                </div>

                <script>
                    function setPriority(level) {
                        // Update hidden input
                        document.getElementById('priority-input').value = level;
                        
                        // Update UI
                        const btns = document.querySelectorAll('.priority-btn');
                        btns.forEach(btn => {
                            if (btn.innerText === level) {
                                btn.classList.add('bg-white', 'shadow-sm', 'text-secondary', 'font-bold');
                                btn.classList.remove('text-on-surface-variant', 'hover:bg-surface-container-high');
                            } else {
                                btn.classList.remove('bg-white', 'shadow-sm', 'text-secondary', 'font-bold');
                                btn.classList.add('text-on-surface-variant', 'hover:bg-surface-container-high');
                            }
                        });
                    }
                </script>

                <!-- Pro Tip Card -->
                <div
                    class="bg-secondary-container rounded-xl p-6 shadow-md text-on-secondary relative overflow-hidden group">
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined text-secondary-fixed">lightbulb</span>
                            <span class="font-label-md text-label-md uppercase tracking-wider font-bold">Focus
                                Insight</span>
                        </div>
                        <p class="font-body-sm text-body-sm leading-relaxed mb-4">
                            Research suggests that breaking complex tasks into smaller, manageable chunks increases
                            productivity by <span
                                class="font-bold underline decoration-secondary-fixed underline-offset-4">up to
                                40%</span>.
                        </p>
                    </div>
                </div>
            </aside>
        </form>
    </div>
@endsection
@section('title', 'Create Task')
