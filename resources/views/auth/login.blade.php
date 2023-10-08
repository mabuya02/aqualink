<x-guest-layout>
    <div class="flex h-screen w-full items-center justify-center bg-white">
        <div class="rounded-xl bg-white-300 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-blue">
                <div class="mb-8 flex flex-col items-center">
                    <img src="{{asset('images/logo-no-background.png')}}" width="150" alt="" srcset="" />
                    <span class="text-lg text-blue-900">Sign Up</span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Registration Form Code (unchanged) -->
                </form>
               
                <form method="POST" action="{{ route('login') }}" class="mt-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <x-primary-button class="mt-4 mx-auto">
                        {{ __('Log in') }}
                    </x-primary-button>

                    <div class="flex items-center justify-center mt-4">
                        @if (Route::has('register'))
                            <p class="text-sm text-gray-600">
                                <a class="underline text-indigo-600 hover:text-indigo-900" href="{{ route('register') }}">
                                    {{ __('Don\'t have an account? ') }}
                                </a>
                            </p>
                        @endif

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>