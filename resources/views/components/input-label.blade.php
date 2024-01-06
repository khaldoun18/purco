@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal text-[12px] text-[#313131] uppercase']) }}>
    {{ $value ?? $slot }}
</label>
