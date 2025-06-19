

<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto bg-white p-8 rounded shadow mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Instructor</h2>

    <form action="<?php echo e(route('instructors.store')); ?>" method="POST" class="space-y-6">
        <?php echo csrf_field(); ?>

        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" id="name" required
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700 font-semibold">Email</label>
            <input type="email" name="email" id="email" required
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" />
        </div>

        

        <!-- Department -->
        <div>
            <label for="department" class="block text-gray-700 font-semibold">Department</label>
            <input type="text" name="department" id="department" required
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Buttons -->
        <div class="flex justify-between items-center">
            <a href="<?php echo e(route('instructors.index')); ?>" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded transition">Back</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded transition">Save Instructor</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/instructors/create.blade.php ENDPATH**/ ?>