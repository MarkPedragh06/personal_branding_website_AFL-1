@extends('components.layout')

@section('title'){{ $blog['title'] . ' | Mark Maramis' }}@endsection
@section('description'){{ $blog['content'] }}@endsection

@section('content')
    <article class="mx-auto max-w-3xl px-6 py-10">
        <a
            href="{{ route('home') }}#blog"
            class="font-medium text-forest underline decoration-sage-deep underline-offset-4 hover:decoration-clay"
        >
            Back To Blog
        </a>

        <div class="mt-6 overflow-hidden rounded-2xl border border-sage-deep bg-paper shadow-sm">
            <img
                src="{{ asset($blog['image']) }}"
                alt="{{ $blog['title'] }}"
                class="h-64 w-full object-cover"
            >
            <div class="flex flex-col gap-4 p-6">
                <p class="text-sm text-muted">{{ $blog['date'] }} · {{ $blog['author'] }} · {{ $blog['category'] }}</p>
                <h1 class="text-3xl font-semibold text-forest-dark">{{ $blog['title'] }}</h1>
                <p class="leading-7 text-muted">{{ $blog['content'] }}</p>
            </div>
        </div>
    </article>
@endsection
