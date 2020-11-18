<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB CRUD Operation</title>
    <style>
        .container {
            margin-top: 25vh;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Post Details
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_updated'))
                            <div class="alert alert-info" role="alert">
                                {{Session::get('post_updated')}}
                            </div>
                        @endif

                        <form method="POST" action="{{route('post.update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}" />
                            <div class="form-group">
                                <label for="title">Post Title: </label>
                                <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter Post Title" />
                            </div>
                            <div class="form-group">
                                <label for="body">Post Description: </label>
                                <textarea class="form-control" name="body" rows="3" >{{$post->body}}</textarea>
                            </div>
                            <a href="../posts" class="btn btn-info"> Back </a>
                            <input type="submit" class="btn btn-success" value="Update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>