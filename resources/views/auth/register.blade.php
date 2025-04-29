<script src="https://cdn.tailwindcss.com"></script>

<body
    style="background-image: url('{{ asset('assets/img/j5.svg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center; width: 100%; height: 100vh; margin: 0; padding: 0;">
    <div class="py-16">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image: url('{{ asset('assets/img/download.jpg') }}')">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <!-- Pesan Error -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Registrasi -->
                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf

                    <!-- Tombol Sosial Media (Tampilan tetap tapi non-fungsional) -->
                    <div class="space-y-4">
                        <a href="#"
                            class="flex items-center justify-center mt-4 bg-white rounded-lg shadow-md hover:bg-gray-100 transition cursor-not-allowed opacity-50">
                            <div class="px-4 py-3">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 0 48 48"
                                    version="1.1">
                                    <!-- SVG Google -->
                                </svg>
                            </div>
                            <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Daftar dengan Google</h1>
                        </a>

                        <!-- Tombol sosial media lainnya dengan cara yang sama -->
                        <a href="#"
                            class="flex items-center justify-center bg-white rounded-lg shadow-md hover:bg-gray-100 transition cursor-not-allowed opacity-50">
                            <!-- SVG dan teks LinkedIn -->
                        </a>

                        <a href="#"
                            class="flex items-center justify-center bg-white rounded-lg shadow-md hover:bg-gray-100 transition cursor-not-allowed opacity-50">
                            <!-- SVG dan teks X -->
                        </a>
                    </div>

                    <!-- Pemisah -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Atau daftar dengan email</span>
                        </div>
                    </div>

                    <!-- Input Form -->
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:shadow-outline"
                            required autofocus>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password"
                            class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                            class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    {{-- <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Preferensi Layanan</label>
                        <select name="service_preference"
                            class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:shadow-outline">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="fotografi" {{ old('service_preference') == 'fotografi' ? 'selected' : '' }}>
                                Fotografi</option>
                            <option value="videografi"
                                {{ old('service_preference') == 'videografi' ? 'selected' : '' }}>Videografi</option>
                            <option value="editing" {{ old('service_preference') == 'editing' ? 'selected' : '' }}>
                                Editing</option>
                            <option value="semua" {{ old('service_preference') == 'semua' ? 'selected' : '' }}>Semua
                                Layanan</option>
                        </select>
                    </div> --}}

                    <div class="mt-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="terms" class="form-checkbox h-5 w-5 text-gray-600" required>
                            <span class="ml-2 text-gray-700 text-sm">Saya menyetujui <a href="#"
                                    class="text-blue-500 underline">syarat & ketentuan</a></span>
                        </label>
                    </div>

                    <div class="mt-8">
                        <button type="submit"
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 focus:outline-none focus:shadow-outline">
                            Daftar
                        </button>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">Sudah punya akun? <a href="{{ route('login') }}"
                            class="text-blue-500 hover:underline">Masuk di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
