<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Tour;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Mime\Part\TextPart;
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
        $amount = $paymentDetails['data']['amount'] / 100;

        if (!$tour || $paymentDetails['data']['amount'] < $tour->price || $paymentExists) {
            return Redirect::route('404');
        }


        $payment = Payment::with(['tour' => function ($query) {
            $query->select('id', 'title');
        }])->create([
            'reference' => $paymentReference,
            'phone_no' => $paymentDetails['data']['metadata']['phone'],
            'name' => $paymentDetails['data']['metadata']['first_name'] . ' ' . $paymentDetails['data']['metadata']['last_name'],
            'email' => $paymentDetails['data']['customer']['email'],
            'type' => $paymentDetails['data']['metadata']['type'],
            'tour_id' => $tour->id,
            'amount' => $paymentDetails['data']['amount'],
            'ticket_no' => $paymentDetails['data']['amount'] / $tour->price
        ]);

        $payment->load('tour');
        dd($payment);

        // Send Email to George
        if ($payment) {
            $bodyPlainText = "
            There is a new payment received, please find the information below:\n

            Field               Value\n
            ----------------------------------------\n
            Name:              $payment->name\n
            Phone number:      $payment->phone_no\n
            Reference:         $payment->reference\n
            Payment for:       $payment->type\n
            Date:              $payment->created_at\n
            Total Paid:         ✔ $amount\n
            Please check the paystack to see payment
        ";
            $body = new TextPart($bodyPlainText);
            Mail::raw('Hi, welcome user!', function ($message) use ($body, $payment) {
                $message->to($payment->email)
                    ->from('gtwtravels@gmail.com', 'GTWTravels')
                    ->subject('New Payment Received')
                    ->setBody($body);
            });
            return view('layouts.receipt', compact('payment'));
        }
        return Redirect::route('404');
    }
}
