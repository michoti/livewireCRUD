<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        {{-- head --}}
        <x-partials.head />

    </head>
    <body>

        {{-- nav --}}
        <x-partials.nav />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        {{-- footer  --}}
        <x-partials.footer />
        
        {{-- livewire scripts --}}
        <livewire:scripts />
    </body>
</html>
