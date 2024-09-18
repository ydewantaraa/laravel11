<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Artikel</h3>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div>
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="text-base text-gray-500 hover:underline">{{ $post->author->name }}
                </a>
                In
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-base text-gray-500 hover:underline">{{ $post->category->name }}
                </a> |
                {{ $post->created_at->format('j F Y') }} <br>
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 80) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>
    @endforeach

</x-layout>
