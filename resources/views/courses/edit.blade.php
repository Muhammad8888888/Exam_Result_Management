@extends('layouts.app')

@section('content')
    <h2>Edit Course</h2>
    <form method="POST" action="{{ route('courses.update', $course->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="code" value="{{ $course->code }}" placeholder="Course Code" required><br>
        <input type="text" name="title" value="{{ $course->title }}" placeholder="Course Title" required><br>
        <input type="number" name="credit_hours" value="{{ $course->credit_hours }}" placeholder="Credit Hours" required><br>

        <button type="submit">Update</button>
    </form>
@endsection
