@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-gray-400 dark:text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
