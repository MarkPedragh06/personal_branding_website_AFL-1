@extends('components.layout')

@section('title', 'About | Mark Maramis')
@section('description', 'Learn about Mark Maramis and his Information Technology studies.')

@section('content')
    <section class="mx-auto flex max-w-6xl flex-col gap-10 px-6 py-16 md:py-20">
        <a
            href="{{ route('home') }}"
            class="self-start font-medium text-forest underline decoration-sage-deep underline-offset-4 hover:decoration-clay"
        >
            Back To home
        </a>

        <div class="flex max-w-6xl flex-col gap-4">
            <h1 class="text-3xl font-bold tracking-tight text-forest-dark">About Me</h1>
            <p class="text-lg leading-8 text-muted">
            My full name is Mark Pedragh Andreas Moses Maramis. I am 19 years old and was born in January 6, 2007 at 
            Manado, Sulawesi Utara. I am currently pursuing a bachelors degree in Information Technology at University 
            of Ciputra Online
            </p>
        </div>

        <div class="grid gap-6 border-t border-sage-deep pt-8 md:grid-cols-2">
            <div class="flex flex-col gap-3 rounded-2xl border border-sage-deep bg-paper p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-forest-dark">Education</h2>
                <p class="leading-7 text-muted">
                    During Elementary, Middle, and High School I studied at Sekolah Dian Harapan Holland Village Manado. 
                </p>
            </div>
            <div class="flex flex-col gap-3 rounded-2xl border border-sage-deep bg-paper p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-forest-dark">Aspiration</h2>
                <p class="leading-7 text-muted">
                    I have always been interested in the fields of Data Science and Machine Learning where working with 
                    data and creating models to predict outcomes is a fascinating challenge. I aspire to become a Data 
                    Scientist in the future, where I can apply my skills and knowledge to solve real-world problems and 
                    contribute to advancements in the field.
                </p>
            </div>
            <div class="flex flex-col gap-3 rounded-2xl border border-sage-deep bg-paper p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-forest-dark">Hobbies</h2>
                <p class="leading-7 text-muted">
                    As of right now, I have a few hobbies that I enjoy doing in my free time. These include watching
                    films, listening to music, reading books, and exercising like going to the gym or running. I also 
                    enjoy learning and studying new things, a field I'm currently invested in is Data Science and 
                    Machine Learning so when I am not busy with school work, my time is spent on developing my skills 
                    in this field. 
                </p>
            </div>
            <div class="flex flex-col gap-3 rounded-2xl border border-sage-deep bg-paper p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-forest-dark">Skills</h2>
                <p class="leading-7 text-muted">
                    My skill range is pretty limited as of right now but a language I would say I am proficient in
                    is Python, where I have learned the basics of programming and have also learned how to use
                    libraries such as Pandas, Numpy, and Matplotlib, Scikit-Learn. I have also learned the basics
                    of HTML, CSS, and JavaScript where I have learned how to create a simple website.
                </p>
            </div>
        </div>
    </section>
@endsection
