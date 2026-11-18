<?php

test('the root route displays the welcome page and links to the homepage', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('Welcome To My Website')
        ->assertSee('href="' . route('home') . '"', false);
});

test('the homepage renders the introduction and content sections', function () {
    $response = $this->get('/home');

    $response
        ->assertOk()
        ->assertSee('Mark Pedragh Andreas Moses Maramis')
        ->assertSee('About me')
        ->assertSee('Portfolio')
        ->assertSee('Blog')
        ->assertSee('href="' . route('about') . '"', false)
        ->assertSee('Read More About Me!')
        ->assertSee('src="' . asset('images/blog/home/mark_pasfoto.jpg') . '"', false)
        ->assertSee('alt="Portrait of Mark Maramis"', false)
        ->assertSee('E-Commerce Website')
        ->assertSee('A modern online shopping platform that allows users to browse products, add items to a cart, and complete secure purchases.')
        ->assertSee('5 Tips for Learning Laravel Faster')
        ->assertSee('Laravel is one of the most popular PHP frameworks.')
        ->assertSee('href="' . route('blog.show', 1) . '"', false);
});

test('the homepage contact section links to LinkedIn', function () {
    $response = $this->get('/home');

    $response
        ->assertOk()
        ->assertSee('LinkedIn:')
        ->assertSee('href="https://www.linkedin.com/in/mark-maramis-31405237b/"', false);
});

test('blog detail pages show the full article content', function () {
    $this->get('/blog/1')
        ->assertOk()
        ->assertSee('most popular and widely used PHP frameworks')
        ->assertDontSee('To learn it faster');
});

test('the about page shows the extended biography', function () {
    $this->get('/about')
        ->assertOk()
        ->assertSee('href="' . route('home') . '"', false)
        ->assertSee('Back to home')
        ->assertSee('Education')
        ->assertSee('Aspiration');
});

test('site pages render the shared navigation and footer', function () {
    foreach (['/home', '/about', '/portofolio/1', '/blog/1'] as $url) {
        $response = $this->get($url);

        $response
            ->assertOk()
            ->assertSee('<nav', false)
            ->assertSee('Mark Maramis')
            ->assertSee('All rights reserved.');
    }
});

test('the standalone portfolio index route is no longer available', function () {
    $this->get('/portofolio')->assertNotFound();
});

test('portfolio details return to the portfolio section on the homepage', function () {
    $response = $this->get('/portofolio/1');

    $response
        ->assertOk()
        ->assertSee('href="' . route('home') . '#portofolio"', false)
        ->assertSee('Back to portfolio');
});
