<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$post -> title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css" />
    <script src="js/app.js"></script>
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">Home</a>
        </nav>

        <h2>Post<h2>
        
        <div class="card">
        
            <div class="card-body">

                <h4 class="card-title">{{ $post -> title }}</h4>
                <p class="card-text" >{{ $post -> body }}</p>

            </div>
            <div class="card-footer">
            <a class="btn btn-primary" href="/">Return</a>
            </div>
        </div>
    </div>
</body>
</html>