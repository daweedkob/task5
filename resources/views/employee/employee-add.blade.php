<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>Add employee</h3>
        </div>
        <div class="card-body">
    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        <tr></tr>
        <div class="form-group">
        <td><input type = "text" name= "name" class= "form-control" placeholder = "Name" /></td>
        </div>

            <div class="form-group">
            <td><input type    = "text" name= "lastname" class = "form-control" placeholder = "Lastname" /></td>
            </div>

            <div class="form-group">
            <td><input type    = "date" name= "birthdate" class= "form-control" placeholder = "Birthdate" /></td>
            </div>

            <div class="form-group">
            <td><input type    = "number" name= "personal_id" class= "form-control" placeholder = "Personal id" /></td>
            </div>

            <div class="form-group">
            <td><input type    = "number" name= "salary" class= "form-control" placeholder = "Salary" /></td>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <select name="company_id" class="form-control @error('company') is-invalid @enderror" required>
                        <option>Select Company(optional)</option>
                        @foreach($_COMPANIES as $comp)
                            <option @if(isset($comp->id))
                                @endif value="{{ $comp -> id }}">{{ $comp -> name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <td><button class = "btn btn-success">Add</button></td>
        </tr>
    </form>
            </div>
</body>
</html>
