<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountReceivableController extends Controller
{

    /**
     * Summary of Payment Report Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function paymentReportPage(Request $request)
    {
        return Inertia::render('dashboard/student/payment-report');
    }

    /**
     * Summary of Online Payment Page
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function onlinePaymentPage(Request $request)
    {
        return Inertia::render('dashboard/student/online-payment');
    }
}
