<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Fortify\Features;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Inertia\Response
     */
    public function index() {
        return Inertia::render('welcome', [
            'canRegister' => Features::enabled(Features::registration()),
        ]);
    }

    /**
     * Summary of dashboard page.
     * @return \Inertia\Response
     */
    public function dashboard() {
        return Inertia::render('dashboard');
    }
}
