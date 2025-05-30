<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
    @livewireStyles
    @livewireScripts
</head>
<body class="min-h-screen bg-white">
<flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800">
    <livewire:work-clock />
</flux:header>



{{ $slot }}

@fluxScripts
</body>
</html>
