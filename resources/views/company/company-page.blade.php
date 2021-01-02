<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All companies</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
    <a href="/">Home</a><br>
    <a href="/company/add">Add</a>
    <div class="card">
        <div class="card-header">
            <h3>Companies</h3>
        </div>
        <table class='table'>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Created at</th>
                <th>Updated at</th>
            </thead>
            @foreach($_COMPANIES as $com)
            <tr>
                <td>{{$com->id}}</td>
                <td>{{$com->name}}</td>
                <td>{{$com->code}}</td>
                <td>{{$com->address}}</td>
                <td>{{$com->city}}</td>
                <td>{{$com->country}}</td>
                <td>{{$com->created_at}}</td>
                <td>{{$com->updated_at}}</td>
                <form action="{{ route('company.delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="company_id" value="{{ $com->id }}">
                    <td><button class="btn btn-danger">Delete</button></td>
                </form>
                <td><a href = "{{ route('company.edit',['id'=>$com->id])}}">Edit</a></td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>
