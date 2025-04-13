@props(['title', 'subtitle' => '', 'stats' => [], 'createButtonText' => null])

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-semibold text-gray-900">{{ $title }}</h1>
        @if($subtitle)
        <p class="text-sm text-gray-500 mt-1">{{ $subtitle }}</p>
        @endif
    </div>
    <div class="flex items-center space-x-3">
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50">
            Export
        </button>
        <div class="relative">
            <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50">
                More actions
                <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        @if($createButtonText)
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">
            {{ $createButtonText }}
        </button>
        @endif
    </div>
</div>

@if(count($stats) > 0)
<div class="grid grid-cols-4 gap-6 mb-6">
    @foreach($stats as $stat)
    <div class="p-6 border border-gray-200 rounded-lg">
        <h3 class="text-sm font-medium text-gray-500">{{ $stat['title'] }}</h3>
        <div class="mt-2 flex items-baseline">
            <p class="text-2xl font-semibold text-gray-900">{{ $stat['value'] }}</p>
            <p class="ml-2 flex items-baseline text-sm font-semibold {{ $stat['trend'] >= 0 ? 'text-green-600' : 'text-red-600' }}">
                <span>{{ $stat['trend'] }}% last week</span>
            </p>
        </div>
        <div class="mt-2">
            <div class="h-1 w-full bg-gray-100 rounded">
                @php
                $progressBarColor = $stat['trend'] >= 0 ? 'bg-green-500' : 'bg-red-500';
                @endphp
                <div class="h-1 rounded {{ $progressBarColor }}" style="width: {{ $stat['progress'] }}%"></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif