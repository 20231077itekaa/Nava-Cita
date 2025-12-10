

<?php $__env->startSection('header'); ?>
    <h2 class="text-xl font-semibold text-gray-800 leading-tight">
        Edit Foto: <?php echo e(Str::limit($foto->caption ?: 'Tanpa Keterangan', 30)); ?>

    </h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="mb-6">
        <a href="<?php echo e(route('admin.foto.index')); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition duration-150">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Daftar
        </a>
    </div>

    <div class="max-w-xl mx-auto bg-white p-8 border border-gray-200 rounded-lg shadow-md">
        <form method="POST" action="<?php echo e(route('admin.foto.update', $foto)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?>

            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
                <img src="<?php echo e($foto->file_path); ?>" alt="Current Photo" class="w-full h-64 object-cover rounded-lg shadow-md border border-gray-200">
                <p class="text-xs text-gray-500 mt-2">Path File: <?php echo e($foto->path); ?></p>
            </div>

            
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Ganti File Gambar (Opsional)</label>
                <input id="image" class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 transition duration-150" 
                    type="file" name="image" accept="image/*" />
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengganti gambar.</p>
            </div>

            
            <div class="mb-6">
                <label for="caption" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Foto (Opsional)</label>
                <input id="caption" class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 transition duration-150" 
                    type="text" name="caption" value="<?php echo e(old('caption', $foto->caption)); ?>" 
                    placeholder="Contoh: Pemandangan pantai di sore hari" />
                <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="flex items-center justify-end">
                <a href="<?php echo e(route('admin.foto.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900 mr-4 transition duration-150">
                    Batal
                </a>
                
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-6 rounded-md transition duration-150">
                    Perbarui Foto
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/admin/foto/edit.blade.php ENDPATH**/ ?>