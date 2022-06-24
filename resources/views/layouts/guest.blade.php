<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title=" $title ?? ''"/>
    </head>
    <body>

        {{-- navigation --}}
        <x-partials.nav />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        {{-- footer --}}
        <x-partials.footer />

        {{-- livewire scripts --}}
        <livewire:scripts>

    </body>
</html>
