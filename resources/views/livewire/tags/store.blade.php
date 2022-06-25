@php
    $disabled =$errors->any() || empty($this->name) || empty($this->email);
@endphp


<section class="w-1/2 p-4 mx-auto space-y-4 shadow">
    {{-- {{ dump(session()->has('success')) }} --}}
    {{-- alerts  --}}
    <x-alerts.message />

    {{-- title   --}}
    <h2 class="text-sm text-indigo-500 uppercase">Create Tags</h2>

    <form wire.submit.prevent='store' class="space-y-4">

        {{-- name --}}
        <div class="space-y-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input wire:model.debounce.500ms='name' id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            @error('name')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror 
        </div>

        {{-- email --}}
        <div class="space-y-4">
            <x-jet-label for="email" value="{{ __('Email Address') }}" />
            <x-jet-input wire:model.debounce.500ms='email' id="name" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="name" />
            @error('email')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror 
        </div>

        <x-jet-button wire:target='store' wire:loading.attr='disabled' type="submit" class="mt-5" :disabled='$disabled'>
            {{ __('Create') }}
        </x-jet-button>
    </form>
</section>