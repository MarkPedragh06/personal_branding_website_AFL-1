@extends('components.layout')

@section('title', 'Mark Maramis | Personal Portfolio')
@section('description', 'Meet Mark Maramis, an Information Technology student sharing his background, portfolio, and blog.')

@section('content')
    <section id="intro" class="scroll-mt-24 bg-gradient-to-br from-sage via-cream to-clay-soft">
        <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 py-20 md:grid-cols-[1.4fr_0.6fr] md:py-28">
            <div class="flex flex-col items-start gap-6">
                <p class="rounded-full bg-paper px-4 py-2 text-sm font-medium text-forest shadow-sm">
                    Information Technology student
                </p>
                <h1 class="text-4xl font-bold tracking-tight text-forest-dark sm:text-5xl">
                    Hello, My Name Is Mark.
                </h1>
                <p class="max-w-2xl text-lg leading-8 text-muted">
                    I’m an Information Technology Student at University of Ciputra Online
                </p>
            </div>
            <img
                src="{{ asset('images/blog/home/mark_pasfoto.jpg') }}"
                alt="Portrait of Mark Maramis"
                class="mx-auto aspect-square w-56 rounded-full border-8 border-paper object-cover shadow-lg sm:w-64"
            >
        </div>
    </section>

    <section id="about" class="scroll-mt-24">
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-16 md:py-20">
            <h2 class="text-3xl font-bold tracking-tight text-forest-dark">About Me</h2>
            <p class="max-w-3xl text-lg leading-8 text-muted">
                I’m currently pursuing a bachelor’s degree in Information Technology at University of Ciputra Online. As of right now I am in my 3rd semester and am currently making this website to share more about what I learn and create.
            </p>
            <a
                href="{{ route('about') }}"
                class="inline-flex w-fit items-center justify-center rounded-md bg-forest-dark px-5 py-3 font-medium text-cream transition hover:bg-forest"
            >
                Read More About Me!
            </a>
        </div>
    </section>

    <section id="portofolio" class="scroll-mt-24 bg-sage">
        <div class="mx-auto flex max-w-6xl flex-col gap-8 px-6 py-16 md:py-20">
            <div class="flex flex-col gap-3">
                <h2 class="text-3xl font-bold tracking-tight text-forest-dark">Portfolio</h2>
                <p class="max-w-2xl text-muted">A collection of my projects:</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($portofolios as $project)
                    <x-portofolio-card :project="$project" />
                @empty
                    <p class="text-muted">No portfolio projects yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="blog" class="scroll-mt-24">
        <div class="mx-auto flex max-w-6xl flex-col gap-8 px-6 py-16 md:py-20">
            <div class="flex flex-col gap-3">
                <h2 class="text-3xl font-bold tracking-tight text-forest-dark">Blog</h2>
                <p class="max-w-2xl text-muted">Thoughts on technology, learning, and student life:</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($blogs as $blog)
                    <x-blog-card :blog="$blog" />
                @empty
                    <p class="text-muted">No blog posts yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="scroll-mt-24 bg-forest-dark text-cream">
        <div class="mx-auto flex max-w-6xl flex-col gap-3 px-6 py-12">
            <h2 class="text-2xl font-semibold text-clay-soft">Contact Me!</h2>
            <p class="max-w-2xl text-cream/80">Email: mark.maramis07@gmail.com</p>
            <p class="max-w-2xl text-cream/80">Phone: +62 852-8191-6688</p>
            <p class="max-w-2xl text-cream/80">
                LinkedIn:
                <a
                    href="https://www.linkedin.com/in/mark-maramis-31405237b/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-cream underline decoration-gold underline-offset-4 hover:text-clay-soft"
                >
                    Mark Maramis
                </a>
            </p>
        </div>
    </section>
@endsection
