<x-card>
    <form action="{{ route('profile.update.password') }}" method="post">
        @csrf
        @method('put')
        <x-card.title>
            <h5>{{ __('Update Password') }}</h5>
            <small>{{ __('Ensure your account is using a long, random password to stay secure.') }}</small>
        </x-card.title>

        <x-card.body>
            <div class="form-group">
                <x-form.label for="current_password" :value="__('Current Password')" />
                <x-form.input type="password" name="current_password" id="current_password"
                    class="{{ $errors->updatePassword->has('current_password') ? 'is-invalid' : '' }}"
                    placeholder="Enter your password" autocomplete="current_password" />
                <x-form.invalid-feedback :messages="$errors->updatePassword->get('current_password')" />
            </div>

            <div class="form-group">
                <x-form.label for="password" :value="__('New Password')" />
                <x-form.input type="password" name="password" id="password"
                    class="{{ $errors->updatePassword->has('password') ? 'is-invalid' : '' }}"
                    placeholder="Enter new password" autocomplete="password" />
                <x-form.invalid-feedback :messages="$errors->updatePassword->get('password')" />
            </div>

            <div class="form-group">
                <x-form.label for="password_confirmation" :value="__('Confirm Password')" />
                <x-form.input type="password" name="password_confirmation" id="password_confirmation"
                    class="{{ $errors->updatePassword->has('password_confirmation') ? 'is-invalid' : '' }}"
                    placeholder="Enter confirm password" autocomplete="password_confirmation" />
                <x-form.invalid-feedback :messages="$errors->updatePassword->get('password_confirmation')" />
            </div>
        </x-card.body>

        <x-card.footer>
            <x-button>Submit</x-button>
        </x-card.footer>
    </form>
</x-card>
