<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Student Profile</title>
</head>

<body class="min-h-screen bg-slate-100 px-4 py-6 sm:px-6 lg:px-8">

    <div class="mx-auto max-w-5xl">

        {{-- Navigation --}}
        <nav class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <a
                href="{{ route('students.index') }}"
                class="text-lg font-bold text-slate-800 transition hover:text-blue-600"
            >
                Student Registration System
            </a>

            <a
                href="{{ route('students.create') }}"
                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 sm:w-auto"
            >
                + Register New Student
            </a>

        </nav>


        {{-- Success Message --}}
        @if (session('success'))

            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-5 py-4 text-green-700">

                <div class="flex items-start gap-3">

                    <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-green-100 font-bold">
                        ✓
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            {{ session('success') }}
                        </p>

                        <p class="mt-1 text-xs text-green-600">
                            Student information has been successfully registered.
                        </p>
                    </div>

                </div>

            </div>

        @endif


        {{-- Page Header --}}
        <div class="mb-6">

            <p class="text-xs font-semibold uppercase tracking-widest text-blue-600 sm:text-sm">
                Student Record
            </p>

            <h1 class="mt-2 text-2xl font-bold text-slate-800 sm:text-3xl">
                Student Profile
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                View the complete information of the registered student.
            </p>

        </div>


        {{-- Profile Card --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-lg">

            {{-- Card Header --}}
            <div class="border-b border-slate-200 bg-slate-50 px-5 py-5 sm:px-8">

                <h2 class="font-bold text-slate-800">
                    Student Information
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Registered student details
                </p>

            </div>


            {{-- Main Content --}}
            <div class="p-5 sm:p-8">

                <div class="grid gap-8 lg:grid-cols-[220px_1fr]">

                    {{-- Profile Picture --}}
                    <div class="flex flex-col items-center">

                        @if ($student->profile_picture)

                            <img
                                src="{{ asset('storage/' . $student->profile_picture) }}"
                                alt="Student Profile Picture"
                                class="h-44 w-44 rounded-2xl object-cover shadow-md ring-4 ring-slate-100 sm:h-48 sm:w-48"
                            >

                        @else

                            <div class="flex h-44 w-44 items-center justify-center rounded-2xl bg-slate-100 text-slate-400 sm:h-48 sm:w-48">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-20 w-20"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 0 1 15 0"
                                    />
                                </svg>

                            </div>

                        @endif

                        <p class="mt-3 text-xs text-slate-400">
                            Profile Picture
                        </p>

                    </div>


                    {{-- Student Details --}}
                    <div class="min-w-0">

                        {{-- Name --}}
                        <div class="mb-6">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Full Name
                            </p>

                            <h3 class="mt-1 break-words text-xl font-bold text-slate-800 sm:text-2xl">
                                {{ $student->first_name }}
                                {{ $student->middle_name }}
                                {{ $student->last_name }}
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Student ID: {{ $student->student_id }}
                            </p>

                        </div>


                        {{-- Information Grid --}}
                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Email --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Email Address
                                </p>

                                <p class="mt-1 break-all text-sm font-medium text-slate-700">
                                    {{ $student->email }}
                                </p>
                            </div>


                            {{-- Mobile --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Mobile Number
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-700">
                                    {{ $student->mobile_number }}
                                </p>
                            </div>


                            {{-- Date of Birth --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Date of Birth
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-700">
                                    {{ $student->date_of_birth }}
                                </p>
                            </div>


                            {{-- Gender --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Gender
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-700">
                                    {{ $student->gender }}
                                </p>
                            </div>


                            {{-- Program --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Program
                                </p>

                                <p class="mt-1 break-words text-sm font-medium text-slate-700">
                                    {{ $student->program }}
                                </p>
                            </div>


                            {{-- Year Level --}}
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Year Level
                                </p>

                                <span class="mt-1 inline-flex rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                                    {{ $student->year_level }}
                                </span>
                            </div>

                        </div>


                        {{-- Address --}}
                        <div class="mt-5 border-t border-slate-100 pt-5">

                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                Address
                            </p>

                            <p class="mt-1 break-words text-sm leading-6 text-slate-700">
                                {{ $student->address }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Actions --}}
            <div class="flex flex-col gap-3 border-t border-slate-200 bg-slate-50 px-5 py-5 sm:flex-row sm:justify-end sm:px-8">

                <a
                    href="{{ route('students.index') }}"
                    class="inline-flex w-full items-center justify-center rounded-lg border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 sm:w-auto"
                >
                    ← Back to Student List
                </a>

                <a
                    href="{{ route('students.create') }}"
                    class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 sm:w-auto"
                >
                    + Register Another Student
                </a>

            </div>

        </div>


        {{-- Footer --}}
        <footer class="mt-8 border-t border-slate-200 pt-5 text-center">

            <p class="text-xs text-slate-400 sm:text-sm">
                Student Registration System
            </p>

        </footer>

    </div>

</body>
</html>