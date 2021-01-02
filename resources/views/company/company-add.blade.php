<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>Add company</h3>
        </div>
        <div class="card-body">
    <form action="{{ route('company.save') }}" method="post">
        @csrf
        <tr></tr>
        <div class="form-group">
            <td><input type = "text" name= "name" class= "form-control" placeholder = "Name" /></td>
            </div>

            <div class="form-group">
            <td><input type    = "number" name= "code" class = "form-control" placeholder = "Code" /></td>
            </div>
            <div class="form-group">
            <td><input type    = "text" name= "address" class= "form-control" placeholder = "Address" /></td>
            </div>
            <div class="form-group">
            <td><input type    = "text" name= "city" class= "form-control" placeholder = "City" /></td>
            </div>
            <div class="form-group">
            <td><input type    = "text" name= "country" class= "form-control" placeholder = "Country" /></td>
            </div>
            <td><button class = "btn btn-success">Add</button></td>
        </tr>
    </form>
            </div>
</body>
</html>
