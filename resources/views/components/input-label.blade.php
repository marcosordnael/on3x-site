@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-gray-800 dark:text-gray-200 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
