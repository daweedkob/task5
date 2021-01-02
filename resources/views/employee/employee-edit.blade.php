<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>Edit employee</h3>
        </div>

        <form method="POST" action="{{ route('employee.update',['id' => $employee->id]) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT"/>
        <div class="card-body">
            <div class="form-group">
                <h2>ID  {{ $employee->id }}</h2>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{ $employee->name }}">
            </div>

            <div class="form-group">
                <label>Lastname</label>
                <input class="form-control" type="text" name="lastname" placeholder="Enter Lastname" value="{{ $employee->lastname }}">
            </div>

            <div class="form-group">
                <label>Birthdate</label>
                <input class="form-control" type="date" name="birthdate" placeholder="Enter Birthdate" value="{{ $employee->birthdate }}">
            </div>

            <div class="form-group">
                <label>Personal id</label>
                <input class="form-control" type="number" name="personal_id" placeholder="Enter Personal ID" value="{{ $employee->personal_id }}">
            </div>

            <div class="form-group">
                <label>Company ID</label>
                <input class="form-control" type="number" name="company_id" placeholder="Enter Company ID" value="{{ $employee->company_id }}">
            </div>

            <div class="form-group">
                <label>Salary</label>
                <input class="form-control" type="number" name="salary" placeholder="Enter Salary" value="{{ $employee->salary }}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
</body>
</html>
