@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow rounded-xl">
    <h2 class="text-2xl font-bold mb-6">Add New Result</h2>

    <form action="{{ route('results.store') }}" method="POST">
        @csrf

        <!-- Student Dropdown -->
        <div class="mb-4">
            <label for="student_id" class="block text-gray-700 font-semibold mb-2">Student</label>
            <select name="student_id" id="student_id" required class="w-full border border-gray-300 p-2 rounded">
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Course Dropdown -->
        <div class="mb-4">
            <label for="course_id" class="block text-gray-700 font-semibold mb-2">Course</label>
            <select name="course_id" id="course_id" required class="w-full border border-gray-300 p-2 rounded">
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
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
@endsection

