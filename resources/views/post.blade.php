<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Artikel</h3>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
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
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
