<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>add students</h1>
    <form method="post" action="{{url('add-student')}}" enctype="multipart/form-data">

        <input type="text" name="name" placeholder="Name"> <br><br>
        <input type="text" name="course" placeholder="Course"> <br><br>
        <input type="file" name="image" placeholder="Image"> <br><br>
        <input type="submit" name="submit" value="Submit"> <br><br>

    </form>
</body>

</html>