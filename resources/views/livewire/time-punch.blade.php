<div class="overflow-y-auto">
    <h1 class="text-2xl text-center rounded-lg bg-blue-950">Time punches</h1>
    <ul>
        @foreach($timePunches as $time)
                <li class="mb-4 bg-gray-600 text-white rounded-lg shadow-md px-10">
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
                </li><br>
        @endforeach
    </ul>
    <form action="{{ route('timePunches') }}">
        <button type="submit">See more -></button>
    </form>
</div>
