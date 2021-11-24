<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="col-md-6 col-lg-7">
                <img src="/uploads/{{$get->site_logo}}" alt="{{$get->site_name}}">
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('AA.Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.')}}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('AA.A new verification link has been sent to the email address you provided during registration.')}}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('AA.Resend Verification Email')}}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('AA.Logout')}}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
