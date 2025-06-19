<?php $__env->startSection('content'); ?>
<div class="container mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Students -->
        <a href="<?php echo e(route('students.index')); ?>" class="bg-blue-600 text-white text-center py-4 rounded shadow hover:bg-blue-700">
            Manage Students
        </a>

        <!-- Instructors -->
        <a href="<?php echo e(route('instructors.index')); ?>" class="bg-green-600 text-white text-center py-4 rounded shadow hover:bg-green-700">
            Manage Instructors
        </a>

        <!-- Courses -->
        <a href="<?php echo e(route('courses.index')); ?>" class="bg-purple-600 text-white text-center py-4 rounded shadow hover:bg-purple-700">
            Manage Courses
        </a>

        <!-- Exams -->
        <a href="<?php echo e(route('exams.index')); ?>" class="bg-yellow-500 text-white text-center py-4 rounded shadow hover:bg-yellow-600">
            Manage Exams
        </a>

        <!-- Results -->
        <a href="<?php echo e(route('results.index')); ?>" class="bg-red-500 text-white text-center py-4 rounded shadow hover:bg-red-600">
            Manage Results
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/dashboard.blade.php ENDPATH**/ ?>