@extends('layout')

@section('content')
    <h2>Edit Result</h2>
    <form action="{{ route('results.update', $result->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Student:</label>
        <select name="student_id">
            @foreach($students as $student)
                <option value="{{ $student->id }}" {{ $student->id == $result->student_id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>

        <label>Exam:</label>
        <select name="exam_id">
            @foreach($exams as $exam)
                <option value="{{ $exam->id }}" {{ $exam->id == $result->exam_id ? 'selected' : '' }}>
                    {{ $exam->title }}
                </option>
            @endforeach
        </select>

        <label>Marks:</label>
        <input type="number" name="marks" value="{{ $result->marks }}">

        <button type="submit">Update</button>
    </form>
@endsection
