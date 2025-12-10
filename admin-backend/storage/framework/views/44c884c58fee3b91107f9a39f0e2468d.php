

<?php $__env->startSection('title', 'Galeri Foto'); ?>

<?php $__env->startSection('header'); ?>
    <h2 class="text-xl font-semibold text-gray-800 leading-tight">Manajemen Galeri Foto</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    
    <?php if(session('success')): ?>
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Galeri Foto Pantai</h1>
            <p class="text-sm text-gray-600 mt-1">Total Foto: <?php echo e($fotos->count()); ?></p>
        </div>
        <a href="<?php echo e(route('admin.foto.create')); ?>" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-150">
            + Unggah Foto Baru
        </a>
    </div>

    <?php if($fotos->isEmpty()): ?>
        <div class="text-center py-10 text-gray-500 italic bg-gray-50 rounded-lg">
            <p>Belum ada foto yang dimasukkan ke galeri.</p>
        </div>
    <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="border border-gray-200 rounded-lg shadow-sm overflow-hidden flex flex-col">
                    
                    
                    <?php
                        // Cukup gunakan $foto->path (yang seharusnya berisi 'fotos/namafile.ext')
                        // dan gabungkan langsung dengan asset('storage/')
                        $imagePath = $foto->path ? asset('storage/' . $foto->path) : null;
                    ?>

                    <?php if($imagePath): ?>
                        <img src="<?php echo e($imagePath); ?>" alt="<?php echo e($foto->judul); ?>" class="w-full h-48 object-cover">
                    <?php else: ?>
                        
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                            <div class="text-center p-4">
                                
                                <i class="fas fa-image text-3xl mb-2"></i> 
                                <p class="text-sm font-semibold">Gambar Tidak Ditemukan</p>
                                
                                <p class="text-xs mt-1">Path Database: <?php echo e($foto->path ?: 'Kosong'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="font-semibold text-gray-800 text-sm mb-1"><?php echo e($foto->judul ?: 'Tanpa Judul'); ?></h3>
                            <p class="text-xs text-gray-600 mb-3"><?php echo e(Str::limit($foto->caption ?: 'Tanpa keterangan', 50)); ?></p>
                        </div>

                        <div class="flex justify-between items-center border-t pt-3 mt-auto">
                            <a href="<?php echo e(route('admin.foto.edit', $foto)); ?>" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Edit
                            </a>

                            <form action="<?php echo e(route('admin.foto.destroy', $foto)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" 
                                    class="text-red-600 hover:text-red-800 text-sm font-medium"
                                    onclick="return confirm('Hapus foto <?php echo e($foto->judul); ?>?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>

<script>
// Debug: Tampilkan info penting di console untuk pengecekan jalur URL
document.addEventListener('DOMContentLoaded', function() {
    console.log("--- DEBUG INFO: Galeri Foto (Koreksi) ---");
    <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            // Menggunakan path yang sudah bersih dari DB
            $urlAkses = $foto->path ? asset('storage/' . $foto->path) : 'TIDAK ADA PATH';
        ?>
        console.log({
            id: "<?php echo e($foto->id); ?>",
            judul: "<?php echo e($foto->judul); ?>",
            pathDatabase: "<?php echo e($foto->path); ?>", // Menggunakan $foto->path
            urlAksesFinal: "<?php echo e($urlAkses); ?>"
        });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    console.log("---------------------------------------");
    console.log("Pastikan nilai 'urlAksesFinal' bisa dibuka langsung di browser.");
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/admin/foto/index.blade.php ENDPATH**/ ?>