<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Custom scrollbar style */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #a0aec0;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }
        
        /* Tambahkan font Inter */
        html {
            font-family: 'Inter', sans-serif;
        }
        /* Style untuk link yang sedang aktif */
        .nav-active {
            font-weight: 700; /* Bold */
            color: #0d9488; /* Teal-700 untuk menandai aktif */
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navigasi Atas (Top Bar) -->
    <header class="bg-white border-b border-gray-200 shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2 text-xl font-extrabold text-teal-700 hover:text-teal-800 transition duration-150">
                    <i class="fa-solid fa-cloud-sun text-2xl"></i>
                    <span>Admin Pantai Manggar</span>
                </a>

                <!-- Menu Navigasi Kiri-Kanan -->
                <nav class="flex items-center space-x-6">
                    <!-- Dashboard -->
                    <a href="{{ route('admin.dashboard') }}" 
                       class="text-gray-600 hover:text-teal-600 transition duration-150 {{ request()->routeIs('admin.dashboard') ? 'nav-active' : '' }}">
                        Dashboard
                    </a>
                    
                    <!-- Tarif -->
                    <a href="{{ route('admin.tarif.index') }}" 
                       class="text-gray-600 hover:text-teal-600 transition duration-150 {{ request()->routeIs('admin.tarif.*') ? 'nav-active' : '' }}">
                        Tarif
                    </a>
                    
                    <!-- Galeri (FOTO) -->
                    {{-- PERBAIKAN UTAMA: Mengganti 'admin.fotos.index' menjadi 'admin.foto.index' --}}
                    <a href="{{ route('admin.foto.index') }}" 
                       class="text-gray-600 hover:text-teal-600 transition duration-150 {{ request()->routeIs('admin.foto.*') ? 'nav-active' : '' }}">
                        Galeri
                    </a>
                    
                    <!-- Masukan -->
                    <a href="{{ route('admin.masukan.index') }}" 
                       class="text-gray-600 hover:text-teal-600 transition duration-150 {{ request()->routeIs('admin.masukan.*') ? 'nav-active' : '' }}">
                        Masukan
                    </a>
                </nav>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Konten Utama (Main Content) -->
    <main class="flex-grow py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Menampilkan Judul Halaman -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6">@yield('title')</h1>

            <!-- Konten Dinamis dari setiap View -->
            <div class="bg-white shadow-xl sm:rounded-lg">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Footer (Opsional) -->
    <footer class="bg-white border-t border-gray-200 mt-8 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Admin Pantai Manggar. Dibuat oleh Team Inovasi Sosial Nava Cita Institut Teknologi Kalimantan 2025 dan Dikelola dengan Laravel.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>