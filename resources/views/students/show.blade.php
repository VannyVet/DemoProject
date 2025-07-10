<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            Student Detail
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
            <p><strong>Student Number:</strong> {{ $student->student_number }}</p>
            <p><strong>Name:</strong> {{ $student->firstname }} {{ $student->middlename }} {{ $student->lastname }} {{ $student->suffixname }}</p>
            <p><strong>Course:</strong> {{ $student->course }}</p>
            <p><strong>Year Level:</strong> {{ $student->year_level }}</p>
            <p><strong>Registration Date:</strong> {{ $student->registration_date->format('Y-m-d') }}</p>
            <p><strong>Encoder:</strong> {{ $student->encoder }}</p>

            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="text-blue-600 hover:underline">← Back to List</a>
            </div>
        </div>
    </div>
</x-app-layout>
