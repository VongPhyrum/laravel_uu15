@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-8 mb-12">

    {{-- Post Image --}}
    @if($post->image)
    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-96 object-cover rounded mb-6">
    @endif

    {{-- Post Info --}}
    <div class="flex flex-wrap items-center text-gray-500 text-sm mb-4 gap-2">
        <span>{{ $post->created_at->format('M d, Y') }}</span> •
        <span>By {{ $post->author }}</span> •
        <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded text-xs">{{ $post->category }}</span>
    </div>

    {{-- Post Title --}}
    <h1 class="text-4xl font-bold mb-6">{{ $post->title }}</h1>

    {{-- Post Body --}}
    <div class="prose max-w-full text-gray-700 mb-8">
        {!! nl2br(e($post->body)) !!}
    </div>

    {{-- Back Link --}}
    <a href="{{ route('posts.index') }}" class="text-blue-600 font-semibold hover:underline">&larr; Back to All Posts</a>

</div>

@endsection
