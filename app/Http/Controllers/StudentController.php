<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show paginated and searchable list
    public function index(Request $request)
    {
        $search = $request->input('search');

        $students = Student::query()
            ->when($search, function ($query) use ($search) {
                $query->where('student_number', 'like', "%{$search}%")
                      ->orWhere('firstname', 'like', "%{$search}%")
                      ->orWhere('lastname', 'like', "%{$search}%")
                      ->orWhere('course', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString();

        return view('students.index', compact('students', 'search'));
    }

    // Show create form
    public function create()
    {
        return view('students.create');
    }

    // Save new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'nullable',
            'suffixname' => 'nullable',
            'course' => 'required',
            'year_level' => 'required',
            'registration_date' => 'required|date',
            'encoder' => 'required',
            'school_semester' => 'nullable',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Show single student details
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students,student_number,' . $student->id,
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'nullable',
            'suffixname' => 'nullable',
            'course' => 'required',
            'year_level' => 'required',
            'registration_date' => 'required|date',
            'encoder' => 'required',
            'school_semester' => 'nullable',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
}
