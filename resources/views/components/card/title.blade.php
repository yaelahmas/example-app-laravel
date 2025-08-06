{{-- @props(['text' => 'Default Title'])

<div class="card-header">
    {{ $text }}
</div> --}}

@if (trim($slot))
    <div class="card-header">
        {{ $slot }}
    </div>
@endif
