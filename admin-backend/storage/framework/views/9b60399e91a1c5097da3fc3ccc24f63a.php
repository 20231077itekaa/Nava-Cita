

<?php $__env->startSection('title', 'Tambah Tarif Baru'); ?>

<?php $__env->startSection('content'); ?>

<h2 class="text-2xl font-bold text-gray-700 mb-6">Tambah Item Tarif Baru</h2>

<div class="bg-white p-6 rounded-xl shadow-lg max-w-xl mx-auto">
    
    <form action="<?php echo e(route('admin.tarif.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="space-y-4">
            
            
            <div>
                <label for="item_name" class="block text-sm font-medium text-gray-700">Nama Item Tarif (e.g., Perorangan, Roda 4)</label>
                <input type="text" name="item_name" id="item_name" 
                       value="<?php echo e(old('item_name')); ?>"
                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 <?php $__errorArgs = ['item_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       required autocomplete="off">
                <?php $__errorArgs = ['item_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div>
                <label for="price_weekday" class="block text-sm font-medium text-gray-700">Harga Hari Kerja (Weekday)</label>
                <div class="relative mt-1 rounded-lg shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">Rp</span>
                    </div>
                    <input type="number" name="price_weekday" id="price_weekday" 
                           value="<?php echo e(old('price_weekday')); ?>"
                           class="block w-full pl-10 pr-3 border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500 <?php $__errorArgs = ['price_weekday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           required min="0">
                </div>
                <?php $__errorArgs = ['price_weekday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div>
                <label for="price_weekend" class="block text-sm font-medium text-gray-700">Harga Akhir Pekan/Libur (Weekend)</label>
                <div class="relative mt-1 rounded-lg shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">Rp</span>
                    </div>
                    <input type="number" name="price_weekend" id="price_weekend" 
                           value="<?php echo e(old('price_weekend')); ?>"
                           class="block w-full pl-10 pr-3 border-gray-300 rounded-lg focus:ring-teal-500 focus:border-teal-500 <?php $__errorArgs = ['price_weekend'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           required min="0">
                </div>
                <?php $__errorArgs = ['price_weekend'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-150">
                Simpan Tarif
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/admin/tarif/create.blade.php ENDPATH**/ ?>