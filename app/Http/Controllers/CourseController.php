<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'code' => 'required|string|max:50|unique:courses,code',
        'credit_hours' => 'required|integer|min:1',
    ]);

    Course::create($validated);
    return redirect()->route('courses.index')->with('success', 'Course added successfully!');
}

}
