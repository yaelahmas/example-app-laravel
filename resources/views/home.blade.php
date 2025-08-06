{{-- <x-app-layout>
    <x-slot name="header">Home Page</x-slot>

    <h1>Home Page</h1>
</x-app-layout> --}}

<x-app-layout>
    <div class="container mt-4">
        @if (session('success') || session('danger'))
            <x-alert />
        @else
            <h1>Hello World!</h1>
        @endif
    </div>
</x-app-layout>
