<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $ourName = 'Matheus';
        $animals = ['Bipo', 'Loro'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName]);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
