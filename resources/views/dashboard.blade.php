<x-layouts.app :title="__('Dashboard')">
    <x-layouts.app.header>
        <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="overflow-y-auto relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:TimePunch/>
                    <div class="sticky bottom-0 text-right p-2 border-t border-gray-300">
                        <form action="{{ route('timePunches') }}">
                            <button class=' bottom-0' type="submit">See more -></button>
                        </form>
                    </div>
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern
                        class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern
                        class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
                </div>
            </div>
            <div
                class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            </div>
        </div>
    </x-layouts.app.header>
</x-layouts.app>
