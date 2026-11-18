@props(['blog'])

<article class="overflow-hidden rounded-2xl border border-sage-deep bg-paper shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">
    <img
        src="{{ asset($blog['image']) }}"
        alt="{{ $blog['title'] }}"
        class="h-48 w-full object-cover"
        loading="lazy"
    >
    <div class="flex flex-col gap-3 p-6">
        <p class="text-sm text-muted">{{ $blog['date'] }} · {{ $blog['category'] }}</p>
        <h3 class="text-xl font-semibold text-forest-dark">{{ $blog['title'] }}</h3>
        <p class="text-sm text-muted">By {{ $blog['author'] }}</p>
        <p class="text-sm leading-6 text-muted">{{ $blog['short_desc'] }}</p>
        <a
            href="{{ route('blog.show', $blog['id']) }}"
            class="mt-2 font-medium text-forest underline decoration-sage-deep underline-offset-4 hover:decoration-clay"
        >
            Read Article
        </a>
    </div>
</article>
