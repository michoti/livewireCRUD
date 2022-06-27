<div class="p-4">
    @php
    $disabled =$errors->any() || empty($this->name) || empty($this->email);
    @endphp

    <div class="flex gap">
        <x-jet-button class="bg-green-600 hover:bg-green-500" wire:click='openModalToCreateTag' wire:loading.attr='disabled'>
             {{__('Create Tag')}}
        </x-jet-button>

        <div class="w-10/12">
            <x-alerts.message />
        </div>
    </div>


    <x-jet-dialog-modal wire:model='openModal'>
        {{-- title --}}
        <x-slot name='title'>

        </x-slot>

        {{-- content --}}
        <x-slot name='content'>
            <section class="w-full p-4 mx-auto space-y-4 shadow">
        
                <form wire.submit.prevent='store' class="space-y-4" id="SubmitForm">
        
                    {{-- name --}}
                    <div class="space-y-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input wire:model.debounce.500ms='name' id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        @error('name')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror 
                    </div>
                </form>
            </section>
        </x-slot>

        {{-- footer --}}
        <x-slot name='footer'>            
           {{-- cancel button --}}
            <x-jet-button wire:click="$toggle('openModal')">
                {{ __('Close window') }}
            </x-jet-button>            
            {{-- create button --}}
            <x-jet-button wire:target='store' wire:loading.attr='disabled' type="submit" :disabled='$disabled' form="SubmitForm">
                {{ __('Create') }}
            </x-jet-button>

        </x-slot>

    </x-jet-dialog-modal>



</div>