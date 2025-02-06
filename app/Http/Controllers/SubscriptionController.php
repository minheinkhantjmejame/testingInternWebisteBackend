<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email input
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        try {
            // Save email to database
            $subscription = Subscription::create([
                'email' => $request->email
            ]);

            // Send email to user
            Mail::to($request->email)->send(new SubscriptionMail($subscription));

            // Return success response (for AJAX)
            return response()->json(['message' => 'Subscription successful. Please check your email!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong! ' . $e->getMessage()], 500);
        }
    }
}
