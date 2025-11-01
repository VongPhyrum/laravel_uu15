<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            :root {
                --font-family-sans-serif: 'Figtree', sans-serif;
            }

            html, body {
                height: 100%;
                margin: 0;
                font-family: var(--font-family-sans-serif);
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .relative {
                position: relative;
            }

            .flex {
                display: flex;
            }

            .justify-center {
                justify-content: center;
            }

            .items-center {
                align-items: center;
            }

            .min-h-screen {
                min-height: 100vh;
            }

            .bg-dots-darker {
                background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
            }

            [data-theme="dark"] .bg-dots-darker {
                background-image: radial-gradient(#374151 1px, transparent 1px);
            }

            .bg-center {
                background-position: center;
            }

            .bg-gray-100 {
                background-color: #f3f4f6;
            }

            [data-theme="dark"] .bg-gray-900 {
                background-color: #111827;
            }

            .text-black {
                color: #000;
            }

            .dark\:text-white {
                color: #fff;
            }

            .shadow-2xl {
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                            0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .rounded-full {
                border-radius: 9999px;
            }

            .w-16 {
                width: 4rem;
            }

            .h-16 {
                height: 4rem;
            }

            .ring-1 {
                box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.5);
            }

            .transition-all {
                transition: all 0.3s ease;
            }

            .hover\:scale-105:hover {
                transform: scale(1.05);
            }

            .text-center {
                text-align: center;
            }

            .text-xl {
                font-size: 1.25rem;
            }

            .font-semibold {
                font-weight: 600;
            }

            .mt-6 {
                margin-top: 1.5rem;
            }

            .text-gray-500 {
                color: #6b7280;
            }

            .dark\:text-gray-400 {
                color: #9ca3af;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="relative flex justify-center items-center min-h-screen bg-center bg-dots-darker dark:bg-dots-lighter">
            <div class="text-center">
                <div class="flex justify-center items-center mb-6">
                    <div class="w-16 h-16 bg-white dark:bg-gray-800 flex justify-center items-center rounded-full shadow-2xl ring-1 transition-all hover:scale-105">
                        <svg viewBox="0 0 384 512" fill="currentColor" class="text-black dark:text-white w-8 h-8">
                            <path d="M32 32C14.3 32...Z"/>
                        </svg>
                    </div>
                </div>
                <h1 class="text-xl font-semibold text-black dark:text-white">Welcome to Laravel</h1>
                <p class="mt-6 text-gray-500 dark:text-gray-400">
                    Laravel is a web application framework with expressive, elegant syntax.
                    <br>
                    Build something amazing!
                </p>
            </div>
        </div>
    </body>
</html>
