<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3>Edit Company</h3>
        </div>

    <form action='{{ route('company.update') }}' method="post">
        @csrf
        <input type="hidden" name="company_id" value = "{{ $company->id }}" >

        <div class="card-body">
            <div class="form-group">
                <h2>ID  {{ $company->id }}</h2>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{ $company->name }}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input class="form-control" type="text" name="address" placeholder="Enter address" value="{{ $company->address }}">
            </div>

            <div class="form-group">
                <label>City</label>
                <input class="form-control" type="text" name="city" placeholder="Enter city" value="{{ $company->city }}">
            </div>

            <div class="form-group">
                <label>Country</label>
                <input class="form-control" type="text" name="country" placeholder="Enter country" value="{{ $company->country }}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
</body>
</html>
