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
                    <div class="mb-4 text-lg">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4 text-lg">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4 text-lg">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-4 text-lg">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                
               
                <div class="flex items-center justify-end flex-col mt-4">
                <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
                </div>
            </div>
        </div>
    </div>
    </form>
</x-guest-layout>
