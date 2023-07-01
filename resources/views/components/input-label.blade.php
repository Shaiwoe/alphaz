@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-gray-500 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
