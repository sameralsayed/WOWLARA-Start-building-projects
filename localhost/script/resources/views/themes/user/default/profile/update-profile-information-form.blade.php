<x-jet-form-section submit="updateProfileInformation">
    <input type="hidden" value="{{ Auth::user()->role }}" name="role" required>
    <x-slot name="title">
        {{ __('AA.Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('AA.Update your email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Email -->
        <div class="col-span-6 sm:col-span-6">
            <x-jet-label for="email" value="{{ __('AA.email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('AA.Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('AA.Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
