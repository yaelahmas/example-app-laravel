<x-app-layout>
    <x-slot name="title">Users</x-slot>

    <div class="container mt-4">
        <h1>{{ __('Edit User') }}</h1>

        <x-card>
            <x-card.title>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">{{ __('Edit User') }}</h2>
                    <a href="{{ route('users') }}" class="btn btn-danger">
                        {{ __('Back') }}
                    </a>
                </div>
            </x-card.title>

            <form action="{{ route('users.update', $user->id) }}" method="post">
                <x-card.body>
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <x-form.label for="name" :value="__('Full name')" />
                        <x-form.input type="name" name="name" id="name" :value="old('name', $user->name)"
                            class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter name"
                            autocomplete="name" />
                        <x-form.invalid-feedback :messages="$errors->get('name')" />
                    </div>

                    <div class="form-group">
                        <x-form.label for="username" :value="__('Username')" />
                        <x-form.input type="text" name="username" id="username" :value="old('username', $user->username)"
                            class="{{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Enter username"
                            autocomplete="username" />
                        <x-form.invalid-feedback :messages="$errors->get('username')" />
                    </div>

                    <div class="form-group">
                        <x-form.label for="email" :value="__('Email address')" />
                        <x-form.input type="email" name="email" id="email" :value="old('email', $user->email)"
                            class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter email"
                            autocomplete="email" />
                        <x-form.invalid-feedback :messages="$errors->get('email')" />
                    </div>

                    <div class="form-group">
                        <x-form.label for="password" :value="__('Password')" />
                        <x-form.input type="password" name="password" id="password"
                            class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                            placeholder="{{ isset($user) ? '******' : 'Enter password' }}" autocomplete="password" />
                        <x-form.invalid-feedback :messages="$errors->get('password')" />
                    </div>
                </x-card.body>

                <x-card.footer>
                    <x-button>Submit</x-button>
                </x-card.footer>
            </form>
        </x-card>
    </div>
</x-app-layout>
