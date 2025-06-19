<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

  
public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email',
        'department' => 'required',
        'gender' => 'required',
    ]);

    // Create new student
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'department' => $request->department,
        'gender' => $request->gender,
    ]);

    // ✅ Redirect to student list with success message
    return redirect()->route('students.index')->with('success', 'Student added successfully!');
}





    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect()->route('students.index');
    }
}
