<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Exam and Result Management System</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Exam & Result Management</h1>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <?php echo e($slot); ?>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\exam_result_system\resources\views/layouts/guest.blade.php ENDPATH**/ ?>