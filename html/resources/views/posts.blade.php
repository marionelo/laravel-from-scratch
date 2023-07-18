<x-layout>
    @foreach ($posts as $key => $post)
        <article>
            <h1><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>

            by <a href="/user/">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

            <p>
                {{ $post->body }}
            </p>
        </article>
    @endforeach
</x-layout>
