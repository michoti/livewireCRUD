@if (session()->has('success'))
<div class="flex items-center p-2 mb-4 space-x-2 text-white bg-green-400" x-data="{open: true}" x-init="setTimeout(() => {open = false}, 2000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out" x-transition:enter-start="opacity-1" x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0">
    <svg class="w-5 pt-1 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>
        {{ session('success') }}
    </span>
</div>
@endif


@if (session()->has('error'))
    <div x-data="{ open: true}" x-init="setTimeout(() => {open = false}, 2000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out"
          x-transition:start="opacity-1" x-transition:leave="transition duration-500 transform ease-in"
          x-transition:leave-end="opacity-0" class="bg-red-500 flex items-center p-2 mb-3 text-white rounded"
    >

            <svg xmlns="http://www.w3.org/2000/svg" class="pt-1 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>

          <span>
            {{ session('error')}}
          </span>  
    </div>    
@endif