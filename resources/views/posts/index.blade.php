@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6 text-center">All Posts</h1>

{{-- Category Filter --}}
<div class="flex flex-wrap gap-3 mb-8 justify-center">
    @php
        $categories = ['Tech', 'News', 'Tutorial', 'Lifestyle', 'Opinion'];
    @endphp
    @foreach($categories as $cat)
        <a href="{{ route('posts.category', $cat) }}" class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300">
            {{ $cat }}
        </a>
    @endforeach
</div>

{{-- Posts Grid --}}
<section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach($posts as $post)
    <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
        @if($post->image)
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
        @endif
        <div class="p-6">
            <div class="text-gray-500 text-sm mb-2">
                <span>{{ $post->created_at->format('M d, Y') }}</span> •
                <span>{{ $post->author }}</span> •
                <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded text-xs">{{ $post->category }}</span>
            </div>
            <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
            <p class="text-gray-600 mb-4">{{ Str::limit($post->excerpt, 100) }}</p>
            <a href="{{ route('posts.show', $post) }}" class="text-blue-600 font-semibold hover:underline">Read more →</a>
        </div>
    </div>
    @endforeach
</section>

{{-- Pagination --}}
<div class="mt-6 flex flex-col md:flex-row justify-between items-center text-gray-700">
    {{-- Text: Showing X to Y of Z --}}
    <div>
        Showing
        <span class="font-semibold">{{ $posts->firstItem() }}</span> to
        <span class="font-semibold">{{ $posts->lastItem() }}</span> of
        <span class="font-semibold">{{ $posts->total() }}</span> results
    </div>

    {{-- Links --}}
    <div class="mt-2 md:mt-0 flex gap-2">
        @if ($posts->onFirstPage() === false)
            <a href="{{ $posts->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">Previous</a>
        @endif

        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
            <a href="{{ $url }}" class="px-3 py-1 rounded {{ $posts->currentPage() === $page ? 'bg-blue-500 text-white' : 'bg-gray-200 hover:bg-gray-300' }}">
                {{ $page }}
            </a>
        @endforeach

        @if ($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">Next</a>
        @endif
    </div>
</div>

@endsection
