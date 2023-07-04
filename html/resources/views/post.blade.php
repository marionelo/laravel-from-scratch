<x-layout/>
    <article>
        <h1><a href="/post">{{ $post->title }}</a></h1>

        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

        <p>
            {{ $post->body }}
        </p>
    </article>

    <a href="/">Go Back</a>
<x-layout/>
