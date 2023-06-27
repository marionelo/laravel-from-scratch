<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/app.css?123">
</head>
<body>
    @foreach ($posts as $key => $post)
        <article>
            <h1><a href="/post/{{ $key }}">{{ $post->title }}</a></h1>
            <p>
                {{ $post->content }}
            </p>
        </article>
    @endforeach
</body>
</html>
