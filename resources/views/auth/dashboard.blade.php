<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISORA - Jasa Fotografi & Videografi Indramayu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- Admin Access Button (Muncul hanya dengan password) -->
<div class="fixed bottom-4 right-4">
    <button onclick="showAdminLogin()" class="bg-red-500 text-white p-3 rounded-full shadow-lg">
        <i class="fas fa-unlock-alt"></i>
    </button>
</div>

<!-- Admin Login Modal -->
<div id="adminLoginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 w-80">
        <h3 class="text-xl font-bold mb-4">Admin Login</h3>
        <input type="password" id="adminPassword" placeholder="Masukkan password admin"
            class="w-full p-2 border rounded mb-4">
        <button onclick="checkAdminPassword()" class="bg-yellow-600 text-white w-full py-2 rounded">
            Masuk
        </button>
    </div>
</div>

<!-- Admin Dashboard -->
<div id="adminDashboard" class="fixed inset-0 bg-white p-6 hidden overflow-y-auto z-50">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Dashboard Admin</h2>
        <button onclick="logoutAdmin()" class="text-red-500">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </div>

    <div id="bookingList" class="space-y-4">
        <!-- Daftar booking akan muncul di sini -->
    </div>
</div>

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
        <!-- Service Recommendations -->
        <div id="serviceRecommendations">
            <div class="flex items-center mb-6">
                <h2 id="selectedServiceTypeTitle" class="text-2xl font-bold text-gray-800">Rekomendasi Untuk Anda</h2>
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

    <!-- First Modal - Service Type Selection -->
    <div id="serviceTypeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl w-full max-w-md mx-4">
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Apa yang Anda butuhkan hari ini?</h3>
                <div class="space-y-3" id="serviceTypeOptions">
                    <div class="border rounded-lg p-4 hover:bg-yellow-50 cursor-pointer"
                        onclick="selectServiceType('Fotografi')">
                        <h4 class="font-medium text-gray-800">Fotografi</h4>
                        <p class="text-sm text-gray-500 mt-1">Jasa pemotretan profesional</p>
                    </div>
                    <div class="border rounded-lg p-4 hover:bg-yellow-50 cursor-pointer"
                        onclick="selectServiceType('Videografi')">
                        <h4 class="font-medium text-gray-800">Videografi</h4>
                        <p class="text-sm text-gray-500 mt-1">Jasa pembuatan video profesional</p>
                    </div>
                    <div class="border rounded-lg p-4 hover:bg-yellow-50 cursor-pointer"
                        onclick="selectServiceType('Editing')">
                        <h4 class="font-medium text-gray-800">Editing</h4>
                        <p class="text-sm text-gray-500 mt-1">Jasa pengeditan foto & video</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button onclick="hideModal('serviceTypeModal')" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Modal - Category Selection -->
    <div id="categoryModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl w-full max-w-md mx-4">
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Pilih Kategori Khusus</h3>
                <div class="space-y-3" id="categoryOptions">
                    <!-- Categories will be dynamically inserted here -->
                </div>
                <div class="mt-6 flex justify-between">
                    <button onclick="backToServiceType()" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                        Kembali
                    </button>
                    <button onclick="hideModal('categoryModal')" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Updated service categories mapping based on your dataset
        const serviceCategories = {
            "Fotografi": [
                {
                    name: "Wedding",
                    description: "Pernikahan dan pre-wedding"
                },
                {
                    name: "Year Book",
                    description: "Foto kenangan sekolah"
                },
                {
                    name: "Portrait",
                    description: "Foto profesional individu"
                }
            ],
            "Videografi": [
                {
                    name: "Company Profile",
                    description: "Video profil perusahaan"
                },
                {
                    name: "Event",
                    description: "Video dokumentasi acara"
                }
            ]
        };
    
        // Updated recommendations data with your complete dataset
        const recommendations = [
            {
                id: 1,
                name: "Yearbook Package",
                type: "Fotografi",
                category: "Year Book",
                location: "Indramayu",
                price: "Rp 400,000,000 (350k/orang)",
                rating: 4.8,
                reviews: 15,
                image: "https://images.unsplash.com/photo-1523050854058-8df90110c9f1",
                tags: ["yearbook", "group", "school"],
                details: "Buku tahunan, Video Angkatan, Foto person, Foto kelas, Foto eskul, Foto guru, Drone"
            },
            {
                id: 2,
                name: "Wedding Package",
                type: "Fotografi",
                category: "Wedding",
                location: "Indramayu",
                price: "Rp 3,500,000",
                rating: 4.9,
                reviews: 28,
                image: "https://images.unsplash.com/photo-1523438885200-e635ba2c371e",
                tags: ["wedding", "premium", "album"],
                details: "Foto, Video, Album"
            },
            {
                id: 3,
                name: "Profile Photo Package",
                type: "Fotografi",
                category: "Portrait",
                location: "Indramayu",
                price: "Rp 7,000,000",
                rating: 4.7,
                reviews: 12,
                image: "https://images.unsplash.com/photo-1534528741775-53994a69daeb",
                tags: ["portrait", "professional"],
                details: "Foto + editing"
            },
            {
                id: 4,
                name: "Company Profile Video",
                type: "Videografi",
                category: "Company Profile",
                location: "Indramayu",
                price: "Rp 15,000,000",
                rating: 4.6,
                reviews: 8,
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978",
                tags: ["corporate", "professional"],
                details: "Video editing, Drone"
            },
            {
                id: 5,
                name: "Event Coverage",
                type: "Videografi",
                category: "Event",
                location: "Indramayu",
                price: "Rp 15,000,000",
                rating: 4.5,
                reviews: 10,
                image: "https://images.unsplash.com/photo-1492684223066-81342ee5ff30",
                tags: ["event", "coverage"],
                details: "Video editing, Drone"
            }
        ];
    
        // Content-based filtering weights
        const contentWeights = {
            type: 3, // Higher weight for main service type
            category: 2, // Medium weight for category
            tags: 1 // Lower weight for individual tags
        };
    
        // Global variables to store user selections
        let selectedServiceType = '';
        let selectedCategory = '';
    
        // Function to show service details in a modal
        function showServiceDetails(serviceId) {
            const service = recommendations.find(s => s.id === serviceId);
            if (service) {
                // Create modal HTML
                const modalHTML = `
                    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                        <div class="bg-white rounded-xl w-full max-w-md mx-4 p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold">${service.name}</h3>
                                <button onclick="hideModal('serviceDetailModal')" class="text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <img src="${service.image}" alt="${service.name}" class="w-full h-48 object-cover rounded-lg mb-4">
                            <div class="space-y-2">
                                <p><strong>Harga:</strong> ${service.price}</p>
                                <p><strong>Lokasi:</strong> ${service.location}</p>
                                <p><strong>Rating:</strong> ${service.rating} (${service.reviews} reviews)</p>
                                <div class="mt-4">
                                    <h4 class="font-bold mb-2">Detail Paket:</h4>
                                    <p>${service.details}</p>
                                </div>
                            </div>
                            <div class="mt-6 flex justify-end">
                                <button onclick="hideModal('serviceDetailModal')" class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                // Create or update modal
                let modal = document.getElementById('serviceDetailModal');
                if (!modal) {
                    modal = document.createElement('div');
                    modal.id = 'serviceDetailModal';
                    document.body.appendChild(modal);
                }
                modal.innerHTML = modalHTML;
            }
        }
    
        // Function to hide any modal
        function hideModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.remove();
            }
        }
    
        // Show recommendations based on selected service type and category
        function showRecommendations() {
            document.getElementById('selectedServiceTypeTitle').textContent =
                `Rekomendasi ${selectedServiceType} ${selectedCategory}`;
    
            // Filter recommendations based on content similarity
            const filteredRecs = getContentBasedRecommendations();
    
            // Populate recommendations
            const container = document.getElementById('recommendationsContainer');
            container.innerHTML = '';
    
            if (filteredRecs.length === 0) {
                container.innerHTML = `
                    <div class="col-span-full text-center py-10">
                        <i class="fas fa-camera-retro text-4xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500">Belum ada rekomendasi tersedia untuk kategori ini</p>
                        <button onclick="showAllRecommendations()" class="mt-4 text-yellow-600 hover:text-yellow-800 font-medium">
                            Lihat semua rekomendasi
                        </button>
                    </div>
                `;
            } else {
                filteredRecs.forEach(service => {
                    container.innerHTML += `
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-lg">
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
                                    <button onclick="showServiceDetails(${service.id})" class="bg-yellow-600 text-white px-3 py-1 rounded hover:bg-yellow-700 transition">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }
        }
    
        // Content-based filtering algorithm
        function getContentBasedRecommendations() {
            // First filter by exact type and category matches
            const exactMatches = recommendations.filter(rec =>
                rec.type === selectedServiceType && rec.category === selectedCategory
            );
    
            if (exactMatches.length >= 3) return exactMatches;
    
            // If not enough exact matches, use scoring system
            const scoredRecs = recommendations.map(rec => {
                let score = 0;
    
                // Score for type match
                if (rec.type === selectedServiceType) {
                    score += contentWeights.type;
                }
    
                // Score for category match
                if (rec.category === selectedCategory) {
                    score += contentWeights.category;
                }
    
                // Additional scoring based on tags (simplified for this example)
                // In a real app, you'd have a more sophisticated tag matching system
    
                return {
                    ...rec,
                    score
                };
            });
    
            // Sort by score descending
            scoredRecs.sort((a, b) => b.score - a.score);
    
            // Return top 6 recommendations
            return scoredRecs.slice(0, 6);
        }
    
        // Show all recommendations regardless of category
        function showAllRecommendations() {
            selectedCategory = '';
            showRecommendations();
        }
    
        // Select service type from first modal
        function selectServiceType(serviceType) {
            selectedServiceType = serviceType;
            hideModal('serviceTypeModal');
            showCategoryModal(serviceType);
        }
    
        // Show category selection modal
        function showCategoryModal(serviceType) {
            const categories = serviceCategories[serviceType] || [];
            const container = document.getElementById('categoryOptions');
            container.innerHTML = '';
    
            categories.forEach(category => {
                container.innerHTML += `
                    <div class="border rounded-lg p-4 hover:bg-yellow-50 cursor-pointer" 
                         onclick="selectCategory('${category.name}')">
                        <h4 class="font-medium text-gray-800">${category.name}</h4>
                        <p class="text-sm text-gray-500 mt-1">${category.description}</p>
                    </div>
                `;
            });
    
            document.getElementById('categoryModal').classList.remove('hidden');
        }
    
        // Select category from second modal
        function selectCategory(category) {
            selectedCategory = category;
            hideModal('categoryModal');
            showRecommendations();
        }
    
        // Back to service type selection
        function backToServiceType() {
            document.getElementById('categoryModal').classList.add('hidden');
            document.getElementById('serviceTypeModal').style.display = 'flex';
        }
    
        // Hide modal
        function hideModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    
        // Render star ratings
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
    
        // Show first modal on page load
        window.onload = function() {
            document.getElementById('serviceTypeModal').style.display = 'flex';
        };
    </script>
</body>

</html>
