<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Tour;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{

    public function redirectToGateway()
    {
        try {
            return (new Paystack)->getAuthorizationUrl()->redirectNow();
        } catch (Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    public function handleGatewayCallback(): View|RedirectResponse
    {

        $paymentDetails = (new Paystack)->getPaymentData();

        $tourReference = $paymentDetails['data']['metadata']['tour_reference'];
        $paymentReference = $paymentDetails['data']['reference'];
        $tour = Tour::where('tour_reference', $tourReference)->first();
        $paymentExists = Payment::where('reference', $paymentReference)->first();

        if (!$tour || $paymentDetails['data']['amount'] < $tour->price) {
            return Redirect::route('404');
        }

        $payment = Payment::with(['tour' => function ($query) {
            $query->select('id', 'title');
        }])->create([
            'reference' => $paymentReference,
            'email' => $paymentDetails['data']['customer']['email'],
            'type' => $paymentDetails['data']['metadata']['type'],
            'tour_id' => $tour->id,
            'amount' => $paymentDetails['data']['amount'],
            'ticket_no' => $paymentDetails['data']['amount'] / $tour->price
        ]);

        $payment->load('tour');

        // Send Email to George

        return view('layouts.receipt', compact('payment'));
    }

}
