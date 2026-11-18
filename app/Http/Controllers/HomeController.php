<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $blogs = include database_path('blog_dummydata.php');
        $portofolios = include database_path('portofolio_dummydata.php');

        return view('home', [
            'blogs' => $blogs,
            'portofolios' => $portofolios,
        ]);
    }
}

