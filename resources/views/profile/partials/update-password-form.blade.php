<section>


    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="row mb-3">
            <x-input-label for="update_password_current_password" :value="__('Mot de passe actuel')"
                class="col-md-4 col-lg-3 col-form-label" />
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div class="row mb-3">
            <x-input-label for="update_password_password" :value="__('nouveau mot de passe')" class="col-md-4 col-lg-3 col-form-label" />
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_password" name="password" type="password" class="form-control"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="row mb-3">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmez le mot de passe')"
                class="col-md-4 col-lg-3 col-form-label" />
            <div class="col-md-8 col-lg-9">
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        <div class="text-center">
            <x-primary-button class="btn btn-primary">{{ __('Changer  mot de passe') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Enregistrée') }}</p>
            @endif
        </div>
    </form>
</section>
