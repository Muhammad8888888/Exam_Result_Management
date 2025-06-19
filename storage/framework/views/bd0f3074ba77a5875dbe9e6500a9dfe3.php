

<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow rounded-xl">
    <h2 class="text-2xl font-bold mb-6">Add New Result</h2>

    <form action="<?php echo e(route('results.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Student Dropdown -->
        <div class="mb-4">
            <label for="student_id" class="block text-gray-700 font-semibold mb-2">Student</label>
            <select name="student_id" id="student_id" required class="w-full border border-gray-300 p-2 rounded">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Course Dropdown -->
        <div class="mb-4">
            <label for="course_id" class="block text-gray-700 font-semibold mb-2">Course</label>
            <select name="course_id" id="course_id" required class="w-full border border-gray-300 p-2 rounded">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($course->id); ?>"><?php echo e($course->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Grade -->
        <div class="mb-4">
            <label for="grade" class="block text-gray-700 font-semibold mb-2">Grade</label>
            <input type="text" name="grade" id="grade" required placeholder="e.g. A, B, C" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Result</button>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/results/create.blade.php ENDPATH**/ ?>