 <x-card>
     <form action="{{ route('profile.update') }}" method="post">
         @csrf
         @method('patch')
         <x-card.title>
             <h2 class="h5">{{ __('Profile Information') }}</h5>
                 <small>{{ __("Update your account's profile information and email address.") }}</small>
         </x-card.title>

         <x-card.body>
             <div class="form-group">
                 <x-form.label for="name" :value="__('Full name')" />
                 <x-form.input type="name" name="name" id="name" :value="old('name', $user->name)"
                     class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter name"
                     autocomplete="name" />
                 <x-form.invalid-feedback :messages="$errors->get('name')" />
             </div>

             <div class="form-group">
                 <x-form.label for="email" :value="__('Email address')" />
                 <x-form.input type="email" name="email" id="email" :value="old('email', $user->email)"
                     class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter email"
                     autocomplete="email" />
                 <x-form.invalid-feedback :messages="$errors->get('email')" />
             </div>
         </x-card.body>

         <x-card.footer>
             <x-button>Submit</x-button>
         </x-card.footer>
     </form>
 </x-card>
