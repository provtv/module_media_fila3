<div>
    <button 
        wire:click="toggleDarkMode" 
        class="p-2 rounded-full transition duration-300 mr-3 mt-1"
        :class="{ 'bg-gray-800 text-white': darkMode, 'bg-gray-200 text-black': !darkMode }"
        x-data="{ darkMode: localStorage.getItem('dark_mode') === 'true' }"
        x-on:click="
            darkMode = !darkMode;
            localStorage.setItem('dark_mode', darkMode); 
            document.documentElement.classList.toggle('dark', darkMode);
        "
    >
        <span x-show="!darkMode">
            🌞
        </span>
        <span x-show="darkMode">
            🌙
        </span>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (localStorage.getItem('dark_mode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    });

    // Listen for the dark mode update from Livewire
    Livewire.on('darkModeUpdated', (event) => {
        localStorage.setItem('dark_mode', event.darkMode);
        document.documentElement.classList.toggle('dark', event.darkMode);
    });
</script>