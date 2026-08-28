<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>
</head>

<body>

    <h1>Student Registration Successful!</h1>

    @if (session('success'))
        <p>
            {{ session('success') }}
        </p>
    @endif

    <h2>Student Profile</h2>

    {{-- Profile Picture --}}
    @if ($student->profile_picture)
        <div>
            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Student Profile Picture"
                width="200"
            >
        </div>
    @endif

    <h3>Student Information</h3>

    <p>
        <strong>Student ID:</strong>
        {{ $student->student_id }}
    </p>

    <p>
        <strong>First Name:</strong>
        {{ $student->first_name }}
    </p>

    <p>
        <strong>Middle Name:</strong>
        {{ $student->middle_name ?? 'N/A' }}
    </p>

    <p>
        <strong>Last Name:</strong>
        {{ $student->last_name }}
    </p>

    <p>
        <strong>Email Address:</strong>
        {{ $student->email }}
    </p>

    <p>
        <strong>Mobile Number:</strong>
        {{ $student->mobile_number }}
    </p>

    <p>
        <strong>Date of Birth:</strong>
        {{ $student->date_of_birth }}
    </p>

    <p>
        <strong>Gender:</strong>
        {{ $student->gender }}
    </p>

    <p>
        <strong>Program:</strong>
        {{ $student->program }}
    </p>

    <p>
        <strong>Year Level:</strong>
        {{ $student->year_level }}
    </p>

    <p>
        <strong>Address:</strong>
        {{ $student->address }}
    </p>

    <br>

    <a href="{{ route('students.create') }}">
        Register Another Student
    </a>

</body>
</html>