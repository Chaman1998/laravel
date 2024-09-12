@include('header')
{{-- <div class="min-h-screen flex flex-col lg:min-h-[85vh]"> --}}
<section class="md:py-8 flex-grow">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
        <h3 class="flex items-center mb-6 text-2xl font-bold">
            Signup
        </h3>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
                    Register for a NEWS account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('processRegister') }}" method="post">
                    @csrf  <!-- Add CSRF Token -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-black">Name</label>
                        <input type="text" value="{{ old('name') }}" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                            @error('name') focus:border-red-500 focus:ring-red-500 @enderror"
                            placeholder="Username">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
                        <input type="text" value="{{ old('email') }}" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                            @error('email') focus:border-red-500 focus:ring-red-500 @enderror"
                            placeholder="name@company.com">
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
                    
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                            @error('password_confirmation') focus:border-red-500 focus:ring-red-500 @enderror">
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" aria-describedby="terms" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300
                                @error('terms') focus:border-red-500 focus:ring-red-500 @enderror">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    @error('terms')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    
                    <button type="submit"
                        class="w-full bg-gray-200 hover:bg-primary-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Create an account
                    </button>
                
                    <p class="text-sm font-light">
                        Already have an account? <a href="{{ route('login') }}"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </form>
                
            </div>
        </div>
    </div>
</section>
{{-- </div> --}}
@include('footer')
