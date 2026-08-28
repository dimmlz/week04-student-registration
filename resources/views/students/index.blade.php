<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>
</head>

<body>

    <h1>Registered Students</h1>

    <p>
        <a href="{{ route('students.create') }}">
            Register New Student
        </a>
    </p>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if ($students->count() > 0)

        <table border="1" cellpadding="10" cellspacing="0">

            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Program</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($students as $student)

                    <tr>

                        <td>
                            {{ $student->student_id }}
                        </td>

                        <td>
                            {{ $student->first_name }}
                            {{ $student->middle_name }}
                            {{ $student->last_name }}
                        </td>

                        <td>
                            {{ $student->email }}
                        </td>

                        <td>
                            {{ $student->program }}
                        </td>

                        <td>
                            {{ $student->year_level }}
                        </td>

                        <td>
                            <a href="{{ route('students.show', $student->id) }}">
                                View Profile
                            </a>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>No registered students yet.</p>

    @endif

</body>
</html>