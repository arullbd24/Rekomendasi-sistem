<script src="https://cdn.tailwindcss.com"></script>

<body class="max-h-screen">
    <section
        style="background-image: url('{{ asset('assets/img/piclogin.svg') }}'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;"
        class="min-h-screen flex items-center justify-center">
        
        <!-- Form Login -->
        <div class="bg-white bg-opacity-50 p-5 flex rounded-2xl shadow-lg max-w-3xl">
            <div class="md:w-1/2 px-5">
                <h2 class="text-2xl font-bold text-[#002D74]">Login</h2>
                <p class="text-sm mt-4 text-[#002D74]">If you have an account, please login</p>
                
                <!-- Form Login -->
                <form class="mt-6" action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    
                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- Email Input -->
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" name="email" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            value="{{ old('email') }}" autofocus autocomplete="email" required>
                    </div>

                    <!-- Password Input -->
                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none"
                            autocomplete="current-password" required>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex justify-between items-center mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Remember me</span>
                        </label>
                        
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                        px-4 py-3 mt-6 transition duration-300">
                        Log In
                    </button>
                </form>

                <!-- Divider -->
                <div class="mt-7 grid grid-cols-3 items-center text-gray-500">
                    <hr class="border-gray-500">
                    <p class="text-center text-sm">OR</p>
                    <hr class="border-gray-500">
                </div>

                <!-- Google Login Button (Non-functional) -->
                <button
                    class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 cursor-not-allowed opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6"
                        viewBox="0 0 48 48">
                        <defs>
                            <path id="a"
                                d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                        </defs>
                        <clipPath id="b">
                            <use xlink:href="#a" overflow="visible" />
                        </clipPath>
                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                        <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                        <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                        <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                    </svg>
                    <span class="ml-4">Login with Google</span>
                </button>

                <!-- Register Link -->
                <div class="text-sm flex justify-between items-center mt-3">
                    <p>If you don't have an account...</p>
                    <a href="{{ route('register') }}"
                        class="py-2 px-5 ml-3 bg-white border rounded-xl hover:scale-110 duration-300 border-blue-400 transition">
                        Register
                    </a>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="w-1/2 md:block hidden">
                <img src="{{ asset('assets/img/login.jpg') }}" class="rounded-2xl" alt="Login illustration">
            </div>
        </div>
    </section>
</body>