<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LibrarySupportController extends Controller
{
    /**
     * Summary of Access Catalog Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function accessCatalogPage(Request $request) {
        return Inertia::render('dashboard/student/access-catalog');
    }
}
