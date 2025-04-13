@props(['name', 'value' => false])

<div class="relative inline-block w-12 align-middle select-none">
    <input type="checkbox"
        name="{{ $name }}"
        id="{{ $name }}"
        class="sr-only"
        x-data="{ on: @js($value) }"
        x-model="on"
        @change="$dispatch('input', on)"
        {{ $value ? 'checked' : '' }}>
    <label for="{{ $name }}"
        class="block overflow-hidden h-6 rounded-full cursor-pointer transition-colors duration-200 ease-in-out"
        :class="{ 'bg-indigo-600': on, 'bg-gray-300': !on }">
        <span class="block h-6 w-6 rounded-full bg-white shadow transform transition-transform duration-200 ease-in-out"
            :class="{ 'translate-x-6': on, 'translate-x-0': !on }"></span>
    </label>
</div>
