<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app2.css')}}  " />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    @if(session('status'))
    <h1>{{ session('status') }}</h1>
    @endif
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Add New</h1>
                        <form style="background-color:white !important" role="form" method="post"
                            action="{{url('adduser')}}" enctype="multipart/form-data" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="text" class="sr-only">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name">

                            </div>
                            <div class="form-group">
                                <label for="text" class="sr-only">Details</label>
                                <input type="text" name="course" class="form-control" placeholder="Details">
                            </div>
                            <div class="form-group">
                                <label for="text" class="sr-only">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Image">
                            </div>

                            <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block"
                                value="Submit">
                        </form>

                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


</body>

</html>