@props(['type' => 'submit'])

@php
    $hasCustomClass = $attributes->has('class');
@endphp

<button
    {{ $attributes->merge([
        'type' => $type,
        'class' => $hasCustomClass ? '' : 'btn btn-primary',
    ]) }}>
    {{ $slot }}
</button>
