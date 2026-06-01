@extends('layouts.main')
@section('content')
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter py-stack-lg">
        <!-- Dashboard Header Section -->
        <section class="mb-stack-lg flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">My Tasks</h2>
                <p class="text-on-surface-variant font-body-sm text-body-sm">Manage your focused execution workspace.</p>
            </div>
            <div class="flex items-center gap-3">
                <div class="relative flex-1 md:w-64">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-surface-container border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all text-body-sm font-body-sm"
                        placeholder="Search tasks..." type="text" />
                </div>
                <a href="{{ route('tasks.create') }}"
                    class="bg-secondary text-white px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 hover:shadow-lg transition-all active:scale-95">
                    <span class="material-symbols-outlined">add_task</span>
                    Add Task
                </a>
            </div>
        </section>
        <!-- Bento Statistics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-stack-md mb-stack-lg">
            <div class="md:col-span-1 glass-card p-6 rounded-2xl flex flex-col justify-between h-32">
                <span class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Total
                    Active</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-black text-on-surface">{{ $tasks->count() }}</span>
                    <span class="text-secondary text-sm font-bold">Today</span>
                </div>
            </div>
            <div class="md:col-span-1 glass-card p-6 rounded-2xl flex flex-col justify-between h-32">
                <span class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Priority</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-black text-error">{{ $tasks->where('priority', 'High')->count() }}</span>
                    <span class="text-on-surface-variant text-sm">High items</span>
                </div>
            </div>
            <div
                class="md:col-span-2 glass-card p-6 rounded-2xl flex flex-col justify-between h-32 relative overflow-hidden">
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <span class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Focus
                        Progress</span>
                    <div class="w-full">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-2xl font-black text-on-surface">100%</span>
                            <span class="text-on-surface-variant font-label-md text-label-md">Workspace Status</span>
                        </div>
                        <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[100%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Task List Layout -->
        <x-tasks.task-list :tasks="$tasks" />
        <!-- Empty State / Motivation Tip -->
        <div
            class="mt-stack-lg p-stack-lg border-2 border-dashed border-outline-variant/50 rounded-3xl flex flex-col items-center justify-center text-center">
            <div class="w-16 h-16 bg-surface-container-high rounded-full flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-secondary text-3xl">lightbulb</span>
            </div>
            <h3 class="font-title-md text-title-md text-on-surface mb-2">Pro Tip: Deep Work</h3>
            <p class="max-w-md text-on-surface-variant text-body-sm font-body-sm leading-relaxed">
                Research suggests that focusing on high-priority tasks during your peak energy hours can increase
                productivity by up to 40%. Use the 'Priority' filter to align your energy.
            </p>
        </div>
    </div>

    <script>
        function deleteTask(taskId) {
            if (!confirm('Are you sure you want to delete this task?')) return;

            const url = `{{ url('tasks') }}/${taskId}`;

            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(async response => {
                if (response.ok) {
                    const data = await response.json();
                    if (data.success) {
                        const row = document.getElementById(`task-row-${taskId}`);
                        if (row) {
                            row.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                            row.style.opacity = '0';
                            row.style.transform = 'translateX(20px)';
                            setTimeout(() => {
                                row.remove();
                                if (window.showFlashMessage) {
                                    window.showFlashMessage('Task deleted successfully!', 'success');
                                }
                            }, 400);
                        }
                    }
                } else {
                    const text = await response.text();
                    console.error('Delete failed:', text);
                    alert('Error: Could not delete task. Please check console.');
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                alert('Network error. Check your connection or the server logs.');
            });
        }
    </script>
@endsection
@section('title', 'My Tasks')
