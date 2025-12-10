<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
        /* Style untuk menandai link aktif secara dinamis */
        .nav-link {
            transition: all 0.15s ease-in-out;
            font-weight: 500;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen bg-gray-100">

        <!-- Navigasi Atas (Top Bar) -->
        <nav class="bg-white border-b border-gray-100 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-xl font-extrabold text-teal-700">
                            <i class="fas fa-tools mr-1"></i> Admin Pantai Manggar
                        </a>
                    </div>

                    <!-- Menu Navigasi Sisi Kanan -->
                    <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex items-center">
                        
                        
                        <a href="<?php echo e(route('admin.dashboard')); ?>" 
                           class="nav-link inline-flex items-center px-1 pt-1 border-b-2 
                                  <?php echo e(request()->routeIs('admin.dashboard') ? 'border-teal-500 text-teal-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'); ?>">
                            Dashboard
                        </a>

                        
                        
                        <a href="<?php echo e(route('admin.tarif.index')); ?>" 
                           class="nav-link inline-flex items-center px-1 pt-1 border-b-2 
                                  <?php echo e(request()->routeIs('admin.tarif.index') ? 'border-teal-500 text-teal-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'); ?>">
                            Tarif
                        </a>

                        
                        
                        <a href="<?php echo e(route('admin.foto.index')); ?>" 
                           class="nav-link inline-flex items-center px-1 pt-1 border-b-2 
                                  <?php echo e(request()->routeIs('admin.foto.index') ? 'border-teal-500 text-teal-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'); ?>">
                            Galeri
                        </a>
                        
                        
                        
                        <a href="<?php echo e(route('admin.masukan.index')); ?>" 
                           class="nav-link inline-flex items-center px-1 pt-1 border-b-2 
                                  <?php echo e(request()->routeIs('admin.masukan.index') ? 'border-teal-500 text-teal-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'); ?>">
                            Masukan
                        </a>
                    </div>

                    <!-- Logout -->
                    <div class="flex items-center">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="flex items-center text-white bg-red-600 hover:bg-red-700 px-3 py-1.5 rounded-lg text-sm font-semibold transition duration-150 shadow-md">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header Halaman (diisi dari x-slot="header") -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header ?? ''); ?>

            </div>
        </header>

        <!-- Konten Utama (diisi dari body dashboard.blade.php) -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
</body>
</html><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/layouts/app.blade.php ENDPATH**/ ?>