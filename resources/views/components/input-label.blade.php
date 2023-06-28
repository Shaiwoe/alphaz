@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-gray-100 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
