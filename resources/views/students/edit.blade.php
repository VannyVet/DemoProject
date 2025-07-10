<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            Edit Student
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <form method="POST" action="{{ route('students.update', $student) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Student Number</label>
                <input type="text" name="student_number" value="{{ $student->student_number }}"
                    class="w-full border rounded p-2" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label>First Name</label>
                    <input type="text" name="firstname" value="{{ $student->firstname }}"
                        class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Last Name</label>
                    <input type="text" name="lastname" value="{{ $student->lastname }}"
                        class="w-full border rounded p-2" required>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4">
                <div>
                    <label>Middle Name</label>
                    <input type="text" name="middlename" value="{{ $student->middlename }}"
                        class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Suffix</label>
                    <input type="text" name="suffixname" value="{{ $student->suffixname }}"
                        class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Year Level</label>
                    <input type="text" name="year_level" value="{{ $student->year_level }}"
                        class="w-full border rounded p-2" required>
                </div>
            </div>
            <div class="mt-4">
                <label>School Semester</label>
                <input type="text" name="school_semester" value="{{ $student->school_semester }}"
                    class="w-full border rounded p-2" required>
            </div>
            <div class="mt-4">
                <label>Course</label>
                <input type="text" name="course" value="{{ $student->course }}" class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mt-4">
                <label>Registration Date</label>
                <input type="date" name="registration_date"
                    value="{{ $student->registration_date->format('Y-m-d') }}" class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mt-4">
                <label>Encoder</label>
                <input type="text" name="encoder" value="{{ $student->encoder }}" class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mt-6">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded" style="color: black">Update Student</button>
                <a href="{{ route('students.index') }}" class="ml-4 text-gray-600">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
