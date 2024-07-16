<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required|email',
            'location' => 'string|required',
            'phone' => 'string|required|max:18',
            'how_did_you_hear' => 'string|nullable',
            // 'payment_id' => 'string',
        ]);

        $userData = new UserData();

        $userData->name = $validated['name'];
        $userData->email = $validated['email'];
        $userData->phone = $validated['phone'];
        $userData->location = $validated['location'];
        $userData->how_did_you_hear = $validated['how_did_you_hear'] ?? null;

        $userData->save();
        
        // $paymentId = $validated['payment_id'];
    
        // Redirect to the Flutterwave payment link
        // return redirect("https://flutterwave.com/pay/{$paymentId}");
        return redirect('/payment')->with('userData', $userData);
    }
}
