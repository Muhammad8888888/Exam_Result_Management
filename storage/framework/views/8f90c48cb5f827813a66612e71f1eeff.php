

<?php $__env->startSection('title', 'Exams'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Exams</h1>
        <a href="<?php echo e(route('exams.create')); ?>"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Create New Exam</a>
    </div>

    <?php if(session('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Course</th>
                    <th class="py-3 px-6 text-left">Date</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm font-light">
                <?php $__empty_1 = true; $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left"><?php echo e($exam->title); ?></td>
                        <td class="py-3 px-6 text-left"><?php echo e($exam->course->title ?? 'N/A'); ?></td>
                        <td class="py-3 px-6 text-left"><?php echo e(\Carbon\Carbon::parse($exam->date)->format('Y-m-d')); ?></td>
                        <td class="py-3 px-6 text-left">
                            <a href="<?php echo e(route('exams.edit', $exam->id)); ?>"
                               class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition">Edit</a>
                            <form action="<?php echo e(route('exams.destroy', $exam->id)); ?>" method="POST"
                                  class="inline-block"
                                  onsubmit="return confirm('Are you sure?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center py-4">No exams available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/exams/index.blade.php ENDPATH**/ ?>