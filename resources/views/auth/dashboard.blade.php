<div>
    <script src="https://cdn.tailwindcss.com"></script>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VISORA - Jasa Fotografi & Videografi Indramayu</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            .service-card {
                transition: all 0.3s ease;
            }

            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body class="bg-gray-50">
        <!-- Navbar -->
        <nav class="bg-yellow-600 text-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-camera-retro text-2xl"></i>
                    <span class="text-xl font-bold">VISORA</span>
                    <span class="text-sm hidden md:block">Kabupaten Indramayu</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-yellow-200"><i class="fas fa-user-circle text-xl"></i></a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-8 min-h-screen">
            <!-- Step 1: Category Selection -->
            <div id="categorySelection" class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Pilih Jenis Layanan</h1>
                    <p class="text-gray-600">Temukan jasa profesional sesuai kebutuhan Anda di Indramayu</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Fotografi Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden service-card cursor-pointer"
                        onclick="selectCategory('fotografi')">
                        <div class="h-40 bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-camera text-5xl text-blue-600"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">Fotografi</h3>
                            <p class="text-gray-600">Capture momen berharga dengan hasil profesional</p>
                            <div class="mt-4 text-yellow-600 font-medium">Pilih <i class="fas fa-arrow-right ml-1"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Videografi Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden service-card cursor-pointer"
                        onclick="selectCategory('videografi')">
                        <div class="h-40 bg-green-100 flex items-center justify-center">
                            <i class="fas fa-video text-5xl text-green-600"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">Videografi</h3>
                            <p class="text-gray-600">Abadikan kenangan dalam bentuk video berkualitas</p>
                            <div class="mt-4 text-yellow-600 font-medium">Pilih <i class="fas fa-arrow-right ml-1"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Editing Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden service-card cursor-pointer"
                        onclick="selectCategory('editing')">
                        <div class="h-40 bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-edit text-5xl text-purple-600"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">Editing</h3>
                            <p class="text-gray-600">Hasilkan karya visual yang lebih sempurna</p>
                            <div class="mt-4 text-yellow-600 font-medium">Pilih <i class="fas fa-arrow-right ml-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Service Type Selection (Hidden Initially) -->
            <div id="serviceTypeSelection" class="max-w-3xl mx-auto hidden">
                <div class="flex items-center mb-6">
                    <button onclick="backToCategories()" class="text-yellow-600 hover:text-yellow-700 mr-4">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <h2 id="selectedCategoryTitle" class="text-2xl font-bold text-gray-800"></h2>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h3 class="font-semibold text-lg mb-4">Pilih Jenis Layanan Spesifik</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="serviceTypesContainer">
                        <!-- Options will be dynamically inserted here -->
                    </div>
                </div>
            </div>

            <!-- Step 3: Service Recommendations (Hidden Initially) -->
            <div id="serviceRecommendations" class="hidden">
                <div class="flex items-center mb-6">
                    <button onclick="backToServiceTypes()" class="text-yellow-600 hover:text-yellow-700 mr-4">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <h2 id="selectedServiceTypeTitle" class="text-2xl font-bold text-gray-800"></h2>
                </div>

                <div class="mb-6">
                    <div class="relative">
                        <input type="text" placeholder="Cari berdasarkan lokasi/kecamatan..."
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="recommendationsContainer">
                    <!-- Recommendations will be dynamically inserted here -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-yellow-800 text-white py-8">
            <div class="container mx-auto px-4 text-center">
                <h3 class="text-xl font-bold mb-2">VISORA</h3>
                <p class="text-yellow-200 mb-4">Jasa Fotografi & Videografi Terbaik di Indramayu</p>
                <div class="flex justify-center space-x-4 mb-4">
                    <a href="#" class="hover:text-yellow-300"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-yellow-300"><i class="fas fa-envelope"></i></a>
                </div>
                <p class="text-sm">© 2023 VISORA - Kabupaten Indramayu</p>
            </div>
        </footer>

        <script>
            // Sample data - in a real app, this would come from your backend
            const serviceTypes = {
                fotografi: [
                    "Fotografi Wedding",
                    "Fotografi Produk",
                    "Fotografi Acara",
                    "Fotografi Portrait",
                    "Fotografi Drone"
                ],
                videografi: [
                    "Videografi Wedding",
                    "Dokumenter",
                    "Video Profil",
                    "Video Iklan",
                    "Cinematic"
                ],
                editing: [
                    "Editing Foto",
                    "Editing Video",
                    "Color Grading",
                    "Motion Graphic",
                    "VFX"
                ]
            };

            const recommendations = {
                "Fotografi Wedding": [{
                        name: "Paket Wedding Premium",
                        location: "Indramayu Kota",
                        price: "Rp 2.500.000",
                        rating: 4.8,
                        reviews: 32,
                        image: "https://images.unsplash.com/photo-1523438885200-e635ba2c371e"
                    },
                    {
                        name: "Fotografi Pernikahan Lengkap",
                        location: "Jatibarang",
                        price: "Rp 1.800.000",
                        rating: 4.7,
                        reviews: 28,
                        image: "https://images.unsplash.com/photo-1497215728101-856f4ea42174"
                    }
                ],
                "Fotografi Produk": [{
                    name: "Foto Produk E-commerce",
                    location: "Kandanghaur",
                    price: "Rp 500.000",
                    rating: 4.9,
                    reviews: 45,
                    image: "https://images.unsplash.com/photo-1602143407151-7111542de6e8"
                }]
                // Add more recommendations for other service types...
            };

            let selectedCategory = '';
            let selectedServiceType = '';

            function selectCategory(category) {
                selectedCategory = category;
                document.getElementById('selectedCategoryTitle').textContent = category.charAt(0).toUpperCase() + category
                    .slice(1);

                // Populate service types
                const container = document.getElementById('serviceTypesContainer');
                container.innerHTML = '';

                serviceTypes[category].forEach(service => {
                    container.innerHTML += `
                        <div class="border rounded-lg p-4 hover:bg-yellow-50 cursor-pointer" onclick="selectServiceType('${service}')">
                            <h4 class="font-medium text-gray-800">${service}</h4>
                            <p class="text-sm text-gray-500 mt-1">Lihat rekomendasi penyedia jasa</p>
                        </div>
                    `;
                });

                document.getElementById('categorySelection').classList.add('hidden');
                document.getElementById('serviceTypeSelection').classList.remove('hidden');
            }

            function selectServiceType(serviceType) {
                selectedServiceType = serviceType;
                document.getElementById('selectedServiceTypeTitle').textContent = serviceType;

                // Populate recommendations
                const container = document.getElementById('recommendationsContainer');
                container.innerHTML = '';

                const serviceRecs = recommendations[serviceType] || [];

                if (serviceRecs.length === 0) {
                    container.innerHTML = `
                        <div class="col-span-full text-center py-10">
                            <i class="fas fa-camera-retro text-4xl text-gray-300 mb-4"></i>
                            <p class="text-gray-500">Belum ada rekomendasi tersedia untuk layanan ini</p>
                        </div>
                    `;
                } else {
                    serviceRecs.forEach(service => {
                        container.innerHTML += `
                            <div class="bg-white rounded-lg shadow-md overflow-hidden service-card">
                                <div class="relative h-48">
                                    <img src="${service.image}" alt="${service.name}" class="w-full h-full object-cover">
                                    <span class="absolute bottom-2 left-2 bg-yellow-600 text-white text-xs px-2 py-1 rounded">
                                        ${service.location}
                                    </span>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1">${service.name}</h3>
                                    <div class="flex items-center mb-3">
                                        <div class="flex text-yellow-400">
                                            ${renderStars(service.rating)}
                                        </div>
                                        <span class="text-gray-500 text-sm ml-2">${service.rating} (${service.reviews} review)</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="font-bold text-yellow-700">${service.price}</span>
                                        <button class="bg-yellow-600 text-white px-3 py-1 rounded hover:bg-yellow-700 transition">
                                            Pesan Sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }

                document.getElementById('serviceTypeSelection').classList.add('hidden');
                document.getElementById('serviceRecommendations').classList.remove('hidden');
            }

            function backToCategories() {
                document.getElementById('serviceTypeSelection').classList.add('hidden');
                document.getElementById('categorySelection').classList.remove('hidden');
            }

            function backToServiceTypes() {
                document.getElementById('serviceRecommendations').classList.add('hidden');
                document.getElementById('serviceTypeSelection').classList.remove('hidden');
            }

            function renderStars(rating) {
                let stars = '';
                const fullStars = Math.floor(rating);
                const hasHalfStar = rating % 1 >= 0.5;

                for (let i = 0; i < fullStars; i++) {
                    stars += '<i class="fas fa-star"></i>';
                }

                if (hasHalfStar) {
                    stars += '<i class="fas fa-star-half-alt"></i>';
                }

                const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
                for (let i = 0; i < emptyStars; i++) {
                    stars += '<i class="far fa-star"></i>';
                }

                return stars;
            }
        </script>
    </body>

    </html>
</div>
