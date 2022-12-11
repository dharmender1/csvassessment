<!DOCTYPE html>
<html>
<head>
    <title>Export CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
        Export CSV
        </div>
        <div class="card-body">
            
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        All students
                        <a class="btn btn-warning float-end" href="{{ route('students.export') }}">Export</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>