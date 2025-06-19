@extends('layouts.app')

@section('content')
    <h2>Instructor Details</h2>
    <p><strong>Name:</strong> {{ $instructor->name }}</p>
    <p><strong>Email:</strong> {{ $instructor->email }}</p>
    <p><strong>Department:</strong> {{ $instructor->department }}</p>

    <a href="{{ route('instructors.index') }}">Back to List</a>
@endsection
