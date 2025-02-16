<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoRequest;
use App\Mail\DemoRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contactUs(){
        return view('contact');
    }

    public function demo(){
        return view('request-demo');
    }

    public function storeDemo(DemoRequest $request)
    {
        $validated = $request->validated();

        // Dispatch email to the queue
        Mail::to('techie@ndako.koverae.com')
            ->cc('laudbouetoumoussa@gmail.com')
            ->send(new DemoRequestMail($validated));

            return redirect()->route('demo')->with('success', 'Your demo request has been sent successfully!');
    }

    public function storeContact(DemoRequest $request)
    {
        $validated = $request->validated();

        // Dispatch email to the queue
        // Mail::to('techie@ndako.koverae.com')
        //     ->cc('laudbouetoumoussa@gmail.com')
        //     ->send(new DemoRequestMail($validated));

        return redirect()->route('demo')->with('success', 'Your message has been sent successfully!');
    }
}
