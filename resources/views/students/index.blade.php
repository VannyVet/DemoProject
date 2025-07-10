<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

        {{-- 🔍 Search Box --}}
        <form method="GET" action="{{ route('students.index') }}" class="mb-4">
            <input type="text" name="search" value="{{ request('search') }}" class="border rounded px-4 py-2"
                placeholder="Search students...">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded ml-2">Search</button>
        </form>

      <a href="{{ route('students.create') }}"
   class="mb-4 inline-block bg-black text-white px-4 py-2 rounded hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-black" style="color: black">
   Create New Student
</a>

        <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Student Number</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Course</th>
                    <th class="px-4 py-2">Year</th>
                    <th class="px-4 py-2">Registered</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $key => $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-2">{{ $students->firstItem() + $key }}</td>
                        <td class="px-4 py-2">{{ $student->student_number }}</td>
                        <td class="px-4 py-2">{{ $student->firstname }} {{ $student->lastname }}</td>
                        <td class="px-4 py-2">{{ $student->course }}</td>
                        <td class="px-4 py-2">{{ $student->year_level }}</td>
                        <td class="px-4 py-2">{{ $student->registration_date->format('Y-m-d') }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('students.show', $student) }}"
                                class="text-blue-500 hover:underline">View</a> |
                            <a href="{{ route('students.edit', $student) }}"
                                class="text-yellow-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-2 text-center">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $students->links() }}
        </div>
    </div>
</x-app-layout>
