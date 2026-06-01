<div id="flash-container" class="fixed bottom-6 right-6 z-50 flex flex-col gap-2">
    @if (session('success') || session('error'))
        <div id="flash-message-init"
             class="flex items-center gap-4 px-6 py-4 rounded-2xl shadow-2xl transition-all duration-300 {{ session('success') ? 'bg-secondary text-on-secondary' : 'bg-error text-on-error' }}"
             style="opacity: 0; transform: translateY(20px);">
            
            <span class="material-symbols-outlined">
                {{ session('success') ? 'check_circle' : 'error' }}
            </span>
            
            <div class="flex flex-col">
                <span class="font-bold text-sm tracking-wide">
                    {{ session('success') ? 'Success' : 'Error' }}
                </span>
                <p class="text-xs opacity-90">
                    {{ session('success') ?? session('error') }}
                </p>
            </div>

            <button onclick="closeFlashMessage(this.parentElement)" class="ml-4 p-1 hover:bg-white/10 rounded-full transition-colors">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const initFlash = document.getElementById('flash-message-init');
        if (initFlash) {
            animateFlashIn(initFlash);
        }
    });

    function animateFlashIn(element) {
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, 100);

        setTimeout(() => {
            closeFlashMessage(element);
        }, 5000);
    }

    function closeFlashMessage(element) {
        if (element) {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            setTimeout(() => {
                element.remove();
            }, 300);
        }
    }

    window.showFlashMessage = function(message, type = 'success') {
        const container = document.getElementById('flash-container');
        if (!container) return;

        const isSuccess = type === 'success';
        const bgClass = isSuccess ? 'bg-secondary text-on-secondary' : 'bg-error text-on-error';
        const icon = isSuccess ? 'check_circle' : 'error';
        const title = isSuccess ? 'Success' : 'Error';

        const flashHtml = `
            <div class="flex items-center gap-4 px-6 py-4 rounded-2xl shadow-2xl transition-all duration-300 ${bgClass}"
                 style="opacity: 0; transform: translateY(20px);">
                <span class="material-symbols-outlined">${icon}</span>
                <div class="flex flex-col">
                    <span class="font-bold text-sm tracking-wide">${title}</span>
                    <p class="text-xs opacity-90">${message}</p>
                </div>
                <button onclick="closeFlashMessage(this.parentElement)" class="ml-4 p-1 hover:bg-white/10 rounded-full transition-colors">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
            </div>
        `;

        const template = document.createElement('template');
        template.innerHTML = flashHtml.trim();
        const flashElement = template.content.firstChild;
        
        container.appendChild(flashElement);
        animateFlashIn(flashElement);
    };
</script>
