<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>
@include('header')
<section class="md:py-8 flex-grow">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
        <h3 class="flex items-center mb-6 text-2xl font-bold">
            Login
        </h3>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
                    Sign into your NEWS account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('processLogin') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
                        <input type="text" value="{{ old('name') }}" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                            @error('email') focus:border-red-500 focus:ring-red-500 @enderror"
                            placeholder="name@gmail.com">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                            @error('password') focus:border-red-500 focus:ring-red-500 @enderror">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full bg-gray-200 hover:bg-primary-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                    <p class="text-sm font-light">
                        Don’t have a NEWS account? <a href="#"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@include('footer')
