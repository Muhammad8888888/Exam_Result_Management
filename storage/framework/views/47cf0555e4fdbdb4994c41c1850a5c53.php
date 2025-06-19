

<?php $__env->startSection('content'); ?>

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">Add New Student</h2>

    
    <?php if($errors->any()): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <strong>Whoops! Something went wrong.</strong>
            <ul class="list-disc pl-5 mt-2">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if(session('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('students.store')); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>

        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700 font-medium">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700 font-medium">Email</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
        </div>

        <!-- Department -->
        <div>
            <label for="department" class="block text-gray-700 font-medium">Department</label>
            <input type="text" name="department" id="department" value="<?php echo e(old('department')); ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
        </div>

        <!-- Gender -->
        <div>
            <label for="gender" class="block text-gray-700 font-medium">Gender</label>
            <select name="gender" id="gender" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400" required>
                <option value="" disabled <?php echo e(old('gender') ? '' : 'selected'); ?>>Select</option>
                <option value="Male" <?php echo e(old('gender') === 'Male' ? 'selected' : ''); ?>>Male</option>
                <option value="Female" <?php echo e(old('gender') === 'Female' ? 'selected' : ''); ?>>Female</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-between items-center mt-6">
            <a href="<?php echo e(route('students.index')); ?>" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Back
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Save Student
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/students/create.blade.php ENDPATH**/ ?>