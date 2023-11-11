<x-app-layout>

    <div class="w-1/3 m-auto rounded-md min-h-[200px] mt-2">

        <!-- login form -->
        <div class="bg-white p-16 rounded shadow-2xl">

            <h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block mb-1 font-bold text-gray-500">Name</label>
                    <input name="name" value="{{old('name')}}" type="text"
                           class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>
                <div>
                    <label class="block mb-1 font-bold text-gray-500">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" required
                           class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Password</label>
                    <input type="password" name="password"
                           class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Confirm Password</label>
                    <input type="password" name="password_confirmation"
                           class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                </div>

                <button type="submit"
                        class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">
                    Sign Up
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
