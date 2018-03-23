<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css" />
    <script src="js/app.js"></script>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">Home</a>
    </nav>

    <h2>Posts<h2>
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-body">
            <a href="/posts/{{ $post -> id }}">
                {{ $post -> title }}
            </a>
        </div>
    </div>
    @endforeach
    </div>
</body>
</html>