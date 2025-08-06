<x-card>
    <x-card.title>
        <h5>{{ __('Delete Account') }}</h5>
    </x-card.title>

    <x-card.body>
        <div>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <x-button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#deleteAccountModal">Delete
            Account</x-button>

        <x-modal id="deleteAccountModal" label="deleteAccountModalLabel">
            <form id="delete-account-form" action="{{ route('profile.destroy') }}" method="post">
                @csrf
                @method('delete')

                <x-modal.header title="{{ __('Are you sure you want to delete your account?') }}"
                    label="deleteAccountModalLabel" />

                <x-modal.body>
                    <div class="form-group">
                        <x-form.label for="password" :value="__(
                            'Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
                        )" />
                        <x-form.input type="password" name="password" id="password"
                            class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter your password"
                            autocomplete="password" />
                        <x-form.invalid-feedback :messages="$errors->userDeletion->get('password')" />
                    </div>
                </x-modal.body>

                <x-modal.footer>
                    <x-button type="button" class="btn btn-secondary" data-dismiss="modal">
                        {{ __('Cancel') }}
                    </x-button>

                    <x-button type="submit" class="btn btn-danger" onclick="submitDeleteAccountForm()">
                        {{ __('Delete Account') }}
                    </x-button>
                </x-modal.footer>
            </form>
        </x-modal>
    </x-card.body>
</x-card>
