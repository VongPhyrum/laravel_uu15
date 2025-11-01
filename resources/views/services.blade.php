@extends('layouts.app')

@section('content')

<section class="max-w-5xl mx-auto bg-white rounded-lg shadow p-8">
    <h1 class="text-4xl font-bold mb-6 text-center">Our Services</h1>

    {{-- Hero image --}}
    <img src="https://source.unsplash.com/1200x400/?services,office" alt="Our Services" class="w-full h-64 object-cover rounded mb-8">

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold mb-2">Web Development</h2>
            <p class="text-gray-700">We create modern, responsive, and fast web applications using Laravel and other cutting-edge technologies.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold mb-2">UI/UX Design</h2>
            <p class="text-gray-700">Our design team ensures a clean, modern interface and user experience for your website or app.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold mb-2">SEO & Marketing</h2>
            <p class="text-gray-700">We help your website reach the right audience with effective SEO and digital marketing strategies.</p>
        </div>
    </div>
</section>

@endsection
