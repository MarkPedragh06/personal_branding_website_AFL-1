<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function show(int $id): View
    {
        $blogs = include database_path('blog_dummydata.php');
        $selectedBlog = null;

        foreach ($blogs as $blog) {
            if ($blog['id'] === $id) {
                $selectedBlog = $blog;
                break;
            }
        }

        abort_if($selectedBlog === null, 404);

        return view('blog.show', ['blog' => $selectedBlog]);
    }
}
