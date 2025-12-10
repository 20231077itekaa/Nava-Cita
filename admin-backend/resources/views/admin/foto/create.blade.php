<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto - Admin Pantai Manggar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <h1 class="text-2xl font-bold text-gray-900">Admin Pantai Manggar</h1>
                <nav class="flex space-x-4">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                    <a href="{{ route('admin.foto.index') }}" class="text-blue-600 font-semibold">Galeri Foto</a>
                    <a href="{{ route('admin.tarif.index') }}" class="text-gray-600 hover:text-gray-900">Tarif</a>
                    <a href="{{ route('admin.masukan.index') }}" class="text-gray-600 hover:text-gray-900">Masukan</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md border border-gray-200">
            <div class="p-8">
                <!-- Header Section -->
                <div class="flex justify-between items-center mb-8 pb-6 border-b border-gray-200">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Unggah Foto Baru ke Galeri</h1>
                        <p class="text-gray-600 mt-2">Tambahkan foto baru ke galeri Pantai Manggar</p>
                    </div>
                    <a href="{{ route('admin.foto.index') }}" 
                       class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition duration-150">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Daftar
                    </a>
                </div>

                <!-- Notifications -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-400"></i>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">
                                    Terdapat {{ $errors->count() }} error dalam form:
                                </h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Upload Form -->
                <form action="{{ route('admin.foto.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8" id="uploadForm">
                    @csrf

                    <!-- Judul Foto -->
                    <div>
                        <label for="judul" class="block text-lg font-medium text-gray-900 mb-3">
                            Judul Foto <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" 
                                   name="judul" 
                                   id="judul" 
                                   required 
                                   value="{{ old('judul') }}"
                                   class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg transition duration-150"
                                   placeholder="Contoh: Pemandangan Pantai Manggar di Sore Hari">
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Berikan judul yang deskriptif untuk foto ini</p>
                    </div>

                    <!-- File Upload -->
                    <div>
                        <label class="block text-lg font-medium text-gray-900 mb-3">
                            File Foto <span class="text-red-500">*</span>
                        </label>
                        
                        <!-- File Input -->
                        <div class="mt-4">
                            <input id="file_foto" 
                                   name="file_foto" 
                                   type="file" 
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition duration-150"
                                   accept="image/jpeg,image/png,image/jpg,image/gif"
                                   required>
                            <p class="mt-2 text-sm text-gray-500">Format: JPEG, PNG, JPG, GIF (Maksimal 2MB)</p>
                        </div>
                    </div>

                    <!-- Image Preview -->
                    <div id="image-preview" class="hidden">
                        <label class="block text-lg font-medium text-gray-900 mb-3">Pratinjau Gambar</label>
                        <div class="mt-1 max-w-md">
                            <img id="preview" class="w-full h-auto rounded-lg shadow-md border border-gray-200">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6 border-t border-gray-200">
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.foto.index') }}" 
                               class="px-8 py-3 border border-gray-300 text-lg font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition duration-150 shadow-sm">
                                Batal
                            </a>
                            <button type="submit" 
                                    id="submit-btn"
                                    class="px-8 py-3 border border-transparent text-lg font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 shadow-sm">
                                <i class="fas fa-upload mr-2"></i>
                                Unggah Foto
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        // File preview functionality
        document.getElementById('file_foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('image-preview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                previewContainer.classList.add('hidden');
            }
        });

        // Form validation
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            const judul = document.getElementById('judul').value.trim();
            const file = document.getElementById('file_foto').files[0];
            const submitBtn = document.getElementById('submit-btn');
            
            if (!judul) {
                e.preventDefault();
                alert('Judul foto harus diisi!');
                return;
            }
            
            if (!file) {
                e.preventDefault();
                alert('File foto harus dipilih!');
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Mengunggah...';
        });
    </script>
</body>
</html>