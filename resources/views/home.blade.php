@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="relative mb-12">
    @php
        $featured = $posts->first(); // Latest post as featured
    @endphp

    @if($featured)
    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg">
        <img src="{{ $featured->image }}" alt="{{ $featured->title }}" class="w-full h-96 object-cover">
        <div class="p-8 md:p-12">
            <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded text-sm">{{ $featured->category }}</span>
            <h1 class="text-4xl font-bold mt-4 mb-2">{{ $featured->title }}</h1>
            <p class="text-gray-700 mb-4">{{ Str::limit($featured->excerpt, 150) }}</p>
            <a href="{{ route('posts.show', $featured) }}" class="text-white bg-blue-600 hover:bg-blue-700 px-5 py-2 rounded font-semibold">Read More →</a>
        </div>
    </div>
    @endif
</section>

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

{{-- Latest Posts Grid --}}
<section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach($posts->skip(1) as $post) {{-- Skip the featured post --}}
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
