

<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('header'); ?>
    <h2 class="text-xl font-semibold text-gray-800 leading-tight">Dashboard Admin</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Selamat Datang, Administrator Manggar</h1>
    <p class="text-gray-600 mb-8">Ini adalah panel administrasi untuk Website Pantai Manggar Segarasari. Anda dapat mengelola konten, seperti tarif, galeri foto, dan melihat masukan dari pengunjung.</p>

    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-50 p-6 rounded-xl shadow-md border border-blue-300">
            <div class="flex items-center">
                
                <i class="fas fa-images text-blue-500 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Foto</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($totalFoto); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-green-50 p-6 rounded-xl shadow-md border border-green-300">
            <div class="flex items-center">
                <i class="fas fa-comments text-green-500 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Masukan</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($totalMasukan); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-purple-50 p-6 rounded-xl shadow-md border border-purple-300">
            <div class="flex items-center">
                <i class="fas fa-eye text-purple-500 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-500">Status Sistem</p>
                    <p class="text-lg font-semibold text-green-600">Aktif</p>
                </div>
            </div>
        </div>

        <div class="bg-yellow-50 p-6 rounded-xl shadow-md border border-yellow-300">
            <div class="flex items-center">
                <i class="fas fa-chart-line text-yellow-500 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-500">Versi</p>
                    <p class="text-lg font-semibold text-gray-900">v1.0</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mb-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="<?php echo e(route('admin.foto.create')); ?>" 
               class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-150 text-center">
                <i class="fas fa-plus-circle text-blue-500 text-3xl mb-3"></i>
                <p class="font-semibold text-gray-800">Tambah Foto Baru</p>
                <p class="text-sm text-gray-600 mt-1">Upload foto ke galeri</p>
            </a>

            <a href="<?php echo e(route('admin.foto.index')); ?>" 
               class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-150 text-center">
                <i class="fas fa-images text-green-500 text-3xl mb-3"></i>
                <p class="font-semibold text-gray-800">Kelola Galeri</p>
                <p class="text-sm text-gray-600 mt-1">Lihat dan edit semua foto</p>
            </a>

            <a href="<?php echo e(route('admin.masukan.index')); ?>" 
               class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-150 text-center">
                <i class="fas fa-comment-dots text-purple-500 text-3xl mb-3"></i>
                <p class="font-semibold text-gray-800">Lihat Masukan</p>
                <p class="text-sm text-gray-600 mt-1">Baca masukan pengunjung</p>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Foto Terbaru</h3>
            </div>
            <div class="p-6">
                <?php if($fotoTerbaru->count() > 0): ?>
                    <div class="grid grid-cols-2 gap-4">
                        <?php $__currentLoopData = $fotoTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border rounded-lg overflow-hidden">
                                <?php
                                    // KOREKSI PENTING: Menggunakan $foto->path (sesuai database) 
                                    // dan menggabungkannya dengan asset('storage/')
                                    $imagePath = $foto->path ? asset('storage/' . $foto->path) : null;
                                ?>

                                <?php if($imagePath): ?>
                                    <img src="<?php echo e($imagePath); ?>" 
                                        alt="<?php echo e($foto->judul); ?>" 
                                        class="w-full h-32 object-cover">
                                <?php else: ?>
                                    <div class="w-full h-32 bg-red-100 flex items-center justify-center text-red-700 text-sm">
                                        <i class="fas fa-exclamation-triangle mr-2"></i> Path Error
                                    </div>
                                <?php endif; ?>
                                <div class="p-2">
                                    <p class="text-sm font-medium truncate"><?php echo e($foto->judul); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo e($foto->created_at->format('d M Y')); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p class="text-gray-500 text-center py-4">Belum ada foto</p>
                <?php endif; ?>
            </div>
        </div>

        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Masukan Terbaru</h3>
            </div>
            <div class="p-6">
                <?php if($masukanTerbaru->count() > 0): ?>
                    <div class="space-y-4">
                        <?php $__currentLoopData = $masukanTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border-l-4 border-blue-500 pl-4 py-2">
                                <div class="flex justify-between items-start">
                                    <p class="font-semibold text-gray-800"><?php echo e($item->nama); ?></p>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">
                                        <?php echo e($item->jenis); ?>

                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mt-1 line-clamp-2"><?php echo e($item->pesan); ?></p>
                                <p class="text-xs text-gray-400 mt-1"><?php echo e($item->created_at->format('d M Y H:i')); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <p class="text-gray-500 text-center py-4">Belum ada masukan</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>