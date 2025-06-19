<!-- resources/views/students/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
</head>
<body>
    <h1>Student Details</h1>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Gender: {{ $student->gender }}</p>
    
    <p>Department: {{ $student->department }}</p>
    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>
