<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ConfirmPaymentNotification;
use App\Notifications\ManagerConfirmPaymentNotification;
use App\Models\Payment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    //

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required',
            'amount' => 'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $course = $request->course;
        $amount = $request->amount;

        $payment = new Payment();

        $payment->name = $name;
        $payment->email = $email;
        $payment->phone = $phone;
        $payment->course = $course;
        $payment->amount = $amount;
        $payment->save();

        Notification::route('mail', $payment->email)
            ->notify(new ConfirmPaymentNotification($payment));
        Notification::route('mail', "communitymanager@bloomdigitmedia.com")
            ->notify(new ManagerConfirmPaymentNotification($payment));
        
        return redirect('/');
    }
}
