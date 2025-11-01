@extends('layouts.app')

@section('content')

<section class="max-w-5xl mx-auto bg-white rounded-lg shadow p-8">
    <h1 class="text-4xl font-bold mb-6 text-center">Contact Us</h1>

    {{-- Hero image --}}
    <img src="https://source.unsplash.com/1200x400/?contact,office" alt="Contact Us" class="w-full h-64 object-cover rounded mb-8">

    {{-- Contact Form --}}
    <form action="{{ route('contact.send') }}" method="POST" class="max-w-2xl mx-auto flex flex-col gap-4">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        <input type="email" name="email" placeholder="Your Email" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        <textarea name="message" rows="5" placeholder="Your Message" class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        <button type="submit" class="bg-blue-600 text-white font-semibold py-3 rounded hover:bg-blue-700 transition">Send Message</button>
    </form>
</section>

@endsection
