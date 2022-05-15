<x-layout>
	    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-black border-opacity-5 rounded-xl p-6 rounded-xl">
            <h1 class="mb-8 text-center text-3xl font-light tracking-tight text-black phone:px-10 phone:pt-10">Sign Up!</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6 ">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{old('name')}}"
                           placeholder="Enter Name"
                           required
                    >
                </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           value="{{old('username')}}"
                           placeholder="Enter Username"
                           required
                    >
                </div>
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{old('username')}}"
                           placeholder="Enter Email"
                           required
                    >
                </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           placeholder="Enter Password"
                           required
                    >
                    @error('password')
                    	<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-center">
                    <button type="submit"
                            class="bg-blue-500 text-white rounded-full py-2 px-4 hover:bg-blue-400"
                    >
                        Create Account
                    </button>
                    <a href="/login" class="mx-auto mt-4 block text-sm text-grey-800 hover:underline">
                        Already Have an Account?
                    </a>
                </div>
            </form>
        </main>
    </section>
</x-layout>
