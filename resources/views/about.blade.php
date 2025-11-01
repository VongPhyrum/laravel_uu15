@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto text-center mb-16">
    <h1 class="text-4xl font-bold mb-4">About Us</h1>
    <p class="text-gray-600 mb-6">We are passionate about sharing knowledge and tutorials. Our mission is to provide insightful content that inspires developers and enthusiasts alike.</p>
</section>

<section class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div>
      <img src="https://source.unsplash.com/800x400/?office,team" alt="About Us" class="w-full h-64 object-cover rounded mb-6">

    </div>
    <div class="text-left space-y-4">
        <h2 class="text-2xl font-bold">Our Mission</h2>
        <p class="text-gray-700">To empower developers with high-quality tutorials, blog posts, and insights about the latest web technologies and best practices.</p>

        <h2 class="text-2xl font-bold">Our Vision</h2>
        <p class="text-gray-700">To become the go-to blog for developers worldwide, helping them grow their skills and stay up-to-date with the industry trends.</p>
    </div>
</section>
@endsection
