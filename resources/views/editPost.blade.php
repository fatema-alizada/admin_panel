<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/../bootstrap/css/bootstrap-grid.min.css">
    <title>Add New Post</title>
</head>
<body>
    <section style="padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Update Post
                        </div>
                        <div class="card-body">
                         <form method="POST" action="/editPost/{{$post->id}}" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="id" vlaue="{{ $post->id }}">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $post->title  }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Post Description</label>
                                <textarea name="description"  class="form-control" cols="" rows="3">{{ $post->description }}</textarea>
                            </div>
                            <button class="btn btn-success">Edit Post</button>
                            <a href="/" class="btn btn-primary">Go To Posts</a>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery3.3.1.js"></script>
    <script src="../bootstrap/js/jquery3.4.0.js"></script>
</body>
</html>