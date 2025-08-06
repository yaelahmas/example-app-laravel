<x-app-layout>
    <x-slot name="title">{{ __('Profile') }}</x-slot>

    <div class="container mt-4">
        <x-alert />

        <div class="row">
            <div class="col-lg-12 mb-4">
                @include('profile.partials.update-profile')
            </div>

            <div class="col-lg-12 mb-4">
                @include('profile.partials.update-password')
            </div>

            <div class="col-lg-12 mb-4">
                @include('profile.partials.delete-account')
            </div>
        </div>

    </div>
</x-app-layout>
