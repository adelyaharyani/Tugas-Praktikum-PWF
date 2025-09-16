<x-guest-layout>
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold">Selamat Datang di {{ config('app.name') }}</h1>
        <p class="text-gray-600">Silakan login untuk melanjutkan</p>
    </div>

    <!-- STATUS -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- FORM LOGIN -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                       name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <!-- Tombol Login -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
