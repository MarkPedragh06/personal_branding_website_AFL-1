<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortofolioController extends Controller
{
    public function show(int $id): View
    {
        $portofolios = include database_path('portofolio_dummydata.php');
        $selectedPortofolio = null;

        foreach ($portofolios as $portofolio) {
            if ($portofolio['id'] === $id) {
                $selectedPortofolio = $portofolio;
                break;
            }
        }

        abort_if($selectedPortofolio === null, 404);

        return view('portofolio.show', ['portofolio' => $selectedPortofolio]);
    }
}
