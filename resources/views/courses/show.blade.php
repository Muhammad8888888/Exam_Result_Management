@extends('layouts.app')

@section('content')
    <h2>Course Details</h2>
    <p><strong>Code:</strong> {{ $course->code }}</p>
    <p><strong>Title:</strong> {{ $course->title }}</p>
    <p><strong>Credit Hours:</strong> {{ $course->credit_hours }}</p>

    <a href="{{ route('courses.edit', $course->id) }}">Edit</a> |
    <a href="{{ route('courses.index') }}">Back to List</a>
@endsection
