<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentPerformanceController extends Controller
{
    /**
     * Summary of Display Grades Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function displayGradesPage(Request $request) {
        return Inertia::render('dashboard/student/display-grade');
    }

    /**
     * Summary of Display Class Records Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function displayClassRecordsPage(Request $request) {
        return Inertia::render('dashboard/student/display-class-record');
    }
}
