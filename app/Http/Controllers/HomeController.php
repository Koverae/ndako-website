<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){

        return view('home');
    }

    // Trial
    public function trial(){

        return view('trial');
    }

    // Privacy Policies
    public function privacy(){

        return view('privacy-policy');
    }

    // About
    public function help(){

        return view('help');
    }

    // About
    public function about(){

        return view('about');
    }
    // Blog
    public function blog(){

        return view('blog.index');
    }

    public function blogSingle(){

        return view('blog.show');
    }

    // Typo
    public function typo(Request $request){

        // Get the subdomain from the URL
        $host = $request->get('esika');
        $subdomain = explode('.', $host)[0]; // Extract the first part before the first dot

        return view('errors.typo', compact('host', 'subdomain'));
    }
}
