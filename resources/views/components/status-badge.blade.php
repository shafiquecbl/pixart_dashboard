@props(['status'])

@php
$statusClasses = [
'completed' => 'bg-green-50 text-green-700 ring-green-600/20',
'processing' => 'bg-blue-50 text-blue-700 ring-blue-600/20',
'failed' => 'bg-red-50 text-red-700 ring-red-600/20',
'pending' => 'bg-yellow-50 text-yellow-700 ring-yellow-600/20',
];

$statusClass = $statusClasses[$status] ?? 'bg-gray-50 text-gray-700 ring-gray-600/20';
@endphp

<span class="inline-flex items-center px-2 py-1 text-xs font-medium rounded-md ring-1 ring-inset {{ $statusClass }}">
    {{ ucfirst($status) }}
</span>