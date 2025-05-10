<div class="w-full flex items-center justify-between flex-wrap gap-4 p-4 bg-white dark:bg-zinc-800 rounded-lg shadow-sm">
    <!-- Left Section: Title & Description -->
    <div class="flex flex-col">
        <h1 class="text-lg font-semibold text-gray-900 dark:text-white">Work Clock</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">Track your work time</p>
    </div>

    <!-- Center Section: Start/Stop Button & Time -->
    <div class="flex items-center gap-4">
        <button
            wire:click="displayTime"
            type="button"
            class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
            {{ $buttonText }}
        </button>

        @if ($clockRunning)
            <div wire:poll.1000ms="updateElapsedTime" class="text-xl text-gray-800 dark:text-white">
                <span>{{ $elapsedTime }}</span>
            </div>
        @else
            <div class="text-2xl text-gray-800 dark:text-white">
                <span>{{ $elapsedTime }}</span>
            </div>
        @endif
    </div>

    <!-- Right Section: Input Field -->
    <div class="flex-grow">
        <input
            type="text"
            class="w-full text-2xl bg-blue-800 text-white rounded-lg px-3  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            placeholder="What are you working on?"
        />
    </div>
</div>
