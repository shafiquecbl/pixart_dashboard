@props(['href' => null])

<tr class="group hover:bg-gray-50">
    @if($href)
    <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
        <div class="flex items-center">
            <a href="{{ $href }}" class="truncate hover:text-indigo-600">
                {{ $slot }}
            </a>
        </div>
        <dl class="font-normal lg:hidden">
            <dt class="sr-only">Details</dt>
            <dd class="mt-1 truncate text-gray-700">{{ $details ?? '' }}</dd>
        </dl>
    </td>
    @else
    <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
        {{ $slot }}
    </td>
    @endif

    {{ $cells }}

    <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <div class="flex justify-end gap-2">
            {{ $actions }}
        </div>
    </td>
</tr>