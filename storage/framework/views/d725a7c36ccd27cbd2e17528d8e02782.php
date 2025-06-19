
<!-- Navigation Bar -->


<?php $__env->startSection('content'); ?>
<!-- Navigation Bar -->
<!-- Top Navigation -->



    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">Course Management</h2>
            <a href="<?php echo e(route('courses.create')); ?>" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
                Add New Course
            </a>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Code</th>
                        <th class="px-6 py-3">Credit Hours</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4"><?php echo e($index + 1); ?></td>
                            <td class="px-6 py-4"><?php echo e($course->title); ?></td>
                            <td class="px-6 py-4"><?php echo e($course->code); ?></td>
                            <td class="px-6 py-4"><?php echo e($course->credit_hours); ?></td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="<?php echo e(route('courses.edit', $course->id)); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs">Edit</a>
                                <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" onsubmit="return confirm('Are you sure?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded text-xs">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/courses/index.blade.php ENDPATH**/ ?>