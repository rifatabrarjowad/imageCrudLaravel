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
</body>

</html>