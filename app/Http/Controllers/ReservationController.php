<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|string',
            'time' => 'required|string',
            'people' => 'required|in:2,3,4,5,6',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Here you would typically save to database
        // For now, we'll just redirect with success message
        
        // You can add database logic here:
        // Reservation::create($request->validated());

        return redirect()->back()->with('success', 'Reservation submitted successfully! We will contact you soon.');
    }
}
