<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Student Registration</title>
</head>

<body class="min-h-screen bg-slate-100 px-4 py-6 sm:px-6 lg:px-8">

    <div class="mx-auto max-w-5xl">

        {{-- ============================= --}}
        {{-- NAVIGATION --}}
        {{-- ============================= --}}

        <nav class="mb-6 border-b border-slate-200 pb-5">

            <div class="flex items-center justify-between gap-4">

                {{-- Back to Students --}}
                <a
                    href="{{ route('students.index') }}"
                    class="text-sm font-semibold text-slate-500 transition hover:text-blue-600"
                >
                    ← <span class="hidden sm:inline">Student List</span>
                    <span class="sm:hidden">Back</span>
                </a>

            </div>

        </nav>


        {{-- ============================= --}}
        {{-- PAGE HEADER --}}
        {{-- ============================= --}}

        <div class="mb-6 text-center sm:mb-8">

            <p class="text-xs font-semibold uppercase tracking-widest text-blue-600 sm:text-sm">
                Student Registration
            </p>

            <h1 class="mt-2 text-2xl font-bold text-slate-800 sm:text-3xl">
                Student Registration System
            </h1>

            <p class="mx-auto mt-2 max-w-xl text-sm text-slate-500">
                Register a new student by completing the form below.
            </p>

        </div>


        {{-- ============================= --}}
        {{-- SUCCESS MESSAGE --}}
        {{-- ============================= --}}

        @if (session('success'))

            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-green-700">

                <p class="text-sm font-semibold">
                    {{ session('success') }}
                </p>

            </div>

        @endif


        {{-- ============================= --}}
        {{-- VALIDATION ERRORS --}}
        {{-- ============================= --}}

        @if ($errors->any())

            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4 text-red-700">

                <p class="text-sm font-semibold">
                    Please correct the following errors:
                </p>

                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- ============================= --}}
        {{-- REGISTRATION CARD --}}
        {{-- ============================= --}}

        <div class="rounded-2xl bg-white p-5 shadow-md sm:p-8">

            <div class="mb-6 border-b border-slate-200 pb-5">

                <h2 class="text-xl font-bold text-slate-800">
                    Student Information
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Please provide the student's complete information.
                </p>

            </div>


            <form
                action="{{ route('students.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="space-y-5"
            >

                @csrf


                {{-- ============================= --}}
                {{-- STUDENT ID --}}
                {{-- ============================= --}}

                <div>

                    <label
                        for="student_id"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Student ID
                    </label>

                    <input
                        type="text"
                        id="student_id"
                        name="student_id"
                        value="{{ old('student_id') }}"
                        placeholder="e.g. 0124-1125"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >

                </div>


                {{-- ============================= --}}
                {{-- NAME --}}
                {{-- ============================= --}}

                <div class="grid gap-5 md:grid-cols-3">

                    <div>

                        <label
                            for="first_name"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            First Name
                        </label>

                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            placeholder="Juan"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>


                    <div>

                        <label
                            for="middle_name"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Middle Name
                        </label>

                        <input
                            type="text"
                            id="middle_name"
                            name="middle_name"
                            value="{{ old('middle_name') }}"
                            placeholder="Castro"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>


                    <div>

                        <label
                            for="last_name"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Last Name
                        </label>

                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            placeholder="Delacruz"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- CONTACT INFORMATION --}}
                {{-- ============================= --}}

                <div class="grid gap-5 md:grid-cols-2">

                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="student@example.com"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>


                    <div>

                        <label
                            for="mobile_number"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Mobile Number
                        </label>

                        <input
                            type="text"
                            id="mobile_number"
                            name="mobile_number"
                            value="{{ old('mobile_number') }}"
                            placeholder="09XXXXXXXXX"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- PERSONAL INFORMATION --}}
                {{-- ============================= --}}

                <div class="grid gap-5 md:grid-cols-2">

                    <div>

                        <label
                            for="date_of_birth"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Date of Birth
                        </label>

                        <input
                            type="date"
                            id="date_of_birth"
                            name="date_of_birth"
                            value="{{ old('date_of_birth') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>


                    <div>

                        <label
                            for="gender"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Gender
                        </label>

                        <select
                            id="gender"
                            name="gender"
                            class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                            <option value="">
                                Select Gender
                            </option>

                            <option
                                value="Male"
                                {{ old('gender') == 'Male' ? 'selected' : '' }}
                            >
                                Male
                            </option>

                            <option
                                value="Female"
                                {{ old('gender') == 'Female' ? 'selected' : '' }}
                            >
                                Female
                            </option>

                            <option
                                value="Other"
                                {{ old('gender') == 'Other' ? 'selected' : '' }}
                            >
                                Other
                            </option>

                        </select>

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- ACADEMIC INFORMATION --}}
                {{-- ============================= --}}

                <div class="grid gap-5 md:grid-cols-2">

                    <div>

                        <label
                            for="program"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Program
                        </label>

                        <input
                            type="text"
                            id="program"
                            name="program"
                            value="{{ old('program') }}"
                            placeholder="e.g. BS Information Technology"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                    </div>


                    <div>

                        <label
                            for="year_level"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Year Level
                        </label>

                        <select
                            id="year_level"
                            name="year_level"
                            class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                        >

                            <option value="">
                                Select Year Level
                            </option>

                            <option
                                value="1st Year"
                                {{ old('year_level') == '1st Year' ? 'selected' : '' }}
                            >
                                1st Year
                            </option>

                            <option
                                value="2nd Year"
                                {{ old('year_level') == '2nd Year' ? 'selected' : '' }}
                            >
                                2nd Year
                            </option>

                            <option
                                value="3rd Year"
                                {{ old('year_level') == '3rd Year' ? 'selected' : '' }}
                            >
                                3rd Year
                            </option>

                            <option
                                value="4th Year"
                                {{ old('year_level') == '4th Year' ? 'selected' : '' }}
                            >
                                4th Year
                            </option>

                        </select>

                    </div>

                </div>


                {{-- ============================= --}}
                {{-- ADDRESS --}}
                {{-- ============================= --}}

                <div>

                    <label
                        for="address"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Address
                    </label>

                    <textarea
                        id="address"
                        name="address"
                        rows="2"
                        placeholder="Enter complete address"
                        class="w-full resize-none rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >{{ old('address') }}</textarea>

                </div>


              {{-- Profile Picture --}}
<div>
    <label
        for="profile_picture"
        class="mb-2 block text-sm font-semibold text-slate-700"
    >
        Profile Picture
    </label>

    <label
        for="profile_picture"
        class="group flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-slate-300 bg-slate-50 px-6 py-8 text-center transition hover:border-blue-400 hover:bg-blue-50"
    >

        {{-- Upload Icon --}}
        <div
            class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-100 text-blue-600 transition group-hover:bg-blue-200"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.8"
                stroke="currentColor"
                class="h-7 w-7"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 16.5V3.75m0 0L7.5 8.25M12 3.75l4.5 4.5M6.75 13.5v4.125A2.625 2.625 0 0 0 9.375 20.25h5.25a2.625 2.625 0 0 0 2.625-2.625V13.5"
                />
            </svg>
        </div>

        {{-- Upload Text --}}
        <p class="mt-4 text-sm font-semibold text-slate-700">
            Click to upload profile photo
        </p>

        <p class="mt-1 text-xs text-slate-500">
            JPG, JPEG, or PNG
        </p>

        <p class="mt-1 text-xs text-slate-400">
            Maximum file size: 2MB
        </p>

        {{-- Actual File Input --}}
        <input
            type="file"
            id="profile_picture"
            name="profile_picture"
            accept=".jpg,.jpeg,.png"
            class="hidden"
        >

    </label>
</div>


                {{-- ============================= --}}
                {{-- SUBMIT --}}
                {{-- ============================= --}}

                <div class="border-t border-slate-200 pt-5">

                    <button
                        type="submit"
                        class="w-full rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2"
                    >
                        Register Student
                    </button>

                </div>

            </form>

        </div>


        {{-- Footer --}}
        <footer class="py-6 text-center">

            <p class="text-xs text-slate-400 sm:text-sm">
                Student Registration System
            </p>

        </footer>

    </div>

</body>
</html>