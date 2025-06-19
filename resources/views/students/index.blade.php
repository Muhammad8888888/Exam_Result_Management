@extends('layouts.app')

@section('content')

<!-- Top Nav -->


<!-- Student Table -->
<div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-blue-700">All Students</h2>
        <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Add New Student
        </a>
    </div>

    @if($students->count() > 0)
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-100 text-gray-600 text-sm leading-normal">
                <th class="py-3 px-6 text-left">#</th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Department</th>
                <th class="py-3 px-6 text-left">Gender</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($students as $index => $student)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
                <td class="py-3 px-6 text-left">{{ $student->name }}</td>
                <td class="py-3 px-6 text-left">{{ $student->email }}</td>
                <td class="py-3 px-6 text-left">{{ $student->department }}</td>
                <td class="py-3 px-6 text-left">{{ $student->gender }}</td>
                <td class="py-3 px-6 text-center space-x-2">
                    <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs" onclick="return confirm('Delete this student?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-center text-gray-600">No students found.</p>
    @endif
</div>

@endsection
