@props(['title', 'description'])

<div class="relative flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">
    <svg class="h-7 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
              d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
              clip-rule="evenodd"/>
    </svg>
    <div class="text-base leading-7">
        <div class="relative flex items-center justify-between">
            <h3 class="font-semibold text-white">{{ $title }}</h3>
            {{ $slot }}
        </div>
        <p class="mt-2 text-gray-300">{{ $description }}</p>
    </div>

</div>