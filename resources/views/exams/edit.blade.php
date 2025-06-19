<form action="{{ route('exams.update', $exam->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $exam->title }}" required>
    <input type="date" name="exam_date" value="{{ $exam->exam_date }}" required>
    <select name="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}" {{ $exam->course_id == $course->id ? 'selected' : '' }}>{{ $course->title }}</option>
        @endforeach
    </select>
    <button type="submit">Update</button>
</form>
