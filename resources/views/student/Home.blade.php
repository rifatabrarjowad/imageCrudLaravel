<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}  " />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    @if(session('status'))
    <h1>{{ session('status') }}</h1>
    @endif
    <h1>Image CRUD in Laravel</h1>



    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                    <a href="/AddStudent" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image ID</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                @php $id = 1 @endphp
                @foreach($Student as $Student)

                <tr>
                    <td>{{$id}}</td>
                    <td>{{$Student->name}}</td>
                    <td><img src="{{asset('uploads/student/'.$Student->image)}}" style="width:100px; height: 75px;"
                            alt="" /></td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href=" /editStudent/{{$Student->id}}"><span
                                class="glyphicon glyphicon-edit"></span>
                            Edit</a> <a href="/deletStudent/{{$Student->id}}" class="btn btn-danger btn-xs"><span
                                class="glyphicon glyphicon-remove"></span> Del</a>



                    </td>
                </tr>
                @php $id++ @endphp
                @endforeach

            </table>
        </div>
    </div>






</body>

</html>