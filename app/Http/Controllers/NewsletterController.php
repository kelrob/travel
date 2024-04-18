<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $email = $request->input('email');
        Subscriber::create(['email' => $email]);

        return response()->json(['message' => 'Subscription successful'], 200);
    }
}
