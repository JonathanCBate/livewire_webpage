<div class="w-full flex flex-wrap items-center justify-between gap-4 p-4 bg-white dark:bg-zinc-800 rounded-lg shadow-sm">
    <div class="flex flex-col">
        <h1 class="text-lg font-semibold text-gray-900 dark:text-white sm:text-md">Work Clock</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 sm: text-5xs">Track your work time</p>
    </div>

    <div class="flex items-center gap-4">
        <button
            wire:click="displayTime"
            type="button"
            class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 sm:px-2 "
        >
            {{ $buttonText }}
        </button>

        @if ($clockRunning)
            <div wire:poll.1000ms="updateElapsedTime" class="text-2xl text-gray-800 dark:text-white">
                <span>{{ $elapsedTime }}</span>
            </div>
        @else
            <div class="text-2xl text-gray-800 dark:text-white">
                <span>{{ $elapsedTime }}</span>
            </div>
        @endif
    </div>

    <form class="flex-1 min-w-0">
        <input
            type="text"
            wire:model="workDescription"
            class="w-full text-lg bg-blue-800 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 placeholder-white"
            placeholder="What are you working on?"
        />
    </form>
</div>
