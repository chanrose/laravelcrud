<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <style>
        .container {
            margin-top: 25vh;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
{{--
    <h1>All Posts: </h1>
    @foreach ($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
    @endforeach
--}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            All Posts
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Body</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->body}}</td>
                                            <td>
                                                <a href="./posts/{{$post->id}}" class="btn btn-success">View</a>
                                                <a href="./edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                                <a href="./delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div>
                        <h5>Chanbroset Prach, 201800157</h5>
                        <h5>Cited: https://www.youtube.com/watch?v=-QsjnWW3K_g </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>

</section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>