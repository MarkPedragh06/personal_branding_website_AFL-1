@extends('components.layout')

@section('title'){{ $portofolio['title'] . ' | Mark Maramis' }}@endsection
@section('description'){{ $portofolio['description'] }}@endsection

@section('content')
    <div class="mx-auto max-w-3xl px-6 py-10">
        <a
            href="{{ route('home') }}#portofolio"
            class="font-medium text-forest underline decoration-sage-deep underline-offset-4 hover:decoration-clay"
        >
            Back To Portfolio
        </a>

        <article class="mt-6 overflow-hidden rounded-2xl border border-sage-deep bg-paper shadow-sm">
            <img
                src="{{ asset($portofolio['image']) }}"
                alt="{{ $portofolio['title'] }}"
                class="h-64 w-full object-cover"
            >
            <div class="flex flex-col gap-4 p-6">
                <h1 class="text-3xl font-semibold text-forest-dark">{{ $portofolio['title'] }}</h1>
                <p class="leading-7 text-muted">{{ $portofolio['description'] }}</p>
                <h2 class="text-lg font-semibold text-forest-dark">Technologies used</h2>
                <ul class="flex flex-wrap gap-2">
                    @foreach ($portofolio['technologies'] as $technology)
                        <li class="rounded-full bg-clay-soft px-3 py-1 text-sm text-forest-dark">{{ $technology }}</li>
                    @endforeach
                </ul>
            </div>
        </article>
    </div>
@endsection
