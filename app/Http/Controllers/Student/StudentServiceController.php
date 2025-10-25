<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentServiceController extends Controller
{
    /**
     * Summary of Faculty Evaluation Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function facultyEvaluationPage(Request $request) {
        return Inertia::render('dashboard/student/faculty-evaluation');
    }
}
