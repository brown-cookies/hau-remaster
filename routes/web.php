<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\AccountReceivableController;
use App\Http\Controllers\Student\EnrollmentSupportController;
use App\Http\Controllers\Student\LibrarySupportController;
use App\Http\Controllers\Student\StudentInformationController;
use App\Http\Controllers\Student\StudentPerformanceController;
use App\Http\Controllers\Student\StudentServiceController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');


    Route::group(['prefix'=> 'student'], function () {

        Route::get('/payment-report', [AccountReceivableController::class,'paymentReportPage'])->name('student.paymentReport');
        Route::get('/online-payment', [AccountReceivableController::class, 'onlinePaymentPage'])->name('student.onlinePayment');

        Route::get('/student-profile', [StudentInformationController::class, 'studentProfilePage'])->name('student.studentProfile');
        Route::get('/student-ledger', [StudentInformationController::class, 'studentLedgerPage'])->name('student.studentLedger');

        Route::get('/college-self-enrollment', [EnrollmentSupportController::class, 'collegeSelfEnrollmentPage'])->name('student.collegeSelfEnrollment');
        Route::get('/display-class-schedule', [EnrollmentSupportController::class, 'displayClassSchedulePage'])->name('student.displayClassSchedule');
        Route::get('/subject-inquiry', [EnrollmentSupportController::class, 'subjectInquiryPage'])->name('student.subjectInquiry');
        Route::get('/basic-ed-enrollment', [EnrollmentSupportController::class, 'basicEducationEnrollmentPage'])->name('student.basicEducationEnrollment');

        Route::get('/faculty-evaluation', [StudentServiceController::class, 'facultyEvaluationPage'])->name('student.facultyEvaluation');

        Route::get('/display-grades', [StudentPerformanceController::class, 'displayGradesPage'])->name('student.displayGrades');
        Route::get('/display-class-records', [StudentPerformanceController::class, 'displayClassRecordsPage'])->name('student.displayClassRecords');

        Route::get('/access-catalog', [LibrarySupportController::class, 'accessCatalogPage'])->name('student.accessCatalog');

    });

});

require __DIR__.'/settings.php';
