<x-guest-layout>
    <x-slot name="title">{{ __('Register') }}</x-slot>

    <div class="card shadow">
        <div class="card-body">
            <h3 class="mb-3">{{ __('Register') }}</h3>

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="form-group">
                    <x-form.label for="name" :value="__('Full name')" />
                    <x-form.input type="name" name="name" id="name" :value="old('name')"
                        class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter name"
                        autocomplete="name" />
                    <x-form.invalid-feedback :messages="$errors->get('name')" />
                </div>

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

                <div class="form-group">
                    <x-form.label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-form.input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Enter confirm password" autocomplete="password_confirmation" />
                    <x-form.invalid-feedback :messages="$errors->get('password_confirmation')" />
                </div>

                <x-button class="btn btn-primary btn-block">{{ __('Register') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
