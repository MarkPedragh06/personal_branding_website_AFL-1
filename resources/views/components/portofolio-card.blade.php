@props(['project'])

<article class="overflow-hidden rounded-2xl border border-sage-deep bg-paper shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">
    <img
        src="{{ asset($project['image']) }}"
        alt="{{ $project['title'] }}"
        class="h-40 w-full object-cover"
        loading="lazy"
    >
    <div class="flex flex-col gap-4 p-6">
        <h2 class="text-xl font-semibold text-forest-dark">{{ $project['title'] }}</h2>
        <p class="text-sm leading-6 text-muted">{{ $project['description'] }}</p>
        <ul class="flex flex-wrap gap-2">
            @foreach ($project['technologies'] as $technology)
                <li class="rounded-full bg-clay-soft px-3 py-1 text-sm text-forest-dark">{{ $technology }}</li>
            @endforeach
        </ul>
        <a href="{{ route('portofolio.show', $project['id']) }}" class="mt-2 font-medium text-forest underline decoration-sage-deep underline-offset-4 hover:decoration-clay">Read More</a>
    </div>
</article>
