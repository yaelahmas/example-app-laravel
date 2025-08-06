@props(['types' => ['success', 'danger']])

@foreach ($types as $type)
    @if (session($type))
        @php
            $classes = [
                'success' => 'alert alert-success',
                'danger' => 'alert alert-danger',
            ];
            $class = $classes[$type] ?? 'alert alert-info';
        @endphp

        <div {{ $attributes->merge(['class' => $class]) }} role="alert">
            {{ session($type) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @break
    @endif
@endforeach
