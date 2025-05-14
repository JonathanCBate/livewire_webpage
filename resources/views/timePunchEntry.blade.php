<x-layouts.app>
    <x-layouts.app.header>
        <div class="bg-blue-950 p-4">
            <h1 class="text-2xl text-center text-white mb-4">Time punches</h1>

            <!-- Flex container to align dropdown to the right -->
            <div class="flex justify-end">
                <div x-data="{ open: false }" class="relative inline-block text-left">
                    <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Sort By...
                    </button>

                    <div
                        x-show="open"
                        @click.away="open = false"
                        x-transition
                        class="absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-200 rounded-xl shadow-lg z-10"
                    >
                        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Prof</a>
                        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Settings</a>
                        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-700">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <ul>
            @foreach($timePunches as $time)
         <li>
                <small>date created: {{ $time['date_created'] }}</small>
                <p><strong>Amount of time:</strong> {{ $time['time'] }}</p>
                <p><strong>Work
                    description:</strong> {{ $time['description'] !== '' ? $time['description'] : 'No work description provided.' }}
                </p>
                <form action="{{ route('delete', $time['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">Delete</button>
                </form>
            </li>
          @endforeach
        </ul>
    </x-layouts.app.header>
</x-layouts.app>
