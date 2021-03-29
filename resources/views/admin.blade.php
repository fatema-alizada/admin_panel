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
    <link rel="stylesheet" href="/../fontAwesome/css/font-awesome.css">
    <link rel="stylesheet" href="/../fontAwesome/css/font-awesome.min.css">
    <title>Admin Panel</title>
    <style>
        body{
            padding: 0px;
            margin:0x;
        }

        #header {
            width:100%;
            height:120px;
            background: DodgerBlue;
            color:white;
        }

        #data {
            background: LightGray;
            font-family:Helvetica;
            font-size: 25px;
            
        }

        #admin_logo{
            background: white;
            border-radius: 50px;
        }
        ul li {
            padding: 20px;
            border-bottom: 2px solid grey;
        }
        ul li:hover{
            background :gray;
            color: black:
        }
    </style>
</head>
<body>
    <div id="header"> 
        <center>
            <img src="" alt="" id="admin_logo">
            <h1>Welcome To Admin Panel!</h1>
        </center>
    </div>


    <div id="data"><br>
        <center>
            <section style="padding-top:5px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" >
                                <div class="card m-5 p-3">
                                    <div class="card-heading">
                                    All Posts   <a href="/createpost" class="btn btn-primary" style="float-right">Add Post</a>
                                    </div>
                                        <div class="card-body">
                                        @if(Session::has('delete_post'))
                                            <div class="alert alert-success " roler="alert">
                                                {{ Session::get('delete_post') }}
                                            </div>
                                        @endif

                                        @if(Session::has('post_created'))
                                             <div class="alert alert-success">
                                                {{ Session::get('post_created')}}
                                             </div>
                                        @endif

                                        @if(Session::has('edit-post'))
                                            <div class="alert alert-success">
                                                {{ Session::get('edit-post')}}
                                            </div>
                                        @endif
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Delete</th>
                                                        <th>Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($posts as $post)
                                                        <tr>
                                                            <td>{{ $post->id }}</td>
                                                            <td>{{ $post->title }}</td>
                                                            <td>{{ $post->description }}</td>
                                                            <td><a href="/deletePost/{{ $post->id }}" class="fa fa-trash text-danger" ></a></td>
                                                            <td><a href="/editPost/{{ $post->id }}" class="fa fa-edit" ></a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                                
                        </div>
                    </div> 
                </div>
            </section>        
        </center> 

    </div>

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery3.3.1.js"></script>
    <script src="../bootstrap/js/jquery3.4.0.js"></script>
</body>
</html>