@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-[12px] text-gray-700 uppercase']) }}>
    {{ $value ?? $slot }}
</label>
