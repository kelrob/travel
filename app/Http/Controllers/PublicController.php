<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Destination;
use App\Models\Flight;
use App\Models\StudyAbroadRequest;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\VisaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Symfony\Component\Mime\Part\TextPart;

class PublicController extends Controller
{
    public function index(): View
    {
        $destinations = Destination::all();
        $tours = Tour::all();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->take(5)->get();
        return view('layouts.index', compact('destinations', 'tours', 'testimonials'));
    }

    public function showDestinationDetails($id, $slug): View|RedirectResponse
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return redirect()->route('404');
        }

        return view('layouts.destination-details', compact('destination'));
    }

    public function showTourDetails($id, $slug): View|RedirectResponse
    {
        $tour = Tour::find($id);

        if (!$tour) {
            return redirect()->route('404');
        }

        return view('layouts.tour-details', compact('tour'));
    }

    public function showOngoingTours(): View
    {
        $tours = Tour::all();
        return view('layouts.destinations', compact('tours'));
    }

    public function visaSubmitRequest(Request $request): View
    {
        // Create a new VisaRequest instance and fill it with request data
        $visaRequest = new VisaRequest();
        $visaRequest->fill($request->all());
        $visaRequest->is_married = !($request->input('is_married') == 'no');
        $visaRequest->has_children = !($request->input('has_children') == 'no');
        $visaRequest->has_visa_denial = !($request->input('has_visa_denial') == 'no');

        // Save the VisaRequest instance to the database
        $visaRequest->save();

        // Construct the email body with the VisaRequest data
        $bodyPlainText = "
        There is a new visa request received, please find the information below:\n

        Field               Value\n
        ----------------------------------------\n
        First Name:         {$visaRequest->first_name}\n
        Last Name:          {$visaRequest->last_name}\n
        Email:              {$visaRequest->email}\n
        Phone Number:       {$visaRequest->phone_no}\n
        Country of Interest:{$visaRequest->country_interest}\n
        Employment Status:  {$visaRequest->employment_status}\n
        Current Employer:   {$visaRequest->current_employer}\n
        Occupation:         {$visaRequest->occupation}\n
        Monthly Income:     {$visaRequest->monthly_income}\n
        Age:                {$visaRequest->age}\n
        Trip Purpose:       {$visaRequest->trip_purpose}\n
        Travel History:     {$visaRequest->travel_history}\n
        Is Married:         {$visaRequest->is_married}\n
        Has Children:       {$visaRequest->has_children}\n
        Has Visa Denial:    {$visaRequest->has_visa_denial}\n
        Visa Denial Reason: {$visaRequest->visa_denial_reason}\n
        Extra Information:  {$visaRequest->extra_information}\n
    ";

        // Create a TextPart instance with the email body
        $body = new TextPart($bodyPlainText);

        // Send the email
        Mail::raw('Hi, welcome user!', function ($message) use ($body) {
            $message->to('gtwtravels@gmail.com')
                ->from('bookings@gtwtravels.com', 'GTWTravels')
                ->subject('New Visa Request Received')
                ->setBody($body);
        });

        $type = 'Visa';

        return view('layouts.success', compact('type'));
    }

    public function flightSubmitRequest(Request $request): View
    {
        // Create a new Flight instance and fill it with request data
        $flight = Flight::create($request->all());

        // Construct the email body with the Flight data
        $bodyPlainText = "
        There is a new flight booking received, please find the information below:\n

        Field               Value\n
        ----------------------------------------\n
        First Name:         {$flight->first_name}\n
        Last Name:          {$flight->last_name}\n
        Email:              {$flight->email}\n
        Phone Number:       {$flight->phone_no}\n
        Type:               {$flight->type}\n
        Seat Type:          {$flight->seat_type}\n
        Bags Count:         {$flight->bags_count}\n
        From:               {$flight->from}\n
        To:                 {$flight->to}\n
        Departure Date:     {$flight->departure_date}\n
        Return Date:        {$flight->return_date}\n
        Adult Count:        {$flight->adult_count}\n
        Child Count:        {$flight->child_count}\n
    ";

        // Create a TextPart instance with the email body
        $body = new TextPart($bodyPlainText);

        // Send the email
        Mail::raw('Hi, welcome user!', function ($message) use ($body) {
            $message->to('gtwtravels@gmail.com')
                ->from('bookings@gtwtravels.com', 'GTWTravels')
                ->subject('New Flight Booking Received')
                ->setBody($body);
        });

        $type = 'Flight';

        return view('layouts.success', compact('type'));
    }

    public function studySubmitRequest(Request $request): View
    {
        // Create a new StudyAbroadRequest instance and fill it with request data
        $studyRequest = StudyAbroadRequest::create($request->all());

        // Construct the email body with the StudyAbroadRequest data
        $bodyPlainText = "
        There is a new study abroad request received, please find the information below:\n

        Field               Value\n
        ----------------------------------------\n
        First Name:         {$studyRequest->first_name}\n
        Last Name:          {$studyRequest->last_name}\n
        Email:              {$studyRequest->email}\n
        Phone Number:       {$studyRequest->phone_no}\n
        Course:             {$studyRequest->course}\n
        Year:               {$studyRequest->year}\n
        Country:            {$studyRequest->country}\n
    ";

        // Create a TextPart instance with the email body
        $body = new TextPart($bodyPlainText);

        // Send the email
        Mail::raw('Hi, welcome user!', function ($message) use ($body) {
            $message->to('gtwtravels@gmail.com')
                ->from('bookings@gtwtravels.com', 'GTWTravels')
                ->subject('New Study Abroad Request Received')
                ->setBody($body);
        });

        $type = 'Study Abroad';

        return view('layouts.success', compact('type'));
    }

    public function consultationFormSubmit(Request $request): View|RedirectResponse
    {
        $consultation = Consultation::create($request->all());

        if ($consultation) {
            return view('layouts.consultation-payment', compact('consultation'));
        }

        return redirect()->route('404');
    }
}
