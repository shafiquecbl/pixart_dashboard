@props(['tabs' => [], 'columns' => [], 'rows' => []])

<!-- Table Tabs -->
@if(count($tabs) > 0)
<div class="mb-4">
    <div class="inline-flex p-1 space-x-1 bg-gray-100 rounded-lg">
        @foreach($tabs as $tab)
        <button class="px-4 py-2 text-sm font-medium rounded-md {{ $tab['active'] ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-500 hover:text-gray-700' }}">
            {{ $tab['name'] }}
        </button>
        @endforeach
    </div>
</div>
@endif

<div class="border border-gray-200 rounded-lg overflow-hidden">
    <!-- Table Content -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                @if(count($rows) > 0)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    <input type="checkbox" class="h-4 w-4 text-indigo-600 rounded border-gray-300">
                </th>
                @endif
                @foreach($columns as $column)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    {{ $column['name'] }}
                </th>
                @endforeach
                @if(count($rows) > 0)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    Action
                </th>
                @endif
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($rows as $row)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <input type="checkbox" class="h-4 w-4 text-indigo-600 rounded border-gray-300">
                </td>
                @foreach($columns as $column)
                <td class="px-6 py-4 whitespace-nowrap">
                    @if(isset($row[$column['key']]['type']) && $row[$column['key']]['type'] === 'status')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $row[$column['key']]['class'] }}">
                        {{ $row[$column['key']]['value'] }}
                    </span>
                    @else
                    <span class="text-sm {{ isset($column['class']) ? $column['class'] : 'text-gray-900' }}">
                        {{ $row[$column['key']] }}
                    </span>
                    @endif
                </td>
                @endforeach
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <div class="flex space-x-2">
                        <button>
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button>
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>