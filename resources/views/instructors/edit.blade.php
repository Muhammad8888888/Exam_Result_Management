@extends('layouts.app')

@section('content')
    <h2>Edit Instructor</h2>
    <form action="{{ route('instructors.update', $instructor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $instructor->name }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $instructor->email }}" required><br>

        

        <label>Department:</label>
        <input type="text" name="department" value="{{ $instructor->department }}" required><br>

        <button type="submit">Update</button>
    </form>
@endsection
