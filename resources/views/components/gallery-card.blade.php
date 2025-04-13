@props(['image', 'prompt', 'actions' => true])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="aspect-w-16 aspect-h-9">
        <img src="{{ $image }}" alt="{{ $prompt }}" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <p class="text-sm text-gray-600">{{ $prompt }}</p>
        @if($actions)
        <div class="mt-4 flex justify-end space-x-2">
            {{ $slot }}
        </div>
        @endif
    </div>
</div>