@props(['align' => 'left'])

<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-6 {{ $align === 'right' ? 'text-right' : '' }}">
    {{ $slot }}
</td>