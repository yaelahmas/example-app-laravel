@props(['messages'])

@if (!empty($messages))
    <div {{ $attributes->class(['invalid-feedback']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    </div>
@endif


{{-- @props(['messages'])

@foreach ((array) $messages as $message)
    <div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>
        {{ $message }}
    </div>
@endforeach --}}
