<x-app-layout>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block font-medium">Student Number</label>
                <input type="text" name="student_number" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">First Name</label>
                <input type="text" name="firstname" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Last Name</label>
                <input type="text" name="lastname" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Middle Name</label>
                <input type="text" name="middlename" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Suffix</label>
                <input type="text" name="suffixname" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Year Level</label>
                <input type="text" name="year_level" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block font-medium">School Semester</label>
                <input type="text" name="school_semester" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Course</label>
                <input type="text" name="course" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Registration Date</label>
                <input type="date" name="registration_date" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block font-medium">Encoder</label>
                <input type="text" name="encoder" class="w-full border rounded p-2" required>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" style="color: black">
                Save Student
            </button>
            <a href="{{ route('students.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</x-app-layout>
