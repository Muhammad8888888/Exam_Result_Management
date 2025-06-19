<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam and Result Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r gap-5 from-blue-100 to-indigo-200 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-6 bg-white shadow">
        <h1 class="text-2xl font-bold text-gray-700">Exam & Result Management</h1>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Sign In</a>
            <a href="{{ route('register') }}" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 transition">Sign Up</a>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow flex flex-col items-center justify-center text-center px-4 mt-16">
        <div>
            <h2 class="text-5xl font-extrabold text-gray-800 mb-4">Welcome to the</h2>
            <h3 class="text-4xl font-semibold text-blue-700 mb-4">Exam & Result Management System</h3>
            <p class="text-lg text-gray-600 mb-8">Easily manage students, courses, exams, and results all in one place.</p>

            {{-- Hero Image --}}
            <img src="{{ asset('images/hero.jpg') }}" alt="Exam System" class="mx-auto mb-8 rounded shadow-lg w-full max-w-xl">

            <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white text-lg rounded shadow hover:bg-blue-700 transition">
                Get Started
            </a>
        </div>

        <!-- Feature Sections -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20 text-left">

            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/student.jpg') }}" alt="Student" class="w-24 h-24 mx-auto mb-4">
                <h4 class="text-xl font-semibold text-blue-600 mb-2">Student Management</h4>
                <p class="text-gray-600 text-sm">Add, edit, and view student records with ease. Keep all student data well organized.</p>
            </div>

            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/exam.jpg') }}" alt="Exam" class="w-24 h-24 mx-auto mb-4">
                <h4 class="text-xl font-semibold text-blue-600 mb-2">Exam Scheduling</h4>
                <p class="text-gray-600 text-sm">Create exams, assign them to courses, and manage exam schedules effortlessly.</p>
            </div>

            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('images/result.jpg') }}" alt="Result" class="w-24 h-24 mx-auto mb-4">
                <h4 class="text-xl font-semibold text-blue-600 mb-2">Result Publishing</h4>
                <p class="text-gray-600 text-sm">Record and publish exam results securely, accessible to students and admins.</p>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center p-4 bg-white mt-auto shadow text-sm text-gray-500">
        &copy; {{ date('Y') }} Exam and Result Management System. All rights reserved.
    </footer>

</body>
</html>
