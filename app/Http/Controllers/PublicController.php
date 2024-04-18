<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Flight;
use App\Models\StudyAbroadRequest;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\VisaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

        VisaRequest::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone_no'),
            'country_interest' => $request->input('country_interest'),
            'employment_status' => $request->input('employment_status'),
            'current_employer' => $request->input('current_employer'),
            'occupation' => $request->input('occupation'),
            'monthly_income' => $request->input('monthly_income'),
            'age' => $request->input('age'),
            'trip_purpose' => $request->input('trip_purpose'),
            'has_travel_history' => $request->input('has_travel_history'),
            'travel_history' => $request->input('travel_history'),
            'is_married' => !($request->input('is_married') == 'no'),
            'has_children' => !($request->input('has_children') == 'no'),
            'has_visa_denial' => !($request->input('has_visa_denial') == 'no'),
            'visa_denial_reason' => $request->input('visa_denial_reason'),
            'extra_information' => $request->input('extra_information'),
        ]);

        $type = 'Visa';

        return view('layouts.success', compact('type'));

    }

    public function flightSubmitRequest(Request $request): View
    {
        Flight::create($request->all());

        $type = 'Flight';
        return view('layouts.success', compact('type'));
    }

    public function studySubmitRequest(Request $request): View
    {
        StudyAbroadRequest::create($request->all());

        $type = 'Study Abroad';
        return view('layouts.success', compact('type'));
    }
}
