<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if(session('status'))
    <h1>{{ session('status') }}</h1>
    @endif
    <h1>Welcome</h1>
    <a href="/AddStudent">Create</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>



        <tbody>
            @foreach($Student as $Student)
            <tr>
                <td>{{$Student->name}}</td>
                <td>{{$Student->course}}</td>
                <td><img src="{{asset('uploads/student/'.$Student->image)}}" style="width:200px; height: 150px;" alt="">
                </td>

                <td><a href=" /editStudent/{{$Student->id}}">Edit</a> | <a href="/delete/{{$Student->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>