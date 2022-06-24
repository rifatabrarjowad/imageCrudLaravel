<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Edit Student</h1>
    <form method="post" action="{{url('adduser')}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$student->name}}" placeholder="Name"> <br><br>
        <input type="text" name="course" value="{{$student->course}}" placeholder="Course"> <br><br>
        <input type="file" name="image" value="{{$student->image}}" placeholder="Image"> <br><br>

        <image width="100" height="100" src="{{asset('uploads/student/'.$student->image)}}" /><br />
        <input type="submit" name="submit" value="Submit"> <br><br>

    </form>
</body>

</html>