<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mark Maramis | Personal Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="flex min-h-screen flex-col bg-cream text-ink antialiased">
    <header class="sticky top-0 z-50 border-b border-sage-deep bg-cream/90 backdrop-blur">
        <nav
            class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-6 py-4"
        >
            <a href="{{ route('home') }}" class="text-xl font-bold text-forest-dark">
                My Personal Website
            </a>
            <div class="flex flex-wrap items-center gap-x-2 gap-y-1 sm:gap-x-5">
                <a href="{{ route('home') }}#about" class="rounded-md px-3 py-2 text-sm font-medium text-muted hover:bg-sage hover:text-forest-dark">About</a>
                <a href="{{ route('home') }}#portofolio" class="rounded-md px-3 py-2 text-sm font-medium text-muted hover:bg-sage hover:text-forest-dark">Portfolio</a>
                <a href="{{ route('home') }}#blog" class="rounded-md px-3 py-2 text-sm font-medium text-muted hover:bg-sage hover:text-forest-dark">Blog</a>
                <a href="{{ route('home') }}#contact" class="rounded-md bg-forest-dark px-4 py-2 text-sm font-medium text-cream hover:bg-forest">Contact</a>
            </div>
        </nav>
    </header>

    <main id="main-content" class="flex-1">
        @yield('content')
    </main>

    <footer class="border-t border-sage-deep bg-cream">
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-8 text-sm text-muted sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ now()->year }} Mark Maramis. All rights reserved.</p>
            <a href="{{ route('home') }}#intro" class="font-medium text-forest hover:text-forest-dark">
                Back to top
            </a>
        </div>
    </footer>
</body>
</html>
