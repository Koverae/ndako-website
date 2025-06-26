<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoRequest;
use App\Mail\DemoRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Koverae\KoveraePublisher\Models\PublisherPost;
use Koverae\KoveraePublisher\Models\PublisherTag;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function privacy(){
        return view('privacy-policy');
    }

    public function terms(){
        return view('term-conditions');
    }

    public function contactUs(){
        return view('contact');
    }
    
    public function demo(){
        return view('request-demo');
    }
    
    public function download(){
        return view('download');
    }


    public function start(){
        return view('start');
    }

    public function storeDemo(DemoRequest $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9\s\-()]*$/'],
            'message' => ['nullable', 'string', 'max:500'],
        ]);

        // Call external API to save the demo request
        // $response = Http::post('https://api.ndako.tech/api/admin/v1/demo-request', $validated);

        // if (!$response->successful()) {
        //     return redirect()->route('demo')->with('error', 'Failed to submit your demo request. Please try again later.');
        // }

        return redirect()->route('demo')->with('success', 'Your demo request has been sent successfully!');
    }

    public function storeContact(DemoRequest $request)
    {
        $validated = $request->validated();

        // Dispatch email to the queue
        Mail::to('techie@ndako.koverae.com')
            ->cc('laudbouetoumoussa@gmail.com')
            ->send(new DemoRequestMail($validated));

        return redirect()->route('demo')->with('success', 'Your message has been sent successfully!');
    }

    public function blog(Request $request){

        $query = PublisherPost::latest();

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                ->orWhere('body', 'LIKE', "%{$searchTerm}%")
                    ->orWhereHas('author', function ($query) use ($searchTerm) {
                        $query->where('name', $searchTerm);
                    });
            });
        }

        // Tag filtering
        if ($request->filled('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('slug', $request->tag);
            });
        }

        $blogs = $query->published()->paginate(10)->withQueryString(); // Keeps query params in pagination
        $tags = PublisherTag::all();
        return view('blog.index', compact('blogs', 'tags'));
    }

    public function blogShow($slug){
        $blog = PublisherPost::where('slug', $slug)->first() ?? null;
        if($blog == null){
            return redirect()->route('blog.index');
        }
        return view('blog.show', compact('blog'));
    }
}
