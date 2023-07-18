<x-layout/>
    <article>
        <h1><a href="/post">{{ $post->title }}</a></h1>

        by <a href="/user/">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

        <p>
            {{ $post->body }}
        </p>
    </article>

    <a href="/">Go Back</a>
<x-layout/>
