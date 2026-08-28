<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>
</head>

<body>

    <h1>Student Registration System</h1>

    <p>Register a new student by completing the form below.</p>

    {{-- Success Message --}}
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div>
            <strong>Please correct the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <h2>Student Information</h2>

        {{-- Student ID --}}
        <div>
            <label for="student_id">Student ID</label>
            <input
                type="text"
                id="student_id"
                name="student_id"
                value="{{ old('student_id') }}"
            >
        </div>

        {{-- First Name --}}
        <div>
            <label for="first_name">First Name</label>
            <input
                type="text"
                id="first_name"
                name="first_name"
                value="{{ old('first_name') }}"
            >
        </div>

        {{-- Middle Name --}}
        <div>
            <label for="middle_name">Middle Name</label>
            <input
                type="text"
                id="middle_name"
                name="middle_name"
                value="{{ old('middle_name') }}"
            >
        </div>

        {{-- Last Name --}}
        <div>
            <label for="last_name">Last Name</label>
            <input
                type="text"
                id="last_name"
                name="last_name"
                value="{{ old('last_name') }}"
            >
        </div>

        {{-- Email --}}
        <div>
            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >
        </div>

        {{-- Mobile Number --}}
        <div>
            <label for="mobile_number">Mobile Number</label>
            <input
                type="text"
                id="mobile_number"
                name="mobile_number"
                value="{{ old('mobile_number') }}"
            >
        </div>

        {{-- Date of Birth --}}
        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
            >
        </div>

        {{-- Gender --}}
        <div>
            <label for="gender">Gender</label>

            <select id="gender" name="gender">
                <option value="">Select Gender</option>

                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                    Male
                </option>

                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                    Female
                </option>

                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>
                    Other
                </option>
            </select>
        </div>

        {{-- Program --}}
        <div>
            <label for="program">Program</label>

            <input
                type="text"
                id="program"
                name="program"
                value="{{ old('program') }}"
                placeholder="e.g. BS Information Technology"
            >
        </div>

        {{-- Year Level --}}
        <div>
            <label for="year_level">Year Level</label>

            <select id="year_level" name="year_level">
                <option value="">Select Year Level</option>

                <option value="1st Year" {{ old('year_level') == '1st Year' ? 'selected' : '' }}>
                    1st Year
                </option>

                <option value="2nd Year" {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>
                    2nd Year
                </option>

                <option value="3rd Year" {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>
                    3rd Year
                </option>

                <option value="4th Year" {{ old('year_level') == '4th Year' ? 'selected' : '' }}>
                    4th Year
                </option>
            </select>
        </div>

        {{-- Address --}}
        <div>
            <label for="address">Address</label>

            <textarea
                id="address"
                name="address"
                rows="4"
            >{{ old('address') }}</textarea>
        </div>

        {{-- Profile Picture --}}
        <div>
            <label for="profile_picture">Profile Picture</label>

            <input
                type="file"
                id="profile_picture"
                name="profile_picture"
                accept=".jpg,.jpeg,.png"
            >

            <small>
                JPG, JPEG, or PNG. Maximum file size: 2MB.
            </small>
        </div>

        <br>

        <button type="submit">
            Register Student
        </button>

    </form>

</body>
</html>