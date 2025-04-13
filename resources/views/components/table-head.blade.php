@props([
'sortable' => false,
'direction' => null,
'align' => 'left'
])

<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 {{ $align === 'right' ? 'text-right' : '' }}">
    <div class="group inline-flex items-center gap-x-2">
        {{ $slot }}

        @if ($sortable)
        <span class="flex-none rounded {{ $direction === 'asc' ? 'bg-gray-200' : 'invisible group-hover:visible' }}">
            @if ($direction === 'asc')
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            @else
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            @endif
        </span>
        @endif
    </div>
</th>