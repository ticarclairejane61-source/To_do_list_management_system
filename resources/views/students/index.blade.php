<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} , {{ $student->student_id }}</li>
        @endforeach
    </ul>
</body>
</html>