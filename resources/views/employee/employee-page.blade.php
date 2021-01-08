<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All employees</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>


</head>

<body>
<a href="/">Home</a><br>
<a href="employee/create" method="post">Add</a>
<div class="card">
    <div class="card-header">
        <h3>Employees</h3>
    </div>
    <div class="card-body">
        <table class='table' id = 'employee-table'>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Personal id</th>
                <th>Salary</th>
                <th>Works In</th>
                <th>Updated at</th>
            </thead>
            @if($joined)
            @foreach($company as $emp)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->lastname}}</td>
                <td>{{$emp->birthdate}}</td>
                <td>{{$emp->personal_id}}</td>
                <td>{{$emp->salary}}</td>
                <td>{{ $emp->company_name }}</td>
                <td>{{$emp->updated_at}}</td>
                <td><button onclick="deleteEmployee(event)"
                            data-deleteurl="{{ route('employee.destroy', ['employee' => $emp->id]) }}"
                            class="btn btn-danger">Delete</button></td>

                <td><a href = "{{ route('employee.edit',['id'=>$emp->id])}}">Edit</a></td>
            </tr>

            @endforeach
            @else
            @foreach($_EMPLOYEES as $emp)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->lastname}}</td>
                <td>{{$emp->birthdate}}</td>
                <td>{{$emp->personal_id}}</td>
                <td>{{$emp->salary}}</td>
                @if(isset($emp->company))
                    <td>{{ $emp->company->name }}</td>

                @else
                    <td>Trainee</td>
                @endisset

                <td>{{$emp->updated_at}}</td>
                <td><button onclick="deleteEmployee(event)"
                            data-deleteurl="{{ route('employee.destroy', ['employee' => $emp->id]) }}"
                            class="btn btn-danger">Delete</button></td>

                <td><a href = "{{ route('employee.edit',['id'=>$emp->id])}}">Edit</a></td>
            </tr>

            @endforeach
            @endif
        </table>
    </div>
</div>
</body>

@include('scripts')
</html>
