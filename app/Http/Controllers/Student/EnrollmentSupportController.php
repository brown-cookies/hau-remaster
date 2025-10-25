<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EnrollmentSupportController extends Controller
{
    /**
     * Summary of College Self Enrollment Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function collegeSelfEnrollmentPage(Request $request) {
        return Inertia::render('dashboard/student/college-self-enrollment');
    }

    /**
     * Summary of Display Class Schedule Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function displayClassSchedulePage(Request $request) {
        return Inertia::render('dashboard/student/display-class-schedule');
    }

    /**
     * Summary of Subject Inquiry Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function subjectInquiryPage(Request $request) {
        return Inertia::render('dashboard/student/subject-inquiry');
    }

    /**
     * Summary of Basic Education Enrollment Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function basicEducationEnrollmentPage(Request $request) {
        return Inertia::render('dashboard/student/basic-ed-enrollment');
    }
}
