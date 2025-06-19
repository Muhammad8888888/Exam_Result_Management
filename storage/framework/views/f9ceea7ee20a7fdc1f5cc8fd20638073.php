

<?php $__env->startSection('content'); ?>

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">Create New Exam</h2>

    
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

    <form action="<?php echo e(route('exams.store')); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>

        <!-- Exam Title -->
        <div>
            <label for="title" class="block text-gray-700 font-medium">Exam Title</label>
            <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                   placeholder="Mid Term, Final, Quiz, etc." required>
        </div>

        <!-- Course -->
        <div>
            <label for="course_id" class="block text-gray-700 font-medium">Course</label>
            <select name="course_id" id="course_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                    required>
                <option value="" disabled selected>Select Course</option>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($course->id); ?>" <?php echo e(old('course_id') == $course->id ? 'selected' : ''); ?>>
                        <?php echo e($course->title); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Exam Date -->
        <div>
            <label for="exam_date" class="block text-gray-700 font-medium">Exam Date</label>
            <input type="date" name="exam_date" id="exam_date" value="<?php echo e(old('exam_date')); ?>"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                   required>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-between items-center mt-6">
            <a href="<?php echo e(route('exams.index')); ?>"
               class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Back
            </a>
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Save Exam
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/exams/create.blade.php ENDPATH**/ ?>