@props(['type' => 'info'])

@php
    $baseClass = "p-4 mb-4 rounded border";
    $types = [
        'success' => 'text-green-700 bg-green-100 border-green-400',
        'warning' => 'text-yellow-700 bg-yellow-100 border-yellow-400',
        'info'    => 'text-blue-700 bg-blue-100 border-blue-400',
        'error'   => 'text-red-700 bg-red-100 border-red-400',
    ];
    $class = $types[$type] ?? $types['info'];
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $class"]) }}>
    {{ $slot }}
</div>
