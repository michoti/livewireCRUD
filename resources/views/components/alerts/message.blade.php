@if (session()->has('success'))
    <div x-data="{ open: true}" x-init="setTimeout(() => {open = false}, 2000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out"
          x-transition:start="opacity-1" x-transition:leave="transition duration-500 transform ease-in"
          x-transition:leave-end="opacity-0" class="bg-green-500 flex items-center p-2 mb-3 text-white rounded"
    >

          <svg xmlns="http://www.w3.org/2000/svg" class="pt-1 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>

          <span>
            {{ session('success')}}
          </span>  
    </div>    
@endif