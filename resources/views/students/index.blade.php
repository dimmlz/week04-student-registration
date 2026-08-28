<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Registered Students</title>
</head>

<body class="min-h-screen bg-slate-100">

    {{-- ============================= --}}
    {{-- NAVIGATION --}}
    {{-- ============================= --}}

    <nav class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">

            {{-- System Name --}}
            <a
                href="{{ route('students.index') }}"
                class="text-base font-bold text-slate-800 transition hover:text-blue-600 sm:text-lg"
            >
                Student Registration System
            </a>

            {{-- Navigation Button --}}
            <a
                href="{{ route('students.create') }}"
                class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 sm:px-5"
            >
                <span class="mr-1">+</span>
                <span class="hidden sm:inline">Register New Student</span>
                <span class="sm:hidden">Register</span>
            </a>

        </div>
    </nav>


    {{-- ============================= --}}
    {{-- MAIN CONTENT --}}
    {{-- ============================= --}}

    <main class="px-4 py-8 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-6xl">

            {{-- Page Header --}}
            <div class="mb-8">

                <p class="text-xs font-semibold uppercase tracking-widest text-blue-600 sm:text-sm">
                    Student Records
                </p>

                <h1 class="mt-2 text-2xl font-bold text-slate-800 sm:text-3xl">
                    Registered Students
                </h1>

                <p class="mt-2 text-sm text-slate-500">
                    View the list of students registered in the system.
                </p>

            </div>


            {{-- ============================= --}}
            {{-- SUCCESS MESSAGE --}}
            {{-- ============================= --}}

            @if (session('success'))

                <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-5 py-4">

                    <div class="flex items-start gap-3">

                        <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-100 text-sm font-bold text-green-600">
                            ✓
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-green-700">
                                {{ session('success') }}
                            </p>

                            <p class="mt-1 text-xs text-green-600">
                                Student information has been successfully registered.
                            </p>
                        </div>

                    </div>

                </div>

            @endif


            {{-- ============================= --}}
            {{-- STUDENTS EXIST --}}
            {{-- ============================= --}}

            @if ($students->count() > 0)

                {{-- Student List Header --}}
                <div class="mb-4 rounded-xl bg-white px-5 py-4 shadow-sm">

                    <div class="flex items-center justify-between gap-4">

                        <div>
                            <h2 class="font-bold text-slate-800">
                                Student List
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                {{ $students->count() }}
                                {{ $students->count() == 1 ? 'student' : 'students' }}
                                registered
                            </p>
                        </div>

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- DESKTOP TABLE --}}
                {{-- ============================= --}}

                <div class="hidden overflow-hidden rounded-2xl bg-white shadow-md md:block">

                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">

                            <thead class="border-b border-slate-200 bg-slate-50">

                                <tr>

                                    <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Student ID
                                    </th>

                                    <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Name
                                    </th>

                                    <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Email
                                    </th>

                                    <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Program
                                    </th>

                                    <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Year Level
                                    </th>

                                    <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wide text-slate-500">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">

                                @foreach ($students as $student)

                                    <tr class="transition hover:bg-slate-50">

                                        {{-- Student ID --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            <span class="font-semibold text-slate-700">
                                                {{ $student->student_id }}
                                            </span>

                                        </td>


                                        {{-- Name --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            <p class="font-semibold text-slate-700">
                                                {{ $student->first_name }}
                                                {{ $student->middle_name }}
                                                {{ $student->last_name }}
                                            </p>

                                        </td>


                                        {{-- Email --}}
                                        <td class="max-w-xs px-6 py-5">

                                            <p class="break-all text-slate-600">
                                                {{ $student->email }}
                                            </p>

                                        </td>


                                        {{-- Program --}}
                                        <td class="px-6 py-5">

                                            <p class="text-slate-600">
                                                {{ $student->program }}
                                            </p>

                                        </td>


                                        {{-- Year Level --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                                                {{ $student->year_level }}
                                            </span>

                                        </td>


                                        {{-- Action --}}
                                        <td class="whitespace-nowrap px-6 py-5 text-right">

                                            <a
                                                href="{{ route('students.show', $student->id) }}"
                                                class="inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-50 hover:text-blue-800"
                                            >
                                                View Profile
                                                <span class="ml-1">→</span>
                                            </a>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- MOBILE CARDS --}}
                {{-- ============================= --}}

                <div class="space-y-4 md:hidden">

                    @foreach ($students as $student)

                        <div class="rounded-2xl bg-white p-5 shadow-md">

                            {{-- Card Top --}}
                            <div class="flex items-start justify-between gap-3">

                                <div class="min-w-0">

                                    <p class="text-xs font-semibold uppercase tracking-wide text-blue-600">
                                        Student ID
                                    </p>

                                    <p class="mt-1 font-bold text-slate-800">
                                        {{ $student->student_id }}
                                    </p>

                                </div>

                                <span class="shrink-0 rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                                    {{ $student->year_level }}
                                </span>

                            </div>


                            {{-- Divider --}}
                            <div class="my-4 border-t border-slate-100"></div>


                            {{-- Name --}}
                            <div class="mb-4">

                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Name
                                </p>

                                <p class="mt-1 break-words font-semibold text-slate-700">
                                    {{ $student->first_name }}
                                    {{ $student->middle_name }}
                                    {{ $student->last_name }}
                                </p>

                            </div>


                            {{-- Email --}}
                            <div class="mb-4">

                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Email
                                </p>

                                <p class="mt-1 break-all text-sm text-slate-600">
                                    {{ $student->email }}
                                </p>

                            </div>


                            {{-- Program --}}
                            <div class="mb-5">

                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Program
                                </p>

                                <p class="mt-1 break-words text-sm text-slate-600">
                                    {{ $student->program }}
                                </p>

                            </div>


                            {{-- View Profile --}}
                            <a
                                href="{{ route('students.show', $student->id) }}"
                                class="flex w-full items-center justify-center rounded-lg bg-blue-50 px-4 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-100"
                            >
                                View Profile
                                <span class="ml-1">→</span>
                            </a>

                        </div>

                    @endforeach

                </div>


            {{-- ============================= --}}
            {{-- EMPTY STATE --}}
            {{-- ============================= --}}

            @else

                <div class="rounded-2xl bg-white px-6 py-14 text-center shadow-md">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-blue-50 text-2xl">
                        🎓
                    </div>

                    <h2 class="mt-5 text-xl font-bold text-slate-800">
                        No Registered Students
                    </h2>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                        There are currently no students registered in the system.
                        Start by adding a new student.
                    </p>

                    <a
                        href="{{ route('students.create') }}"
                        class="mt-6 inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 sm:w-auto"
                    >
                        + Register New Student
                    </a>

                </div>

            @endif


            {{-- ============================= --}}
            {{-- FOOTER --}}
            {{-- ============================= --}}

            <footer class="mt-8 border-t border-slate-200 pt-5 text-center">

                <p class="text-xs text-slate-400 sm:text-sm">
                    Student Registration System
                </p>

            </footer>

        </div>

    </main>

</body>
</html>