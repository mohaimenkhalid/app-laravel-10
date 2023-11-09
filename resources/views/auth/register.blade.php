<x-app-layout>

    <div class="w-1/3 m-auto rounded-md min-h-[200px] mt-2">

        <!-- login form -->
        <div class="bg-white p-16 rounded shadow-2xl">

            <h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

            <form class="space-y-5">

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Name</label>
                    <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Email</label>
                    <input type="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Password</label>
                    <input type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="agree">
                    <label for="agree" class="ml-2 text-gray-700 text-sm">I agree to the terms and privacy.</label>
                </div>

                <button class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Sign Up</button>

            </form>

        </div>

    </div>





{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
</x-app-layout>
