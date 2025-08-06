<x-guest-layout>
    <x-slot name="title">{{ __('Login') }}</x-slot>

    <div class="card shadow">
        <div class="card-body">
            <h3 class="mb-3">{{ __('Login') }}</h3>

            <x-alert />

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="form-group">
                    <x-form.label for="email" :value="__('Email address')" />
                    <x-form.input type="email" name="email" id="email" :value="old('email')"
                        class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter email"
                        autocomplete="email" />
                    <x-form.invalid-feedback :messages="$errors->get('email')" />
                </div>

                <div class="form-group">
                    <x-form.label for="password" :value="__('Password')" />
                    <x-form.input type="password" name="password" id="password"
                        class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter password"
                        autocomplete="password" />
                    <x-form.invalid-feedback :messages="$errors->get('password')" />
                </div>

                <x-button class="btn btn-primary btn-block">{{ __('Login') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
