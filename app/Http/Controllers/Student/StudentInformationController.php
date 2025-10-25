<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentInformationController extends Controller
{
    /**
     * Summary of Student Profile Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function studentProfilePage(Request $request) {
        return Inertia::render('dashboard/student/student-profile');
    }

    /**
     * Summary of Student Ledger Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function studentLedgerPage(Request $request) {
        return Inertia::render('dashboard/student/student-ledger');
    }
}
