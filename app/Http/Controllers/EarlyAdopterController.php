<?php

namespace App\Http\Controllers;

use App\Models\EarlyAdopter;
use Illuminate\Http\Request;

class EarlyAdopterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
        ]);

        // Save early adopters to the database
        $early = EarlyAdopter::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $early->save();

        return redirect()->back()->with('success', 'Thank you for signing up!');
        // Return a success response
        // return response()->json(['message' => 'Email saved successfully!']);
    }
}
