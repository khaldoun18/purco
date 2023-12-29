@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1  border-y-[2px] border-[#338734] text-[16px] font-bold leading-4 text-[#338734] focus:outline-none focus:border-[#338734] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-y-[2px] border-transparent text-[16px] font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-[#338734] focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
