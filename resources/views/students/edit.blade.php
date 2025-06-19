<!-- resources/views/students/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $student->name }}"><br>
        Email: <input type="email" name="email" value="{{ $student->email }}"><br>
        Gender: <input type="text" name="gender" value="{{ $student->gender }}"><br>
        Department: <input type="text" name="department" value="{{ $student->department }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
